<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_text`;");
E_C("CREATE TABLE `p_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `type` varchar(1) NOT NULL,
  `text` text NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `updatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk");
E_D("replace into `p_text` values('1','2','',' 你好','1',' 你好','1401872274','1401872274','0','879c2f933017228');");
E_D("replace into `p_text` values('2','2','','2','1','谢谢关注','1401950863','1401950863','0','879c2f933017228');");
E_D("replace into `p_text` values('3','13','','在线预订','1','快捷方便','1402282765','1402282765','0','ocbtfr1402282562');");
E_D("replace into `p_text` values('4','18','qdtsmian@163.com','你好','1','你好','1402450002','1402452064','0','yosjzs1402383816');");
E_D("replace into `p_text` values('5','27','','会员服务','1','会员可通过微信平台直接预约服务时间，之后会收到回复确认，或另行安排时间与请您再次确认。留言直接输入即可。','1402483772','1402483772','0','85fa9a93c81ad7e');");
E_D("replace into `p_text` values('6','28','','你好','1','你好 欢迎关注掌上爱情','1402538110','1402538110','0','qxrzxy1402460503');");

require("../../inc/footer.php");
?>