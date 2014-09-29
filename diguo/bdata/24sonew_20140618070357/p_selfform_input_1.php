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
E_D("replace into `p_selfform_input` values('1','1','姓名','name','text','','1','','1','输入错误，请重写');");
E_D("replace into `p_selfform_input` values('2','5','姓名','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('3','5','联系方式','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('4','5','建议意见','yjjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('5','4','姓名','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('6','4','联系方式','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('7','4','工作经验','gzjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('8','3','姓名','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('9','3','联系方式','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('10','3','工作经验','gzjy','textarea','','1','','3','');");
E_D("replace into `p_selfform_input` values('11','2','姓名','xm','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('12','2','联系电话','dianhua','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('13','6','姓名','bd','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('14','6','联系方式','lianxifang','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('15','6','留言内容','liuyan','textarea','','1','中文','3','');");
E_D("replace into `p_selfform_input` values('16','7','姓名','b','text','','1','中文','1','');");
E_D("replace into `p_selfform_input` values('17','7','联系方式','b','text','','0','中文','2','');");
E_D("replace into `p_selfform_input` values('18','7','留言','c','textarea','','1','中文','3','');");
E_D("replace into `p_selfform_input` values('19','8','姓名','abc','text','','1','123','1','');");
E_D("replace into `p_selfform_input` values('20','8','内容','abc','textarea','','1','123','2','');");
E_D("replace into `p_selfform_input` values('21','8','联系电话','abc','text','','1','123','3','');");
E_D("replace into `p_selfform_input` values('22','9','姓名','mingzi','text','','1','/^[A-Za-z]+\$/','1','');");
E_D("replace into `p_selfform_input` values('23','11','菁界','qeqwe','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','1','');");
E_D("replace into `p_selfform_input` values('24','12','姓名+电话','jingjie','textarea','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','1','');");
E_D("replace into `p_selfform_input` values('25','13','姓名+电话+时间','huiyuan','textarea','','1','/^[-+]?d+(.d+)?\$/','1','');");
E_D("replace into `p_selfform_input` values('26','14','姓名','nsme','text','','1','','0','');");
E_D("replace into `p_selfform_input` values('27','14','内容描述','as','text','','1','','0','');");
E_D("replace into `p_selfform_input` values('28','14','电话','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','0','');");
E_D("replace into `p_selfform_input` values('29','15','姓名','name','text','','1','','1','');");
E_D("replace into `p_selfform_input` values('30','15','电话','tel','text','','1','/^13[0-9]{9}\$|^15[0-9]{9}\$|^18[0-9]{9}\$/','2','');");
E_D("replace into `p_selfform_input` values('31','15','备注','dfd','textarea','','1','','3','');");

require("../../inc/footer.php");
?>