<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_product_attribute`;");
E_C("CREATE TABLE `p_product_attribute` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(10) unsigned NOT NULL COMMENT '����ID',
  `pid` int(10) unsigned NOT NULL COMMENT '��ƷID',
  `name` varchar(100) NOT NULL COMMENT '������',
  `value` varchar(100) NOT NULL COMMENT '����ֵ',
  PRIMARY KEY (`id`),
  KEY `aid` (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=gbk");
E_D("replace into `p_product_attribute` values('1','2','62','����','10');");
E_D("replace into `p_product_attribute` values('2','2','63','����','10');");
E_D("replace into `p_product_attribute` values('3','2','64','����','10');");
E_D("replace into `p_product_attribute` values('4','2','65','����','10');");
E_D("replace into `p_product_attribute` values('5','2','66','����','10');");
E_D("replace into `p_product_attribute` values('6','2','67','����','10');");
E_D("replace into `p_product_attribute` values('7','2','68','����','10');");
E_D("replace into `p_product_attribute` values('8','2','69','����','10');");
E_D("replace into `p_product_attribute` values('9','2','70','����','10');");
E_D("replace into `p_product_attribute` values('10','2','71','����','10');");
E_D("replace into `p_product_attribute` values('11','2','72','����','10');");
E_D("replace into `p_product_attribute` values('12','2','73','����','10');");
E_D("replace into `p_product_attribute` values('13','2','74','����','10');");
E_D("replace into `p_product_attribute` values('14','2','75','����','10');");
E_D("replace into `p_product_attribute` values('15','2','76','����','10');");
E_D("replace into `p_product_attribute` values('16','2','77','����','10');");
E_D("replace into `p_product_attribute` values('17','2','78','����','10');");
E_D("replace into `p_product_attribute` values('18','2','79','����','10');");
E_D("replace into `p_product_attribute` values('19','2','80','����','10');");
E_D("replace into `p_product_attribute` values('20','2','81','����','10');");
E_D("replace into `p_product_attribute` values('21','9','82','�ɿ���','��������');");
E_D("replace into `p_product_attribute` values('22','10','83','�ɿ���','��������');");
E_D("replace into `p_product_attribute` values('23','10','84','�ɿ���','��������');");
E_D("replace into `p_product_attribute` values('24','10','85','�ɿ���','��������');");
E_D("replace into `p_product_attribute` values('25','11','86','â����','�۽�/���');");
E_D("replace into `p_product_attribute` values('26','12','87','����','�۽�/���');");
E_D("replace into `p_product_attribute` values('27','11','87','â����','');");
E_D("replace into `p_product_attribute` values('28','13','88','����','����/���');");
E_D("replace into `p_product_attribute` values('29','13','89','����','����/���');");
E_D("replace into `p_product_attribute` values('30','14','90','����/����','��ͷ����');");
E_D("replace into `p_product_attribute` values('31','15','91','�̷�','�̷�');");
E_D("replace into `p_product_attribute` values('32','12','102','����','�۽�/���');");
E_D("replace into `p_product_attribute` values('33','11','102','â����','�۽�/���');");
E_D("replace into `p_product_attribute` values('34','12','103','����','�۽�/���');");
E_D("replace into `p_product_attribute` values('35','11','103','â����','�۽�/���');");
E_D("replace into `p_product_attribute` values('36','16','105','����/����','����/����');");
E_D("replace into `p_product_attribute` values('37','17','105','����/�ɹ�','����/�ɹ�');");
E_D("replace into `p_product_attribute` values('38','18','105','���Ϲ������','���Ϲ������');");
E_D("replace into `p_product_attribute` values('39','19','105','��ʳ����','��ʳ����');");
E_D("replace into `p_product_attribute` values('40','20','105','��װ','��װ');");
E_D("replace into `p_product_attribute` values('41','16','106','����/����','����/����');");

require("../../inc/footer.php");
?>