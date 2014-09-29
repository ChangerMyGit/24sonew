<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_greeting_card`;");
E_C("CREATE TABLE `p_greeting_card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  `click` int(11) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `picurl` varchar(200) NOT NULL,
  `bakcground_url` varchar(200) NOT NULL,
  `mp3` varchar(200) NOT NULL,
  `style` tinyint(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `zfname` varchar(60) NOT NULL,
  `copy` varchar(200) NOT NULL,
  `info` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=gbk");
E_D("replace into `p_greeting_card` values('1','1fee0922b0a40db','1','5','贺卡','贺卡','http://v.24so.com/tpl/static/attachment/icon/lovely/1.png','http://v.24so.com/tpl/static/attachment/background/view/2.jpg','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','0','24SO','24SO','?北京二十四搜科技有限公司','祝福你，亲爱的朋友','0');");
E_D("replace into `p_greeting_card` values('2','879c2f933017228','0','0','贺卡','贺卡','http://v.24so.com/uploads/8/879c2f933017228/6/d/5/e/thumb_5391977b7d534.png','http://v.24so.com/uploads/8/879c2f933017228/6/3/8/8/thumb_539197f434e63.png','http://v.24so.com/tpl/static/attachment/music/default/1.mp3','0','24SO','欢迎转发！','24SO','祝生日快乐','0');");

require("../../inc/footer.php");
?>