<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_shake`;");
E_C("CREATE TABLE `p_shake` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `isact` int(1) NOT NULL DEFAULT '0',
  `title` varchar(40) NOT NULL,
  `keyword` varchar(100) NOT NULL DEFAULT '',
  `intro` varchar(400) NOT NULL DEFAULT '',
  `thumb` varchar(200) NOT NULL DEFAULT '',
  `shownum` int(11) NOT NULL DEFAULT '10',
  `joinnum` int(11) DEFAULT NULL,
  `shaketype` int(11) NOT NULL DEFAULT '1',
  `token` varchar(40) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `isopen` int(1) NOT NULL DEFAULT '0',
  `clienttime` int(11) NOT NULL DEFAULT '3',
  `showtime` int(10) NOT NULL DEFAULT '3',
  `endtime` varchar(13) DEFAULT NULL,
  `background` varchar(150) DEFAULT NULL,
  `backgroundmusic` varchar(150) DEFAULT NULL,
  `music` varchar(150) DEFAULT NULL,
  `usetime` int(10) NOT NULL DEFAULT '0',
  `rule` varchar(600) NOT NULL DEFAULT '',
  `info` varchar(600) NOT NULL DEFAULT '',
  `starttime` int(11) NOT NULL,
  `endshake` int(11) NOT NULL,
  `qrcode` varchar(150) DEFAULT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_shake` values('1','1','摇一摇','摇一摇','摇一摇','http://v.24so.com/tpl/static/attachment/icon/lovely/candy.png','10',NULL,'1','1fee0922b0a40db','','1','3','3',NULL,'http://v.24so.com/tpl/static/attachment/background/view/4.jpg','','','2','摇一摇','摇一摇','3','600','','1401955993');");
E_D("replace into `p_shake` values('2','1','遥大奖','遥大奖','遥一遥，交朋友，有大礼。','http://v.24so.com/uploads/m/mhsqxc1401953951/4/2/a/f/thumb_5396073955bfb.jpg','10',NULL,'1','mhsqxc1401953951','','1','3','3',NULL,'','','','60','','','3','600','','1402341292');");
E_D("replace into `p_shake` values('3','1','囧死电话费','摇一摇','卫生局公布的 艹vvwbjmmbh电话费个热闹不过让台风肆虐岌岌可危如果国际货币女色你说nwmvnv，靠父母为我们将违法所得还不能如果符合闺女hfdbn 好贵妇人错过任何不个天人合一 刚回家同意udfrtg ','','10',NULL,'1','diwxqe1402738986','','1','3','3',NULL,'','','','3','','','3','100','','1402886500');");

require("../../inc/footer.php");
?>