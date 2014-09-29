<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_node`;");
E_C("CREATE TABLE `p_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '�ڵ�����',
  `title` varchar(50) NOT NULL COMMENT '�˵�����',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '�Ƿ񼤻� 1���� 2����',
  `remark` varchar(255) DEFAULT NULL COMMENT '��ע˵��',
  `pid` smallint(6) unsigned NOT NULL COMMENT '��ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '�ڵ�ȼ�',
  `data` varchar(255) DEFAULT NULL COMMENT '���Ӳ���',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '����Ȩ��',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '�˵���ʾ���� 0:����ʾ 1:�����˵� 2:���˵�',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=gbk");
E_D("replace into `p_node` values('1','cms','���ڵ�','1','','0','1',NULL,'0','0');");
E_D("replace into `p_node` values('2','Site','վ�����','1','','1','0',NULL,'0','1');");
E_D("replace into `p_node` values('3','User','�û�����','1','','1','0',NULL,'0','1');");
E_D("replace into `p_node` values('4','extent','��չ����','1','','1','0',NULL,'10','1');");
E_D("replace into `p_node` values('5','article','���ݹ���','1','','1','0',NULL,'0','1');");
E_D("replace into `p_node` values('6','Site','վ������','1','','2','2',NULL,'0','2');");
E_D("replace into `p_node` values('7','index','������Ϣ����','1','','6','3',NULL,'0','2');");
E_D("replace into `p_node` values('8','safe','��ȫ����','1','','6','3',NULL,'0','2');");
E_D("replace into `p_node` values('9','email','��������','1','','6','3',NULL,'0','2');");
E_D("replace into `p_node` values('10','upfile','��������','1','','6','3',NULL,'0','2');");
E_D("replace into `p_node` values('11','Node','�ڵ����','1',NULL,'2','2',NULL,'0','2');");
E_D("replace into `p_node` values('12','add','��ӽڵ�','1','','11','3',NULL,'0','2');");
E_D("replace into `p_node` values('13','index','�ڵ��б�','1','','11','3',NULL,'0','2');");
E_D("replace into `p_node` values('14','insert','д��','1','0','11','3',NULL,'0','0');");
E_D("replace into `p_node` values('15','edit','�༭�ڵ�','1','0','11','3',NULL,'0','0');");
E_D("replace into `p_node` values('16','update','���½ڵ�','1','0','11','3',NULL,'0','0');");
E_D("replace into `p_node` values('17','del','ɾ���ڵ�','1','0','11','3',NULL,'0','0');");
E_D("replace into `p_node` values('18','User','վ������','1','0','3','2',NULL,'0','2');");
E_D("replace into `p_node` values('19','add','����û�','1','0','18','3',NULL,'0','2');");
E_D("replace into `p_node` values('20','index','վ���б�','1','0','18','3',NULL,'0','2');");
E_D("replace into `p_node` values('21','edit','�༭վ��','1','0','18','3',NULL,'0','0');");
E_D("replace into `p_node` values('22','insert','д�����ݿ�','1','0','18','3',NULL,'0','0');");
E_D("replace into `p_node` values('23','update','�����û�','1','0','18','3',NULL,'0','0');");
E_D("replace into `p_node` values('24','del','ɾ���û�','1','0','18','3',NULL,'0','0');");
E_D("replace into `p_node` values('25','Group','������','1','0','3','2',NULL,'0','2');");
E_D("replace into `p_node` values('26','add','�����û���','1','0','25','3',NULL,'0','2');");
E_D("replace into `p_node` values('27','index','�û����б�','1','0','25','3',NULL,'0','2');");
E_D("replace into `p_node` values('28','edit','�༭�û���','1','0','25','3',NULL,'0','0');");
E_D("replace into `p_node` values('29','del','ɾ���û���','1','0','25','3',NULL,'0','0');");
E_D("replace into `p_node` values('30','insert','д�����ݿ�','1','0','25','3',NULL,'0','0');");
E_D("replace into `p_node` values('31','update','�����û���','1','0','25','3',NULL,'0','0');");
E_D("replace into `p_node` values('32','insert','�������','1','0','6','3',NULL,'0','0');");
E_D("replace into `p_node` values('36','menu','�����','1','0','35','3',NULL,'0','0');");
E_D("replace into `p_node` values('35','System','��ҳ','1','0','2','2',NULL,'0','0');");
E_D("replace into `p_node` values('37','main','�Ҳ���Ŀ','1','0','35','3',NULL,'0','0');");
E_D("replace into `p_node` values('38','Article','΢��ͼ��','1','0','5','2',NULL,'0','2');");
E_D("replace into `p_node` values('39','index','ͼ���б�','1','0','38','3',NULL,'0','2');");
E_D("replace into `p_node` values('40','add','ͼ�����','1','0','38','3',NULL,'0','2');");
E_D("replace into `p_node` values('41','edit','΢��ͼ�ı༭','1','0','38','3',NULL,'0','0');");
E_D("replace into `p_node` values('42','del','΢��ͼ��ɾ��','1','0','38','3',NULL,'0','0');");
E_D("replace into `p_node` values('80','token','���ںŹ���','1','0','1','2',NULL,'0','1');");
E_D("replace into `p_node` values('45','Function','����ģ��','1','0','1','0',NULL,'0','1');");
E_D("replace into `p_node` values('46','Function','����ģ��','1','0','45','2',NULL,'0','2');");
E_D("replace into `p_node` values('47','add','���ģ��','1','0','46','3',NULL,'0','2');");
E_D("replace into `p_node` values('48','User_group','�ײ͹���','1','0','3','2',NULL,'0','2');");
E_D("replace into `p_node` values('49','add','����ײ�','1','0','48','3',NULL,'0','2');");
E_D("replace into `p_node` values('50','Users','�ͻ�����','1','0','3','2',NULL,'0','2');");
E_D("replace into `p_node` values('51','index','�ͻ��б�','1','0','50','3',NULL,'0','0');");
E_D("replace into `p_node` values('52','add','��ӿͻ�','1','0','50','3',NULL,'0','2');");
E_D("replace into `p_node` values('53','edit','�༭�ͻ�','1','0','50','3',NULL,'0','0');");
E_D("replace into `p_node` values('54','del','ɾ���ͻ�','1','0','50','3',NULL,'0','0');");
E_D("replace into `p_node` values('55','insert','д�����ݿ�','1','0','50','3',NULL,'0','0');");
E_D("replace into `p_node` values('56','upsave','�����û�','1','0','50','3',NULL,'0','0');");
E_D("replace into `p_node` values('57','Text','΢���ı�','1','0','5','2',NULL,'0','2');");
E_D("replace into `p_node` values('58','index','�ı��б�','1','0','57','3',NULL,'0','2');");
E_D("replace into `p_node` values('59','del','ɾ��','1','0','57','3',NULL,'0','0');");
E_D("replace into `p_node` values('60','Custom','�Զ���ҳ��','1','0','5','2',NULL,'0','2');");
E_D("replace into `p_node` values('61','index','�б�','1','0','60','3',NULL,'0','2');");
E_D("replace into `p_node` values('62','edit','�༭','1','0','60','3',NULL,'0','0');");
E_D("replace into `p_node` values('63','del','ɾ��','1','0','60','3',NULL,'0','0');");
E_D("replace into `p_node` values('64','Records','��ֵ��¼','1','0','4','2',NULL,'0','2');");
E_D("replace into `p_node` values('65','index','��ֵ�б�','1','0','64','3',NULL,'0','2');");
E_D("replace into `p_node` values('66','Case','�û�����','1','0','4','2',NULL,'0','2');");
E_D("replace into `p_node` values('67','index','�����б�','1','0','66','3',NULL,'0','2');");
E_D("replace into `p_node` values('68','add','��Ӱ���','1','0','66','3',NULL,'0','2');");
E_D("replace into `p_node` values('69','edit','�༭����','1','0','66','3',NULL,'0','0');");
E_D("replace into `p_node` values('70','del','ɾ������','1','0','66','3',NULL,'0','0');");
E_D("replace into `p_node` values('71','insert','д�����ݿ�','1','0','66','3',NULL,'0','0');");
E_D("replace into `p_node` values('72','upsave','�������ݿ�','1','0','66','3',NULL,'0','0');");
E_D("replace into `p_node` values('73','Links','��������','1','0','4','2',NULL,'0','2');");
E_D("replace into `p_node` values('74','index','��������','1','0','73','3',NULL,'0','2');");
E_D("replace into `p_node` values('75','add','�������','1','0','73','3',NULL,'0','2');");
E_D("replace into `p_node` values('76','edit','�༭����','1','0','73','3',NULL,'0','0');");
E_D("replace into `p_node` values('77','insert','�������ݿ�','1','0','73','3',NULL,'0','0');");
E_D("replace into `p_node` values('78','upsave','�������ݿ�','1','0','73','3',NULL,'0','0');");
E_D("replace into `p_node` values('79','del','ɾ����������','1','0','73','3',NULL,'0','0');");
E_D("replace into `p_node` values('81','Token','���ںŹ���','1','0','80','2',NULL,'0','2');");
E_D("replace into `p_node` values('83','alipay','����֧���ӿ�','1','0','6','3',NULL,'0','2');");
E_D("replace into `p_node` values('84','sms','���Žӿ�','1','','6','3',NULL,'0','2');");

require("../../inc/footer.php");
?>