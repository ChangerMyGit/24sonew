<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_requestdata`;");
E_C("CREATE TABLE `p_requestdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `year` int(4) NOT NULL,
  `month` int(2) NOT NULL,
  `day` int(2) NOT NULL,
  `time` int(11) NOT NULL,
  `textnum` int(5) NOT NULL,
  `imgnum` int(5) NOT NULL,
  `videonum` int(5) NOT NULL,
  `other` int(5) NOT NULL,
  `follownum` int(5) NOT NULL,
  `unfollownum` int(5) NOT NULL,
  `3g` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=98 DEFAULT CHARSET=gbk");
E_D("replace into `p_requestdata` values('1','879c2f933017228','2014','6','4','1401872291','1','0','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('2','879c2f933017228','2014','6','5','1401934909','26','0','0','4','4','3','0');");
E_D("replace into `p_requestdata` values('3','1fee0922b0a40db','2014','6','5','1401939996','14','1','0','7','2','2','0');");
E_D("replace into `p_requestdata` values('4','mhsqxc1401953951','2014','6','5','1401954276','41','0','0','0','16','14','0');");
E_D("replace into `p_requestdata` values('5','1d36324a811c583','2014','6','5','1401979649','2','0','0','0','1','1','0');");
E_D("replace into `p_requestdata` values('6','1fee0922b0a40db','2014','6','6','1402018127','0','0','0','1','7','1','0');");
E_D("replace into `p_requestdata` values('7','879c2f933017228','2014','6','6','1402019195','5','0','0','5','0','0','0');");
E_D("replace into `p_requestdata` values('8','mhsqxc1401953951','2014','6','6','1402021600','19','0','0','1','4','2','0');");
E_D("replace into `p_requestdata` values('9','a0bbb64eef61a16','2014','6','6','1402034644','1','0','0','0','0','1','0');");
E_D("replace into `p_requestdata` values('10','1fee0922b0a40db','2014','6','7','1402099459','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('11','mhsqxc1401953951','2014','6','7','1402106375','3','0','0','1','1','0','0');");
E_D("replace into `p_requestdata` values('12','879c2f933017228','2014','6','7','1402122060','0','0','0','2','2','0','0');");
E_D("replace into `p_requestdata` values('13','a0bbb64eef61a16','2014','6','7','1402122914','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('14','1fee0922b0a40db','2014','6','8','1402163616','1','0','0','2','5','2','0');");
E_D("replace into `p_requestdata` values('15','879c2f933017228','2014','6','8','1402189451','0','0','0','6','2','0','0');");
E_D("replace into `p_requestdata` values('16','a0bbb64eef61a16','2014','6','8','1402212590','0','0','0','0','5','0','0');");
E_D("replace into `p_requestdata` values('17','1d36324a811c583','2014','6','8','1402213397','1','0','0','0','1','1','0');");
E_D("replace into `p_requestdata` values('18','879c2f933017228','2014','6','9','1402245952','0','0','0','1','0','0','0');");
E_D("replace into `p_requestdata` values('19','a0bbb64eef61a16','2014','6','9','1402251939','3','0','0','0','1','3','0');");
E_D("replace into `p_requestdata` values('20','1fee0922b0a40db','2014','6','9','1402270348','0','0','0','1','4','1','0');");
E_D("replace into `p_requestdata` values('21','a3a7daf71176d5b','2014','6','9','1402285680','57','74','0','9','32','20','0');");
E_D("replace into `p_requestdata` values('22','tvjxcc1402290548','2014','6','9','1402292879','44','15','0','0','15','14','0');");
E_D("replace into `p_requestdata` values('23','ainbtq1402292243','2014','6','9','1402295958','14','0','0','0','5','5','0');");
E_D("replace into `p_requestdata` values('24','vhvake1402306510','2014','6','9','1402307580','0','25','0','5','5','3','0');");
E_D("replace into `p_requestdata` values('25','mhsqxc1401953951','2014','6','9','1402328915','0','2','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('26','a3a7daf71176d5b','2014','6','10','1402330631','4','25','0','2','7','2','0');");
E_D("replace into `p_requestdata` values('27','mhsqxc1401953951','2014','6','10','1402330749','14','71','0','39','46','36','0');");
E_D("replace into `p_requestdata` values('28','tvjxcc1402290548','2014','6','10','1402331065','16','159','0','54','57','23','0');");
E_D("replace into `p_requestdata` values('29','dgqaqc1402307446','2014','6','10','1402363806','0','0','0','0','16','14','0');");
E_D("replace into `p_requestdata` values('30','879c2f933017228','2014','6','10','1402366760','0','1','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('31','c6a3b2d7590ae01','2014','6','10','1402368890','8','11','0','0','3','2','0');");
E_D("replace into `p_requestdata` values('32','1d36324a811c583','2014','6','10','1402369636','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('33','1fee0922b0a40db','2014','6','10','1402372825','0','0','0','2','5','2','0');");
E_D("replace into `p_requestdata` values('34','ainbtq1402292243','2014','6','10','1402375281','17','0','0','0','2','0','0');");
E_D("replace into `p_requestdata` values('35','vhvake1402306510','2014','6','10','1402376693','0','2','0','4','3','0','0');");
E_D("replace into `p_requestdata` values('36','dhybwc1402363778','2014','6','10','1402388772','5','7','0','0','3','2','0');");
E_D("replace into `p_requestdata` values('37','a0bbb64eef61a16','2014','6','10','1402390769','14','0','0','0','2','2','0');");
E_D("replace into `p_requestdata` values('38','6845f758f8e1a94','2014','6','10','1402392242','9','0','0','0','4','2','0');");
E_D("replace into `p_requestdata` values('39','tvjxcc1402290548','2014','6','11','1402416298','3','55','0','4','37','0','0');");
E_D("replace into `p_requestdata` values('40','ainbtq1402292243','2014','6','11','1402417357','18','42','0','0','1','1','0');");
E_D("replace into `p_requestdata` values('41','mhsqxc1401953951','2014','6','11','1402451784','2','0','0','3','5','3','0');");
E_D("replace into `p_requestdata` values('42','dhybwc1402363778','2014','6','11','1402451844','18','37','0','0','10','5','0');");
E_D("replace into `p_requestdata` values('43','yosjzs1402383816','2014','6','11','1402452233','51','5','0','14','6','6','0');");
E_D("replace into `p_requestdata` values('44','a3a7daf71176d5b','2014','6','11','1402452943','0','3','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('45','a0bbb64eef61a16','2014','6','11','1402454433','6','0','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('46','1fee0922b0a40db','2014','6','11','1402459605','0','0','0','2','3','2','0');");
E_D("replace into `p_requestdata` values('47','879c2f933017228','2014','6','11','1402461603','0','1','0','1','0','0','0');");
E_D("replace into `p_requestdata` values('48','qxrzxy1402460503','2014','6','11','1402463862','36','18','0','0','4','4','0');");
E_D("replace into `p_requestdata` values('49','85fa9a93c81ad7e','2014','6','11','1402467142','37','52','0','14','14','12','0');");
E_D("replace into `p_requestdata` values('50','6845f758f8e1a94','2014','6','11','1402471078','3','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('51','gdfrep1402472524','2014','6','11','1402475262','12','0','0','0','2','1','0');");
E_D("replace into `p_requestdata` values('52','vhvake1402306510','2014','6','11','1402480387','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('53','qxrzxy1402460503','2014','6','12','1402502555','23','8','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('54','tvjxcc1402290548','2014','6','12','1402519798','2','26','0','9','8','1','0');");
E_D("replace into `p_requestdata` values('55','6845f758f8e1a94','2014','6','12','1402530585','2','0','0','0','0','1','0');");
E_D("replace into `p_requestdata` values('56','vhvake1402306510','2014','6','12','1402530615','0','0','0','1','1','1','0');");
E_D("replace into `p_requestdata` values('57','85fa9a93c81ad7e','2014','6','12','1402536343','1','26','0','15','4','3','0');");
E_D("replace into `p_requestdata` values('58','a0bbb64eef61a16','2014','6','12','1402537681','8','1','0','0','5','2','0');");
E_D("replace into `p_requestdata` values('59','dhybwc1402363778','2014','6','12','1402538912','0','1','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('60','mhsqxc1401953951','2014','6','12','1402540054','0','1','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('61','f0cdf4ad5650e89','2014','6','12','1402542132','22','0','0','0','3','3','0');");
E_D("replace into `p_requestdata` values('62','879c2f933017228','2014','6','12','1402543125','0','1','0','0','0','1','0');");
E_D("replace into `p_requestdata` values('63','a3a7daf71176d5b','2014','6','12','1402544227','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('64','glkpuw1402307164','2014','6','12','1402546561','3','0','0','6','5','3','0');");
E_D("replace into `p_requestdata` values('65','1fee0922b0a40db','2014','6','12','1402555845','0','0','0','1','5','1','0');");
E_D("replace into `p_requestdata` values('66','ainbtq1402292243','2014','6','12','1402562592','0','5','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('67','yosjzs1402383816','2014','6','12','1402567645','0','1','0','0','1','1','0');");
E_D("replace into `p_requestdata` values('68','gdfrep1402472524','2014','6','12','1402569771','0','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('69','ufjfqw1402534773','2014','6','12','1402569956','3','0','0','0','4','3','0');");
E_D("replace into `p_requestdata` values('70','a0bbb64eef61a16','2014','6','14','1402733054','0','1','0','0','0','1','0');");
E_D("replace into `p_requestdata` values('71','mleyln1402732919','2014','6','14','1402733546','7','13','0','0','5','4','0');");
E_D("replace into `p_requestdata` values('72','6ce2551af0e2ecb','2014','6','14','1402739771','0','0','0','0','5','3','0');");
E_D("replace into `p_requestdata` values('73','befcoq1402738281','2014','6','14','1402741721','11','3','0','0','1','1','0');");
E_D("replace into `p_requestdata` values('74','befcoq1402738281','2014','6','15','1402793391','10','2','0','0','2','2','0');");
E_D("replace into `p_requestdata` values('75','kcmjgr1402792677','2014','6','15','1402794034','24','32','0','18','15','15','0');");
E_D("replace into `p_requestdata` values('76','a0bbb64eef61a16','2014','6','15','1402795214','0','2','0','0','0','2','0');");
E_D("replace into `p_requestdata` values('77','diwxqe1402738986','2014','6','15','1402796368','12','13','0','0','3','3','0');");
E_D("replace into `p_requestdata` values('78','kcmjgr1402792677','2014','6','16','1402877538','3','0','0','2','0','0','0');");
E_D("replace into `p_requestdata` values('79','diwxqe1402738986','2014','6','16','1402881863','11','21','0','2','8','8','0');");
E_D("replace into `p_requestdata` values('80','a0bbb64eef61a16','2014','6','16','1402883071','0','2','0','0','2','2','0');");
E_D("replace into `p_requestdata` values('81','mleyln1402732919','2014','6','16','1402890414','6','10','0','0','3','3','0');");
E_D("replace into `p_requestdata` values('82','oucryx1402886291','2014','6','16','1402891239','9','24','0','0','4','3','0');");
E_D("replace into `p_requestdata` values('83','qnrwlm1402888833','2014','6','16','1402910542','0','8','0','0','3','3','0');");
E_D("replace into `p_requestdata` values('84','qnrwlm1402888833','2014','6','17','1402965814','3','19','0','24','5','3','0');");
E_D("replace into `p_requestdata` values('85','ysemxs1402913598','2014','6','17','1402966161','15','13','0','0','7','6','0');");
E_D("replace into `p_requestdata` values('86','oucryx1402886291','2014','6','17','1402967729','12','28','0','6','3','2','0');");
E_D("replace into `p_requestdata` values('87','0d8553ddf4f8102','2014','6','17','1402973026','3','20','0','0','6','4','0');");
E_D("replace into `p_requestdata` values('88','kcmjgr1402792677','2014','6','17','1402976797','0','0','0','1','0','0','0');");
E_D("replace into `p_requestdata` values('89','owitol1402987860','2014','6','17','1402990116','15','0','0','0','4','2','0');");
E_D("replace into `p_requestdata` values('90','gdfrep1402472524','2014','6','17','1402993905','20','21','0','20','13','9','0');");
E_D("replace into `p_requestdata` values('91','ysemxs1402913598','2014','6','18','1403052136','2','5','0','0','3','3','0');");
E_D("replace into `p_requestdata` values('92','owitol1402987860','2014','6','18','1403054152','16','0','0','0','1','0','0');");
E_D("replace into `p_requestdata` values('93','eujhzm1403053453','2014','6','18','1403055196','5','6','0','5','14','11','0');");
E_D("replace into `p_requestdata` values('94','qweeqm1402996029','2014','6','18','1403057658','5','3','0','0','4','3','0');");
E_D("replace into `p_requestdata` values('95','d2c798c7f728898','2014','6','18','1403059572','7','0','0','0','0','0','0');");
E_D("replace into `p_requestdata` values('96','qnrwlm1402888833','2014','6','18','1403060237','0','0','0','1','0','0','0');");
E_D("replace into `p_requestdata` values('97','gdfrep1402472524','2014','6','18','1403060314','1','2','0','0','1','0','0');");

require("../../inc/footer.php");
?>