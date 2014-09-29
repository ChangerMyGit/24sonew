<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_reply`;");
E_C("CREATE TABLE `p_reply` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `differ` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `message_id` int(11) NOT NULL,
  `reply` varchar(1000) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `message_id` (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `p_reply` values('1','o0Ojijr_-uCytIA9cMgc8U9hJw9o','0','1','2','您好，请登录24SO官方网站了解详情','1402023168');");
E_D("replace into `p_reply` values('2','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','0','1','3','在哪看消息','1402319640');");
E_D("replace into `p_reply` values('3','oVaHTjtiwp7pYuo6akcKDC89ks-k','0','1','3','想你','1402320068');");
E_D("replace into `p_reply` values('4','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','0','1','4','是个互动平台','1402320072');");
E_D("replace into `p_reply` values('5','oVaHTjrrl-BLi1ZuNzpubJu7Mq2s','0','1','4','爱你','1402321941');");
E_D("replace into `p_reply` values('6','ocTK_jkCN97Z3vZa788pyHuTW1so','0','1','6','Nh','1402462246');");
E_D("replace into `p_reply` values('7','ocTK_jlynoGGDV6CjaMtckW3dYPc','0','1','7','怎么没有生活用品？洗发水之类的','1402464195');");

require("../../inc/footer.php");
?>