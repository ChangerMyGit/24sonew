<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wedding_info`;");
E_C("CREATE TABLE `p_wedding_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `num` tinyint(2) NOT NULL,
  `info` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_wedding_info` values('1','3','����','137926985324','61','','1','1402052664');");
E_D("replace into `p_wedding_info` values('2','3','����','12345689712','0','ף������','2','1402052710');");
E_D("replace into `p_wedding_info` values('3','5','����','15839367019','0','ϲ����Ե','2','1402799891');");
E_D("replace into `p_wedding_info` values('4','7','��','15839367019','1','','1','1402995637');");
E_D("replace into `p_wedding_info` values('5','7','��','15839367019','0','�»����','2','1402995672');");

require("../../inc/footer.php");
?>