<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_lottery`;");
E_C("CREATE TABLE `p_lottery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joinnum` int(11) NOT NULL COMMENT '参与人数',
  `click` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `starpicurl` varchar(100) NOT NULL COMMENT '填写活动开始图片网址',
  `title` varchar(60) NOT NULL COMMENT '活动名称',
  `txt` varchar(60) NOT NULL COMMENT '用户输入兑奖时候的显示信息',
  `sttxt` varchar(200) NOT NULL COMMENT '简介',
  `statdate` int(11) NOT NULL COMMENT '活动开始时间',
  `enddate` int(11) NOT NULL COMMENT '活动结束时间',
  `info` varchar(200) NOT NULL COMMENT '活动说明',
  `aginfo` varchar(200) NOT NULL COMMENT '重复抽奖回复',
  `endtite` varchar(60) NOT NULL COMMENT '活动结束公告主题',
  `endpicurl` varchar(100) NOT NULL,
  `endinfo` varchar(60) NOT NULL,
  `fist` varchar(50) NOT NULL COMMENT '一等奖奖品设置',
  `fistnums` int(4) NOT NULL COMMENT '一等奖奖品数量',
  `fistlucknums` int(1) NOT NULL COMMENT '一等奖中奖号码',
  `second` varchar(50) NOT NULL COMMENT '二等奖奖品设置',
  `type` tinyint(1) NOT NULL,
  `secondnums` int(4) NOT NULL,
  `secondlucknums` int(1) NOT NULL,
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `allpeople` int(11) NOT NULL,
  `canrqnums` int(2) NOT NULL COMMENT '个人限制抽奖次数',
  `parssword` int(15) NOT NULL,
  `renamesn` varchar(50) NOT NULL DEFAULT '',
  `renametel` varchar(60) NOT NULL,
  `displayjpnums` int(1) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `four` varchar(50) NOT NULL,
  `fournums` int(11) NOT NULL,
  `fourlucknums` int(11) NOT NULL,
  `five` varchar(50) NOT NULL,
  `fivenums` int(11) NOT NULL,
  `fivelucknums` int(11) NOT NULL,
  `six` varchar(50) NOT NULL COMMENT '六等奖',
  `sixnums` int(11) NOT NULL,
  `sixlucknums` int(11) NOT NULL,
  `zjpic` varchar(150) NOT NULL DEFAULT '',
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `maxgetprizenum` mediumint(4) NOT NULL DEFAULT '1',
  `needreg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=gbk");
