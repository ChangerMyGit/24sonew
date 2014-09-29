<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_company`;");
E_C("CREATE TABLE `p_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `display` tinyint(1) NOT NULL DEFAULT '1',
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `intro` text NOT NULL,
  `catid` mediumint(3) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `isbranch` tinyint(1) NOT NULL DEFAULT '0',
  `logourl` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=gbk");
E_D("replace into `p_company` values('1','1','aeovsr1401849750','润华雪佛兰流亭店','','','润华雪佛兰流亭店','12345678900','400-696-1912','http://www.qdrunwei.com','36.305894','120.396887','1润华雪佛兰流亭店&lt;br /&gt;\r\n[4S店] 润华雪佛兰流亭店&lt;br /&gt;\r\n&lt;br /&gt;\r\n主营品牌： [上海通用雪佛兰, 雪佛兰]&lt;br /&gt;\r\n店面地址：青岛市城阳区黑龙江中路385号青岛润华汽车园（流亭立交桥南一公里）&lt;br /&gt;\r\n联系电话： 400-696-1912&lt;br /&gt;\r\n网 &amp;nbsp; &amp;nbsp;站：http://www.qdrunwei.com&lt;br /&gt;\r\n&lt;br /&gt;','0','1','0','http://image.bitauto.com/dealer/FocusImage/100030143/thumbpic/487f8094-901c-4355-a9bf-32f03eb32702.jpg');");
E_D("replace into `p_company` values('2','0','aeovsr1401849750','青岛金惠达汽车销售服务有限公司','test','098f6bcd4621d373cade4e832627b4f6','青岛金惠达汽车销售服务有限公司','12345678900','400-813-0656','青岛胶南市珠山街道办事处泰山路22号','35.878841','120.018215','[4S店] 青岛金惠达汽车销售服务有限公司&lt;br /&gt;\r\n主营品牌： [上海通用雪佛兰, 雪佛兰]&lt;br /&gt;\r\n店面地址：青岛胶南市珠山街道办事处泰山路22号&lt;br /&gt;\r\n联系电话： 400-813-0656&lt;br /&gt;\r\n网 &amp;nbsp; &amp;nbsp;站：http://www.qiche4s.cn/100043468/&lt;br /&gt;','0','2','1','http://image.bitauto.com/dealer/FocusImage/100043468/thumbpic/e56e10dd-556e-4c76-91ab-2ff3259492d1.jpg');");
E_D("replace into `p_company` values('3','1','879c2f933017228','青岛粥全粥到餐饮管理有限公司','','','粥全粥到','12345678900','0532-1234567','青岛市市北区天源路1号','36.109184','120.399959','&lt;p&gt;\r\n	&lt;span style=&quot;line-height:20px;background-color:#ffffff;font-family:arial;color:#cc0000;font-size:13px;&quot;&gt;粥全粥到，是我国驰名餐饮品牌，粥全粥到大酒店是结婚喜宴，洽谈客服，各类团体、公司聚餐的绝佳选择，中餐、西餐等各类特色菜肴，亮瞎你的土豪金眼睛。&lt;/span&gt;\r\n&lt;/p&gt;','0','1','0','http://www.icbc.com.cn/SiteCollectionDocuments/ICBC/Resources/ICBC/sy/photo/2013/pic_logo.gif');");
E_D("replace into `p_company` values('4','1','879c2f933017228','粥全粥到新建路店','test','098f6bcd4621d373cade4e832627b4f6','新建路粥全粥到','12345678901','0532-87612403','山东青岛市李沧区夏庄路66-5','36.137637','120.438479','&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;二OO二年五月,“&lt;/span&gt;&lt;em&gt;粥全粥到&lt;/em&gt;&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;”家常菜馆第一家店在青岛市最富盛名的美食文化一条街——闽江路上正式挂牌营业。仿古的明清家具和极具文化品位的装饰风格,丰富多样的...&lt;/span&gt;&lt;br /&gt;','0','2','1','http://www.icbc.com.cn/SiteCollectionDocuments/ICBC/Resources/ICBC/sy/photo/2013/pic_logo.gif');");
E_D("replace into `p_company` values('5','1','879c2f933017228','粥全粥到敦化路店','test','098f6bcd4621d373cade4e832627b4f6','敦化路粥全粥到','12345678902','0532-85809988','山东省青岛市市北区山东路118号','36.081187','120.377538','&lt;p&gt;\r\n	&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;二OO二年五月,“&lt;/span&gt;&lt;em&gt;粥全粥到&lt;/em&gt;&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;”家常菜馆第一家店在青岛市最富盛名的美食文化一条街——闽江路上正式挂牌营业。仿古的明清家具和极具文化品位的装饰风格,丰富多样的...&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;','0','3','1','http://www.icbc.com.cn/SiteCollectionDocuments/ICBC/Resources/ICBC/sy/photo/2013/pic_logo.gif');");
E_D("replace into `p_company` values('6','1','879c2f933017228','粥全粥到天安路店','test','098f6bcd4621d373cade4e832627b4f6','天安路粥全粥到','12345678903','0532-85809988','山东省青岛市市南区宁夏路306号','36.07792','120.418357','&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;二OO二年五月,“&lt;/span&gt;&lt;em&gt;粥全粥到&lt;/em&gt;&lt;span style=&quot;background-color:#ffffff;color:#333333;&quot;&gt;”家常菜馆第一家店在青岛市最富盛名的美食文化一条街——闽江路上正式挂牌营业。仿古的明清家具和极具文化品位的装饰风格,丰富多样的...&lt;/span&gt;','0','4','1','http://www.icbc.com.cn/SiteCollectionDocuments/ICBC/Resources/ICBC/sy/photo/2013/pic_logo.gif');");
E_D("replace into `p_company` values('7','1','1fee0922b0a40db','北京二十四搜科技有限公司','','','24SO','18672784210','4006777106','北京市丰台区角门北路','39.861826','116.290032','','0','1','0','http://v.24so.com/uploads/1/1fee0922b0a40db/d/1/e/e/thumb_53901732bf127.jpg');");
E_D("replace into `p_company` values('8','1','wfxurg1401948445','南京金陵在线','','','金陵在线','18651892405','18651892405','江苏省南京市','0','0','欢迎关注！！','0','1','0','http://v.24so.com/uploads/w/wfxurg1401948445/0/f/8/2/thumb_53901e68ba7fa.jpg');");
E_D("replace into `p_company` values('9','1','a0bbb64eef61a16','朔风文化传播有限公司','','','朔风传媒','15637916181','15637916181','河南省洛阳市涧西区南昌路杜康大厦1603','34.651458','112.413233','','0','0','0','http://v.24so.com/uploads/a/a0bbb64eef61a16/6/e/1/3/thumb_539011ea9afb3.jpg');");
E_D("replace into `p_company` values('10','1','mhsqxc1401953951','南京蒙自源金润发店','','','南京蒙自源金润发店','13451735170','02583228363','南京市玄武区丹凤街29号','32.060706','118.793555','&lt;img src=&quot;http://api.map.baidu.com/staticimage?center=111.507474%2C36.083396&amp;zoom=19&amp;width=558&amp;height=360&amp;markers=111.507474%2C36.083396&amp;markerStyles=l%2CA&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;','0','1','0','http://v.24so.com/uploads/m/mhsqxc1401953951/2/b/3/b/thumb_5396163e43c23.jpg');");
E_D("replace into `p_company` values('11','1','a3a7daf71176d5b','青岛旅游网','','','青岛旅游网','15264221335','0532-123456','青岛市市南区宁夏路','36.104052','120.379837','青岛旅游！','0','1','0','http://v.24so.com/uploads/a/a3a7daf71176d5b/a/d/6/2/thumb_53952f0b068e4.jpg');");
E_D("replace into `p_company` values('12','1','tvjxcc1402290548','UZE|優擇','','','UZE','12345678910','12345678910','广东广州海珠区','23.085627','113.334248','&lt;img src=&quot;http://api.map.baidu.com/staticimage?center=113.333841%2C23.087629&amp;zoom=11&amp;width=558&amp;height=360&amp;markers=113.333841%2C23.087629&amp;markerStyles=l%2CA&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;','0','1','0','http://v.24so.com/uploads/t/tvjxcc1402290548/a/f/1/f/thumb_53955597899a6.jpg');");
E_D("replace into `p_company` values('13','1','dhybwc1402363778',' 青岛钰洁婚礼策划有限公司','','','钰洁','18661795118','0532-80829203','青岛市崂山区亚麦山城网点','0','0','&lt;span style=&quot;font-family:Arial, Helvetica, sans-serif, 宋体, 新宋体;line-height:20px;background-color:#F3F1EC;&quot;&gt;钰洁&lt;/span&gt;','0','0','0','http://v.24so.com/uploads/d/dhybwc1402363778/8/c/1/4/thumb_53969d5750033.jpg');");
E_D("replace into `p_company` values('14','1','ainbtq1402292243','广州嘉颢特种玻璃有限公司','','','广州嘉颢特种玻璃有限公司','13076701580','020-36399307','广州市白云区黄石西路268号','23.110094','113.279056','广州市白云区黄石西路268号&lt;strong&gt;广州嘉颢特种玻璃有限公司&lt;/strong&gt;','0','0','0','http://v.24so.com/uploads/a/ainbtq1402292243/2/b/e/5/thumb_5396b7642dfec.jpg');");
E_D("replace into `p_company` values('15','1','yosjzs1402383816','品之缘面馆','','','品之缘','15864235795','1532-12345678','青岛市南区香港中路120号','36.070845','120.406283','欢迎来到品之缘！','0','0','0','http://v.24so.com/uploads/y/yosjzs1402383816/6/5/f/1/thumb_5396ba5767836.jpg');");
E_D("replace into `p_company` values('16','1','c6a3b2d7590ae01','中天人和企业管理咨询','','','中天人和','15192665907','0532-85918062','山东青岛香港中路6号世界贸易中心B座2018室','36.068672','120.384042','','0','0','0','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/9/9/2/thumb_53970c592d67b.jpg');");
E_D("replace into `p_company` values('17','1','c6a3b2d7590ae01','中天人和北京公司','test','098f6bcd4621d373cade4e832627b4f6','北京公司','18653256065','010-59105965','北京朝阳区百子湾路甲12号大成国际中心3号楼A座326室','39.90551','116.499225','','0','0','1','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/f/3/b/thumb_53970d1079322.jpg');");
E_D("replace into `p_company` values('18','1','c6a3b2d7590ae01','中天人和上海公司','test','098f6bcd4621d373cade4e832627b4f6','上海公司','18653256068','021-60512467','上海市中山西路2025号永升大厦409室','31.188908','121.434172','','0','0','1','http://v.24so.com/uploads/c/c6a3b2d7590ae01/0/0/e/a/thumb_53970d6be01a8.jpg');");
E_D("replace into `p_company` values('19','1','c6a3b2d7590ae01','中天人和济南公司','test','098f6bcd4621d373cade4e832627b4f6','济南公司','18660103855','0531-87035217','山东省济南市经四路288号恒昌大厦2108室','36.667627','117.000581','','0','0','1','http://v.24so.com/uploads/c/c6a3b2d7590ae01/d/9/0/2/thumb_53970eb881d92.jpg');");
E_D("replace into `p_company` values('20','1','c6a3b2d7590ae01','中天人和广州公司','test','098f6bcd4621d373cade4e832627b4f6','广州公司','18620285615','020-85201175','广州市天河区天河南二路25号丰兴广场德兴阁806室','23.137389','113.339875','','0','0','1','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/a/0/c/thumb_53970f1529e38.jpg');");
E_D("replace into `p_company` values('21','1','c6a3b2d7590ae01','中天人和青岛公司','qdztrh','6754b233f48edfa0349967bb5019fe18','青岛公司','15192665907','0532-85918062','山东青岛香港中路6号世界贸易中心B座2018室','36.068672','120.384042','','0','0','1','http://v.24so.com/uploads/c/c6a3b2d7590ae01/7/9/9/2/thumb_53970c592d67b.jpg');");
E_D("replace into `p_company` values('22','1','85fa9a93c81ad7e','菁界设计与时尚管理','','','菁界设计','13365325751','13365325751','青岛市崂山区香港东路122号一号楼二单元202户','120.449057','36.081413','','0','0','0','https://mp.weixin.qq.com/misc/getheadimg?token=478480644&amp;fakeid=3082601006&amp;r=737468');");
E_D("replace into `p_company` values('23','1','junxtg1402455483','青岛四方大酒店','','','四方大酒店','18752491231','0532-83902267','青岛市四方区温州路1号','36.106385','120.390186','&lt;p&gt;\r\n	&lt;span style=&quot;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;&quot;&gt;&lt;img src=&quot;/uploads/j/junxtg1402455483/a/9/7/7/53a130211e6f8.jpg&quot; alt=&quot;&quot; /&gt;&lt;br /&gt;\r\n&lt;/span&gt; \r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;&quot;&gt;青岛四方大酒店是集住宿、旅游、购物、休闲于一体的综合性酒店。酒店地理位置优越，位于青岛市繁华的交通主干道——温州路，面对青岛长途汽车站。背依弘诚体育场和海泊河文化公园，左靠杭州路立交桥、胶州湾高速公路和青岛港，东邻人民路立交桥和四方商业中心，南接台东商业步行街。有20余条公交线路途径酒店，机场巴士在酒店门前整点发车，交通十分方便。&lt;/span&gt; \r\n&lt;/p&gt;\r\n&lt;span style=&quot;font-family:arial, 宋体, sans-serif;font-size:14px;line-height:24px;background-color:#FFFFFF;&quot;&gt;　　酒店东楼高17层，西楼高8层，有商务房、标准房、大床房和三人套房等多种房型、适合散客、旅游团队居住；空中连廊将东楼和西楼连为一体。餐厅设在3、4、5层，设有零点餐厅、宴会包间和多功能餐厅、会议厅、大型婚宴等餐饮服务，可同时接待400人用餐。酒店服务功能齐全，设有大、中、小型会议室、商务中心、航空售票、火车票、购物商场、大型停车场、机场巴士和中央空调、电视监控、消防报警、自动喷淋、数字电视、虚拟网电话等设施，全部房间100兆宽带和无线网络，可为客人提供安全、卫生、方便、快捷的服务。&lt;/span&gt;','0','0','0','http://v.24so.com/uploads/j/junxtg1402455483/a/4/8/a/thumb_53a130006173f.jpg');");
E_D("replace into `p_company` values('24','1','f0cdf4ad5650e89','lucca卢卡西餐','','','卢卡西餐','18653292898','88891377','香港东路60号','0','0','卢卡导航','0','0','0','https://mp.weixin.qq.com/misc/getheadimg?token=1936514354&amp;fakeid=3076718121&amp;r=769176');");
E_D("replace into `p_company` values('25','1','glkpuw1402307164','零点食分美食汇连锁总店','','','零食店','18678955677','0532-123456','崂山区青岛大学内','36.12108','120.490796','','0','0','0','http://v.24so.com/uploads/g/glkpuw1402307164/2/a/8/d/thumb_539938dc39cdb.jpg');");
E_D("replace into `p_company` values('26','1','kcmjgr1402792677','雅苑','','','雅苑','15839367019','8805811','濮阳市华龙区','0','0','134567894561233','0','0','0','');");
E_D("replace into `p_company` values('27','1','qnrwlm1402888833','铿锵玫瑰足浴苑','','','7号玫瑰御足','18638850886','18638850886','','34.741141','112.138045','','0','2','0','http://v.24so.com/uploads/q/qnrwlm1402888833/a/8/1/f/thumb_539fa5237659f.jpg');");
E_D("replace into `p_company` values('28','1','0d8553ddf4f8102','新东方在线','','','新东方在线','13014783138','13014783138','涧西区 安徽路 万国银座A座 816','34.663847','112.407231','','0','0','0','http://v.24so.com/uploads/0/0d8553ddf4f8102/d/4/4/5/thumb_539fad9e762e4.jpg');");
E_D("replace into `p_company` values('29','1','owitol1402987860','金易中粮名庄会','','','金易中粮名庄会','13889534208','041186840099','辽宁省大连市沙河口区西北路17号3单元2层1-3号','36.166081','120.235534','','0','1','0','http://v.24so.com/uploads/o/owitol1402987860/7/0/f/7/thumb_539febf53819f.jpg');");
E_D("replace into `p_company` values('30','1','a0bbb64eef61a16','24搜','zhangmanfang','714dee763ce5b108b852d875e4b05ea6','24搜','15637916181','18137732300','杜康大厦111','34.124177','112.307089','11111111111111111111111111','0','0','1','http://v.24so.com/uploads/a/a0bbb64eef61a16/0/4/c/0/thumb_539ff337335b3.jpg');");
E_D("replace into `p_company` values('31','1','oucryx1402886291','贵和园','','','贵和园','13333937359','0393-8805811','濮阳市华龙区中原路','0','0','','0','0','0','');");
E_D("replace into `p_company` values('32','1','ysemxs1402913598','润仟祥洛阳一号店','','','润仟祥','15737957120','tel:15737957120','洛龙区政和路与厚载门街交叉口西北角','34.628263','112.467658','','0','0','0','http://v.24so.com/uploads/y/ysemxs1402913598/0/2/4/9/thumb_53a0005e20582.jpg');");

require("../../inc/footer.php");
?>