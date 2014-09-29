<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_school_tcourse`;");
E_C("CREATE TABLE `p_school_tcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `tid` int(11) NOT NULL,
  `km_id` int(11) NOT NULL,
  `bj_id` int(11) NOT NULL,
  `xq_id` int(11) NOT NULL,
  `sd_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>