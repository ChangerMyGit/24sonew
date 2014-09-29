<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_vote_item`;");
E_C("CREATE TABLE `p_vote_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL COMMENT 'vote_id',
  `item` varchar(50) NOT NULL,
  `vcount` int(11) NOT NULL,
  `startpicurl` varchar(200) NOT NULL DEFAULT '',
  `tourl` varchar(200) NOT NULL DEFAULT '',
  `rank` tinyint(4) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk");
E_D("replace into `p_vote_item` values('1','1','大转盘','1','http://v.24so.com/uploads/1/1fee0922b0a40db/d/1/5/5/thumb_53902089a1726.jpg','#','1');");
E_D("replace into `p_vote_item` values('2','1','优惠券','1','http://v.24so.com/uploads/1/1fee0922b0a40db/2/a/6/0/thumb_53902099c5213.jpg','#','2');");
E_D("replace into `p_vote_item` values('3','1','刮刮卡','1','http://v.24so.com/uploads/1/1fee0922b0a40db/9/4/b/9/thumb_539020a457711.png','#','3');");
E_D("replace into `p_vote_item` values('4','1','砸金蛋','1','http://v.24so.com/uploads/1/1fee0922b0a40db/f/6/2/1/thumb_539020b5d520a.jpg','#','4');");
E_D("replace into `p_vote_item` values('5','2','是','2','','','1');");
E_D("replace into `p_vote_item` values('6','2','不是','0','','','1');");
E_D("replace into `p_vote_item` values('7','2','不确定','0','','','1');");
E_D("replace into `p_vote_item` values('8','3','网上购物','1','','','1');");
E_D("replace into `p_vote_item` values('9','3','实体购物','0','','','2');");
E_D("replace into `p_vote_item` values('10','4','网上购物','2','http://v.24so.com/uploads/t/tvjxcc1402290548/2/c/1/2/thumb_539691fc1e3ce.jpg','#','1');");
E_D("replace into `p_vote_item` values('11','4','实体购物','1','http://v.24so.com/uploads/t/tvjxcc1402290548/6/3/5/2/thumb_5396921316a7e.jpg','#','2');");

require("../../inc/footer.php");
?>