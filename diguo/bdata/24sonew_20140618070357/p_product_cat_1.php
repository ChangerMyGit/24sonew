<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_cat`;");
E_C("CREATE TABLE `p_product_cat` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL DEFAULT '',
  `parentid` mediumint(4) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  `norms` varchar(100) NOT NULL COMMENT '�����Ʒ�Ĺ��',
  `color` varchar(100) NOT NULL COMMENT '�����Ʒ�����',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `token` (`token`),
  KEY `dining` (`dining`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_cat` values('3','mhsqxc1401953951','΢�̳�','�̳�','0','http://v.24so.com/uploads/m/mhsqxc1401953951/7/8/1/b/thumb_53902f9638a40.jpg','0','1401958306','','');");
E_D("replace into `p_product_cat` values('2','1fee0922b0a40db','��װ','��װ','0','','0','1401957834','','');");
E_D("replace into `p_product_cat` values('4','879c2f933017228','�̿�','','0','http://img4.paipaiimg.com/00000000/item-53351D06-3E3A4250000000000401000036D7BD7C.0.200x200.jpg','0','1402020563','','');");
E_D("replace into `p_product_cat` values('7','tvjxcc1402290548','�۽�/���','ʳƷ����','0','http://v.24so.com/uploads/t/tvjxcc1402290548/3/b/c/c/thumb_5395c19a12b9f.jpg','0','1402323359','','');");
E_D("replace into `p_product_cat` values('6','tvjxcc1402290548','��������','','0','http://v.24so.com/uploads/t/tvjxcc1402290548/0/b/3/3/thumb_5395c3eeca1a6.jpg','0','1402323009','','');");
E_D("replace into `p_product_cat` values('8','tvjxcc1402290548','����/���','','0','http://v.24so.com/uploads/t/tvjxcc1402290548/f/2/3/c/thumb_5395c4e8c5d4f.jpg','0','1402324128','','');");
E_D("replace into `p_product_cat` values('9','tvjxcc1402290548','��ͷ����','','0','http://v.24so.com/uploads/t/tvjxcc1402290548/2/8/d/3/thumb_5395c5c0b6eff.jpg','0','1402324420','','');");
E_D("replace into `p_product_cat` values('10','tvjxcc1402290548','�̷�','','0','http://v.24so.com/uploads/t/tvjxcc1402290548/8/e/0/b/thumb_5395c74c38a70.jpg','0','1402324617','','');");
E_D("replace into `p_product_cat` values('11','yosjzs1402383816','�Ź�','�Ź��Żݽ�����','0','http://v.24so.com/uploads/y/yosjzs1402383816/5/b/0/f/thumb_5397c86d9a850.jpg','0','1402456198','','');");
E_D("replace into `p_product_cat` values('12','a0bbb64eef61a16','11','11','0','http://v.24so.com/uploads/a/a0bbb64eef61a16/6/e/1/3/thumb_539011ea9afb3.jpg','0','1402463551','Ь��','');");
E_D("replace into `p_product_cat` values('13','ainbtq1402292243','LED����','','0','http://v.24so.com/uploads/a/ainbtq1402292243/e/e/a/c/thumb_539805b893f01.jpg','0','1402471898','','');");
E_D("replace into `p_product_cat` values('14','glkpuw1402307164','����/����','������ζ����','0','http://v.24so.com/uploads/g/glkpuw1402307164/0/5/f/d/thumb_539941a739eec.jpg','0','1402547401','��','');");
E_D("replace into `p_product_cat` values('15','glkpuw1402307164','����/�ɹ�','','0','http://v.24so.com/uploads/g/glkpuw1402307164/3/b/d/1/thumb_5399426217705.jpg','0','1402552941','��','');");
E_D("replace into `p_product_cat` values('16','glkpuw1402307164','���Ϲ������','','0','http://v.24so.com/uploads/g/glkpuw1402307164/3/8/a/6/thumb_53994a1b48613.jpg','0','1402554911','ƿ','');");
E_D("replace into `p_product_cat` values('17','glkpuw1402307164','��ʳ����','','0','http://v.24so.com/uploads/g/glkpuw1402307164/6/6/d/9/thumb_53994aa4e0abe.jpg','0','1402555080','��','');");
E_D("replace into `p_product_cat` values('18','glkpuw1402307164','ɢװ/��װ','','0','http://v.24so.com/uploads/g/glkpuw1402307164/a/c/2/4/thumb_53994c8881633.jpg','0','1402555537','��','');");
E_D("replace into `p_product_cat` values('19','oucryx1402886291','������','','0','','0','1402996233','','');");

require("../../inc/footer.php");
?>