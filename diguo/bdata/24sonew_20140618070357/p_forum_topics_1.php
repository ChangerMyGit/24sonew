<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_forum_topics`;");
E_C("CREATE TABLE `p_forum_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `likeid` varchar(3000) DEFAULT NULL,
  `commentid` varchar(3000) DEFAULT NULL,
  `favourid` varchar(3000) DEFAULT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `photos` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>