<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_flash`;");
E_C("CREATE TABLE `p_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `info` varchar(90) NOT NULL,
  `tip` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tip` (`tip`)
) ENGINE=MyISAM AUTO_INCREMENT=105 DEFAULT CHARSET=gbk");
E_D("replace into `p_flash` values('1','879c2f933017228','http://v.24so.com/tpl/static/attachment/focus/default/2.jpg','','1块钱奔驰','1');");
E_D("replace into `p_flash` values('2','879c2f933017228','http://v.24so.com/tpl/static/attachment/focus/default/4.jpg','','2毛钱宝马','1');");
E_D("replace into `p_flash` values('3','879c2f933017228','http://v.24so.com/tpl/static/attachment/background/view/5.jpg','','','2');");
E_D("replace into `p_flash` values('4','1fee0922b0a40db','http://v.24so.com/tpl/static/attachment/focus/default/6.jpg','','24SO欢迎您','1');");
E_D("replace into `p_flash` values('5','1fee0922b0a40db','http://v.24so.com/tpl/static/attachment/focus/default/5.gif','','24SO欢迎您','1');");
E_D("replace into `p_flash` values('6','mhsqxc1401953951','http://v.24so.com/uploads/m/mhsqxc1401953951/4/1/3/a/thumb_5395d42ee2d7e.png','','官网','2');");
E_D("replace into `p_flash` values('7','mhsqxc1401953951','http://v.24so.com/uploads/m/mhsqxc1401953951/c/0/e/d/thumb_53903992401da.jpg','{siteUrl}/index.php?g=Wap&amp;amp;m=Photo&amp;amp;a=index&amp;amp;token=mhsqxc1401953951&amp;amp;wecha_id={wechat_id}','背景','1');");
E_D("replace into `p_flash` values('8','ocbtfr1402282562','http://v.24so.com/tpl/static/attachment/background/view/8.jpg','','欢迎使用青岛旅游网','2');");
E_D("replace into `p_flash` values('23','a3a7daf71176d5b','http://v.24so.com/uploads/a/a3a7daf71176d5b/2/9/9/4/thumb_53958cc44f4a8.jpg','','青岛海底世界','1');");
E_D("replace into `p_flash` values('22','a3a7daf71176d5b','http://v.24so.com/uploads/a/a3a7daf71176d5b/e/8/3/7/thumb_53958c8eaecc4.jpg','','青岛方特梦幻王国','1');");
E_D("replace into `p_flash` values('20','a3a7daf71176d5b','http://v.24so.com/uploads/a/a3a7daf71176d5b/a/0/7/c/thumb_5395344ad5a84.jpg','','青岛极地海洋世界','1');");
E_D("replace into `p_flash` values('21','a3a7daf71176d5b','http://v.24so.com/uploads/a/a3a7daf71176d5b/c/3/f/8/thumb_53958c63b0556.jpg','','青岛世园会','1');");
E_D("replace into `p_flash` values('13','tvjxcc1402290548','http://v.24so.com/uploads/t/tvjxcc1402290548/5/2/0/0/thumb_53955829d9f1d.JPG','','展示','1');");
E_D("replace into `p_flash` values('14','tvjxcc1402290548','http://v.24so.com/tpl/static/attachment/background/view/9.jpg','','','2');");
E_D("replace into `p_flash` values('17','tvjxcc1402290548','http://v.24so.com/uploads/t/tvjxcc1402290548/c/e/1/9/thumb_5395614971b1c.jpg','','','1');");
E_D("replace into `p_flash` values('16','tvjxcc1402290548','http://v.24so.com/uploads/t/tvjxcc1402290548/1/a/b/d/thumb_539560b467c85.jpg','','','1');");
E_D("replace into `p_flash` values('18','tvjxcc1402290548','http://v.24so.com/uploads/t/tvjxcc1402290548/3/a/3/6/thumb_539561924ccd5.jpg','','','1');");
E_D("replace into `p_flash` values('19','tvjxcc1402290548','http://v.24so.com/uploads/t/tvjxcc1402290548/8/0/5/0/thumb_539562be6338f.jpg','','','1');");
E_D("replace into `p_flash` values('25','vhvake1402306510','http://v.24so.com/uploads/v/vhvake1402306510/8/5/f/e/thumb_53958e24b3e85.jpg','','髻梧桐','1');");
E_D("replace into `p_flash` values('26','vhvake1402306510','http://v.24so.com/uploads/v/vhvake1402306510/8/4/2/f/thumb_53958e37a0015.JPG','','髻梧桐','1');");
E_D("replace into `p_flash` values('27','vhvake1402306510','http://v.24so.com/uploads/v/vhvake1402306510/f/c/0/0/thumb_53958e4c432ea.jpg','','髻梧桐','1');");
E_D("replace into `p_flash` values('28','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/b/3/7/4/thumb_53969af7e8f2a.jpg','','钰洁婚礼策划','2');");
E_D("replace into `p_flash` values('29','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/6/4/f/e/thumb_53969b2aab518.jpg','','钰洁婚礼策划','2');");
E_D("replace into `p_flash` values('30','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/4/f/3/d/thumb_53969b6b2e55f.jpg','','钰洁婚礼策划','2');");
E_D("replace into `p_flash` values('31','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/0/c/e/4/thumb_53969b8231dc8.jpg','','钰洁婚礼策划','1');");
E_D("replace into `p_flash` values('32','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/9/f/4/8/thumb_53969b9c04e27.jpg','','钰洁婚礼策划','1');");
E_D("replace into `p_flash` values('33','dhybwc1402363778','http://v.24so.com/uploads/d/dhybwc1402363778/1/7/d/1/thumb_53969bb57dc26.jpg','','钰洁婚礼策划','1');");
E_D("replace into `p_flash` values('34','c6a3b2d7590ae01','http://v.24so.com/uploads/c/c6a3b2d7590ae01/4/6/4/a/thumb_5397094ae12a7.jpg','','中天人和企业管理咨询','1');");
E_D("replace into `p_flash` values('39','ainbtq1402292243','http://v.24so.com/uploads/a/ainbtq1402292243/d/7/0/2/thumb_5396a4f4c1eea.png','','','2');");
E_D("replace into `p_flash` values('36','c6a3b2d7590ae01','http://v.24so.com/uploads/c/c6a3b2d7590ae01/c/3/5/2/thumb_5397095ae0224.jpg','','中天人和企业管理咨询','1');");
E_D("replace into `p_flash` values('40','yosjzs1402383816','http://v.24so.com/uploads/y/yosjzs1402383816/b/6/9/4/thumb_5396b8d2448bc.jpg','','特色','1');");
E_D("replace into `p_flash` values('41','6845f758f8e1a94','http://v.24so.com/tpl/static/attachment/focus/default/6.jpg','','博祥财富俱乐部','1');");
E_D("replace into `p_flash` values('42','c6a3b2d7590ae01','http://v.24so.com/uploads/c/c6a3b2d7590ae01/3/5/7/7/thumb_5397096707c10.jpg','','中天人和企业管理咨询','1');");
E_D("replace into `p_flash` values('43','yosjzs1402383816','http://v.24so.com/uploads/y/yosjzs1402383816/7/2/0/1/thumb_5397b429c6666.png','','棒极了','1');");
E_D("replace into `p_flash` values('44','qxrzxy1402460503','http://v.24so.com/uploads/q/qxrzxy1402460503/7/7/5/8/thumb_53981135b60a4.jpg','','人生，就是一种简单的轨迹，一种平淡的重复','1');");
E_D("replace into `p_flash` values('45','qxrzxy1402460503','http://v.24so.com/uploads/q/qxrzxy1402460503/e/8/3/3/thumb_539811f790fb7.jpg','','爱上我吧！--你今生无悔的选择！','1');");
E_D("replace into `p_flash` values('46','qxrzxy1402460503','http://v.24so.com/uploads/q/qxrzxy1402460503/1/2/0/4/thumb_5398124be65c2.jpg','','爱不需要多，只要有你就够了！','1');");
E_D("replace into `p_flash` values('47','ainbtq1402292243','http://v.24so.com/uploads/a/ainbtq1402292243/f/7/b/0/thumb_53981e76a0149.jpg','{siteUrl}/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=lists&amp;amp;token=ainbtq1402292243&amp;amp;wecha_id={wechat_id}&amp;amp;classid=146','夹娟丝玻璃','1');");
E_D("replace into `p_flash` values('48','ainbtq1402292243','http://v.24so.com/uploads/a/ainbtq1402292243/5/6/7/b/thumb_539820635b8e8.jpg','{siteUrl}/index.php?g=Wap&amp;amp;m=Index&amp;amp;a=lists&amp;amp;token=ainbtq1402292243&amp;amp;wecha_id={wechat_id}&amp;amp;classid=58','卫浴镜','1');");
E_D("replace into `p_flash` values('49','ainbtq1402292243','http://v.24so.com/uploads/a/ainbtq1402292243/4/5/0/b/thumb_539820b189be1.jpg','','动感魔术镜','1');");
E_D("replace into `p_flash` values('50','a0bbb64eef61a16','http://v.24so.com/tpl/static/attachment/background/view/4.jpg','','微官网背景图','2');");
E_D("replace into `p_flash` values('51','85fa9a93c81ad7e','http://v.24so.com/uploads/8/85fa9a93c81ad7e/a/0/8/a/53983066126df.jpg','','背景','2');");
E_D("replace into `p_flash` values('52','85fa9a93c81ad7e','http://v.24so.com/uploads/8/85fa9a93c81ad7e/c/4/d/b/thumb_53990b7b3c21c.jpg','','01','1');");
E_D("replace into `p_flash` values('53','85fa9a93c81ad7e','http://v.24so.com/uploads/8/85fa9a93c81ad7e/b/9/3/7/thumb_53990b8fe89e2.jpg','','01','1');");
E_D("replace into `p_flash` values('54','85fa9a93c81ad7e','http://v.24so.com/uploads/8/85fa9a93c81ad7e/1/8/c/b/thumb_53990bae9c562.jpg','','2','1');");
E_D("replace into `p_flash` values('55','85fa9a93c81ad7e','http://v.24so.com/uploads/8/85fa9a93c81ad7e/c/6/d/3/thumb_53990bd2501d6.jpg','','3','1');");
E_D("replace into `p_flash` values('56','a0bbb64eef61a16','http://v.24so.com/uploads/a/a0bbb64eef61a16/0/a/9/8/thumb_539919bee920f.jpg','','','1');");
E_D("replace into `p_flash` values('61','879c2f933017228','http://v.24so.com/tpl/static/attachment/background/view/7.jpg','','3','2');");
E_D("replace into `p_flash` values('62','a0bbb64eef61a16','http://v.24so.com/uploads/a/a0bbb64eef61a16/7/0/e/f/thumb_53995b4138e7a.jpg','','','1');");
E_D("replace into `p_flash` values('60','879c2f933017228','http://v.24so.com/tpl/static/attachment/background/view/6.jpg','','2','2');");
E_D("replace into `p_flash` values('63','a0bbb64eef61a16','http://v.24so.com/uploads/a/a0bbb64eef61a16/0/8/e/f/thumb_53995b5c223cc.jpg','','','1');");
E_D("replace into `p_flash` values('64','a0bbb64eef61a16','http://v.24so.com/uploads/a/a0bbb64eef61a16/9/2/e/0/thumb_53995b752926d.jpg','','','1');");
E_D("replace into `p_flash` values('65','a0bbb64eef61a16','http://v.24so.com/uploads/a/a0bbb64eef61a16/1/d/2/3/thumb_53995b8d3c3b7.jpg','','','1');");
E_D("replace into `p_flash` values('71','kcmjgr1402792677','http://v.24so.com/uploads/k/kcmjgr1402792677/f/1/5/3/thumb_539cf4fcc644b.jpg','','曲面热压成型机','1');");
E_D("replace into `p_flash` values('79','kcbvom1402885756','http://v.24so.com/uploads/k/kcbvom1402885756/c/9/b/a/thumb_539e5d1c8e055.jpg','','','1');");
E_D("replace into `p_flash` values('77','kcbvom1402885756','http://v.24so.com/uploads/k/kcbvom1402885756/3/8/b/9/thumb_539e5ce6b8341.jpg','','','1');");
E_D("replace into `p_flash` values('72','kcmjgr1402792677','http://v.24so.com/uploads/k/kcmjgr1402792677/2/3/1/a/thumb_539cf5128181f.jpg','','模压门','1');");
E_D("replace into `p_flash` values('78','kcbvom1402885756','http://v.24so.com/uploads/k/kcbvom1402885756/f/a/0/1/thumb_539e5d03b95bc.jpg','','','1');");
E_D("replace into `p_flash` values('73','kcmjgr1402792677','http://v.24so.com/uploads/k/kcmjgr1402792677/0/9/0/4/thumb_539cf528e6ac8.jpg','','','1');");
E_D("replace into `p_flash` values('74','diwxqe1402738986','http://v.24so.com/uploads/d/diwxqe1402738986/7/0/f/1/thumb_539d1001772e3.jpg','','东方闪电','2');");
E_D("replace into `p_flash` values('80','kcbvom1402885756','http://v.24so.com/uploads/k/kcbvom1402885756/e/6/1/4/thumb_539e5d41a23d9.jpg','','','1');");
E_D("replace into `p_flash` values('81','ftxvbg1402882875','http://v.24so.com/uploads/f/ftxvbg1402882875/2/4/9/3/thumb_539e7a6f5451c.png','','1','1');");
E_D("replace into `p_flash` values('82','ftxvbg1402882875','http://v.24so.com/uploads/f/ftxvbg1402882875/4/6/8/5/thumb_539e7a817b0cd.png','','2','1');");
E_D("replace into `p_flash` values('83','ftxvbg1402882875','http://v.24so.com/uploads/f/ftxvbg1402882875/c/7/f/9/thumb_539e7a97bb013.png','','3','1');");
E_D("replace into `p_flash` values('84','ftxvbg1402882875','http://v.24so.com/uploads/f/ftxvbg1402882875/b/5/8/d/thumb_539e7aaa4aa1d.png','','4','1');");
E_D("replace into `p_flash` values('85','ftxvbg1402882875','http://v.24so.com/uploads/f/ftxvbg1402882875/8/f/5/c/thumb_539e820b75746.jpg','','欢迎关注襄阳好灶头','2');");
E_D("replace into `p_flash` values('86','oucryx1402886291','http://v.24so.com/uploads/o/oucryx1402886291/f/6/7/a/thumb_539e9c705c0b2.jpg','','','1');");
E_D("replace into `p_flash` values('87','oucryx1402886291','http://v.24so.com/uploads/o/oucryx1402886291/e/f/b/3/thumb_539e9c7f8853b.jpg','','','1');");
E_D("replace into `p_flash` values('88','oucryx1402886291','http://v.24so.com/uploads/o/oucryx1402886291/5/0/d/2/thumb_539e9c98c829b.jpg','','','1');");
E_D("replace into `p_flash` values('89','qnrwlm1402888833','http://v.24so.com/uploads/q/qnrwlm1402888833/b/0/e/2/thumb_539eab129c7c1.jpg','','幻灯片1','1');");
E_D("replace into `p_flash` values('90','qnrwlm1402888833','http://v.24so.com/uploads/q/qnrwlm1402888833/7/3/8/8/thumb_539ea3cc2c52c.jpg','','幻灯片2','1');");
E_D("replace into `p_flash` values('91','qnrwlm1402888833','http://v.24so.com/uploads/q/qnrwlm1402888833/3/9/3/9/thumb_539ea3fc3ba4c.jpg','','幻灯片3','1');");
E_D("replace into `p_flash` values('94','ysemxs1402913598','http://v.24so.com/uploads/y/ysemxs1402913598/4/b/5/d/thumb_539fbb6acbfee.png','','','1');");
E_D("replace into `p_flash` values('93','ysemxs1402913598','http://v.24so.com/uploads/y/ysemxs1402913598/8/b/b/c/thumb_539fb24a2daec.png','','','1');");
E_D("replace into `p_flash` values('95','ysemxs1402913598','http://v.24so.com/uploads/y/ysemxs1402913598/8/4/5/1/thumb_539fb5ef8088a.png','','','1');");
E_D("replace into `p_flash` values('96','babhpu1402976106','http://v.24so.com/uploads/b/babhpu1402976106/e/8/1/e/thumb_539fb95d01de2.jpg','','1','1');");
E_D("replace into `p_flash` values('97','babhpu1402976106','http://v.24so.com/uploads/b/babhpu1402976106/4/1/1/a/thumb_539fb96ebc8a2.jpg','','2','1');");
E_D("replace into `p_flash` values('98','0d8553ddf4f8102','http://v.24so.com/uploads/0/0d8553ddf4f8102/1/a/9/6/thumb_539fbd239beca.jpg','','新东方在线洛阳','2');");
E_D("replace into `p_flash` values('99','gdfrep1402472524','http://v.24so.com/uploads/g/gdfrep1402472524/d/b/f/e/thumb_53a008fb17f4e.jpg','','瑞昌房产','2');");
E_D("replace into `p_flash` values('100','qweeqm1402996029','http://v.24so.com/uploads/q/qweeqm1402996029/a/c/e/c/thumb_53a010aa8ebb7.jpg','','哨子面','1');");
E_D("replace into `p_flash` values('101','qweeqm1402996029','http://v.24so.com/uploads/q/qweeqm1402996029/3/2/7/0/thumb_53a0157e15888.jpg','','裤带扯面','1');");
E_D("replace into `p_flash` values('102','qweeqm1402996029','http://v.24so.com/uploads/q/qweeqm1402996029/3/f/8/8/thumb_53a015b45a415.jpg','','老汤麻翅','1');");
E_D("replace into `p_flash` values('103','junxtg1402455483','http://v.24so.com/uploads/j/junxtg1402455483/f/f/4/8/thumb_53a12a046e4f4.jpg','','幻灯片','1');");
E_D("replace into `p_flash` values('104','junxtg1402455483','http://v.24so.com/uploads/j/junxtg1402455483/8/b/e/a/thumb_53a12aabab464.JPG','','幻灯片','1');");

require("../../inc/footer.php");
?>