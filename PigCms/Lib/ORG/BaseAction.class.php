<?php
class BaseAction extends Action
{
    protected function _initialize()
    {
        define('RES', THEME_PATH . 'common');
        define('STATICS', TMPL_PATH . 'static');
        $this->assign('action', $this->getActionName());
    }
    protected function all_insert($name = '', $back = '/index')
    {
        $name = $name ? $name : MODULE_NAME;
        $db   = D($name);
        if ($db->create() === false) {
            $this->error($db->getError());
        } else {
            $id = $db->add();
            if ($id) {
                $m_arr = array(
                    'Img',
                    'Text',
                    'Voiceresponse',
                    'Ordering',
                    'Lottery',
                    'Host',
                    'Product',
                    'Selfform',
	'Xitie'
                );
                if (in_array($name, $m_arr)) {
                    $data['pid']     = $id;
                    $data['module']  = $name;
                    $data['token']   = session('token');
                    $data['keyword'] = $_POST['keyword'];
                    M('Keyword')->add($data);
                }
                $this->success('�����ɹ�', U(MODULE_NAME . $back));
            } else {
                $this->error('����ʧ��', U(MODULE_NAME . $back));
            }
        }
    }
    protected function insert($name = '', $back = '/index')
    {
        $name = $name ? $name : MODULE_NAME;
        $db   = D($name);
        if ($db->create() === false) {
            $this->error($db->getError());
        } else {
            $id = $db->add();
            if ($id == true) {
                $this->success('�����ɹ�', U(MODULE_NAME . $back));
            } else {
                $this->error('����ʧ��', U(MODULE_NAME . $back));
            }
        }
    }
    protected function save($name = '', $back = '/index')
    {
        $name = $name ? $name : MODULE_NAME;
        $db   = D($name);
        if ($db->create() === false) {
            $this->error($db->getError());
        } else {
            $id = $db->save();
            if ($id == true) {
                $this->success('�����ɹ�', U(MODULE_NAME . $back));
            } else {
                $this->error('����ʧ��', U(MODULE_NAME . $back));
            }
        }
    }
    protected function all_save($name = '', $back = '/index')
    {
        $name = $name ? $name : MODULE_NAME;
        $db   = D($name);
        if ($db->create() === false) {
            $this->error($db->getError());
        } else {
            $id = $db->save();
            if ($id) {
                $m_arr = array(
                    'Img',
                    'Text',
                    'Voiceresponse',
                    'Ordering',
                    'Lottery',
                    'Host',
                    'Product',
                    'Selfform'
                );
                if (in_array($name, $m_arr)) {
                    $data['pid']    = $_POST['id'];
                    $data['module'] = $name;
                    $data['token']  = session('token');
                    $da['keyword']  = $_POST['keyword'];
                    M('Keyword')->where($data)->save($da);
                }
                $this->success('�����ɹ�', U(MODULE_NAME . $back));
            } else {
                $this->error('����ʧ��', U(MODULE_NAME . $back));
            }
        }
    }
    protected function all_del($id, $name = '', $back = '/index')
    {
        $name = $name ? $name : MODULE_NAME;
        $db   = D($name);
        if ($db->delete($id)) {
            $this->ajaxReturn('�����ɹ�', U(MODULE_NAME . $back));
        } else {
            $this->ajaxReturn('����ʧ��', U(MODULE_NAME . $back));
        }
    }
	protected function _upload(){
		import("@.ORG.UploadFile");
		$upload = new UploadFile();
		//�����ϴ��ļ���С
		$upload->maxSize = 3292200;
		//�����ϴ��ļ�����
		$upload->allowExts = explode(',','jpg,gif,png,jpeg');
		//���ø����ϴ�Ŀ¼
		$upload->savePath = './data/attachments/';
		//������Ҫ��������ͼ������ͼ���ļ���Ч
		$upload->thumb = true;
		// ��������ͼƬ����·��
		$upload->imageClassPath = '@.ORG.Image';
		//������Ҫ��������ͼ���ļ���׺
		$upload->thumbPrefix = 'm_';
		//����2������ͼ
		//��������ͼ�����
		$upload->thumbMaxWidth = '720';
		//��������ͼ���߶�
		$upload->thumbMaxHeight = '400';
		//�����ϴ��ļ�����
		$upload->saveRule = uniqid;
		//ɾ��ԭͼ
		$upload->thumbRemoveOrigin = true;
		if (!$upload->upload()) {
			//�����ϴ��쳣
			return $upload->getErrorMsg();
		}else{
			//ȡ�óɹ��ϴ����ļ���Ϣ
			$uploadList = $upload->getUploadFileInfo();
			return $uploadList;
		}
	}
}
?>