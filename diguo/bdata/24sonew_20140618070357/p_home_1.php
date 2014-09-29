<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_home`;");
E_C("CREATE TABLE `p_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `apiurl` varchar(150) NOT NULL,
  `homeurl` varchar(120) NOT NULL,
  `info` varchar(120) NOT NULL,
  `musicurl` varchar(180) NOT NULL DEFAULT '',
  `plugmenucolor` varchar(10) NOT NULL DEFAULT '',
  `copyright` varchar(200) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `radiogroup` mediumint(4) NOT NULL DEFAULT '0',
  `advancetpl` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk");
E_D("replace into `p_home` values('1','879c2f933017228','润华雪佛兰流亭店微官网','http://v.24so.com/uploads/8/879c2f933017228/1/2/b/e/thumb_539147cd29e12.png','','','微官网即通过微信入口访问的手机网站,,通过微网站展示企业的产品与服务,活动,荣誉等信息让用户随时随地可查询到企业的全部信息.让您的公众平台发挥更大价值.,内置一键拨号与一键导航功能便于客户联系与来访。','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/8/879c2f933017228/a/5/d/1/thumb_539147dceaf61.png','1','0');");
E_D("replace into `p_home` values('2','1fee0922b0a40db','欢迎关注北京二十四搜科技有限公司公众微信号','http://v.24so.com/uploads/1/1fee0922b0a40db/1/c/d/b/thumb_538fe894ebddd.jpg','','','欢迎关注北京二十四搜科技有限公司公众微信号','','#FF1443','?北京二十四搜科技有限公司','http://v.24so.com/uploads/1/1fee0922b0a40db/7/4/1/0/thumb_538fe9210a3f5.jpg','1','0');");
E_D("replace into `p_home` values('3','mhsqxc1401953951','蒙自源','http://v.24so.com/uploads/m/mhsqxc1401953951/4/e/9/7/thumb_5395d570b68fc.jpg','','','欢迎关注','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','','5','0');");
E_D("replace into `p_home` values('8','dhybwc1402363778','钰洁时尚婚礼策划','http://v.24so.com/uploads/d/dhybwc1402363778/4/2/c/1/thumb_5396622267365.jpg','','','青岛钰洁婚礼策划有限公司，是一家专业的婚礼庆典策划有限公司，所有婚礼策划紧贴全球时尚、潮流设计元素,准确捕捉时尚元素,完全做到个性化、差异化服务。','http://v.24so.com/tpl/static/attachment/music/default/3.mp3','#FF0000','? 2001-2015 钰洁婚礼策划版权所有','http://v.24so.com/uploads/d/dhybwc1402363778/3/e/4/e/thumb_539665ce0ec3c.jpg','5','0');");
E_D("replace into `p_home` values('4','ocbtfr1402282562','微官网','http://v.24so.com/uploads/o/ocbtfr1402282562/3/3/6/b/thumb_539527a780fa5.jpg','','','欢迎使用青岛旅游网','','','','http://v.24so.com/uploads/o/ocbtfr1402282562/6/1/0/c/thumb_53952a29530b0.jpg','0','0');");
E_D("replace into `p_home` values('5','a3a7daf71176d5b','青岛旅游网','http://hiphotos.baidu.com/lvpics/pic/item/9e3df8dcd100baa19e8d03114710b912c9fc2ef2.jpg','','','欢迎使用青岛旅游网','http://v.24so.com/tpl/static/attachment/music/default/3.mp3','#FF0000','24so青岛','http://v.24so.com/uploads/a/a3a7daf71176d5b/9/c/a/7/thumb_539531dd78ed8.jpg','7','0');");
E_D("replace into `p_home` values('6','tvjxcc1402290548','UZE優擇','http://v.24so.com/uploads/t/tvjxcc1402290548/e/8/5/5/thumb_539548d9e001f.JPG','','','欢迎关注UZE優擇公众号！','','#8A8AFF','','http://v.24so.com/uploads/t/tvjxcc1402290548/f/e/a/f/thumb_539549f479ce3.jpg','0','0');");
E_D("replace into `p_home` values('7','vhvake1402306510','微官网','http://v.24so.com/uploads/v/vhvake1402306510/9/9/c/c/thumb_539586e5ac0bb.jpg','','','髻梧桐企业由美发起家，注重专业与技术。一种对美和技术慎重、严谨的态度...','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','#148AFF','','http://v.24so.com/uploads/v/vhvake1402306510/c/b/9/0/thumb_53958742f3fd8.jpg','2','0');");
E_D("replace into `p_home` values('9','c6a3b2d7590ae01','青岛中天人和','http://v.24so.com/uploads/c/c6a3b2d7590ae01/2/f/c/f/thumb_53967894d55ce.jpg','','','中天人和，国内著名的专业猎头公司，成立于2000年，其核心业务为高级人才甄选。','','','','https://mp.weixin.qq.com/misc/getheadimg?token=1836009176&amp;fakeid=3087208328&amp;r=18354','15','0');");
E_D("replace into `p_home` values('10','ainbtq1402292243','广州嘉颢特种玻璃有限公司','http://v.24so.com/uploads/a/ainbtq1402292243/7/2/3/8/thumb_5396b4bc0a9b8.jpg','','','欢迎关注广州嘉颢玻璃有限公司！','','','','http://v.24so.com/uploads/a/ainbtq1402292243/d/a/3/0/thumb_53967a5066210.jpg','0','0');");
E_D("replace into `p_home` values('11','aricpn1402370263','Wellcome to here！','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','','','Wellcome to here！品之缘','','','','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','0','0');");
E_D("replace into `p_home` values('12','yosjzs1402383816','欢迎关注品之缘','http://v.24so.com/uploads/y/yosjzs1402383816/9/9/c/9/thumb_5396afe3719a0.jpg','','','欢迎关注品之缘。','','','','http://v.24so.com/uploads/y/yosjzs1402383816/7/9/e/2/thumb_5396b00eef7cb.jpg','0','0');");
E_D("replace into `p_home` values('13','6845f758f8e1a94','欢迎进入博祥俱乐部微官网','http://v.24so.com/uploads/6/6845f758f8e1a94/0/a/b/f/thumb_5396d1927d5a7.jpg','','','点击进入微官网','','','','http://v.24so.com/uploads/6/6845f758f8e1a94/3/d/2/4/thumb_5396d1b4abb5b.jpg','0','0');");
E_D("replace into `p_home` values('14','a0bbb64eef61a16','感谢关注朔风传媒','http://v.24so.com/uploads/a/a0bbb64eef61a16/7/8/5/9/thumb_53990487261d2.jpg','','','爱购379,一个专注于洛阳本地生活消费导航的平台,一座商家与消费者之间互通的桥梁。网站涵盖餐饮、娱乐、服饰、美容美发、休闲养生、旅游、教育培训等行业。','http://v.24so.com/tpl/static/attachment/music/default/1.mp3','','','http://v.24so.com/uploads/a/a0bbb64eef61a16/3/5/8/5/thumb_53990559b3387.jpg','0','0');");
E_D("replace into `p_home` values('15','qxrzxy1402460503','掌上爱情','http://v.24so.com/uploads/q/qxrzxy1402460503/5/e/2/5/thumb_53980f3d6ef62.jpg','','','掌上爱情--全国最大的移动爱情互动平台！探讨人生智慧，探讨男女恋爱中、婚姻中的心理规律和奥秘，如何掌握好爱情中的心理问题，把握伦理道德，让所有爱情、家庭更加美满和谐！弘扬中华智慧，传递正能量！这里有你有我有他！！微信公众号：zhangsha','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/q/qxrzxy1402460503/9/8/6/0/thumb_53980f821eb9d.jpg','0','0');");
E_D("replace into `p_home` values('16','85fa9a93c81ad7e','微官网','http://v.24so.com/uploads/8/85fa9a93c81ad7e/d/c/6/e/thumb_539826c082313.jpg','','','微官网','','#FF0000','2014-2024 青岛24so版权所有','','10','0');");
E_D("replace into `p_home` values('17','junxtg1402455483','酒店简介','http://v.24so.com/uploads/j/junxtg1402455483/7/3/b/d/thumb_53992691c1852.jpg','','','青岛四方大酒店酒于1992年4月开业，新近装修时间2010年，楼高15层，共有客房总数351间（套）。\r\n　　面对青岛长途汽车站，背依弘诚体育场和海泊河文化公园，左靠杭州路立交桥、胶州湾高速公路和青岛港，右邻人民路立交桥和四方商业中心，距流','','','','http://v.24so.com/uploads/j/junxtg1402455483/7/f/1/2/thumb_539927b84bcfd.jpg','0','0');");
E_D("replace into `p_home` values('18','glkpuw1402307164','微官网','http://v.24so.com/uploads/g/glkpuw1402307164/8/6/6/c/thumb_53993a2a6294c.jpg','','','欢迎关注零点食分美食汇连锁总店','','#FF0000','?北京二十四搜科技有限公司青岛分公司','','1','0');");
E_D("replace into `p_home` values('19','f0cdf4ad5650e89','lucca卢卡西餐听','http://v.24so.com/uploads/f/f0cdf4ad5650e89/6/1/a/1/thumb_539941d60f710.jpg','','','查看全文','','','','','0','0');");
E_D("replace into `p_home` values('20','mleyln1402732919','感谢关注？？？','http://v.24so.com/uploads/m/mleyln1402732919/b/8/4/4/thumb_539c0604c34a2.jpg','','','1111','','','','','0','0');");
E_D("replace into `p_home` values('21','kcmjgr1402792677','home','http://v.24so.com/tpl/static/attachment/icon/lovely/bookmark.png','','','易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台易联商贸运营平台','','','','','0','0');");
E_D("replace into `p_home` values('22','diwxqe1402738986','首页','http://v.24so.com/uploads/d/diwxqe1402738986/3/9/a/b/thumb_539d10c52d6e5.jpg','','','韩国锦湖','','','','','0','0');");
E_D("replace into `p_home` values('23','','','','','','','','','','','7','0');");
E_D("replace into `p_home` values('24','kcbvom1402885756','阜新亨得利眼镜有限公司','http://v.24so.com/uploads/k/kcbvom1402885756/9/6/b/6/thumb_539e5ee05d3fc.jpg','','','欢迎来到亨得利眼镜！百年亨得利，配镜有保障！','','#FF0000','阜新亨得利眼镜有限公司版权所有','http://v.24so.com/uploads/k/kcbvom1402885756/0/2/d/e/thumb_539e65f30905f.jpg','1','0');");
E_D("replace into `p_home` values('25','ftxvbg1402882875','欢迎关注好灶头厨具','http://v.24so.com/uploads/f/ftxvbg1402882875/6/e/8/0/thumb_539e82a566d6b.jpg','','','欢迎关注好灶头厨具！','','','','http://v.24so.com/uploads/f/ftxvbg1402882875/4/c/5/e/thumb_539e82cc050ee.png','0','0');");
E_D("replace into `p_home` values('26','oucryx1402886291','您好，感谢您关注黄金时代健身俱乐部','http://v.24so.com/uploads/o/oucryx1402886291/a/7/e/c/thumb_539e94c7e0c2f.jpg','','','培训宗旨：\r\n培养顺应健身发展趋势的具有良好的专业素质（包括教学技巧、组织编排、表现表演、沟通交流、健身理论、管理知识）和职业素质的专业的复合型人才。\r\n','http://v.24so.com/tpl/static/attachment/music/default/2.mp3','','','http://v.24so.com/uploads/o/oucryx1402886291/7/7/1/6/thumb_539e989d59a86.jpg','0','0');");
E_D("replace into `p_home` values('27','qnrwlm1402888833','7号玫瑰御足','http://v.24so.com/uploads/q/qnrwlm1402888833/8/9/2/9/thumb_539e9c1da9428.jpg','','','感谢关注7号玫瑰御足...','','','','http://v.24so.com/uploads/q/qnrwlm1402888833/5/f/9/f/thumb_539e9c556e88a.jpg','16','0');");
E_D("replace into `p_home` values('28','0d8553ddf4f8102','感谢您关注新东方在线洛阳服务中心！','http://v.24so.com/uploads/0/0d8553ddf4f8102/e/7/9/2/thumb_539ea91feec79.JPG','','','感谢您关注新东方在线洛阳服务中心！','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/0/0d8553ddf4f8102/4/a/0/3/thumb_539ea92da6337.jpg','0','0');");
E_D("replace into `p_home` values('29','ysemxs1402913598','感谢您关注洛阳润仟祥黄焖鸡','http://v.24so.com/uploads/y/ysemxs1402913598/8/b/9/0/thumb_539fa9632b797.png','','','润仟祥黄焖鸡米饭始建于2000年，经历了近十年的发展已经是国内黄焖鸡米饭行业一个响当当的品牌。 黄焖鸡米饭是大众消费，借鉴主题餐厅的经营特点，融入现代化的中式快餐操作模式。装修简洁明快，现在润仟祥黄焖鸡米饭已拥有多家连锁门店，前景十分广阔。','','','','http://v.24so.com/uploads/y/ysemxs1402913598/5/c/c/b/thumb_539fa5757674c.jpg','9','0');");
E_D("replace into `p_home` values('30','gdfrep1402472524','欢迎关注瑞昌房产！','http://v.24so.com/uploads/g/gdfrep1402472524/c/d/3/2/thumb_5399d694bc674.jpg','','','点击了解更多......','','#FF0000','2001-2014 北京二十四搜科技有限公司版权所有','http://v.24so.com/uploads/g/gdfrep1402472524/f/5/7/5/thumb_5399da5d43634.jpg','1','0');");
E_D("replace into `p_home` values('31','qweeqm1402996029','常记陕西哨子面馆','http://v.24so.com/uploads/q/qweeqm1402996029/b/5/c/d/thumb_53a0099d0ee59.jpg','','','常记陕西哨子面馆...','','','','http://v.24so.com/uploads/q/qweeqm1402996029/7/d/7/9/thumb_53a009c84afca.jpg','0','0');");
E_D("replace into `p_home` values('32','eujhzm1403053453','山西旅游票务通','http://v.24so.com/uploads/e/eujhzm1403053453/3/f/5/4/thumb_53a0ee51a8d97.jpg','','','山西旅游票务通','','','','','0','0');");
E_D("replace into `p_home` values('33','xgmone1402987078','欢迎进入春蕾蒙氏幼儿园微官网','http://v.24so.com/uploads/x/xgmone1402987078/2/d/2/9/thumb_53a0f2b50ea53.jpg','','','点击进入查看详细信息','','','','','0','0');");
E_D("replace into `p_home` values('34','rzxdlc1402480377','意是vb冰淇淋','http://v.24so.com/uploads/r/rzxdlc1402480377/1/7/0/d/thumb_53a0fc3cb96b4.jpg','','','意式冰淇淋！','','','','','0','0');");

require("../../inc/footer.php");
?>