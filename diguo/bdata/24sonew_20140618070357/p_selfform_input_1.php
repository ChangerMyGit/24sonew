<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_selfform_input`;");
E_C("CREATE TABLE `p_selfform_input` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `formid` int(10) NOT NULL DEFAULT '0',
  `displayname` varchar(30) NOT NULL DEFAULT '',
  `fieldname` varchar(30) NOT NULL DEFAULT '',
  `inputtype` varchar(20) NOT NULL DEFAULT '',
  `options` varchar(200) NOT NULL DEFAULT '',
  `require` tinyint(1) NOT NULL DEFAULT '0',
  `regex` varchar(100) NOT NULL DEFAULT '',
  `taxis` mediumint(4) NOT NULL DEFAULT '0',
  `errortip` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `formid` (`formid`,`taxis`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=gbk");
E_D("replace into `p_selfform_input` values('1','1','����','name','text','','1','','1','�����������д');");
E_D("replace into `p_selfform_input` values('2','5','����','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('3','5','��ϵ��ʽ','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('4','5','�������','yjjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('5','4','����','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('6','4','��ϵ��ʽ','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('7','4','��������','gzjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('8','3','����','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('9','3','��ϵ��ʽ','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('10','3','��������','gzjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('11','2','����','xm','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('12','2','��ϵ�绰','dianhua','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('13','6','����','bd','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('14','6','��ϵ��ʽ','lianxifang','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('15','6','��������','liuyan','textarea','','1','����','3','');");
E_D("replace into `p_selfform_input` values('16','7','����','b','text','','1','����','1','');");
E_D("replace into `p_selfform_input` values('17','7','��ϵ��ʽ','b','text','','0','����','2','');");
E_D("replace into `p_selfform_input` values('18','7','����','c','textarea','','1','����','3','');");
E_D("replace into `p_selfform_input` values('19','8','����','abc','text','','1','123','1','');");
E_D("replace into `p_selfform_input` values('20','8','����','abc','textarea','','1','123','2','');");
E_D("replace into `p_selfform_input` values('21','8','��ϵ�绰','abc','text','','1','123','3','');");
E_D("replace into `p_selfform_input` values('22','9','����','mingzi','text','','1','/^[A-Za-z]+\$/','1','');");
E_D("replace into `p_selfform_input` values('23','11','ݼ��','qeqwe','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','1','');");
E_D("replace into `p_selfform_input` values('24','12','����+�绰','jingjie','textarea','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','1','');");
E_D("replace into `p_selfform_input` values('25','13','����+�绰+ʱ��','huiyuan','textarea','','1','/^[-+]?d+(.d+)?\$/','1','');");
E_D("replace into `p_selfform_input` values('26','14','����','nsme','text','','1','','0','');");
E_D("replace into `p_selfform_input` values('27','14','��������','as','text','','1','','0','');");
E_D("replace into `p_selfform_input` values('28','14','�绰','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','0','');");
E_D("replace into `p_selfform_input` values('29','15','����','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('30','15','�绰','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('31','15','��ע','dfd','textarea','','1','','3','');");

require("../../inc/footer.php");
?>