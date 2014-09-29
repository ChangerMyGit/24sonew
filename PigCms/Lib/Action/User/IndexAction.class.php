<?php
class IndexAction extends UserAction{
	//公众帐号列表
	public function index(){
		if (class_exists('demoImport')){
			$this->assign('demo',1);
			//
			$token=$this->get_token();
			$wxinfo=M('wxuser')->where(array('uid'=>intval(session('uid'))))->find();
			if (!$wxinfo){
				$demoImport=new demoImport(session('uid'),$token);
			}
			$wxinfo=M('wxuser')->where(array('uid'=>intval(session('uid'))))->find();
			$this->assign('wxinfo',$wxinfo);
			//
			$this->assign('token',$token);
		}
		//
		$where['uid']=session('uid');
		$group=D('User_group')->select();
		foreach($group as $key=>$val){
			$groups[$val['id']]['did']=$val['diynum'];
			$groups[$val['id']]['cid']=$val['connectnum'];
		}
		unset($group);
		$db=M('Wxuser');
		$count=$db->where($where)->count();
		$page=new Page($count,100);
		$info=$db->where($where)->limit($page->firstRow.','.$page->listRows)->select();
		if ($info){
			foreach ($info as $item){
				if (!$item['appid']&&$apiinfo['appid']&&$apiinfo['appsecret']){
					$apiinfo=M('Diymen_set')->where(array('token'=>$item['token']))->find();
					$db->where(array('id'=>$item['id']))->save(array('appid'=>$apiinfo['appid'],'appsecret'=>$apiinfo['appsecret']));
				}else {
					$diymen=M('Diymen_set')->where(array('token'=>$item['token']))->find();
					if (!$diymen&&$item['appid']&&$item['appsecret']){
					M('Diymen_set')->add(array('token'=>$item['token'],'appid'=>$item['appid'],'appsecret'=>$item['appsecret']));
					}
				}
				//
			}
		}
		
		$this->assign('thisGroup',$this->userGroup);
		$this->assign('info',$info);
		$this->assign('group',$groups);
		$this->assign('page',$page->show());
		$this->display();
	}

