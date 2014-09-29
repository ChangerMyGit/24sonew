<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_moopha_channel_contentattribute`;");
E_C("CREATE TABLE `p_moopha_channel_contentattribute` (
  `channelid` int(4) NOT NULL,
  `attributeid` int(4) NOT NULL,
  `taxis` int(4) NOT NULL DEFAULT '0',
  KEY `channelid` (`channelid`),
  KEY `taxis` (`taxis`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>