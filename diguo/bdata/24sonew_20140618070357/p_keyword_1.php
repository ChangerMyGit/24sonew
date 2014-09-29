<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_keyword`;");
E_C("CREATE TABLE `p_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `module` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=278 DEFAULT CHARSET=gbk");
E_D("replace into `p_keyword` values('1','微信','1','aeovsr1401849750','Voiceresponse');");
E_D("replace into `p_keyword` values('2','关于24so','1','879c2f933017228','Img');");
E_D("replace into `p_keyword` values('3','问卷调查','1','879c2f933017228','Selfform');");
E_D("replace into `p_keyword` values('4',' 你好','1','879c2f933017228','Text');");
E_D("replace into `p_keyword` values('5','公司简介','2','1fee0922b0a40db','Img');");
E_D("replace into `p_keyword` values('6','大转盘','1','879c2f933017228','Lottery');");
E_D("replace into `p_keyword` values('7','刮刮卡','2','879c2f933017228','Lottery');");
E_D("replace into `p_keyword` values('8','我要上网','1','879c2f933017228','Router_config');");
E_D("replace into `p_keyword` values('9','2','2','879c2f933017228','Text');");
E_D("replace into `p_keyword` values('10','公司文化','3','1fee0922b0a40db','Img');");
E_D("replace into `p_keyword` values('11','办公环境','4','1fee0922b0a40db','Img');");
E_D("replace into `p_keyword` values('12','公司部门','5','1fee0922b0a40db','Img');");
E_D("replace into `p_keyword` values('13','快速问答','6','1fee0922b0a40db','Img');");
E_D("replace into `p_keyword` values('14','360全景','1','1fee0922b0a40db','Panorama');");
E_D("replace into `p_keyword` values('15','微喜帖','1','1fee0922b0a40db','Wedding');");
E_D("replace into `p_keyword` values('16','微投票','1','1fee0922b0a40db','Vote');");
E_D("replace into `p_keyword` values('17','微汽车','1','1fee0922b0a40db','Carset');");
E_D("replace into `p_keyword` values('18','水果达人','3','1fee0922b0a40db','Lottery');");
E_D("replace into `p_keyword` values('19','贺卡','1','1fee0922b0a40db','Greeting_card');");
E_D("replace into `p_keyword` values('20','摇一摇','1','1fee0922b0a40db','Shake');");
E_D("replace into `p_keyword` values('21','微信墙','1','1fee0922b0a40db','Wall');");
E_D("replace into `p_keyword` values('22','微路由','2','1fee0922b0a40db','Router_config');");
E_D("replace into `p_keyword` values('23','婚纱','19','1fee0922b0a40db','Product');");
E_D("replace into `p_keyword` values('24','婚纱','20','1fee0922b0a40db','Product');");
E_D("replace into `p_keyword` values('25','全景','2','879c2f933017228','Panorama');");
E_D("replace into `p_keyword` values('26','熊抱','61','879c2f933017228','Product');");
E_D("replace into `p_keyword` values('27','微喜帖','2','mhsqxc1401953951','Wedding');");
E_D("replace into `p_keyword` values('28','喜帖','3','879c2f933017228','Wedding');");
E_D("replace into `p_keyword` values('29','投票','2','879c2f933017228','Vote');");
E_D("replace into `p_keyword` values('30','优惠劵','4','879c2f933017228','Lottery');");
E_D("replace into `p_keyword` values('31','砸金蛋','5','879c2f933017228','Lottery');");
E_D("replace into `p_keyword` values('36','在线预订','3','ocbtfr1402282562','Text');");
E_D("replace into `p_keyword` values('33','水果达人','7','879c2f933017228','Lottery');");
E_D("replace into `p_keyword` values('34','贺卡','2','879c2f933017228','Greeting_card');");
E_D("replace into `p_keyword` values('35','微信上墙','2','879c2f933017228','Wall');");
E_D("replace into `p_keyword` values('37','大转盘','8','a3a7daf71176d5b','Lottery');");
E_D("replace into `p_keyword` values('38','旅游资讯','7','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('39','旅游资讯','8','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('40','关注后图文','9','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('41','北京24so地址','10','879c2f933017228','Img');");
E_D("replace into `p_keyword` values('42','旅游生活','11','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('43','景点预订','2','a3a7daf71176d5b','Selfform');");
E_D("replace into `p_keyword` values('44','旅游生活','12','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('45','旅游生活','13','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('46','旅游生活','14','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('47','旅游生活','15','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('49','旅游资讯','17','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('118','夏日凉菜也滋补','62','aricpn1402370263','Img');");
E_D("replace into `p_keyword` values('50','刮刮卡','9','a3a7daf71176d5b','Lottery');");
E_D("replace into `p_keyword` values('51','青岛历史','18','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('52','青岛历史','19','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('53','青岛历史','20','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('54','青岛历史','21','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('119','预约','9','aricpn1402370263','Selfform');");
E_D("replace into `p_keyword` values('56','旅游景点','23','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('57','旅游景点','24','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('58','旅游景点','25','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('59','旅游景点','26','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('60',' 旅游景点','27','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('61','旅游景点','28','a3a7daf71176d5b','Img');");
E_D("replace into `p_keyword` values('62','优惠券','10','dgqaqc1402307446','Lottery');");
E_D("replace into `p_keyword` values('63','企业文化','29','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('64','团队展示','30','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('65','店面风采','31','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('66','作品展示','32','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('67','美发店面','33','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('68','美容店面','34','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('69','美发团队','35','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('70','美容团队','36','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('71','联系我们','37','vhvake1402306510','Img');");
E_D("replace into `p_keyword` values('72','发型师','3','vhvake1402306510','Selfform');");
E_D("replace into `p_keyword` values('73','发型助理','4','vhvake1402306510','Selfform');");
E_D("replace into `p_keyword` values('74','建议意见','5','vhvake1402306510','Selfform');");
E_D("replace into `p_keyword` values('75','公司介绍','38','mhsqxc1401953951','Img');");
E_D("replace into `p_keyword` values('76','公司动态','39','mhsqxc1401953951','Img');");
E_D("replace into `p_keyword` values('80','麻辣山牛肉美味','92','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('81','三人套餐','93','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('82','遥大奖','2','mhsqxc1401953951','Shake');");
E_D("replace into `p_keyword` values('83','在线留言','6','mhsqxc1401953951','Selfform');");
E_D("replace into `p_keyword` values('84','战略伙伴','43','mhsqxc1401953951','Img');");
E_D("replace into `p_keyword` values('86','大转盘','11','mhsqxc1401953951','Lottery');");
E_D("replace into `p_keyword` values('87','Ferrero/费列罗 Ferrero 费列罗 榛果威化巧克力 心型 100g 8粒 意大利进口美特好','94','tvjxcc1402290548','Product');");
E_D("replace into `p_keyword` values('88','微官网','45','mhsqxc1401953951','Img');");
E_D("replace into `p_keyword` values('89','首页','46','mhsqxc1401953951','Img');");
E_D("replace into `p_keyword` values('90','Ferrero/费列罗 Ferrero 费列罗 榛果威化巧克力 200g 16粒装 意大利进口美特好','95','tvjxcc1402290548','Product');");
E_D("replace into `p_keyword` values('91','在线留言','7','tvjxcc1402290548','Selfform');");
E_D("replace into `p_keyword` values('92','我要求才','47','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('93','投票','3','tvjxcc1402290548','Vote');");
E_D("replace into `p_keyword` values('94','工艺质量专家','48','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('95','公司概况','49','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('160','服务理念','93','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('109','关注','59','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('98','职场指南','52','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('99','新闻中心','53','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('100','联系我们','54','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('101','微喜帖','4','dhybwc1402363778','Wedding');");
E_D("replace into `p_keyword` values('102','刮刮卡','12','mhsqxc1401953951','Lottery');");
E_D("replace into `p_keyword` values('103','公司介绍','55','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('104','LED展示','56','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('105','防滑玻璃','57','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('106','在线留言','8','ainbtq1402292243','Selfform');");
E_D("replace into `p_keyword` values('107','会员卡','58','aricpn1402370263','Img');");
E_D("replace into `p_keyword` values('108','投票','4','tvjxcc1402290548','Vote');");
E_D("replace into `p_keyword` values('110','企业简介','60','tvjxcc1402290548','Img');");
E_D("replace into `p_keyword` values('116','凉粉','101','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('113','小锅米线','98','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('114','稀豆粉','99','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('115','酸辣粉','100','mhsqxc1401953951','Product');");
E_D("replace into `p_keyword` values('117','费列罗 榛果威化巧克力 心型 100g 8粒','61','tvjxcc1402290548','Img');");
E_D("replace into `p_keyword` values('120','网站首页','63','aricpn1402370263','Img');");
E_D("replace into `p_keyword` values('121','','3','tvjxcc1402290548','Panorama');");
E_D("replace into `p_keyword` values('122','大转盘','13','yosjzs1402383816','Lottery');");
E_D("replace into `p_keyword` values('123','一键导航','64','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('124','会员卡','65','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('125','Ferrero/费列罗 Ferrero 费列罗 榛果威化巧克力 200g 16粒装 意大利进口美特好','66','tvjxcc1402290548','Img');");
E_D("replace into `p_keyword` values('126','RitterSport/瑞特斯波德 RitterSport 瑞特斯波德 玉米片牛奶巧克力100g 德国进口美特好','67','tvjxcc1402290548','Img');");
E_D("replace into `p_keyword` values('127','联系我们','68','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('128','Lotte/乐天 黑加纳纯黑巧克力90g 韩国人气休闲零食品 进口糖果 方块 独立包装','69','tvjxcc1402290548','Img');");
E_D("replace into `p_keyword` values('129','海豚湾恋人','70','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('130','刮刮卡','14','yosjzs1402383816','Lottery');");
E_D("replace into `p_keyword` values('131','团购','71','yosjzs1402383816','Img');");
E_D("replace into `p_keyword` values('146','刮刮卡','16','junxtg1402455483','Lottery');");
E_D("replace into `p_keyword` values('133','创始人简介','73','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('134','我们的客户','74','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('135','关注','75','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('136','你好','4','yosjzs1402383816','Text');");
E_D("replace into `p_keyword` values('137','水果达人','15','yosjzs1402383816','Lottery');");
E_D("replace into `p_keyword` values('138','婚纱摄影','76','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('139','服务项目','77','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('140','服务项目','78','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('141','服务项目','79','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('142','服务项目','80','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('143','服务项目','81','dhybwc1402363778','Img');");
E_D("replace into `p_keyword` values('144','面食介绍','82','yosjzs1402383816','Img');");
E_D("replace into `p_keyword` values('145','在线团购','104','yosjzs1402383816','Product');");
E_D("replace into `p_keyword` values('147','联系我们','83','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('148','魔术TV镜','84','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('150','中空百叶','86','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('151','耐高温玻璃','87','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('152','烤肉介绍','88','yosjzs1402383816','Img');");
E_D("replace into `p_keyword` values('153','菁界预约','1','85fa9a93c81ad7e','Reservation');");
E_D("replace into `p_keyword` values('192','你好','6','qxrzxy1402460503','Text');");
E_D("replace into `p_keyword` values('191','爱情观','120','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('156','选择优秀猎头，打造人才优势','89','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('157','猎头与猎物的华尔兹（二）跨行业的挑战','90','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('158','一位外企总经理的成功推荐经历','91','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('159','企业文化','92','c6a3b2d7590ae01','Img');");
E_D("replace into `p_keyword` values('161','单向玻璃','94','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('162','LED发光','95','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('166','防偷窥玻璃','99','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('164','菁界简介','97','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('165','防弹玻璃','98','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('167','防火玻璃','100','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('168','菁界故事','101','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('169','时尚管理','102','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('170','家私玻璃','103','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('171','内雕玻璃','104','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('172','智能调光玻璃','105','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('173','高级定制','106','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('174','夹绢丝玻璃','107','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('175','电加热玻璃','108','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('176','镶嵌玻璃','109','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('177','屏蔽玻璃','110','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('178','防雾镜','111','ainbtq1402292243','Img');");
E_D("replace into `p_keyword` values('179','视频吧','112','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('180','美衣美奂','113','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('181','美仑美饰','114','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('182','爱情心理学','115','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('183','爱情心理学','116','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('184','爱情商城','117','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('185','派对活动','118','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('186','达人秀','119','85fa9a93c81ad7e','Img');");
E_D("replace into `p_keyword` values('188','会员服务','5','85fa9a93c81ad7e','Text');");
E_D("replace into `p_keyword` values('189','免费体验','12','85fa9a93c81ad7e','Selfform');");
E_D("replace into `p_keyword` values('190','会员服务','13','85fa9a93c81ad7e','Selfform');");
E_D("replace into `p_keyword` values('193','会员卡','17','glkpuw1402307164','Lottery');");
E_D("replace into `p_keyword` values('194','水果达人','18','glkpuw1402307164','Lottery');");
E_D("replace into `p_keyword` values('195','7D 芒果干 200g 菲律宾进口 X 2','107','tvjxcc1402290548','Product');");
E_D("replace into `p_keyword` values('196','Danisa/皇冠 Danisa皇冠 曲奇饼 163g 印尼进口美特好','108','tvjxcc1402290548','Product');");
E_D("replace into `p_keyword` values('197','中餐','121','a0bbb64eef61a16','Img');");
E_D("replace into `p_keyword` values('198','中餐','122','a0bbb64eef61a16','Img');");
E_D("replace into `p_keyword` values('199','22','123','mleyln1402732919','Img');");
E_D("replace into `p_keyword` values('200','公司简介','124','befcoq1402738281','Img');");
E_D("replace into `p_keyword` values('201','关于我们','125','befcoq1402738281','Img');");
E_D("replace into `p_keyword` values('202','联系我们','126','kcmjgr1402792677','Img');");
E_D("replace into `p_keyword` values('203','产品展示','127','kcmjgr1402792677','Img');");
E_D("replace into `p_keyword` values('217','幸运大转盘','23','diwxqe1402738986','Lottery');");
E_D("replace into `p_keyword` values('205','微官网','129','kcmjgr1402792677','Img');");
E_D("replace into `p_keyword` values('220','会员通行证','134','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('214','优惠券','22','kcmjgr1402792677','Lottery');");
E_D("replace into `p_keyword` values('210','全景','4','kcmjgr1402792677','Panorama');");
E_D("replace into `p_keyword` values('209','喜帖','5','kcmjgr1402792677','Wedding');");
E_D("replace into `p_keyword` values('211','KTV','1','kcmjgr1402792677','Host');");
E_D("replace into `p_keyword` values('213','大转盘','21','kcmjgr1402792677','Lottery');");
E_D("replace into `p_keyword` values('215','人生智慧','132','qxrzxy1402460503','Img');");
E_D("replace into `p_keyword` values('219','摇一摇','3','diwxqe1402738986','Shake');");
E_D("replace into `p_keyword` values('221','俱乐部动态','135','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('222','私人教练','136','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('223','首页','137','kcbvom1402885756','Img');");
E_D("replace into `p_keyword` values('224','易联商贸','138','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('225','公司简介','139','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('226','联系我们','140','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('227','在线预约','14','ftxvbg1402882875','Selfform');");
E_D("replace into `p_keyword` values('228','大转盘','25','ftxvbg1402882875','Lottery');");
E_D("replace into `p_keyword` values('229','品牌文化','141','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('230','厨具展示','142','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('231','产品展示','143','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('232','厨具','144','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('233','厨具','145','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('234','首页','146','ftxvbg1402882875','Img');");
E_D("replace into `p_keyword` values('235','加盟我们','147','oucryx1402886291','Img');");
E_D("replace into `p_keyword` values('236','公司简介','148','qnrwlm1402888833','Img');");
E_D("replace into `p_keyword` values('237','店内环境','149','qnrwlm1402888833','Img');");
E_D("replace into `p_keyword` values('238','价格咨询','150','qnrwlm1402888833','Img');");
E_D("replace into `p_keyword` values('239','友情提醒','151','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('240','联系方式','152','qnrwlm1402888833','Img');");
E_D("replace into `p_keyword` values('241','在线留言','15','qnrwlm1402888833','Selfform');");
E_D("replace into `p_keyword` values('242','暑期考研福利课领取','153','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('243','高考解析福利课领取','154','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('244','2016考研早训系列','155','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('245','近期直播课预告','156','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('246','考研专业课基础预科早训班','157','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('247','出国留学','158','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('248','大学|博士','159','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('249','中学|新概念','160','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('250','医师|药师','161','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('251','职称|公务员','162','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('252','联系我们','163','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('253','公开课试听','164','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('254','考研院校库','165','0d8553ddf4f8102','Img');");
E_D("replace into `p_keyword` values('255','优势特色','166','ysemxs1402913598','Img');");
E_D("replace into `p_keyword` values('256','精品推介','167','ysemxs1402913598','Img');");
E_D("replace into `p_keyword` values('257','动态信息','168','ysemxs1402913598','Img');");
E_D("replace into `p_keyword` values('258','关于我们','169','ysemxs1402913598','Img');");
E_D("replace into `p_keyword` values('259','全景','5','gdfrep1402472524','Panorama');");
E_D("replace into `p_keyword` values('260','公司全景','6','oucryx1402886291','Panorama');");
E_D("replace into `p_keyword` values('262','喜贴','7','oucryx1402886291','Wedding');");
E_D("replace into `p_keyword` values('263','健身器','109','oucryx1402886291','Product');");
E_D("replace into `p_keyword` values('264','减肥机','110','oucryx1402886291','Product');");
E_D("replace into `p_keyword` values('265','大转盘','26','oucryx1402886291','Lottery');");
E_D("replace into `p_keyword` values('266','公司介绍','170','gdfrep1402472524','Img');");
E_D("replace into `p_keyword` values('267','今日最新房源','171','gdfrep1402472524','Img');");
E_D("replace into `p_keyword` values('268','房屋买卖','172','gdfrep1402472524','Img');");
E_D("replace into `p_keyword` values('269','房屋买卖','173','gdfrep1402472524','Img');");
E_D("replace into `p_keyword` values('270','大转盘','27','eujhzm1403053453','Lottery');");
E_D("replace into `p_keyword` values('274','店内环境','177','qweeqm1402996029','Img');");
E_D("replace into `p_keyword` values('273','首页','176','rzxdlc1402480377','Img');");
E_D("replace into `p_keyword` values('275','特色汤类','178','qweeqm1402996029','Img');");
E_D("replace into `p_keyword` values('276','优惠劵','28','junxtg1402455483','Lottery');");
E_D("replace into `p_keyword` values('277','企业简介','179','junxtg1402455483','Img');");

require("../../inc/footer.php");
?>