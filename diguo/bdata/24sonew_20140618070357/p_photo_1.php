<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_photo`;");
E_C("CREATE TABLE `p_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(20) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `isshoinfo` tinyint(1) NOT NULL,
  `num` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `create_time` int(11) NOT NULL,
  `info` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=gbk");
E_D("replace into `p_photo` values('1','879c2f933017228','�߽�24SO','http://v.24so.com/uploads/8/879c2f933017228/7/f/e/9/thumb_538e91b3c39bf.jpg','0','4','1','0','������ʮ���ѿƼ����޹�˾���24so! 24so��Ԣȫ������,ȫ�ǹ���! ΢����,��24so; �빺��,��24so; 24so�ƶ�������������ƽ̨�� �ͷ�����:4006-777-106 ...');");
E_D("replace into `p_photo` values('2','1fee0922b0a40db','΢���','http://v.24so.com/uploads/1/1fee0922b0a40db/0/9/a/8/thumb_53902f368be5d.jpg','0','1','1','0','΢���');");
E_D("replace into `p_photo` values('3','879c2f933017228','��������','http://v.24so.com/uploads/8/879c2f933017228/6/c/3/a/thumb_53918bb5d9048.png','0','0','1','0','�������������ݣ�����������150��������');");
E_D("replace into `p_photo` values('4','dhybwc1402363778','����߻�','http://v.24so.com/uploads/d/dhybwc1402363778/6/4/2/0/thumb_5396963b448c8.jpg','0','3','1','0','��Ϊ�Լ�ѡ�û��칫˾����');");
E_D("replace into `p_photo` values('5','dhybwc1402363778','��ɴ��Ӱ','http://v.24so.com/uploads/d/dhybwc1402363778/b/0/e/a/thumb_5396965ee8fa0.jpg','0','3','1','0','��ɴ��Ӱ');");
E_D("replace into `p_photo` values('6','dhybwc1402363778','��ҵ�߻�','http://v.24so.com/uploads/d/dhybwc1402363778/2/4/f/6/thumb_5396968a5849c.JPG','0','1','1','0','��ҵ�߻�');");
E_D("replace into `p_photo` values('7','c6a3b2d7590ae01','�����˺Ϳͻ���л����','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/4/5/c/thumb_53970fde44a84.jpg','0','2','1','0','�����˺Ϳͻ���л����');");
E_D("replace into `p_photo` values('8','c6a3b2d7590ae01','�����˺ͽ���ѧ��䷢��ʽ','http://v.24so.com/uploads/c/c6a3b2d7590ae01/3/9/3/0/thumb_5397f973a0326.jpg','0','2','1','0','�����˺ͽ���ѧ��䷢��ʽ');");
E_D("replace into `p_photo` values('9','kcmjgr1402792677','��','http://v.24so.com/uploads/k/kcmjgr1402792677/b/8/a/d/thumb_539d061c212ba.jpg','0','0','1','0','���ε�');");
E_D("replace into `p_photo` values('10','qnrwlm1402888833','����ǽ','http://v.24so.com/uploads/q/qnrwlm1402888833/d/d/f/0/thumb_539f99224619d.jpg','0','16','1','0','����ǽ');");
E_D("replace into `p_photo` values('11','a0bbb64eef61a16','11','http://v.24so.com/uploads/a/a0bbb64eef61a16/1/f/a/4/thumb_539ffd7834a38.jpg','0','1','1','0','11');");
E_D("replace into `p_photo` values('12','oucryx1402886291','��ɴ��','http://v.24so.com/uploads/o/oucryx1402886291/4/2/a/7/thumb_53a00168343d5.jpg','0','0','1','0','���ɴ');");

require("../../inc/footer.php");
?>