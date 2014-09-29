<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_attribute`;");
E_C("CREATE TABLE `p_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `catid` int(10) unsigned NOT NULL COMMENT '分类ID',
  `name` varchar(100) NOT NULL COMMENT '属性名',
  `value` varchar(100) NOT NULL COMMENT '属性值',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`catid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk");
E_D("replace into `p_attribute` values('1','mhsqxc1401953951','1','法狮龙','1');");
E_D("replace into `p_attribute` values('2','tvjxcc1402290548','5','休闲糖巧','食品饮料');");
E_D("replace into `p_attribute` values('3','tvjxcc1402290548','5','蜜饯/坚果','食品饮料');");
E_D("replace into `p_attribute` values('4','tvjxcc1402290548','5','饼干/糕点','食品饮料');");
E_D("replace into `p_attribute` values('5','tvjxcc1402290548','5','咖啡/茶叶','食品饮料');");
E_D("replace into `p_attribute` values('6','tvjxcc1402290548','5','牛奶乳品','食品饮料');");
E_D("replace into `p_attribute` values('7','tvjxcc1402290548','5','水/饮料','食品饮料');");
E_D("replace into `p_attribute` values('8','tvjxcc1402290548','5','冲饮谷物','食品饮料');");
E_D("replace into `p_attribute` values('12','tvjxcc1402290548','7','花生','蜜饯/坚果');");
E_D("replace into `p_attribute` values('10','tvjxcc1402290548','6','巧克力','休闲糖巧');");
E_D("replace into `p_attribute` values('11','tvjxcc1402290548','7','芒果干','蜜饯/坚果');");
E_D("replace into `p_attribute` values('13','tvjxcc1402290548','8','饼干','饼干/糕点');");
E_D("replace into `p_attribute` values('14','tvjxcc1402290548','9','肉松/鱼松','罐头调料');");
E_D("replace into `p_attribute` values('15','tvjxcc1402290548','10','奶粉','奶粉');");
E_D("replace into `p_attribute` values('16','glkpuw1402307164','14','饼干/蛋糕','饼干/蛋糕');");
E_D("replace into `p_attribute` values('21','oucryx1402886291','19','健身器','100');");

require("../../inc/footer.php");
?>