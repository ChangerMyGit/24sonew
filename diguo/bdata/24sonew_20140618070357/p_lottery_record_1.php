<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_lottery_record`;");
E_C("CREATE TABLE `p_lottery_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL,
  `usenums` tinyint(1) NOT NULL DEFAULT '0' COMMENT '用户使用次数',
  `wecha_id` varchar(60) NOT NULL COMMENT '微信唯一识别码',
  `token` varchar(30) NOT NULL,
  `islottery` int(1) NOT NULL COMMENT '是否中奖',
  `wecha_name` varchar(60) NOT NULL COMMENT '微信号',
  `phone` varchar(15) NOT NULL,
  `sn` varchar(13) NOT NULL COMMENT '中奖后序列号',
  `time` int(11) NOT NULL,
  `prize` varchar(50) NOT NULL DEFAULT '' COMMENT '已中奖项',
  `sendstutas` int(11) NOT NULL DEFAULT '0',
  `sendtime` int(11) NOT NULL,
  PRIMARY KEY (`id`,`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=gbk");
E_D("replace into `p_lottery_record` values('1','1','5','o0Ojijjr4Ecdm-Ktxlajq5qpA0vg','879c2f933017228','0','','','','1401952084','7','0','0');");
E_D("replace into `p_lottery_record` values('2','1','5','o0Ojijjr4Ecdm-Ktxlajq5qpA0vg','879c2f933017228','0','','','','1401952531','7','0','0');");
E_D("replace into `p_lottery_record` values('3','1','5','o0Ojijjr4Ecdm-Ktxlajq5qpA0vg','879c2f933017228','0','','','','1401952630','7','0','0');");
E_D("replace into `p_lottery_record` values('4','1','5','o0Ojijjr4Ecdm-Ktxlajq5qpA0vg','879c2f933017228','0','','','','1401952642','7','0','0');");
E_D("replace into `p_lottery_record` values('5','1','5','o0Ojijjr4Ecdm-Ktxlajq5qpA0vg','879c2f933017228','0','','','','1401952655','7','0','0');");
E_D("replace into `p_lottery_record` values('6','3','1','oloBst_R8BRLl_fsXOzagt7n6PW8','1fee0922b0a40db','0','','','','1401955434','7','0','0');");
E_D("replace into `p_lottery_record` values('7','1','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','0','','','','1401983534','7','0','0');");
E_D("replace into `p_lottery_record` values('8','1','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','0','','','','1401983544','7','0','0');");
E_D("replace into `p_lottery_record` values('9','1','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','0','','','','1401983552','7','0','0');");
E_D("replace into `p_lottery_record` values('10','1','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','0','','','','1401983560','7','0','0');");
E_D("replace into `p_lottery_record` values('11','1','5','o0Ojijr_-uCytIA9cMgc8U9hJw9o','879c2f933017228','0','','','','1401983578','7','0','0');");
E_D("replace into `p_lottery_record` values('12','1','1','o0OjijsgZD5e7dkrJxKY89cwNUFc','879c2f933017228','0','','','','1402122081','7','0','0');");
E_D("replace into `p_lottery_record` values('13','1','1','o0OjijtnVl_TAQX8xnaOS8oa3BsU','879c2f933017228','1','','','5393307cccc85','1402155132','3','0','0');");
E_D("replace into `p_lottery_record` values('14','1','5','o0OjijnW3Bts32Db0_HHQ3gu16os','879c2f933017228','0','','','','1402213994','7','0','0');");
E_D("replace into `p_lottery_record` values('15','1','5','o0OjijnW3Bts32Db0_HHQ3gu16os','879c2f933017228','0','','','','1402214006','7','0','0');");
E_D("replace into `p_lottery_record` values('16','1','5','o0OjijnW3Bts32Db0_HHQ3gu16os','879c2f933017228','0','','','','1402219911','7','0','0');");
E_D("replace into `p_lottery_record` values('17','1','5','o0OjijnW3Bts32Db0_HHQ3gu16os','879c2f933017228','0','','','','1402219922','7','0','0');");
E_D("replace into `p_lottery_record` values('18','1','5','o0OjijnW3Bts32Db0_HHQ3gu16os','879c2f933017228','0','','','','1402219934','7','0','0');");
E_D("replace into `p_lottery_record` values('19','9','1','oVaHTjtiwp7pYuo6akcKDC89ks-k','a3a7daf71176d5b','0','','','','1402299476','7','0','0');");
E_D("replace into `p_lottery_record` values('20','8','1','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','a3a7daf71176d5b','1','','','53959e9027fea','1402314384','2','0','0');");
E_D("replace into `p_lottery_record` values('21','8','1','oVaHTjqO7Tr4lXlass_5J6M5sFw4','a3a7daf71176d5b','0','','','','1402321251','7','0','0');");
E_D("replace into `p_lottery_record` values('22','11','1','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','1','','','539665bdccfb3','1402365373','2','0','0');");
E_D("replace into `p_lottery_record` values('23','8','1','oVaHTjjGfKs9N1Vj27pYFORQxMI0','a3a7daf71176d5b','1','','','53966bbdbe652','1402366909','2','0','0');");
E_D("replace into `p_lottery_record` values('24','11','1','ozbL_jnZo1BsGT1ZKBoRBnsGclSQ','mhsqxc1401953951','1','','','53966fa41a5d4','1402367908','2','0','0');");
E_D("replace into `p_lottery_record` values('25','11','1','ozbL_jl-5zOozIB0tHEl_zJQ5hiU','mhsqxc1401953951','1','','','5396841d27ecc','1402373149','1','0','0');");
E_D("replace into `p_lottery_record` values('26','12','1','ozbL_jtmluwL8s_9uoDabH9ZO5d8','mhsqxc1401953951','0','','','','1402373292','7','0','0');");
E_D("replace into `p_lottery_record` values('27','12','3','ozbL_jmDVV2hwSRwCNxWb5Z_SfqY','mhsqxc1401953951','0','','','','1402373373','7','0','0');");
E_D("replace into `p_lottery_record` values('28','12','3','ozbL_jmDVV2hwSRwCNxWb5Z_SfqY','mhsqxc1401953951','0','','','','1402373383','7','0','0');");
E_D("replace into `p_lottery_record` values('29','12','3','ozbL_jmDVV2hwSRwCNxWb5Z_SfqY','mhsqxc1401953951','0','','','','1402373391','7','0','0');");
E_D("replace into `p_lottery_record` values('30','1','1','o0Ojijtg_nnePgzqPEJ3OlmmAHAc','879c2f933017228','0','','','','1402389933','7','0','0');");
E_D("replace into `p_lottery_record` values('31','14','1','oKZYBj-JRG3Y-Ml88t7tDXZl5-5g','yosjzs1402383816','0','','','','1402452238','7','0','0');");
E_D("replace into `p_lottery_record` values('32','14','2','oKZYBj5FawZHd0whZmmucOScTKSE','yosjzs1402383816','0','','','','1402453442','7','0','0');");
E_D("replace into `p_lottery_record` values('33','12','3','','mhsqxc1401953951','0','','','','1402555437','7','0','0');");
E_D("replace into `p_lottery_record` values('34','12','3','','mhsqxc1401953951','0','','','','1402555657','7','0','0');");
E_D("replace into `p_lottery_record` values('35','12','3','','mhsqxc1401953951','0','','','','1402555704','7','0','0');");
E_D("replace into `p_lottery_record` values('36','14','2','oKZYBj5FawZHd0whZmmucOScTKSE','yosjzs1402383816','0','','','','1402567612','7','0','0');");
E_D("replace into `p_lottery_record` values('37','21','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','0','','','','1402803274','7','0','0');");
E_D("replace into `p_lottery_record` values('38','21','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','0','','','','1402803287','7','0','0');");
E_D("replace into `p_lottery_record` values('39','21','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','0','','','','1402803308','7','0','0');");
E_D("replace into `p_lottery_record` values('40','22','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','0','','','','1402803455','7','0','0');");
E_D("replace into `p_lottery_record` values('41','22','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','0','','','','1402803558','7','0','0');");
E_D("replace into `p_lottery_record` values('42','22','3','o3Cjttzbba4dmlxZqlXGYxKn4Eqg','kcmjgr1402792677','1','','','539d15a9b6466','1402803625','1','0','0');");
E_D("replace into `p_lottery_record` values('43','23','1','oUQrDuFbKCygUl9J_3jqs75T8hLE','diwxqe1402738986','0','','','','1402886059','7','0','0');");
E_D("replace into `p_lottery_record` values('44','26','3','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','0','','','','1402997394','7','0','0');");
E_D("replace into `p_lottery_record` values('45','26','3','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','0','','','','1402997403','7','0','0');");
E_D("replace into `p_lottery_record` values('46','26','3','oYdkquDNf8szXClnqPfxHgxt2XQo','oucryx1402886291','0','','','','1402997972','7','0','0');");
E_D("replace into `p_lottery_record` values('47','27','1','oZ11euGuqsZI1kUxoY2FSftbHGtg','eujhzm1403053453','1','yh302748687','13387509543','53a0efafa6c37','1403056047','1','1','1403056109');");
E_D("replace into `p_lottery_record` values('48','27','1','oZ11euIZfD7qHxlfaMCCNdpTCqRM','eujhzm1403053453','1','','','53a0efd113ec3','1403056081','1','0','0');");
E_D("replace into `p_lottery_record` values('49','27','1','oZ11euGtBe99xrfScCJEwcgzX7Ps','eujhzm1403053453','0','','','','1403056492','7','0','0');");
E_D("replace into `p_lottery_record` values('50','27','1','oZ11euGVX1JMrvKflIFVyhhnDv2s','eujhzm1403053453','0','','','','1403060024','7','0','0');");
E_D("replace into `p_lottery_record` values('51','27','1','oZ11euD3C6Z85wQIEIS3lAynNmws','eujhzm1403053453','0','','','','1403060085','7','0','0');");
E_D("replace into `p_lottery_record` values('52','27','1','oZ11euM6AjA-ATnPSn1NhE2UoLTY','eujhzm1403053453','0','','','','1403061508','7','0','0');");
E_D("replace into `p_lottery_record` values('53','27','1','oZ11euEiKYMj6NhEDQxrSXRccqlw','eujhzm1403053453','0','','','','1403062164','7','0','0');");
E_D("replace into `p_lottery_record` values('54','27','1','oZ11euINvWJpnfYEJlI0hDETUYfw','eujhzm1403053453','0','','','','1403062168','7','0','0');");
E_D("replace into `p_lottery_record` values('55','28','1','','junxtg1402455483','0','','','','1403073737','7','0','0');");

require("../../inc/footer.php");
?>