<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_attribute`;");
E_C("CREATE TABLE `p_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL,
  `catid` int(10) unsigned NOT NULL COMMENT '����ID',
  `name` varchar(100) NOT NULL COMMENT '������',
  `value` varchar(100) NOT NULL COMMENT '����ֵ',
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`catid`),
  KEY `catid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=gbk");
E_D("replace into `p_attribute` values('1','mhsqxc1401953951','1','��ʨ��','1');");
E_D("replace into `p_attribute` values('2','tvjxcc1402290548','5','��������','ʳƷ����');");
E_D("replace into `p_attribute` values('3','tvjxcc1402290548','5','�۽�/���','ʳƷ����');");
E_D("replace into `p_attribute` values('4','tvjxcc1402290548','5','����/���','ʳƷ����');");
E_D("replace into `p_attribute` values('5','tvjxcc1402290548','5','����/��Ҷ','ʳƷ����');");
E_D("replace into `p_attribute` values('6','tvjxcc1402290548','5','ţ����Ʒ','ʳƷ����');");
E_D("replace into `p_attribute` values('7','tvjxcc1402290548','5','ˮ/����','ʳƷ����');");
E_D("replace into `p_attribute` values('8','tvjxcc1402290548','5','��������','ʳƷ����');");
E_D("replace into `p_attribute` values('12','tvjxcc1402290548','7','����','�۽�/���');");
E_D("replace into `p_attribute` values('10','tvjxcc1402290548','6','�ɿ���','��������');");
E_D("replace into `p_attribute` values('11','tvjxcc1402290548','7','â����','�۽�/���');");
E_D("replace into `p_attribute` values('13','tvjxcc1402290548','8','����','����/���');");
E_D("replace into `p_attribute` values('14','tvjxcc1402290548','9','����/����','��ͷ����');");
E_D("replace into `p_attribute` values('15','tvjxcc1402290548','10','�̷�','�̷�');");
E_D("replace into `p_attribute` values('16','glkpuw1402307164','14','����/����','����/����');");
E_D("replace into `p_attribute` values('21','oucryx1402886291','19','������','100');");

require("../../inc/footer.php");
?>