<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_reply_info`;");
E_C("CREATE TABLE `p_reply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `infotype` varchar(20) NOT NULL DEFAULT '',
  `diningyuding` tinyint(1) NOT NULL DEFAULT '1',
  `diningwaimai` tinyint(1) NOT NULL DEFAULT '1',
  `config` text NOT NULL,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `apiurl` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=gbk");
E_D("replace into `p_reply_info` values('1','1fee0922b0a40db','留言板','http://v.24so.com/uploads/1/1fee0922b0a40db/e/4/8/2/thumb_53901a623856a.jpg','谢谢您的留言','message','1','1','a:1:{s:9:\"needcheck\";i:1;}','','');");
E_D("replace into `p_reply_info` values('2','1fee0922b0a40db','O2O电商引领者','http://v.24so.com/tpl/static/attachment/background/view/8.jpg','O2O电商引领者','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','');");
E_D("replace into `p_reply_info` values('3','1fee0922b0a40db','O2O电商引领者','http://v.24so.com/uploads/1/1fee0922b0a40db/b/8/c/f/53902e096246b.jpg','O2O电商引领者','Shop','1','1','','商城','');");
E_D("replace into `p_reply_info` values('4','879c2f933017228','初级版微商城','http://v.24so.com/uploads/8/879c2f933017228/e/f/3/4/thumb_53914867af9db.png','微信中输入“商城”会自动回复，可以设置商品分类，支持商品搜索，多种属性排序，多商品购物车结算，瀑布流展示。','Shop','1','1','','商城','');");
E_D("replace into `p_reply_info` values('5','879c2f933017228','留言板','http://v.24so.com/uploads/8/879c2f933017228/0/8/a/e/thumb_53912b66a81cb.png','北京二十四搜科技有限公司（以下简称24so）是一家专业化微信电商运营体系开发运营商，于2013年微信宣布用户突破六亿当天成立，致力于帮助5000万商家、企业在微信上搭建专业化的移动电商体系，直接面对8亿微信消费者，实现活动宣传、产品展示及在','message','1','1','a:1:{s:9:\"needcheck\";i:0;}','','');");
E_D("replace into `p_reply_info` values('6','879c2f933017228','360全景看房','http://v.24so.com/uploads/8/879c2f933017228/3/a/a/0/thumb_539149fe2d907.png','360全景看房','panorama','1','1','','全景','');");
E_D("replace into `p_reply_info` values('7','879c2f933017228','微团购','http://v.24so.com/uploads/8/879c2f933017228/a/a/7/8/thumb_53914a4b538e0.png','微团购，可以让顾客在微信上随时进行团购','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','');");
E_D("replace into `p_reply_info` values('8','879c2f933017228','微订餐','http://v.24so.com/uploads/8/879c2f933017228/4/b/3/2/thumb_53914af0e479c.png','微订餐，让顾客足不出户而再次购买，或在客服来店里就餐前就点好菜定好桌子。','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','订餐','');");
E_D("replace into `p_reply_info` values('9','879c2f933017228','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('10','879c2f933017228','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('11','879c2f933017228','酒店房间','http://v.24so.com/uploads/8/879c2f933017228/b/1/8/4/thumb_5391993638857.png','酒店房间酒店房间酒店房间酒店房间酒店房间酒店房间酒店房间酒店房间酒店房间酒店房间','Hotels','1','1','','酒店','');");
E_D("replace into `p_reply_info` values('12','a3a7daf71176d5b','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/uploads/a/a3a7daf71176d5b/c/a/1/6/thumb_53955bc02d673.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('13','a3a7daf71176d5b','申请成为会员','http://v.24so.com/uploads/a/a3a7daf71176d5b/2/9/f/b/thumb_53955d14e8a94.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('14','mhsqxc1401953951','微商城','http://v.24so.com/uploads/m/mhsqxc1401953951/8/f/8/0/thumb_539598cd22849.jpg','欢迎关注','Shop','1','1','','商城','');");
E_D("replace into `p_reply_info` values('15','tvjxcc1402290548','欢迎进入UZE优择商城','http://v.24so.com/uploads/t/tvjxcc1402290548/c/4/d/4/thumb_5395cc394b8b1.JPG','UZE优择 ，為大陸地區具有領導地位的純進口連瑣生活超市網站，提供24*7網上零售服務。','Shop','1','1','','商城','');");
E_D("replace into `p_reply_info` values('16','mhsqxc1401953951','欢迎订购','http://v.24so.com/uploads/m/mhsqxc1401953951/e/a/6/2/thumb_5395f77f8c688.jpg','欢迎订购','Dining','1','1','','订餐','');");
E_D("replace into `p_reply_info` values('17','mhsqxc1401953951','特惠食品','http://v.24so.com/uploads/m/mhsqxc1401953951/d/9/e/3/thumb_5395fbab67055.jpg','特惠食品，既美味，又价廉，环境还优美。','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('18','tvjxcc1402290548','微团购','http://v.24so.com/uploads/t/tvjxcc1402290548/c/3/6/3/thumb_5396658390271.jpg','微团购','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('19','tvjxcc1402290548','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('20','tvjxcc1402290548','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('21','aricpn1402370263','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('22','aricpn1402370263','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('23','yosjzs1402383816','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('24','yosjzs1402383816','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('25','yosjzs1402383816','菜单','http://v.24so.com/uploads/y/yosjzs1402383816/b/e/f/e/thumb_5396bad607522.jpg','','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','订餐','');");
E_D("replace into `p_reply_info` values('26','yosjzs1402383816','情侣套餐','http://v.24so.com/uploads/y/yosjzs1402383816/5/f/6/e/thumb_5397bc524008f.jpg','情侣套餐','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('27','kcmjgr1402792677','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('28','kcmjgr1402792677','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('29','kcmjgr1402792677','感谢您的订餐','','您的 订餐','Dining','1','1','','订餐','');");
E_D("replace into `p_reply_info` values('30','kcmjgr1402792677','欢迎光临','http://v.24so.com/uploads/k/kcmjgr1402792677/5/d/0/4/thumb_539d097e61d91.jpg','欢迎您的到来','panorama','1','1','','全景','');");
E_D("replace into `p_reply_info` values('31','kcmjgr1402792677','感谢您的入住','','感谢您的入住感谢您的入住感谢您的入住感谢您的入住感谢您的入住感谢您的入住感谢您的入住','Hotels','1','1','','酒店','');");
E_D("replace into `p_reply_info` values('32','ftxvbg1402882875','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('33','ftxvbg1402882875','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('34','oucryx1402886291','会员卡,省钱，打折,促销，优先知道,有奖励哦','http://v.24so.com/tpl/static/images/member.jpg','尊贵vip，是您消费身份的体现,会员卡,省钱，打折,促销，优先知道,有奖励哦','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('35','oucryx1402886291','申请成为会员','http://v.24so.com/tpl/static/images/vip.jpg','申请成为会员，享受更多优惠','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('36','qnrwlm1402888833','相册','/tpl/Wap/default/common/css/Photo/banner.jpg','','album','1','1','','','');");
E_D("replace into `p_reply_info` values('37','a0bbb64eef61a16','订餐系统','http://v.24so.com/uploads/a/a0bbb64eef61a16/7/e/e/b/thumb_539fea4e29b2d.jpg','订餐系统','Dining','1','1','','订餐','');");
E_D("replace into `p_reply_info` values('38','gdfrep1402472524','房间展示','http://v.24so.com/uploads/g/gdfrep1402472524/4/8/c/a/thumb_539fff0685b4c.jpg','房间展示','panorama','1','1','','全景','');");
E_D("replace into `p_reply_info` values('39','oucryx1402886291','感谢您的订餐','','','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','订餐','');");
E_D("replace into `p_reply_info` values('40','oucryx1402886291','全景','','公司全景','panorama','1','1','','全景','');");
E_D("replace into `p_reply_info` values('41','oucryx1402886291','感谢您的预定','http://v.24so.com/uploads/o/oucryx1402886291/c/6/0/5/thumb_53a004d987ad8.jpg','','Hotels','1','1','','酒店','');");
E_D("replace into `p_reply_info` values('42','junxtg1402455483','微预订','','','Hotels','1','1','','酒店','');");

require("../../inc/footer.php");
?>