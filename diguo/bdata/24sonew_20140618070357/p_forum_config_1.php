<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_forum_config`;");
E_C("CREATE TABLE `p_forum_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bgurl` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `comcheck` varchar(4) NOT NULL DEFAULT '',
  `intro` varchar(600) NOT NULL DEFAULT '',
  `ischeck` tinyint(4) NOT NULL DEFAULT '0',
  `pv` float NOT NULL DEFAULT '0',
  `forumname` char(60) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `isopen` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_forum_config` values('1','http://v.24so.com/uploads/1/1fee0922b0a40db/c/3/f/b/thumb_53901ba7c5aa5.jpg','http://v.24so.com/tpl/static/attachment/icon/lovely/open-letter.png','1','��ӭ����24SO����','1','3','24SO�ٷ���˿����','http://v.24so.com/uploads/1/1fee0922b0a40db/7/4/1/0/thumb_538fe9210a3f5.jpg','1fee0922b0a40db','1');");
E_D("replace into `p_forum_config` values('2','http://v.24so.com/uploads/1/1d36324a811c583/f/1/3/8/thumb_539083c533fc4.jpg','http://v.24so.com/uploads/1/1d36324a811c583/1/4/d/e/thumb_5390837b2578a.jpg','0','��ӭ��ע24�ѳ�ɳ','0','1','24�ѳ�ɳ�ٷ���˿����','/tpl/Wap/default/common/images/forum/face.png','1d36324a811c583','1');");
E_D("replace into `p_forum_config` values('3','http://v.24so.com/uploads/8/879c2f933017228/8/a/f/8/thumb_53912cbe0b76a.png','http://v.24so.com/uploads/8/879c2f933017228/7/0/3/f/thumb_539129042def5.png','0','������ʮ���ѿƼ����޹�˾�����¼��24so����һ��רҵ��΢�ŵ�����Ӫ��ϵ������Ӫ�̣���2013��΢�������û�ͻ�����ڵ�������������ڰ���5000���̼ҡ���ҵ��΢���ϴרҵ�����ƶ�������ϵ��ֱ�����8��΢�������ߣ�ʵ�ֻ��������Ʒչʾ���������ۡ�\r\n','0','2','24�Ѽ���֧�ֹٷ���˿����','http://v.24so.com/uploads/8/879c2f933017228/5/3/1/8/thumb_5391293bb2e50.png','879c2f933017228','1');");

require("../../inc/footer.php");
?>