<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_voiceresponse`;");
E_C("CREATE TABLE `p_voiceresponse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `uptatetime` varchar(13) NOT NULL,
  `keyword` char(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `musicurl` char(255) NOT NULL,
  `hqmusicurl` char(255) NOT NULL,
  `description` char(255) NOT NULL,
  `token` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_voiceresponse` values('1','2','test','1401850496','1401938387','����','һ��ҡ�� ����','http://wx.ldtt.com.cn/audio.mp3','http://wx.ldtt.com.cn/audio.mp3','һ����Ϊһ��ҡ�ڵĸ������������ݳ���','aeovsr1401849750');");

require("../../inc/footer.php");
?>