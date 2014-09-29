<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_leave`;");
E_C("CREATE TABLE `p_leave` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wecha_id` varchar(60) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `token` varchar(60) NOT NULL,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk");
E_D("replace into `p_leave` values('1','oI45vuCm5L-mPGtixkrUYq_eNnEo','1','小野猪','你好','1d36324a811c583','1401979681');");
E_D("replace into `p_leave` values('2','o0Ojijr_-uCytIA9cMgc8U9hJw9o','1','老刘','你好，怎么合作。。。。','879c2f933017228','1402022824');");
E_D("replace into `p_leave` values('3','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','1','郑飞','爱你','a3a7daf71176d5b','1402318376');");
E_D("replace into `p_leave` values('4','oVaHTjtiwp7pYuo6akcKDC89ks-k','1','小草','爱你','a3a7daf71176d5b','1402320016');");
E_D("replace into `p_leave` values('5','oVaHTjuS3ED528WffsEeWRW57C-0','1','勇','不错','a3a7daf71176d5b','1402321942');");
E_D("replace into `p_leave` values('6','ocTK_jkCN97Z3vZa788pyHuTW1so','1','hello.','how much?','tvjxcc1402290548','1402462176');");
E_D("replace into `p_leave` values('7','ocTK_jkCN97Z3vZa788pyHuTW1so','1','he&apos;ll','ddkdkd','tvjxcc1402290548','1402463390');");
E_D("replace into `p_leave` values('8','oxSa1jn6Nl-kYT3nBXWV9a-_i1l4','1','杨慧慧','大家好','ainbtq1402292243','1402476536');");
E_D("replace into `p_leave` values('9','o5GVDt7ISJPXyzMMUe-0asJhTN3U','1','春华秋实','0k？','85fa9a93c81ad7e','1402480667');");

require("../../inc/footer.php");
?>