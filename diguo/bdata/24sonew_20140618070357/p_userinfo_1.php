<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_userinfo`;");
E_C("CREATE TABLE `p_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portrait` varchar(200) NOT NULL DEFAULT '',
  `wallopen` tinyint(1) NOT NULL DEFAULT '0',
  `total_score` int(10) NOT NULL DEFAULT '0',
  `expensetotal` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `wecha_id` varchar(60) NOT NULL,
  `wechaname` varchar(60) NOT NULL,
  `truename` varchar(60) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `bornyear` varchar(4) NOT NULL DEFAULT '',
  `bornmonth` varchar(4) NOT NULL DEFAULT '',
  `bornday` varchar(4) NOT NULL DEFAULT '',
  `qq` varchar(11) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL,
  `age` varchar(3) NOT NULL DEFAULT '',
  `birthday` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `info` varchar(200) NOT NULL,
  `sign_score` int(11) NOT NULL,
  `expend_score` int(11) NOT NULL,
  `continuous` int(11) NOT NULL,
  `add_expend` int(11) NOT NULL,
  `add_expend_time` int(11) NOT NULL,
  `live_time` int(11) NOT NULL,
  `getcardtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=gbk");
E_D("replace into `p_userinfo` values('1','http://v.24so.com/tpl/static/portrait/5.jpg','0','1','0','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','weixin','小白鲨','15629059525','1970','1','1','657446465','1','','','','','1','0','1','0','0','0','1401957221');");
E_D("replace into `p_userinfo` values('2','http://v.24so.com/tpl/static/portrait/6.jpg','0','40','0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','yh302748387','杨杨','13387509543','1991','7','8','302748687','2','','','山西临汾五一西路北京二十思搜科技有限公司','','40','0','1','0','0','0','1401966346');");
E_D("replace into `p_userinfo` values('3','http://v.24so.com/tpl/static/portrait/5.jpg','0','0','0','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','24so','陶荣','13792812605','1989','7','16','1067036492','1','','','阿斯顿飞','','0','0','0','0','0','0','0');");
E_D("replace into `p_userinfo` values('5','http://v.24so.com/tpl/static/portrait/3.jpg','0','0','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','24搜青岛','','18754291222','1993','8','10','','2','','','','','0','0','0','0','0','0','1402297781');");
E_D("replace into `p_userinfo` values('6','http://v.24so.com/tpl/static/portrait/9.jpg','0','0','0','a3a7daf71176d5b','oVaHTjqO7Tr4lXlass_5J6M5sFw4','so24so','','18164049199','1987','8','20','','1','','','','','0','0','1','0','0','0','1402321459');");
E_D("replace into `p_userinfo` values('7','','0','0','0','tvjxcc1402290548','ocTK_jlU0XGUD870bAisXx8VexA0','','常博','15271819800','','','','0','-1','0','','武汉','','0','0','0','0','0','0','0');");
E_D("replace into `p_userinfo` values('8','http://v.24so.com/tpl/static/portrait/2.jpg','0','10','0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','白脸匹夫','常博','15271819800','1992','09','22','1508195559','1','','','','','10','0','1','0','0','0','1402362360');");
E_D("replace into `p_userinfo` values('9','','0','0','0','879c2f933017228','o0OjijsgZD5e7dkrJxKY89cwNUFc','','小马','18660203060','','','','0','-1','0','','青岛','','0','0','0','0','0','0','0');");
E_D("replace into `p_userinfo` values('10','http://v.24so.com/tpl/static/portrait/8.jpg','0','1','0','ainbtq1402292243','oxSa1jn6Nl-kYT3nBXWV9a-_i1l4','妞妞','杨杨','13387509543','1991','07','08','302748687','2','','','','','1','0','1','0','0','0','1402390591');");
E_D("replace into `p_userinfo` values('11','','0','0','0','tvjxcc1402290548','ocTK_jrATUqMQ8a9D9vmVWUoD3Xs','','孟喆','13654298641','','','','0','-1','0','','辽宁省葫芦岛市龙港区龙湾大街','','0','0','0','0','0','0','0');");
E_D("replace into `p_userinfo` values('12','','0','0','0','tvjxcc1402290548','ocTK_jn_WxxBjzMKtTl1wV4Mx8V4','','律师为','13084195401','','','','0','-1','0','','大连沙河口区','','0','0','0','0','0','0','0');");
E_D("replace into `p_userinfo` values('13','http://v.24so.com/tpl/static/portrait/2.jpg','0','0','0','glkpuw1402307164','o6iSGuI8f0kAb8uHpSZdaTpg0Teg','24搜青岛','','18754291222','1993','8','2','','2','','','','','0','0','0','0','0','0','1402557733');");
E_D("replace into `p_userinfo` values('14','http://v.24so.com/tpl/static/portrait/8.jpg','0','0','0','a3a7daf71176d5b','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','旋律',' 郑志飞','18651892405','1989','8','5','598673864','1','','','','','0','0','1','0','0','0','1402558902');");
E_D("replace into `p_userinfo` values('15','','0','0','0','kcmjgr1402792677','o3Cjtt_dFe8wGKL6HiPQX22x4a3Q','11','11','15083381305','1990','07','16','569802179','1','','','','','0','0','0','0','0','0','1402799014');");
E_D("replace into `p_userinfo` values('16','','0','0','0','oucryx1402886291','oYdkquDNf8szXClnqPfxHgxt2XQo','','周梦迪','15839367019','','','','0','-1','0','','濮阳市中原路','','0','0','0','0','0','0','0');");

require("../../inc/footer.php");
?>