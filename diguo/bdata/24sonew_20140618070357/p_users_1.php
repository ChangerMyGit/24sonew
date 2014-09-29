<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_users`;");
E_C("CREATE TABLE `p_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inviter` int(10) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `mp` varchar(11) NOT NULL DEFAULT '',
  `smscount` int(10) NOT NULL DEFAULT '0',
  `password` varchar(32) NOT NULL,
  `email` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `lasttime` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `createip` varchar(30) NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `activitynum` int(11) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_create_status` tinyint(1) NOT NULL,
  `money` int(11) NOT NULL,
  `moneybalance` int(10) NOT NULL DEFAULT '0',
  `spend` int(5) NOT NULL DEFAULT '0',
  `viptime` varchar(13) NOT NULL,
  `connectnum` int(11) NOT NULL DEFAULT '0',
  `lastloginmonth` smallint(2) NOT NULL DEFAULT '0',
  `attachmentsize` int(10) NOT NULL DEFAULT '0',
  `wechat_card_num` int(3) NOT NULL,
  `serviceUserNum` tinyint(3) NOT NULL,
  `invitecode` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=gbk");
E_D("replace into `p_users` values('1','0','1','admin','','0','21232f297a57a5a743894a0e4a801fc3','admin@admin.com','1388141327','1403073455','1','127.0.0.1','182.40.142.41','0','25','0','0','0','0','0','2388141327','0','6','0','1','0','');");
E_D("replace into `p_users` values('2','1','4','test','','0','098f6bcd4621d373cade4e832627b4f6','test@163.com','1401435821','1403072711','1','113.124.10.73','182.40.142.41','3','75','0','0','0','0','0','1435248000','205','6','2771811','1','2','xxwzxj');");
E_D("replace into `p_users` values('3','1','4','liujairuqq','','0','6754b233f48edfa0349967bb5019fe18','2539274776@qq.com','1401935791','1401935791','1','182.40.145.87','182.40.145.87','0','25','0','0','0','0','0','1435161600','0','0','0','1','0','jvfpvc');");
E_D("replace into `p_users` values('4','1','4','china24so','','0','d7d2eb2176c048ce60cbf9eb6866ca46','657446465@qq.com','1401939148','1403056775','1','58.51.22.11','125.39.30.12','6','25','0','0','0','0','0','1467216000','72','6','624660','0','0','zfwrng');");
E_D("replace into `p_users` values('5','1','4','s262984149','','0','b0178cadf7e01e83ed36f2f68b307dbe','262984149@qq.com','1401940855','1401940855','1','111.170.31.248','111.170.31.248','0','25','0','0','0','0','0','1464710400','0','0','0','1','0','mrgent');");
E_D("replace into `p_users` values('6','1','4','2928569978','','0','25f9e794323b453885f5181f1b624d0b','2928569978@qq.com','1401941208','1403072584','1','60.221.48.200','183.188.147.28','11','25','0','0','0','0','0','1436112000','646','6','7926291','2','1','spkete');");
E_D("replace into `p_users` values('30','1','4','2951653506','','0','9d827a95f2c3ae1a8795f17130d56866','2951653506@qq.com','1402480364','1403072420','1','60.221.86.145','183.188.147.28','1','11','0','0','0','0','0','1403085164','0','6','432049','1','0','xdfqch');");
E_D("replace into `p_users` values('7','1','4','2047124873','','0','25f9e794323b453885f5181f1b624d0b','2047124873@qq.com','1401948437','1401962995','1','111.161.32.92','175.43.125.234','0','23','0','0','0','0','0','1402553237','0','6','13522','1','0','zjzdzb');");
E_D("replace into `p_users` values('8','1','4','zhangmanfang','','0','714dee763ce5b108b852d875e4b05ea6','569802179@qq.com','1401950297','1403058427','1','123.52.175.69','115.50.116.243','2','23','0','0','0','0','0','1464710400','87','6','6390585','1','0','pdugbw');");
E_D("replace into `p_users` values('9','1','4','ggdr520','','0','c33367701511b4f6020ec61ded352059','79888170@qq.com','1401974138','1401974138','1','111.174.47.20','111.174.47.20','0','22','0','0','0','0','0','1402578938','0','0','0','0','0','wjkkfx');");
E_D("replace into `p_users` values('10','1','4','ggdr522','','0','e10adc3949ba59abbe56e057f20f883e','373618376@qq.com','1401978768','1401978768','1','111.174.47.20','111.174.47.20','0','22','0','0','0','0','0','1402583568','13','0','28251','0','0','dxfmyf');");
E_D("replace into `p_users` values('11','1','4','huazilaolao@163.com','','0','6754b233f48edfa0349967bb5019fe18','huazilaolao@163.com','1402035676','1402281580','1','123.168.72.118','182.40.145.166','0','22','0','0','0','0','0','1402640476','0','6','0','1','0','nnzhum');");
E_D("replace into `p_users` values('12','1','4','LFJZGG','','0','092e83ec918e50315183c7f81838b2b1','a2023507@qq.com','1402198323','1402198323','1','60.221.135.232','60.221.135.232','0','20','0','0','0','0','0','1402803123','0','0','0','0','0','fswaxn');");
E_D("replace into `p_users` values('13','1','4','qdlvyouwang@126.com','','0','6754b233f48edfa0349967bb5019fe18','qdlvyouwang@126.com','1402282436','1402557330','1','182.40.145.166','119.165.11.237','19','20','0','0','0','0','0','1402887236','332','6','2740480','1','-1','evuvdn');");
E_D("replace into `p_users` values('14','1','4','uzeuze','','0','25d55ad283aa400af464c76d713c07ad','376818404@qq.com','1402290542','1403058013','1','118.73.203.58','183.188.147.28','12','19','0','0','0','0','0','1435334400','730','6','14262500','1','1','kzgfns');");
E_D("replace into `p_users` values('15','1','4','admin','','0','25f9e794323b453885f5181f1b624d0b','302748687@qq.com','1402291271','1402977526','1','118.73.203.58','171.121.82.197','30','19','0','0','0','0','0','1406736000','181','6','16067415','1','0','tkuggw');");
E_D("replace into `p_users` values('16','1','4','1792545122','','0','4607e782c4d86fd5364d7e4508bb10d9','1792545122@qq.com','1402306501','1402306759','1','117.151.47.59','117.151.47.59','9','18','0','0','0','0','0','1402911301','62','6','18079831','1','0','kbctfh');");
E_D("replace into `p_users` values('17','1','4','lingshidianmeishi@163.com','','0','6754b233f48edfa0349967bb5019fe18','lingshidianmeishi@163.com','1402307161','1402883394','1','182.40.145.166','113.120.102.196','0','18','0','0','0','0','0','1434384000','42','6','520998','1','0','ydaqmk');");
E_D("replace into `p_users` values('18','1','4','qdtsmian@163.com','','0','6754b233f48edfa0349967bb5019fe18','qdtsmian@163.com','1402307443','1402536323','1','182.40.145.166','113.120.102.3','7','18','0','0','0','0','0','1402912243','150','6','5359994','3','0','tscqeq');");
E_D("replace into `p_users` values('19','1','4','15898830760','','0','6754b233f48edfa0349967bb5019fe18','yujiecehua@163.com','1402363761','1402457228','1','123.168.100.229','111.206.3.62','9','17','0','0','0','0','0','1402968561','94','6','20125892','1','0','xmvuad');");
E_D("replace into `p_users` values('20','1','4','qdztrh','','0','6754b233f48edfa0349967bb5019fe18','qdztrh01@163.com','1402368364','1402482491','1','123.168.100.229','113.124.9.159','20','16','0','0','0','0','0','1402973164','38','6','7302150','0','0','ryaduu');");
E_D("replace into `p_users` values('21','1','4','boxiang','','0','ef4f9a25833b2044841729dadd04aa91','boxiangbj@126.com','1402391516','1402391587','1','111.206.2.46','111.206.2.46','0','13','0','0','0','0','0','1402996316','29','6','25893','0','0','gjgwas');");
E_D("replace into `p_users` values('22','1','4','1','','0','c4ca4238a0b923820dcc509a6f75849b','1@1.cn','1402391839','1402391839','1','112.242.219.119','112.242.219.119','0','13','0','0','0','0','0','1402996639','0','0','0','1','0','yxvykf');");
E_D("replace into `p_users` values('23','1','4','19930912','','0','6754b233f48edfa0349967bb5019fe18','123456789@qq.com','1402449348','1402450181','1','123.168.127.100','123.168.127.100','0','13','0','0','0','0','0','1403054148','55','6','0','0','0','swhwub');");
E_D("replace into `p_users` values('24','1','4','����','','0','cc17c30cd111c7215fc8f51f8790e0e1','ceshi@ceshi.com','1402451731','1402451731','1','123.168.127.100','123.168.127.100','0','13','0','0','0','0','0','1403056531','0','0','0','0','0','rnkhja');");
E_D("replace into `p_users` values('25','1','4','18653292898','','0','6754b233f48edfa0349967bb5019fe18','luccaluka@163.com','1402453901','1402555296','1','123.168.127.100','61.182.139.134','0','12','0','0','0','0','0','1465920000','0','6','5745616','0','0','kqvbmj');");
E_D("replace into `p_users` values('26','1','4','sifangdajiudian@163.com','','0','6754b233f48edfa0349967bb5019fe18','sifangdajiudian@163.com','1402455478','1403074793','1','123.168.127.100','123.234.70.34','1','12','0','0','0','0','0','1434556800','0','6','1632302','2','0','dfnnzf');");
E_D("replace into `p_users` values('27','1','4','13365325751','','0','6754b233f48edfa0349967bb5019fe18','13365325751@163.com','1402459775','1402563787','1','123.168.127.100','123.168.72.104','12','11','0','0','0','0','0','1403064575','205','6','17016750','0','0','jceexz');");
E_D("replace into `p_users` values('28','1','4','���ϰ���','','0','6754b233f48edfa0349967bb5019fe18','zhangshangaq@163.com','1402460488','1402969216','1','123.168.127.100','123.168.101.12','6','11','0','0','0','0','0','1403065288','148','6','8537698','1','0','ppukpg');");
E_D("replace into `p_users` values('29','1','4','80310575','','0','e9f3a4df8bb021b87c51069b87a5d7bd','80310575@qq.com','1402472511','1402993027','1','219.140.205.113','58.51.22.11','5','11','0','0','0','0','0','1403077311','124','6','1385401','1','0','esxbkr');");
E_D("replace into `p_users` values('31','1','4','yangguangxuexiao','','0','25f9e794323b453885f5181f1b624d0b','2024077292@qq.com','1402534767','1402715780','1','60.221.132.233','183.188.147.141','0','11','0','0','0','0','0','1403139567','6','6','0','1','0','myfsmf');");
E_D("replace into `p_users` values('32','1','4','yilianshangmao','','0','f48452a45448f3c59eff143180fafc09','2652164093@qq.com','1402730766','1402730766','1','222.138.245.190','222.138.245.190','0','9','0','0','0','0','0','1403335566','0','0','0','0','0','cjnxqs');");
E_D("replace into `p_users` values('48','1','4','zhenc6688','','0','aece856ed27977774007041ddeaccbcc','zhenc6688@qq.com','1402976100','1402976100','1','58.51.22.11','58.51.22.11','0','3','0','0','0','0','0','1403580900','0','0','317062','1','0','evjtsf');");
E_D("replace into `p_users` values('33','1','4','123','','0','202cb962ac59075b964b07152d234b70','2317000922@qq.com','1402732639','1402732639','1','222.138.245.190','222.138.245.190','1','9','0','0','0','0','0','1403337439','53','0','189026','2','0','vdvbje');");
E_D("replace into `p_users` values('34','1','4','1137336896','','0','79bc86ca0af5d0b099f6254141fe4057','1137336896@qqqq.com','1402738274','1402738274','1','222.138.245.190','222.138.245.190','3','9','0','0','0','0','0','1403343074','47','0','150471','1','0','ftqujd');");
E_D("replace into `p_users` values('35','1','4','yonggumenye','','0','506fdfa38d714d9f91a02c47f5cf058c','yonggumenye123@126.com','1402738701','1402882568','1','222.138.245.190','123.162.159.111','7','9','0','0','0','0','0','1403343501','87','6','6068799','1','0','cfbyab');");
E_D("replace into `p_users` values('36','1','4','yasenmuye14610@126.com','','0','d2bfaed4b894f19941c29f9a797d9f42','1137336896@qq.com','1402792452','1402796649','1','42.224.178.67','42.224.178.67','5','9','0','0','0','0','0','1403397252','116','6','4762874','2','0','hphxzg');");
E_D("replace into `p_users` values('62','1','4','1664407175','','0','0ed92ee78fde5423bb02513e63397546','2016941966@qq.com','1403057418','1403057418','1','1.196.162.84','1.196.162.84','0','1','0','0','0','0','0','1403662218','0','0','0','0','0','ywymdm');");
E_D("replace into `p_users` values('37','1','4','����ǿ','','0','99dc68be6ec5f5c30f6f28bd8ebb31bc','394760772@qq.com','1402878232','1403069026','1','110.205.110.229','223.151.7.156','0','5','0','0','0','0','0','1403483032','0','6','10638','1','0','baszpb');");
E_D("replace into `p_users` values('38','1','4','13553388801','','0','f1df2fc8fb777774395ce274066fb852','jsyl754@foxmail.com','1402882231','1402882231','1','58.51.22.11','58.51.22.11','0','5','0','0','0','0','0','1403487031','0','0','0','0','0','nnguxg');");
E_D("replace into `p_users` values('39','1','4','15872285008888','','0','64ac399e03ea721ae244f26e2eabd849','1607771966@qq.com','1402882872','1402882872','1','58.51.22.11','58.51.22.11','9','5','0','0','0','0','0','1403487672','0','0','4961906','1','0','vfswdb');");
E_D("replace into `p_users` values('47','1','4','v2hunshasheying','','0','054859322965b4bbcc6da5eb0331ded2','V2sheying@126.com','1402964337','1402993595','1','123.162.159.111','1.195.190.3','0','3','0','0','0','0','0','1403569137','0','6','0','1','0','xeqfcs');");
E_D("replace into `p_users` values('40','1','4','huangchuanha','','0','8497ca7f7d1bdd51a751ade4f1fa917e','huch2536@163.com','1402885738','1403056149','1','119.114.240.46','119.114.251.209','1','4','0','0','0','0','0','1403490538','0','6','1782970','1','0','fgbycz');");
E_D("replace into `p_users` values('41','1','4','zzhuangjinshidai','','0','f48452a45448f3c59eff143180fafc09','zzhjsdkjjkcyyxgs@126.com','1402886230','1402993728','1','123.162.159.111','1.195.190.3','9','3','0','0','0','0','0','1403491030','111','6','3010213','1','0','ejmsnb');");
E_D("replace into `p_users` values('42','1','4','yuzuyuan123','','0','e10adc3949ba59abbe56e057f20f883e','yuzuyuan123@126.com','1402888822','1402990245','1','42.224.178.67','115.50.116.243','6','3','0','0','0','0','0','1403493622','61','6','13992559','1','0','fzcqgd');");
E_D("replace into `p_users` values('43','1','4','13573223935','','0','6754b233f48edfa0349967bb5019fe18','348639996@qq.com','1402898525','1402898525','1','60.209.93.186','60.209.93.186','0','3','0','0','0','0','0','1403503325','0','0','0','0','0','hwbunv');");
E_D("replace into `p_users` values('44','1','4','koolearn14613','','0','7389ab939fdc349f64b9df1884f4dc1c','koolearn14613@126.com','1402904722','1403055328','1','42.224.178.67','115.50.116.243','17','3','0','0','0','0','0','1403509522','29','6','4074224','0','0','ruebbg');");
E_D("replace into `p_users` values('45','1','4','yilian93el','','0','f48452a45448f3c59eff143180fafc09','270884637@qq.com','1402906252','1402906252','1','123.162.159.111','123.162.159.111','0','3','0','0','0','0','0','1403511053','0','0','0','1','0','jhnkhz');");
E_D("replace into `p_users` values('46','1','4','runqianxiang','','0','e10adc3949ba59abbe56e057f20f883e','runqianxiang@163.com','1402913255','1403052774','1','115.50.116.243','115.50.116.243','4','3','0','0','0','0','0','1403518055','51','6','8510417','1','0','dkqzqn');");
E_D("replace into `p_users` values('49','1','4','18986368889','','0','4f6b7cf27e2fb392cd58b0d1e962c292','clyry666@163.com','1402976828','1403056091','1','58.51.22.11','58.51.22.11','0','3','0','0','0','0','0','1403581628','0','6','184143','1','0','edqqpp');");
E_D("replace into `p_users` values('50','1','4','admin','','0','25f9e794323b453885f5181f1b624d0b','190316@qq.com','1402981513','1402981513','1','140.255.85.49','140.255.85.49','0','3','0','0','0','0','0','1404057600','0','0','0','0','0','jahppw');");
E_D("replace into `p_users` values('51','1','4','987654321','','0','25f9e794323b453885f5181f1b624d0b','123123123@qq.com','1402981647','1403071257','1','140.255.85.49','183.188.147.28','0','3','0','0','0','0','0','1403586447','0','6','0','0','0','pymzmd');");
E_D("replace into `p_users` values('52','1','3','admin','','0','f5d1278e8109edd94e1e4197e04873b9','tester@163.com','1402982613','1402982613','1','117.136.37.6','117.136.37.6','0','3','0','0','0','0','0','1467216000','0','0','0','0','0','envkrt');");
E_D("replace into `p_users` values('53','1','4','admin','','0','7dd6c0cf1a155835612cfcbda704f3d8','190316210@qq.com','1402984973','1402984973','1','140.255.85.49','140.255.85.49','0','3','0','0','0','0','0','1404057600','0','0','0','0','0','hqwndk');");
E_D("replace into `p_users` values('54','1','4','dllinyizhong@163.com','','0','6754b233f48edfa0349967bb5019fe18','dllinyizhong@163.com','1402987674','1402987674','1','140.255.85.49','140.255.85.49','0','3','0','0','0','0','0','1403592474','62','0','74696','1','0','zxsgqs');");
E_D("replace into `p_users` values('55','1','4','xindehuayanjing','','0','a38d563196a7018ecc3acc71ec860381','2960428738@qq.com','1402994163','1402994163','1','222.246.68.249','222.246.68.249','0','3','0','0','0','0','0','1403598963','0','0','0','0','0','gwavxj');");
E_D("replace into `p_users` values('56','1','4','changji1467','','0','e10adc3949ba59abbe56e057f20f883e','changji1467@126.com','1402996020','1403052816','1','115.50.116.243','115.50.116.243','3','3','0','0','0','0','0','1403600820','13','6','10441613','1','0','gfdjqy');");
E_D("replace into `p_users` values('57','1','4','zyfz','','0','7def81a2c07fd59494943f72c3da5452','614131240@qq.com','1403001768','1403059684','1','117.150.60.31','117.150.63.96','0','2','0','0','0','0','0','1403606568','12','6','9956','0','0','xuwuxj');");
E_D("replace into `p_users` values('58','1','4','sxlypwt','','0','e10adc3949ba59abbe56e057f20f883e','2314343507@qq.com','1403053203','1403060234','1','183.188.147.28','183.188.147.28','2','2','0','0','0','0','0','1403658003','33','6','501856','1','0','ksafzn');");
E_D("replace into `p_users` values('59','1','4','13995763548','','0','1118bbacdd1b23a12b951c745628fcf9','2849437287@qq.com','1403055523','1403055998','1','58.51.22.11','58.51.22.11','0','1','0','0','0','0','0','1403660323','0','6','0','1','0','vtkqxk');");
E_D("replace into `p_users` values('60','1','4','wangchenhui','','0','3ac98e6e03fd7387ab735af0f1fb52e4','839425589@qq.com','1403055953','1403056419','1','183.188.147.28','183.188.147.28','0','1','0','0','0','0','0','1403660753','0','6','0','0','0','cnukpu');");
E_D("replace into `p_users` values('61','1','4','1054579338@qq.com','','0','3ac98e6e03fd7387ab735af0f1fb52e4','1054579338@qq.com','1403056678','1403056678','1','183.188.147.28','183.188.147.28','0','1','0','0','0','0','0','1403661478','0','0','0','0','0','smwbmp');");
E_D("replace into `p_users` values('63','1','4','hnjsttx','','0','99dc68be6ec5f5c30f6f28bd8ebb31bc','hnjst88@sina.com','1403059109','1403059109','1','218.75.134.13','218.75.134.13','0','1','0','0','0','0','0','1403663909','0','0','0','1','0','pezdby');");
E_D("replace into `p_users` values('64','1','4','177692188','','0','25f9e794323b453885f5181f1b624d0b','1092180483@qq.com','1403061338','1403061338','1','183.188.147.28','183.188.147.28','0','1','0','0','0','0','0','1403666138','0','0','0','0','0','tyjhsn');");
E_D("replace into `p_users` values('65','1','4','xiejunb','','0','494cb675ab24e6c1647dc4c5ba24e8ac','71647721@163.com','1403067565','1403067565','1','58.51.22.11','58.51.22.11','0','1','0','0','0','0','0','1403672365','0','0','0','1','0','ngbryr');");
E_D("replace into `p_users` values('66','1','4','bob103','','0','494cb675ab24e6c1647dc4c5ba24e8ac','34381079@qq.com','1403067824','1403067824','1','58.19.183.106','58.19.183.106','0','1','0','0','0','0','0','1403672624','0','0','0','0','0','hqsqyf');");
E_D("replace into `p_users` values('67','1','4','lsj123888@163.com','','0','0ffc97023f045c2396bf2084096bd27e','lsj123888@163.com','1403070261','1403070261','1','171.106.59.157','171.106.59.157','0','1','0','0','0','0','0','1403675061','0','0','0','1','0','vqyhhr');");
E_D("replace into `p_users` values('68','1','4','2841733400','','0','4607e782c4d86fd5364d7e4508bb10d9','2841733400@qq.com','1403070984','1403074421','1','180.175.232.133','180.175.232.133','0','1','0','0','0','0','0','1403675784','0','6','0','1','0','cxwnrs');");
E_D("replace into `p_users` values('69','1','4','glqingrenxuan','','0','8be5c599334f20c7ada0fdd98cc8afd9','2309116490@qq.com','1403071791','1403071791','1','171.106.59.157','171.106.59.157','0','0','0','0','0','0','0','1403676591','0','0','0','1','0','ncnbup');");
E_D("replace into `p_users` values('70','1','4','������','','0','d5c696f4cea433c83b46b6856d3a5043','2300160237@qq.com','1403074651','1403074651','1','180.175.232.133','180.175.232.133','0','0','0','0','0','0','0','1403679451','0','0','0','0','0','gqxyhg');");

require("../../inc/footer.php");
?>