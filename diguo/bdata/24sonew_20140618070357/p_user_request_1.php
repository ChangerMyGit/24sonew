<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_user_request`;");
E_C("CREATE TABLE `p_user_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `msgtype` varchar(15) NOT NULL DEFAULT 'text',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `msgtype` (`msgtype`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_user_request` values('1','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','开车去','text','1402023700');");
E_D("replace into `p_user_request` values('2','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','111.501289,36.077019','location','1402023721');");
E_D("replace into `p_user_request` values('3','dhybwc1402363778','oW4GjuO-dr_RSTl2tpc_twV6WAp4','开车去','text','1402390533');");
E_D("replace into `p_user_request` values('4','dhybwc1402363778','oW4GjuO-dr_RSTl2tpc_twV6WAp4','120.420986,36.066656','location','1402390541');");

require("../../inc/footer.php");
?>