<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_estate_impress_add`;");
E_C("CREATE TABLE `p_estate_impress_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imp_id` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>