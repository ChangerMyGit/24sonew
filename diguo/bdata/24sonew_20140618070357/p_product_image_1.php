<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_image`;");
E_C("CREATE TABLE `p_product_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(10) unsigned NOT NULL COMMENT 'ÉÌÆ·ID',
  `image` varchar(200) NOT NULL COMMENT 'Í¼Æ¬µØÖ·',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_image` values('1','81','http://v.24so.com/uploads/t/tvjxcc1402290548/b/5/5/e/thumb_539596fccdc30.jpg');");
E_D("replace into `p_product_image` values('2','81','http://v.24so.com/uploads/t/tvjxcc1402290548/4/a/a/5/thumb_539597055fa96.jpg');");
E_D("replace into `p_product_image` values('3','81','http://v.24so.com/uploads/t/tvjxcc1402290548/d/e/2/1/thumb_5395970ce3e9e.jpg');");
E_D("replace into `p_product_image` values('4','24','http://v.24so.com/uploads/m/mhsqxc1401953951/e/4/7/3/thumb_5395975a8d711.jpg');");
E_D("replace into `p_product_image` values('5','24','http://v.24so.com/uploads/m/mhsqxc1401953951/b/f/7/5/thumb_5395980eba147.jpg');");
E_D("replace into `p_product_image` values('6','82','http://v.24so.com/uploads/t/tvjxcc1402290548/2/9/2/f/thumb_5395c8ff5ac04.jpg');");
E_D("replace into `p_product_image` values('7','82','http://v.24so.com/uploads/t/tvjxcc1402290548/0/9/4/6/thumb_5395c969d5024.jpg');");
E_D("replace into `p_product_image` values('8','82','http://v.24so.com/uploads/t/tvjxcc1402290548/0/f/5/e/thumb_5395c97c53792.jpg');");
E_D("replace into `p_product_image` values('9','83','http://v.24so.com/uploads/t/tvjxcc1402290548/b/8/6/b/thumb_5395cce0b3695.jpg');");
E_D("replace into `p_product_image` values('10','83','http://v.24so.com/uploads/t/tvjxcc1402290548/f/d/2/5/thumb_5395cceb6440f.jpg');");
E_D("replace into `p_product_image` values('11','83','http://v.24so.com/uploads/t/tvjxcc1402290548/d/c/e/5/thumb_5395ccf6b1a74.jpg');");
E_D("replace into `p_product_image` values('12','84','http://v.24so.com/uploads/t/tvjxcc1402290548/e/f/b/9/thumb_5395cdaeae44b.jpg');");
E_D("replace into `p_product_image` values('13','84','http://v.24so.com/uploads/t/tvjxcc1402290548/c/f/6/4/thumb_5395cdbdd2d41.jpg');");
E_D("replace into `p_product_image` values('14','84','http://v.24so.com/uploads/t/tvjxcc1402290548/2/d/3/9/thumb_5395cdc9122c6.jpg');");
E_D("replace into `p_product_image` values('15','85','http://v.24so.com/uploads/t/tvjxcc1402290548/8/4/5/6/thumb_5395cf0ae83f6.jpg');");
E_D("replace into `p_product_image` values('16','85','http://v.24so.com/uploads/t/tvjxcc1402290548/1/7/6/b/thumb_5395cf199b6a3.jpg');");
E_D("replace into `p_product_image` values('17','85','http://v.24so.com/uploads/t/tvjxcc1402290548/0/b/c/b/thumb_5395cf2548081.jpg');");
E_D("replace into `p_product_image` values('18','86','http://v.24so.com/uploads/t/tvjxcc1402290548/0/5/b/c/thumb_5395d5a0d85c6.jpg');");
E_D("replace into `p_product_image` values('19','86','http://v.24so.com/uploads/t/tvjxcc1402290548/9/7/c/5/thumb_5395d5ae84777.jpg');");
E_D("replace into `p_product_image` values('20','86','http://v.24so.com/uploads/t/tvjxcc1402290548/4/0/f/3/thumb_5395d5ba3ff09.jpg');");
E_D("replace into `p_product_image` values('21','87','http://v.24so.com/uploads/t/tvjxcc1402290548/9/b/9/e/thumb_5395d8cbaf614.jpg');");
E_D("replace into `p_product_image` values('22','87','http://v.24so.com/uploads/t/tvjxcc1402290548/e/a/f/7/thumb_5395d8db38600.jpg');");
E_D("replace into `p_product_image` values('23','87','http://v.24so.com/uploads/t/tvjxcc1402290548/a/8/f/c/thumb_5395d8e83866e.jpg');");
E_D("replace into `p_product_image` values('24','87','http://v.24so.com/uploads/t/tvjxcc1402290548/a/d/a/4/thumb_5395d8f60e2cb.jpg');");
E_D("replace into `p_product_image` values('25','88','http://v.24so.com/uploads/t/tvjxcc1402290548/d/f/9/7/thumb_5395db7c90170.jpg');");
E_D("replace into `p_product_image` values('26','88','http://v.24so.com/uploads/t/tvjxcc1402290548/e/0/1/a/thumb_5395db88dc8c3.jpg');");
E_D("replace into `p_product_image` values('27','88','http://v.24so.com/uploads/t/tvjxcc1402290548/d/f/7/8/thumb_5395db9356dc8.jpg');");
E_D("replace into `p_product_image` values('28','89','http://v.24so.com/uploads/t/tvjxcc1402290548/d/f/9/7/thumb_5395db7c90170.jpg');");
E_D("replace into `p_product_image` values('29','89','http://v.24so.com/uploads/t/tvjxcc1402290548/e/0/1/a/thumb_5395db88dc8c3.jpg');");
E_D("replace into `p_product_image` values('30','89','http://v.24so.com/uploads/t/tvjxcc1402290548/d/f/7/8/thumb_5395db9356dc8.jpg');");
E_D("replace into `p_product_image` values('31','90','http://v.24so.com/uploads/t/tvjxcc1402290548/8/c/0/3/thumb_5395dcd4b65e4.jpg');");
E_D("replace into `p_product_image` values('32','90','http://v.24so.com/uploads/t/tvjxcc1402290548/0/a/6/4/thumb_5395dce6f3889.jpg');");
E_D("replace into `p_product_image` values('33','90','http://v.24so.com/uploads/t/tvjxcc1402290548/1/e/d/1/thumb_5395dd10c5f38.jpg');");
E_D("replace into `p_product_image` values('34','90','http://v.24so.com/uploads/t/tvjxcc1402290548/6/d/4/5/thumb_5395dd1e94094.jpg');");
E_D("replace into `p_product_image` values('35','91','http://v.24so.com/uploads/t/tvjxcc1402290548/8/8/c/5/thumb_5395e078c7ac3.jpg');");
E_D("replace into `p_product_image` values('36','91','http://v.24so.com/uploads/t/tvjxcc1402290548/3/f/9/1/thumb_5395e08404403.jpg');");
E_D("replace into `p_product_image` values('37','91','http://v.24so.com/uploads/t/tvjxcc1402290548/5/4/3/a/thumb_5395e08e0f43b.jpg');");
E_D("replace into `p_product_image` values('38','102','http://v.24so.com/uploads/t/tvjxcc1402290548/0/7/a/6/thumb_5396c786b071f.jpg');");
E_D("replace into `p_product_image` values('39','102','http://v.24so.com/uploads/t/tvjxcc1402290548/4/f/f/6/thumb_5396c79a635f0.jpg');");
E_D("replace into `p_product_image` values('40','102','http://v.24so.com/uploads/t/tvjxcc1402290548/7/6/d/c/thumb_5396c7c8f3789.jpg');");
E_D("replace into `p_product_image` values('41','102','http://v.24so.com/uploads/t/tvjxcc1402290548/4/7/8/1/thumb_5396c80779782.jpg');");
E_D("replace into `p_product_image` values('42','103','http://v.24so.com/uploads/t/tvjxcc1402290548/f/f/7/8/thumb_5396cabf19b92.jpg');");
E_D("replace into `p_product_image` values('43','103','http://v.24so.com/uploads/t/tvjxcc1402290548/5/3/5/4/thumb_5396cacb3cb6d.jpg');");
E_D("replace into `p_product_image` values('44','103','http://v.24so.com/uploads/t/tvjxcc1402290548/f/6/f/5/thumb_5396caf7384ea.jpg');");
E_D("replace into `p_product_image` values('45','105','http://v.24so.com/uploads/g/glkpuw1402307164/1/a/e/0/thumb_539943967a915.jpg');");
E_D("replace into `p_product_image` values('46','105','http://v.24so.com/uploads/g/glkpuw1402307164/4/5/c/e/thumb_539943a5a3319.jpg');");
E_D("replace into `p_product_image` values('47','106','http://v.24so.com/uploads/g/glkpuw1402307164/2/9/0/8/thumb_539947e56e188.jpg');");

require("../../inc/footer.php");
?>