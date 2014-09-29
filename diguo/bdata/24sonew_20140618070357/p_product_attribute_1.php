<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_attribute`;");
E_C("CREATE TABLE `p_product_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL COMMENT '属性ID',
  `pid` int(10) unsigned NOT NULL COMMENT '商品ID',
  `name` varchar(100) NOT NULL COMMENT '属性名',
  `value` varchar(100) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_attribute` values('1','2','62','饼干','10');");
E_D("replace into `p_product_attribute` values('2','2','63','饼干','10');");
E_D("replace into `p_product_attribute` values('3','2','64','饼干','10');");
E_D("replace into `p_product_attribute` values('4','2','65','饼干','10');");
E_D("replace into `p_product_attribute` values('5','2','66','饼干','10');");
E_D("replace into `p_product_attribute` values('6','2','67','饼干','10');");
E_D("replace into `p_product_attribute` values('7','2','68','饼干','10');");
E_D("replace into `p_product_attribute` values('8','2','69','饼干','10');");
E_D("replace into `p_product_attribute` values('9','2','70','饼干','10');");
E_D("replace into `p_product_attribute` values('10','2','71','饼干','10');");
E_D("replace into `p_product_attribute` values('11','2','72','饼干','10');");
E_D("replace into `p_product_attribute` values('12','2','73','饼干','10');");
E_D("replace into `p_product_attribute` values('13','2','74','饼干','10');");
E_D("replace into `p_product_attribute` values('14','2','75','饼干','10');");
E_D("replace into `p_product_attribute` values('15','2','76','饼干','10');");
E_D("replace into `p_product_attribute` values('16','2','77','饼干','10');");
E_D("replace into `p_product_attribute` values('17','2','78','饼干','10');");
E_D("replace into `p_product_attribute` values('18','2','79','饼干','10');");
E_D("replace into `p_product_attribute` values('19','2','80','饼干','10');");
E_D("replace into `p_product_attribute` values('20','2','81','饼干','10');");
E_D("replace into `p_product_attribute` values('21','9','82','巧克力','休闲糖巧');");
E_D("replace into `p_product_attribute` values('22','10','83','巧克力','休闲糖巧');");
E_D("replace into `p_product_attribute` values('23','10','84','巧克力','休闲糖巧');");
E_D("replace into `p_product_attribute` values('24','10','85','巧克力','休闲糖巧');");
E_D("replace into `p_product_attribute` values('25','11','86','芒果干','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('26','12','87','花生','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('27','11','87','芒果干','');");
E_D("replace into `p_product_attribute` values('28','13','88','饼干','饼干/糕点');");
E_D("replace into `p_product_attribute` values('29','13','89','饼干','饼干/糕点');");
E_D("replace into `p_product_attribute` values('30','14','90','肉松/鱼松','罐头调料');");
E_D("replace into `p_product_attribute` values('31','15','91','奶粉','奶粉');");
E_D("replace into `p_product_attribute` values('32','12','102','花生','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('33','11','102','芒果干','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('34','12','103','花生','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('35','11','103','芒果干','蜜饯/坚果');");
E_D("replace into `p_product_attribute` values('36','16','105','饼干/蛋糕','饼干/蛋糕');");
E_D("replace into `p_product_attribute` values('37','17','105','果脯/干果','果脯/干果');");
E_D("replace into `p_product_attribute` values('38','18','105','饮料果冻冲剂','饮料果冻冲剂');");
E_D("replace into `p_product_attribute` values('39','19','105','肉食海鲜','肉食海鲜');");
E_D("replace into `p_product_attribute` values('40','20','105','盒装','盒装');");
E_D("replace into `p_product_attribute` values('41','16','106','饼干/蛋糕','饼干/蛋糕');");

require("../../inc/footer.php");
?>