E_D("replace into `p_lottery` values('1','18','0','879c2f933017228','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','恭喜中奖','1401897600','1407168000','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','熊抱','3','0','拥抱','1','4','0','微笑','5','1','20','5','1234567890','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('2','0','0','879c2f933017228','刮刮卡','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','恭喜中奖','1401897600','1404489600','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','熊抱','3','0','拥抱','2','4','0','微笑','5','0','10','5','1234567890','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('3','1','0','1fee0922b0a40db','水果达人','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们','恭喜您中奖啦','1401897600','1436025600','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','微信商企平台','1','0','','4','0','0','','0','0','2147483647','30','123456','','','0','0','1','','0','0','','0','0','','0','0','','1','1','0');");
E_D("replace into `p_lottery` values('4','0','0','879c2f933017228','优惠劵','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','优惠劵大派发啦','','凭此优惠劵，可至粥全粥到任意店内免费用餐一顿。','1401984000','1404576000','本优惠劵纯属虚构，请勿相信。','关于优惠劵如何使用的说明。。。','活动结束啦','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','活动已经结束，请关注我们的下次活动。','熊抱','1','0','拥抱','3','2','0','微笑','3','0','12','5','123456','','','1','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('5','0','0','879c2f933017228','砸金蛋','http://v.24so.com/tpl/static/goldenEgg/user/start.jpg','砸金蛋活动开始了','兑奖请联系我们，电话138********','恭喜中奖了','1401984000','1404576000','亲，请点击进入砸金蛋活动页面，祝您好运哦！','亲，继续努力哦！','砸金蛋活动已经结束了','http://v.24so.com/tpl/static/goldenEgg/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','熊抱','3','0','拥抱','5','4','0','微笑','5','0','11','5','123456','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('8','3','0','a3a7daf71176d5b','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','恭喜你中奖啦！','1402243200','1404835200','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','极地海洋票','8','0','海底世界豪华游','1','30','2','','0','0','10','5','12345','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('7','0','0','879c2f933017228','水果达人','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','恭喜中奖','1401984000','1404576000','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','熊抱','3','0','拥抱','4','4','0','微笑','5','0','11','12','123456','','','0','0','0','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('9','1','0','a3a7daf71176d5b','刮刮卡','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','','1402243200','1404835200','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','青岛世园会一日游票','5','0','','2','0','0','','0','0','100','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('10','0','0','dgqaqc1402307446','优惠券','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','优惠券','','欢迎领取优惠劵','1402156800','1404144000','优惠劵当现金使用','优惠劵不能退返现金','优惠劵活动开始啦！','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','活动正在进行中','10元代金券','10','0','','3','0','0','','0','0','100','5','12345','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('11','3','0','mhsqxc1401953951','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','恭喜，中奖啦','1402329600','1404921600','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','熊抱','5','1','拥抱','1','30','2','握手','40','0','10','5','123456789','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('12','7','0','mhsqxc1401953951','刮刮卡','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','','1402329600','1404921600','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','微商企平台','10','0','','2','0','0','','0','0','1000','3','123456789','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('13','0','0','yosjzs1402383816','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','恭喜中奖！','1402329600','1404921600','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','VIP套餐','1','0','情侣套餐','1','2','0','','0','0','50','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('14','3','0','yosjzs1402383816','刮刮卡','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','恭喜中奖！','1402329600','1404921600','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','情侣套餐','1','0','3','2','0','0','','0','0','100','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','1','1','0');");
E_D("replace into `p_lottery` values('15','0','0','yosjzs1402383816','水果达人','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','恭喜您中奖了','1402416000','1405008000','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','红烧牛肉面','1','0','','4','0','0','','0','0','100','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('16','0','0','junxtg1402455483','刮刮卡','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','刮刮卡活动开始了','兑奖请联系我们，电话138********','恭喜你中奖啦','1401552000','1406822400','亲，请点击进入刮刮卡抽奖活动页面，祝您好运哦！','','刮刮卡活动已经结束了','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','北京豪华游','10','0','青岛海上一日游','2','10','0','','0','0','1000','5','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('17','0','0','glkpuw1402307164','会员卡','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','优惠劵','','欢迎领取零点食分美食汇连锁总店优惠劵','1401552000','1404144000','零点食分美食汇连锁总店优惠劵不退现金','零点食分美食汇连锁总店过期不能使用','零点食分美食汇连锁总店已结束','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','零点食分美食汇连锁总店','100','0','','3','0','0','','0','0','1000','5','0','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('18','0','0','glkpuw1402307164','水果达人','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','水果达人活动开始了','兑奖请联系我们，电话138********','恭喜你中奖啦！','1401552000','1404144000','亲，请点击进入水果达人活动页面，祝您好运哦！','亲，继续努力哦！','水果达人活动已经结束了','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','美食大礼包','10','0','大白兔糖一包','4','20','0','不二家棒棒糖一块','30','0','10000','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('23','1','0','diwxqe1402738986','幸运大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','你落选了','1402848000','1405440000','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','2毛','2','0','','1','0','0','','0','0','5000','1','123456','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('22','3','0','kcmjgr1402792677','优惠券','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','七一活动','','拿到优惠券可以去前台领奖品','1402761600','1405353600','','点击中间的的兑换券','','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','电子优惠券','100','1','','3','0','0','','0','0','100','3','123','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/uploads/k/kcmjgr1402792677/d/a/7/7/thumb_539d1591a5a02.jpg','0','1','0');");
E_D("replace into `p_lottery` values('21','3','0','kcmjgr1402792677','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','','1402761600','1405353600','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','123','11','0','','1','0','0','','0','0','100','3','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('25','0','0','ftxvbg1402882875','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话15872285008','恭喜你中奖了请拨打15872285008兑奖','1402848000','1405440000','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','苹果','1','0','','1','0','0','','0','0','11111','100','0','','','0','0','0','','0','0','','0','0','','0','0','','2','1','0');");
E_D("replace into `p_lottery` values('26','3','0','oucryx1402886291','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话138********','','1402934400','1405526400','亲，请点击进入大转盘抽奖活动页面，祝您好运哦！','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','健身器','10','0','','1','0','0','','0','0','1000','3','123','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('27','8','0','eujhzm1403053453','大转盘','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','幸运大转盘活动开始了','兑奖请联系我们，电话：15603477871','恭喜您中奖了','1403020800','1408032000','1：: 在活动页面点击开始，即可参与大转盘抽奖活动；\r\n 2： 每个账号对应1次/天的抽奖机会，指针所指景点门票即为您获得的门票；\r\n 3： 转盘设置奖项为五等，一等奖为价值168元的运城凤凰欢乐谷的门票，二等奖为价值159元的榆次乌金山欢乐谷门票，三等奖为价值138元的泗交漂流门票，四等奖为价值128元的华尧水上乐园门票，五等奖为价值78元的黛眉山门票；\r\n 4：本次活动的截止日期为：2014年','亲，继续努力哦！','幸运大转盘活动已经结束了','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','亲，活动已经结束，请继续关注我们的后续活动哦。','运城凤凰欢乐谷','10','2','榆次乌金山欢乐谷','1','10','0','泗交漂流','20','0','6000','1','123456789','','','0','0','1','华尧水上乐园','10','0','黛眉山','20','0','','0','0','','2','1','0');");
E_D("replace into `p_lottery` values('28','1','0','junxtg1402455483','优惠劵','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','优惠劵','','欢迎使用优惠劵！','1401552000','1404057600','优惠劵不能兑现！','优惠劵不能兑现！','活动已结束！','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','标准间','10','0','','3','0','0','','0','0','10000','5','12345','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");

require("../../inc/footer.php");
?>