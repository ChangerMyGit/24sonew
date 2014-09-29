<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wall_message`;");
E_C("CREATE TABLE `p_wall_message` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `wallid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(20) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `content` varchar(500) NOT NULL DEFAULT '',
  `picture` varchar(150) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `wallid` (`wallid`,`token`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk");
E_D("replace into `p_wall_message` values('1','1','1','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','大家好，我是小白鲨','','1401956399');");
E_D("replace into `p_wall_message` values('2','1','1','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','大家好，我是小白鲨','','1401956527');");
E_D("replace into `p_wall_message` values('3','1','1','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','微路由','','1401956709');");
E_D("replace into `p_wall_message` values('4','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','微信上墙测试，本信息由技术支持发送','','1402111038');");
E_D("replace into `p_wall_message` values('5','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','我要上墙','','1402111109');");
E_D("replace into `p_wall_message` values('6','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','厄尔日本兵','','1402111307');");
E_D("replace into `p_wall_message` values('7','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','但不得不得不到','','1402111625');");
E_D("replace into `p_wall_message` values('8','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','设备*百度当断不断女百度','','1402111629');");
E_D("replace into `p_wall_message` values('9','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','东北部','','1402111632');");
E_D("replace into `p_wall_message` values('10','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','dbdbddbrc','','1402111639');");
E_D("replace into `p_wall_message` values('11','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','电话得不到','','1402111698');");
E_D("replace into `p_wall_message` values('12','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','倒不如你的价格','','1402111703');");
E_D("replace into `p_wall_message` values('13','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','百度得不到觉得','','1402111708');");
E_D("replace into `p_wall_message` values('14','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','成本经济','','1402111715');");
E_D("replace into `p_wall_message` values('15','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','砸金蛋','','1402121878');");
E_D("replace into `p_wall_message` values('16','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','商城','','1402121908');");
E_D("replace into `p_wall_message` values('17','2','2','879c2f933017228','o0Ojijr_-uCytIA9cMgc8U9hJw9o','团购','','1402245894');");

require("../../inc/footer.php");
?>