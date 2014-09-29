<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_share`;");
E_C("CREATE TABLE `p_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(30) NOT NULL DEFAULT '',
  `moduleid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(30) NOT NULL DEFAULT '',
  `wecha_id` varchar(80) NOT NULL DEFAULT '',
  `to` varchar(30) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL,
  `url` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `module` (`module`,`moduleid`,`token`,`time`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=gbk");
E_D("replace into `p_share` values('1','LuckyFruit','3','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','friend','1401955465','http://v.24so.com/index.php?g=Wap&amp;amp;m=LuckyFruit&amp;amp;a=index&amp;amp;token=1fee0922b0a40db&amp;amp;id=3&amp;amp;type=5');");
E_D("replace into `p_share` values('2','LuckyFruit','3','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','friend','1401955471','http://v.24so.com/index.php?g=Wap&amp;amp;m=LuckyFruit&amp;amp;a=index&amp;amp;token=1fee0922b0a40db&amp;amp;id=3&amp;amp;type=5');");
E_D("replace into `p_share` values('3','Card','0','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','friend','1401957519','http://v.24so.com/index.php?g=Wap&amp;amp;m=Card&amp;amp;a=index&amp;amp;token=1fee0922b0a40db');");
E_D("replace into `p_share` values('4','Store','1','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','friend','1401957604','http://v.24so.com/index.php?g=Wap&amp;amp;m=Store&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('5','Card','0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','friend','1401961965','http://v.24so.com/index.php?g=Wap&amp;amp;m=Card&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('6','Index','0','879c2f933017228','o0OjijuoXrT9CHcPjJL2g9C3IqLE','friend','1402138067','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=879c2f933017228');");
E_D("replace into `p_share` values('7','Index','3','tvjxcc1402290548','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','friend','1402301187','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=content&amp;amp;token=tvjxcc1402290548&amp;amp;classid=50&amp;amp;id=22');");
E_D("replace into `p_share` values('8','Index','3','tvjxcc1402290548','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','friend','1402301501','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=content&amp;amp;token=tvjxcc1402290548&amp;amp;classid=50&amp;amp;id=22');");
E_D("replace into `p_share` values('9','Index','3','tvjxcc1402290548','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','friend','1402301515','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=content&amp;amp;token=tvjxcc1402290548&amp;amp;classid=50&amp;amp;id=22');");
E_D("replace into `p_share` values('10','Index','3','tvjxcc1402290548','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','friend','1402301574','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=content&amp;amp;token=tvjxcc1402290548&amp;amp;classid=50&amp;amp;id=22');");
E_D("replace into `p_share` values('11','Index','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','friend','1402308960','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('12','Index','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','frineds','1402312019','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('13','Index','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','friend','1402312025','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('14','Index','0','a3a7daf71176d5b','','friend','1402312121','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('15','Index','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','friend','1402319078','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('16','Index','0','a3a7daf71176d5b','','friend','1402319104','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('17','Index','0','a3a7daf71176d5b','oVaHTjtiwp7pYuo6akcKDC89ks-k','friend','1402321094','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=a3a7daf71176d5b');");
E_D("replace into `p_share` values('18','Index','0','tvjxcc1402290548','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','friend','1402388983','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('19','Index','0','6845f758f8e1a94','oWjQbuG_YqXZy_dTyPYJlM0AOeJE','friend','1402394747','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=6845f758f8e1a94');");
E_D("replace into `p_share` values('20','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402395207','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('21','Store','6','tvjxcc1402290548','ocTK_ju33xXvCadvIxJ8Jk9IQEz4','friend','1402397039','http://v.24so.com/index.php?g=Wap&amp;amp;m=Store&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('22','Index','3','ainbtq1402292243','oxSa1jn6Nl-kYT3nBXWV9a-_i1l4','frineds','1402473526','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=content&amp;amp;token=ainbtq1402292243&amp;amp;id=104');");
E_D("replace into `p_share` values('23','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402478250','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('24','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402478256','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('25','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402478708','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('26','Index','0','tvjxcc1402290548','','friend','1402479189','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('27','Index','0','85fa9a93c81ad7e','o5GVDt3_zknPHzquqqF-aa2Xudxo','frineds','1402539340','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=85fa9a93c81ad7e');");
E_D("replace into `p_share` values('28','Index','3','vhvake1402306510','oSNd2uCQVQaU1VdEfh3Eqjnc7E8E','friend','1402539571','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=lists&amp;amp;token=vhvake1402306510&amp;amp;classid=61&amp;amp;id=0');");
E_D("replace into `p_share` values('29','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402547032','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('30','Index','0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','frineds','1402547880','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('31','Repast','0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','frineds','1402547898','http://v.24so.com/index.php?g=Wap&amp;amp;m=Repast&amp;amp;a=select&amp;amp;token=mhsqxc1401953951&amp;amp;cid=10');");
E_D("replace into `p_share` values('32','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402547976','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('33','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402547983','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('34','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402547988','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('35','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402548003','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('36','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402549570','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('37','Index','0','mhsqxc1401953951','','frineds','1402551108','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('38','Repast','0','mhsqxc1401953951','','frineds','1402551208','http://v.24so.com/index.php?g=Wap&amp;amp;m=Repast&amp;amp;a=select&amp;amp;token=mhsqxc1401953951&amp;amp;cid=10');");
E_D("replace into `p_share` values('39','Index','0','mhsqxc1401953951','','friend','1402551510','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('40','Index','0','mhsqxc1401953951','','frineds','1402551545','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('41','Index','0','mhsqxc1401953951','','friend','1402551594','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('42','Index','0','mhsqxc1401953951','','friend','1402551717','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('43','Index','0','mhsqxc1401953951','','friend','1402552627','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('44','Index','0','mhsqxc1401953951','','friend','1402554664','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('45','Index','0','mhsqxc1401953951','','friend','1402561441','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=mhsqxc1401953951');");
E_D("replace into `p_share` values('46','Index','0','tvjxcc1402290548','','friend','1402562642','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('47','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402564781','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('48','Index','0','tvjxcc1402290548','ocTK_joxqI4rvZQgZKmBd53nqZJ0','friend','1402564802','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=tvjxcc1402290548');");
E_D("replace into `p_share` values('49','Index','0','glkpuw1402307164','o6iSGuI8f0kAb8uHpSZdaTpg0Teg','friend','1402568963','http://v.24so.com/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=index&amp;amp;token=glkpuw1402307164');");

require("../../inc/footer.php");
?>