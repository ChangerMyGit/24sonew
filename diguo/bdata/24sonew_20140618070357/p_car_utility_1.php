<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_car_utility`;");
E_C("CREATE TABLE `p_car_utility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_car_utility` values('1','����������','http://car.m.yiche.com/qichedaikuanjisuanqi/','1');");
E_D("replace into `p_car_utility` values('2','���ռ���','http://car.m.yiche.com/qichebaoxianjisuan/','1');");
E_D("replace into `p_car_utility` values('3','ȫ�����','http://car.m.yiche.com/gouchejisuanqi/','1');");
E_D("replace into `p_car_utility` values('4','���ͱȽ�','http://car.m.yiche.com/chexingduibi/?carIDs=102501','1');");
E_D("replace into `p_car_utility` values('5','Υ�²�ѯ','http://wap.bjjtgl.gov.cn/wimframework/portal/wwwroot/bjjgj/xxcx.psml?contentType=%E8%BF%9D%E6%B3%95%','0');");

require("../../inc/footer.php");
?>