		//一键绑定公众帐号
	public function autobind_add(){
		if(IS_POST){
			$username    = trim($this->_post('username'));
			$password= trim($this->_post('password'));
			if(empty($username) || empty($password))
			{
				$this->error("帐号与密码不能为空.");exit;
			}else{
				//是否被其他用户关联
				$id=M('Wxuser')->field('id')->where(array('weixin'=>$username))->find();
				//print_r ($id);
//				var_dump($username);exit;
				if($id){
					$this->error('公众帐号已被其他用户关联,联系客服',U('Index/autobind_add'));
				}else{
					$baseinfo = self::weixin_bind($username,$password);
				}
			}
			if($baseinfo){
				$data['username']  = $username;
				$data['password']   = $password;
				$data['wxname'] = $baseinfo['wxname'];
				$data['wxid'] = $baseinfo['wxid'];
				$data['weixin'] = $baseinfo['weixin'];
				$data['token']   = $baseinfo['token'];
				$data['username']   = trim($this->_post('username'));
				$data['uid']   = session('uid');
				$data['tpltypeid']= '1';
				$data['tpltypename']   = '136_index';
				$data['tpllistid']   ='1';
				$data['tpllistname']   = 'yl_list';
				$data['tplcontentid']   = '1';
				$data['tplcontentname']   = 'ktv_content';
				$data['headerpic']   = $baseinfo['headerpic'];
				
				$id = M('Wxuser')->add($data);
				if($id){
					$_POST['token']   = $baseinfo['token'];
					$this->addfc();
					$this->success('绑定成功',U('Index/index'));
				}
			}else{
				$this->error('绑定失败',U('Index/autobind_add'));
			}
		}else{
			//			$baseinfo = self::weixin_bind('8824442737@qq.com','s3666018');
			//			var_dump($baseinfo);
			//			echo 99;exit;
			$this->display();
		}
	}
	//重新一键绑定公众帐号
	public function autobind_edit(){
		if(IS_POST){
			$id= trim($this->_post('id'));
			$username    = trim($this->_post('username'));
			$password= trim($this->_post('password'));
			if(empty($username) || empty($password))
			{
				$this->error("帐号与密码不能为空.");exit;
			}else{
				//如果帐号密码 根本没变 就直接返回成功了
				$info=M('Wxuser')->where(array('id'=>$id))->find();
				if(($info['username']==$username) && ($info['password']==$password)){
					$this->success('绑定成功',U('Index/index'));
				}

				//是否被其他用户关联
				$where['id'] =  array('neq',$id);
				$where['weixin'] = $username;
				$id=M('Wxuser')->field('id')->where($where)->find();
				if($id){
					$this->error('公众帐号已被其他用户关联,联系客服',U('Index/autobind_edit',array('id'=>$id)));
				}else{
					$baseinfo = self::weixin_bind($username,$password);
				}
			}
			if($baseinfo){
				$data['username']  = $username;
				$data['password']   = $password;
				$data['wxname'] = $baseinfo['wxname'];
				$data['wxid'] = $baseinfo['wxid'];
				$data['username']   = trim($this->_post('username'));
				$data['weixin'] = $baseinfo['weixin'];
				$data['token']   = $baseinfo['token'];
			    $data['tpltypeid']= '1';
				$data['tpltypename']   = '136_index';
				$data['tpllistid']   ='1';
				$data['tpllistname']   = 'yl_list';
				$data['tplcontentid']   = '1';
				$data['tplcontentname']   = 'ktv_content';
				$data['uid']   = session('uid');
				$id = M('Wxuser')->where(array('id'=>$id))->save($data);
				if($id){
					$this->success('绑定成功',U('Index/index'));
				}
			}else{
				$this->error('绑定失败',U('Index/autobind_edit',array('id'=>$id)));

			}
		}else{
			$id    = intval($this->_get('id'));
			$info=M('Wxuser')->where(array('id'=>$id))->find();
			//			var_dump($info);
			$this->assign('info',$info);
			$this->display();
		}
	}

