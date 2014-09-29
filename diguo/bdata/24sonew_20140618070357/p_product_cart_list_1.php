<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_cart_list`;");
E_C("CREATE TABLE `p_product_cart_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cartid` int(10) NOT NULL DEFAULT '0',
  `productid` int(10) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `total` mediumint(4) NOT NULL DEFAULT '0',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cartid` (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_cart_list` values('1','2','57','2490','2','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','1402305956');");
E_D("replace into `p_product_cart_list` values('2','3','22','5960','2','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1402311237');");
E_D("replace into `p_product_cart_list` values('3','4','24','3450','1','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1402311507');");
E_D("replace into `p_product_cart_list` values('4','4','21','5960','2','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1402311507');");
E_D("replace into `p_product_cart_list` values('5','5','23','17250','5','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1402312113');");
E_D("replace into `p_product_cart_list` values('6','6','24','3450','1','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1402312235');");
E_D("replace into `p_product_cart_list` values('8','11','56','1245','1','o0OjijsgZD5e7dkrJxKY89cwNUFc','879c2f933017228','1402366848');");
E_D("replace into `p_product_cart_list` values('9','14','83','40','1','ocTK_jmka_1p7d4qvC9XMjuojOhA','tvjxcc1402290548','1402396216');");
E_D("replace into `p_product_cart_list` values('13','16','83','80','2','ocTK_jlU0XGUD870bAisXx8VexA0','tvjxcc1402290548','1402401061');");
E_D("replace into `p_product_cart_list` values('12','16','87','32','1','ocTK_jlU0XGUD870bAisXx8VexA0','tvjxcc1402290548','1402401061');");
E_D("replace into `p_product_cart_list` values('14','18','83','40','1','ocTK_jn_WxxBjzMKtTl1wV4Mx8V4','tvjxcc1402290548','1402547728');");
E_D("replace into `p_product_cart_list` values('15','19','110','120','1','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','1402996875');");

require("../../inc/footer.php");
?>