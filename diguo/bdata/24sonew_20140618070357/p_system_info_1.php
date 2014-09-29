<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_system_info`;");
E_C("CREATE TABLE `p_system_info` (
  `lastsqlupdate` int(10) NOT NULL,
  `version` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `p_system_info` values('0','0');");

require("../../inc/footer.php");
?>