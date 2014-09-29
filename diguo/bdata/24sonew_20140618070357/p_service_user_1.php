<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_service_user`;");
E_C("CREATE TABLE `p_service_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `token` varchar(60) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `userPwd` varchar(32) NOT NULL,
  `endJoinDate` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_service_user` values('1','СтСт','879c2f933017228','yh302748687','9d827a95f2c3ae1a8795f17130d56866','1401953342','0');");
E_D("replace into `p_service_user` values('2','maomao','879c2f933017228','maomao','e2145387bcc7842edef4ccecc34b7da4','1402468647','0');");
E_D("replace into `p_service_user` values('3','СтСт','mhsqxc1401953951','yh302748687','9d827a95f2c3ae1a8795f17130d56866','1402112454','0');");
E_D("replace into `p_service_user` values('5','УВ','tvjxcc1402290548','12345','827ccb0eea8a706c4c34a16891f84e7b','1402532915','0');");

require("../../inc/footer.php");
?>