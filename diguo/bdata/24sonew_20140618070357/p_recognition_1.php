<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_recognition`;");
E_C("CREATE TABLE `p_recognition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `attention_num` int(5) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `code_url` varchar(200) NOT NULL,
  `scene_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk");
E_D("replace into `p_recognition` values('1','879c2f933017228','青岛一店一码','0','渠道','','0','-1');");
E_D("replace into `p_recognition` values('2','879c2f933017228','北京一店一码','0','北京渠道','','0','0');");
E_D("replace into `p_recognition` values('3','tvjxcc1402290548','商超','0','商超','','0','0');");
E_D("replace into `p_recognition` values('4','a0bbb64eef61a16','优惠','1','优惠','gQHK7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL2JIV3J5UkhsdWd6RGZHVWliRmx4AAIE_1mZUwMEAAAAAA==','0','0');");

require("../../inc/footer.php");
?>