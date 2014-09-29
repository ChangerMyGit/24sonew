<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_member_card_sign`;");
E_C("CREATE TABLE `p_member_card_sign` (
  `id` int(11) NOT NULL,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `sign_time` int(11) NOT NULL,
  `is_sign` int(11) NOT NULL,
  `score_type` int(11) NOT NULL,
  `expense` int(11) NOT NULL,
  `sell_expense` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk");
E_D("replace into `p_member_card_sign` values('0','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','1fee0922b0a40db','oloBst_R8BRLl_fsXOzagt7n6PW8','1401957233','1','1','1','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1401966436','1','1','10','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1402124140','1','1','10','0');");
E_D("replace into `p_member_card_sign` values('0','a3a7daf71176d5b','oVaHTjqO7Tr4lXlass_5J6M5sFw4','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','a3a7daf71176d5b','oVaHTjqO7Tr4lXlass_5J6M5sFw4','1402321502','1','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1402345516','1','1','10','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jm1MwOXNEWfR0PgGUSznT8E','1402362371','1','1','10','0');");
E_D("replace into `p_member_card_sign` values('0','ainbtq1402292243','oxSa1jn6Nl-kYT3nBXWV9a-_i1l4','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','ainbtq1402292243','oxSa1jn6Nl-kYT3nBXWV9a-_i1l4','1402475435','1','1','1','0');");
E_D("replace into `p_member_card_sign` values('0','mhsqxc1401953951','ozbL_jtmluwL8s_9uoDabH9ZO5d8','1402498383','1','1','10','0');");
E_D("replace into `p_member_card_sign` values('0','a3a7daf71176d5b','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','0','0','1','0','0');");
E_D("replace into `p_member_card_sign` values('0','a3a7daf71176d5b','oVaHTjjBi6PRsiOFRJaXafZ4yZWs','1402558917','1','1','0','0');");

require("../../inc/footer.php");
?>