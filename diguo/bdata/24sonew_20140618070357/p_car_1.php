<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_car`;");
E_C("CREATE TABLE `p_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `www` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `sort` int(11) DEFAULT NULL,
  `info` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk");
E_D("replace into `p_car` values('1','1fee0922b0a40db','奔驰','http://www.mercedes-benz.com.cn/content/china/mpc/','http://v.24so.com/uploads/1/1fee0922b0a40db/3/f/9/9/thumb_53902247937da.jpg','1','梅赛德斯-奔驰（Mercedes-Benz）是世界知名的&lt;a href=&quot;http://baike.so.com/doc/4012899.html&quot; target=&quot;_blank&quot;&gt;德国&lt;/a&gt;汽车品牌，创立于1900年，总部设在&lt;a href=&quot;http://baike.so.com/doc/286473.html&');");

require("../../inc/footer.php");
?>