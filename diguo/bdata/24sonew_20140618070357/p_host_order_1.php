<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_host_order`;");
E_C("CREATE TABLE `p_host_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `book_people` varchar(50) NOT NULL COMMENT 'Ԥ����',
  `tel` varchar(13) NOT NULL COMMENT '�绰',
  `check_in` int(11) NOT NULL COMMENT '��סʱ��',
  `check_out` int(11) NOT NULL COMMENT '�뿪ʱ��',
  `room_type` varchar(50) NOT NULL COMMENT '��������',
  `book_time` int(11) NOT NULL COMMENT 'Ԥ��ʱ��',
  `book_num` int(11) NOT NULL COMMENT 'Ԥ������',
  `price` decimal(10,2) NOT NULL COMMENT ' �۸�',
  `order_status` int(11) NOT NULL COMMENT '����״̬ 1 �ɹ�,2 ʧ��,3 δ����',
  `hid` int(11) NOT NULL COMMENT '�����̼�id',
  `remarks` varchar(250) NOT NULL COMMENT '���Ա�ע',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk");

require("../../inc/footer.php");
?>