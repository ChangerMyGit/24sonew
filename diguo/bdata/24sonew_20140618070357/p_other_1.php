<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_other`;");
E_C("CREATE TABLE `p_other` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `info` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_other` values('1','879c2f933017228','不知道','尊敬的用户，微商企无法识别您的当前指令，请继续使用其他功能。。。');");
E_D("replace into `p_other` values('2','1fee0922b0a40db','','回复“首页”，惊喜多多');");
E_D("replace into `p_other` values('3','qxrzxy1402460503','你好','感谢您关注掌上爱情');");

require("../../inc/footer.php");
?>