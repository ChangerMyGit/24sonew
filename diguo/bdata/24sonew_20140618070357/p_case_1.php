<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_case`;");
E_C("CREATE TABLE `p_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `url` char(255) NOT NULL,
  `img` char(200) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=gbk");
E_D("replace into `p_case` values('2','湖北思八达','http://24.winworlds.cn/24sonew/image/anli1.jpg','http://24.winworlds.cn/24sonew/image/anli1.jpg','1');");
E_D("replace into `p_case` values('3','微聘','http://24.winworlds.cn/24sonew/image/anli2.jpg','http://24.winworlds.cn/24sonew/image/anli2.jpg','1');");
E_D("replace into `p_case` values('4','金朝阳教育','http://24.winworlds.cn/24sonew/image/anli3.jpg','http://24.winworlds.cn/24sonew/image/anli3.jpg','1');");
E_D("replace into `p_case` values('5','易物天下','http://24.winworlds.cn/24sonew/image/anli4.jpg','http://24.winworlds.cn/24sonew/image/anli4.jpg','1');");
E_D("replace into `p_case` values('6','大楚人才','http://24.winworlds.cn/24sonew/image/anli5.jpg','http://24.winworlds.cn/24sonew/image/anli5.jpg','1');");
E_D("replace into `p_case` values('7','24搜','http://24.winworlds.cn/24sonew/image/anli5.jpg','http://24.winworlds.cn/24sonew/image/anli6.jpg','1');");
E_D("replace into `p_case` values('8','24搜','http://24.winworlds.cn/24sonew/image/anli6.jpg','http://24.winworlds.cn/24sonew/image/anli6.jpg','1');");

require("../../inc/footer.php");
?>