	//一键绑定公众帐号 核心方法
	private  function weixin_bind($username,$password){
		//		echo 555;exit;
		$new_token = md5($username.$password);
		$new_token = substr($new_token, 2,15);    
		import("@.ORG.HttpClient");
		$http = new HttpClient('mp.weixin.qq.com');
		$http->setPersistCookies(true);
		$http->setPersistReferers(true);
		$http->setCookies(array('uin_cookie'=>'85858963','euin_cookie'=>'A6C9D89A295536D698C6446BEBE935C403FA57F2166E6962','ac'=>'1,008,009'));
		$http->get('/');
		$http->post('/cgi-bin/login', array('f'=>'json','imgcode'=>'','username'=>$username,'pwd'=>md5($password)));

		$sres = trim($http->getContent(true));
		
		$reds = json_decode($sres);
		$token = $reds->redirect_url;
		$token = explode('&token=', $token);
		$token = $token[1];
		//关闭普通接口 https://mp.weixin.qq.com/misc/skeyform?form=advancedswitchform&lang=zh_CN
		$http->post('/misc/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'0','type'=>'1','token'=>$token));
		$http->getContent(true);
		//修改开发路径 https://mp.weixin.qq.com/advanced/callbackprofile?t=ajax-response&token=1809292253&lang=zh_CN
		$http->post('/advanced/callbackprofile?t=ajax-response&lang=zh_CN&token='.$token, array('url'=>C('site_url').'/index.php/api/'.$new_token,'callback_token'=>$new_token));
		$res  = $http->getContent(true);
		sleep(1);
		//开启开发接口
		$http->post('/misc/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'1','type'=>'2','token'=>$token));
		$http->getContent(true);
		//获取用户微信基本信息
		$http->get('/cgi-bin/settingpage?t=setting/index&action=index&token='.$token.'&lang=zh_CN');
		$setting = $http->getContent(true);
		//<div class="meta_content">.*?src="(.*?)".*?
		preg_match('|<li class="account_setting_item">.*?名称.*?<div class="meta_content">(.*?)<.*?</li>.*?<li class="account_setting_item">.*?原始ID.*?<div class="meta_content">.*?<span>(.*?)</span>.*?</div>.*?</li>.*?<li class="account_setting_item">.*?微信号.*?<div class="meta_content">.*?<span>(.*?)</span>.*?</div>.*?</li>|is',$setting,$baseinfo);
		if(trim($baseinfo[1])){
		//print_r($baseinfo);
		//$avatar = $this->file_save('https://mp.weixin.qq.com'.trim($baseinfo[1]));
		//echo $avatar;
			$resut = array('headerpic'=>'','wxname'=>trim($baseinfo[1]),'wxid'=>trim($baseinfo[2]),'weixin'=>trim($baseinfo[3]),'token'=>$new_token);
		}else{
			$resut = array();
		}
		return $resut;
	}

	//保存头像
	//public function file_save($FileName){
	//$img = file_get_contents($FileName);
	//echo $FileName;
	//$path = "uploads/avatar/".date("YmdHis").rand(11111,99999).".jpg";
	//file_put_contents($path,$img);
	//return $path;
	//}	
	

	//
	public function get_token(){
		$randLength=6;
		$chars='abcdefghijklmnopqrstuvwxyz';
		$len=strlen($chars);
		$randStr='';
		for ($i=0;$i<$randLength;$i++){
			$randStr.=$chars[rand(0,$len-1)];
		}
		$tokenvalue=$randStr.time();
		return $tokenvalue;
	}
	//添加公众帐号
	public function add(){
		$randLength=6;
		$chars='abcdefghijklmnopqrstuvwxyz';
		$len=strlen($chars);
		$randStr='';
		for ($i=0;$i<$randLength;$i++){
			$randStr.=$chars[rand(0,$len-1)];
		}
		$tokenvalue=$randStr.time();
		$this->assign('tokenvalue',$tokenvalue);
		$this->assign('email',time().'@yourdomain.com');
		//地理信息
		if (C('baidu_map_api')){
			//$locationInfo=json_decode(file_get_contents('http://api.map.baidu.com/location/ip?ip='.$_SERVER['REMOTE_ADDR'].'&coor=bd09ll&ak='.C('baidu_map_api')),1);
			///$this->assign('province',$locationInfo['content']['address_detail']['province']);
			//$this->assign('city',$locationInfo['content']['address_detail']['city']);
			//var_export($locationInfo);
		}
	
		
		$this->display();
	}
	public function edit(){
		$id=$this->_get('id','intval');
		$where['uid']=session('uid');
		$where['id']=$id;
		$res=M('Wxuser')->where($where)->find();
		$this->assign('info',$res);
		$this->display();
	}
	
	public function del(){
		$where['id']=$this->_get('id','intval');
		$where['uid']=session('uid');
		if(D('Wxuser')->where($where)->delete()){
			if ($this->isAgent){
				$wxuserCount=M('Wxuser')->where(array('agentid'=>$this->thisAgent['id']))->count();
				M('Agent')->where(array('id'=>$this->thisAgent['id']))->save(array('wxusercount'=>$wxuserCount));
				if ($this->thisAgent['wxacountprice']){
					M('Agent')->where(array('id'=>$this->thisAgent['id']))->setInc('moneybalance',$this->thisAgent['wxacountprice']);
					M('Agent_expenserecords')->add(array('agentid'=>$this->thisAgent['id'],'amount'=>$this->thisAgent['wxacountprice'],'des'=>$this->user['username'].'(uid:'.$this->user['id'].')删除公众号'.$_POST['wxname'],'status'=>1,'time'=>time()));
				}
			}
			$this->success('操作成功',U(MODULE_NAME.'/index'));
		}else{
			$this->error('操作失败',U(MODULE_NAME.'/index'));
		}
	}
	
	public function upsave(){
		S('wxuser_'.$this->token,NULL);
		M('Diymen_set')->where(array('token'=>$this->token))->save(array('appid'=>trim($this->_post('appid')),'appsecret'=>trim($this->_post('appsecret'))));
		$this->all_save('Wxuser');
	}
	
	public function insert(){
		$data=M('User_group')->field('wechat_card_num')->where(array('id'=>session('gid')))->find();
		$users=M('Users')->field('wechat_card_num')->where(array('id'=>session('uid')))->find();
		if($users['wechat_card_num']<$data['wechat_card_num']){
			
		}else{
			$this->error('您的VIP等级所能创建的公众号数量已经到达上线，请购买后再创建',U('User/Index/index'));exit();
		}
		//$this->all_insert('Wxuser');
		//
		$db=D('Wxuser');
		if ($this->isAgent){
			$_POST['agentid']=$this->thisAgent['id'];
		}
		if($db->create()===false){
			$this->error($db->getError());
		}else{
			$id=$db->add();
			if($id){
				if ($this->isAgent){
					$wxuserCount=M('Wxuser')->where(array('agentid'=>$this->thisAgent['id']))->count();
					M('Agent')->where(array('id'=>$this->thisAgent['id']))->save(array('wxusercount'=>$wxuserCount));
					if ($this->thisAgent['wxacountprice']){
						M('Agent')->where(array('id'=>$this->thisAgent['id']))->setDec('moneybalance',$this->thisAgent['wxacountprice']);
						M('Agent_expenserecords')->add(array('agentid'=>$this->thisAgent['id'],'amount'=>(0-$this->thisAgent['wxacountprice']),'des'=>$this->user['username'].'(uid:'.$this->user['id'].')添加公众号'.$_POST['wxname'],'status'=>1,'time'=>time()));
					}
				}
				M('Users')->field('wechat_card_num')->where(array('id'=>session('uid')))->setInc('wechat_card_num');
				$this->addfc();
				M('Diymen_set')->add(array('appid'=>trim($this->_post('appid')),'token'=>$this->_post('token'),'appsecret'=>trim($this->_post('appsecret'))));
				//
				$this->success('操作成功',U('Index/index'));
			}else{
				$this->error('操作失败',U('Index/index'));
			}
		}
		
	}
	
	//功能
	public function autos(){
		$this->display();
	}
	
	public function addfc(){
		$token_open=M('Token_open');
		$open['uid']=session('uid');
		$open['token']=$_POST['token'];
		$gid=session('gid');
		if (C('agent_version')&&$this->agentid){
			$fun=M('Agent_function')->field('funname,gid,isserve')->where('`gid` <= '.$gid.' AND agentid='.$this->agentid)->select();
		}else {
			$fun=M('Function')->field('funname,gid,isserve')->where('`gid` <= '.$gid)->select();
		}
		foreach($fun as $key=>$vo){
			$queryname.=$vo['funname'].',';
		}
		$open['queryname']=rtrim($queryname,',');
		$token_open->data($open)->add();
	}
	
	public function usersave(){
		$pwd=$this->_post('password');
		if($pwd!=false){
			$data['password']=md5($pwd);
			$data['id']=$_SESSION['uid'];
			if(M('Users')->save($data)){
				$this->success('密码修改成功！',U('Index/index'));
			}else{
				$this->error('密码修改失败！',U('Index/index'));
			}
		}else{
			$this->error('密码不能为空!',U('Index/useredit'));
		}
	}
	//处理关键词
	public function handleKeywords(){
		$Model = new Model();
		//检查system表是否存在
		$keyword_db=M('Keyword');
		$count = $keyword_db->where('pid>0')->count();
		//
		$i=intval($_GET['i']);
		//
		if ($i<$count){
			$img_db=M($data['module']);
			$back=$img_db->field('id,text,pic,url,title')->limit(9)->order('id desc')->where($like)->select();
			//
			$rt=$Model->query("CREATE TABLE IF NOT EXISTS `tp_system_info` (`lastsqlupdate` INT( 10 ) NOT NULL ,`version` VARCHAR( 10 ) NOT NULL) ENGINE = MYISAM CHARACTER SET utf8");
			$this->success('关键词处理中:'.$row['des'],'?g=User&m=Create&a=index');
		}else {
			exit('更新完成，请测试关键词回复');
		}
	}
}
?>