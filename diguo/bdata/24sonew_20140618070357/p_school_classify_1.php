<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_school_classify`;");
E_C("CREATE TABLE `p_school_classify` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(50) NOT NULL,
  `ssort` int(5) NOT NULL,
  `token` varchar(50) NOT NULL,
  `type` char(20) NOT NULL,
  PRIMARY KEY (`sid`),
  KEY `type` (`type`),
  FULLTEXT KEY `type_2` (`type`),
  FULLTEXT KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_school_classify` values('2','ฟฮณฬิคิผ','1','c6a3b2d7590ae01','semester');");

require("../../inc/footer.php");
?>