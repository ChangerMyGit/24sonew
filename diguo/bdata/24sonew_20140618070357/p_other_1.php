<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_other`;");
E_C("CREATE TABLE `p_other` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `info` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk");
E_D("replace into `p_other` values('1','879c2f933017228','��֪��','�𾴵��û���΢�����޷�ʶ�����ĵ�ǰָ������ʹ���������ܡ�����');");
E_D("replace into `p_other` values('2','1fee0922b0a40db','','�ظ�����ҳ������ϲ���');");
E_D("replace into `p_other` values('3','qxrzxy1402460503','���','��л����ע���ϰ���');");

require("../../inc/footer.php");
?>