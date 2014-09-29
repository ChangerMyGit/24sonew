<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_dish`;");
E_C("CREATE TABLE `p_dish` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `sid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `unit` varchar(3) NOT NULL,
  `price` float NOT NULL,
  `ishot` tinyint(1) unsigned NOT NULL,
  `isopen` tinyint(1) unsigned NOT NULL,
  `image` varchar(200) NOT NULL COMMENT 'Ƭ',
  `des` varchar(500) NOT NULL,
  `creattime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `sid` (`sid`),
  KEY `isopen` (`isopen`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=gbk");
E_D("replace into `p_dish` values('2','10','5','̩ʽ��ţ��������','��','28','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072953_21271.jpg','','1402335287');");
E_D("replace into `p_dish` values('3','10','5','����Ź�������','��','15','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072901_11137.png','���˿����Ŷ','1402335501');");
E_D("replace into `p_dish` values('4','10','5','��֭���ȹ�������','��','25','1','0','http://www.24so.com/up_pic/uploads/image/20140414/20140414072818_68955.png','','1402335570');");
E_D("replace into `p_dish` values('5','10','5','����ţ���������','��','24','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072731_87431.png','����ţ���������','1402335627');");
E_D("replace into `p_dish` values('6','10','5','״Ԫ��������','��','24','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072643_71858.png','','1402335674');");
E_D("replace into `p_dish` values('7','10','6','���ƺ�������ŷ�','��','21','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072250_22881.png','���ƺ�������ŷ�','1402336045');");
E_D("replace into `p_dish` values('8','10','6','��ζС������ŷ�','��','22','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072103_73382.png','','1402336132');");
E_D("replace into `p_dish` values('9','10','6','������������ŷ�','��','26','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072202_37325.png','','1402336200');");
E_D("replace into `p_dish` values('10','10','6','��ţ���ŷ�','��','26','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414072013_14493.png','','1402336258');");
E_D("replace into `p_dish` values('11','10','7','��ζ��������/����','��','18','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414074217_75747.png','','1402336339');");
E_D("replace into `p_dish` values('12','10','7','������������/����','��','22','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414073506_95621.png','','1402336392');");
E_D("replace into `p_dish` values('13','10','7','�罷ţ������/����','��','24','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414073422_63646.png','','1402336484');");
E_D("replace into `p_dish` values('14','10','7','�����Ź�����/����','��','25','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414074116_32972.png','','1402336538');");
E_D("replace into `p_dish` values('15','10','7','Ʈ��ţ������/����','��','25','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414074022_75761.png','','1402336624');");
E_D("replace into `p_dish` values('16','10','8','ˬ�����','��','8','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414075227_84078.png','','1402336715');");
E_D("replace into `p_dish` values('17','10','8','��ζ����','��','15','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414075415_52039.png','','1402336776');");
E_D("replace into `p_dish` values('18','10','8','���ƶ��','��','15','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414075159_55291.png','','1402336826');");
E_D("replace into `p_dish` values('19','10','8','����ɽţ��','��','15','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414075120_14757.png','','1402336891');");
E_D("replace into `p_dish` values('20','10','9','˫���ײ�','��','68','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414074345_35806.png','','1402336957');");
E_D("replace into `p_dish` values('21','10','9','�����ײ�','��','98','0','1','http://www.24so.com/up_pic/uploads/image/20140414/20140414074303_29401.png','','1402337043');");
E_D("replace into `p_dish` values('22','15','11','�����ײ�','��','49','0','1','','','1402387345');");
E_D("replace into `p_dish` values('23','3','12','����˿','��','1','0','1','','','1402556663');");
E_D("replace into `p_dish` values('24','26','13','123','��','111','0','1','','','1402800163');");
E_D("replace into `p_dish` values('25','26','13','456','��','444','0','1','','','1402800183');");
E_D("replace into `p_dish` values('26','9','14','11','1','11','1','1','http://v.24so.com/uploads/a/a0bbb64eef61a16/5/4/4/3/thumb_539fb61826692.jpg','11111','1402975774');");
E_D("replace into `p_dish` values('27','9','15','22','22','22','1','1','http://v.24so.com/uploads/a/a0bbb64eef61a16/f/e/2/7/thumb_539fb63ccf71f.jpg','22222','1402975932');");
E_D("replace into `p_dish` values('28','30','16','��̢','1','1','1','1','http://v.24so.com/uploads/a/a0bbb64eef61a16/d/4/1/d/thumb_539ff76f9f973.jpg','��̢��̢��̢��̢','1402992506');");
E_D("replace into `p_dish` values('29','31','17','�ƹ�','��','10','1','1','http://v.24so.com/uploads/o/oucryx1402886291/c/3/d/8/thumb_539fffc8d107f.jpg','','1402994638');");
E_D("replace into `p_dish` values('30','31','18','����˿','��','15','1','1','','','1402994662');");

require("../../inc/footer.php");
?>