<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_forum_comment`;");
E_C("CREATE TABLE `p_forum_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `content` varchar(3000) NOT NULL,
  `createtime` int(11) NOT NULL,
  `favourid` varchar(3000) DEFAULT NULL,
  `replyid` varchar(3000) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>