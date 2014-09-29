<?php
class BackAction extends BaseAction{
	protected $pid;
	protected function _initialize(){		
		if(!isset($_SESSION['username'])){$this->error('�Ƿ�����',U('System/Admin/index'));}
		parent::_initialize();
		if (C('USER_AUTH_ON') && !in_array(MODULE_NAME, explode(',', C('NOT_AUTH_MODULE')))) {
            if (!RBAC::AccessDecision()) {
                //�����֤ʶ���
                if (!$_SESSION [C('USER_AUTH_KEY')]) {
                    //��ת����֤����
                    redirect(PHP_FILE . C('USER_AUTH_GATEWAY'));
                }
                // û��Ȩ�� �׳�����
                if (C('RBAC_ERROR_PAGE')) {
                    // ����Ȩ�޴���ҳ��
                    redirect(C('RBAC_ERROR_PAGE'));
                } else {
                    if (C('GUEST_AUTH_ON')) {
                        $this->assign('jumpUrl', PHP_FILE . C('USER_AUTH_GATEWAY'));
                    }
                    // ��ʾ������Ϣ
                    $this->error(L('_VALID_ACCESS_'));
                }
            }
        }
		$this->show_menu();
	}
	
	private function show_menu(){
		$this->pid=$this->_get('pid','intval')?$this->_get('pid','intval'):2;
		$where['level']=$this->_get('level','intval');
		$where['pid']=$this->pid;
		$title=rawurldecode($this->_get('title'));
		$where['status']=1;
		$where['display']=array('gt',0);
		$order['sort']='asc';
		$nav=M('Node')->where($where)->order($order)->select();
		$this->assign('title',$title);
		$this->assign('nav',$nav);
	}
	
	
}