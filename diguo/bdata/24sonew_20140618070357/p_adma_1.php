<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_adma`;");
E_C("CREATE TABLE `p_adma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `url` varchar(100) NOT NULL,
  `copyright` varchar(50) NOT NULL,
  `info` varchar(120) NOT NULL,
  `title` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_adma` values('1','1','pigcms','http://demo.pigcms.cn/tpl/Home/new/common/images/ewm2.jpg','? 2001-2013 ĳĳ΢�Ű�Ȩ����','΢��Ӫ������ƽ̨Ϊ���˺���ҵ�ṩ����΢�Ź���ƽ̨��һϵ�й��ܣ��������ܻظ���΢��3G��վ������Ӫ�������Ա�������߶���������ͳ�Ƶ�ϵͳ����,������ȫ�µ�΢�Ż���Ӫ�����顣','PigCms���û�΢��Ӫ��ϵͳ');");
E_D("replace into `p_adma` values('2','2','879c2f933017228','http://v.24so.com/image/hgyj-ewm.jpg','? 2001-2013 24SO��Ȩ����','΢��Ӫ������ƽ̨Ϊ���˺���ҵ�ṩ����΢�Ź���ƽ̨��һϵ�й��ܣ��������ܻظ���΢��3G��վ������Ӫ�������Ա�������߶���������ͳ�Ƶ�ϵͳ����,������ȫ�µ�΢�Ż���Ӫ�����顣','24SO');");
E_D("replace into `p_adma` values('3','15','ainbtq1402292243','/tpl/Home/new/common/images/ewm2.jpg','? 2001-2013 ĳĳ΢�Ű�Ȩ����','΢��Ӫ������ƽ̨Ϊ���˺���ҵ�ṩ����΢�Ź���ƽ̨��һϵ�й��ܣ��������ܻظ���΢��΢����������Ӫ�������Ա�������߶���������ͳ�Ƶ�ϵͳ����,������ȫ�µ�΢�Ż���Ӫ�����顣','΢����');");
E_D("replace into `p_adma` values('4','36','kcmjgr1402792677','http://v.24so.com/uploads/k/kcmjgr1402792677/5/4/7/d/thumb_539d0fd4ab14d.jpg','? 2001-2013 ĳĳ΢�Ű�Ȩ����','΢��Ӫ������ƽ̨Ϊ���˺���ҵ�ṩ����΢�Ź���ƽ̨��һϵ�й��ܣ��������ܻظ���΢��΢����������Ӫ�������Ա�������߶���������ͳ�Ƶ�ϵͳ����,������ȫ�µ�΢�Ż���Ӫ�����顣','������ó');");

require("../../inc/footer.php");
?>