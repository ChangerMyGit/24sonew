<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_vote_record`;");
E_C("CREATE TABLE `p_vote_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(50) NOT NULL COMMENT '投票项 1,2,3,',
  `vid` int(11) NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `touched` tinyint(4) NOT NULL,
  `touch_time` int(11) NOT NULL COMMENT '投票日期',
  `token` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=gbk");
E_D("replace into `p_vote_record` values('1','4,3,2,1','1','oloBst_R8BRLl_fsXOzagt7n6PW8','1','1401954722','1fee0922b0a40db');");
E_D("replace into `p_vote_record` values('2','8','3','ocTK_jn_YbbzS3RpPvyIsmjWeXLA','1','1402371567','tvjxcc1402290548');");
E_D("replace into `p_vote_record` values('3','10','4','ocTK_jlU0XGUD870bAisXx8VexA0','1','1402379383','tvjxcc1402290548');");
E_D("replace into `p_vote_record` values('4','11','4','ocTK_jk6Bd5odJN45dqQJkWKm-oY','1','1402388726','tvjxcc1402290548');");
E_D("replace into `p_vote_record` values('5','10','4','ocTK_ju33xXvCadvIxJ8Jk9IQEz4','1','1402397152','tvjxcc1402290548');");

require("../../inc/footer.php");
?>