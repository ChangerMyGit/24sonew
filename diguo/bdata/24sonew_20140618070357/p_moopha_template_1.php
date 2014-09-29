<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_moopha_template`;");
E_C("CREATE TABLE `p_moopha_template` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `generate_path` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1-index,2-channel,3-template,4-singlepage',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `createhtml` tinyint(1) NOT NULL DEFAULT '1',
  `site` int(4) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `isdefault` (`isdefault`),
  KEY `site` (`site`),
  KEY `time` (`time`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>