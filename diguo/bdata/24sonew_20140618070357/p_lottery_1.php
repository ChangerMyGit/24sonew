<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_lottery`;");
E_C("CREATE TABLE `p_lottery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `joinnum` int(11) NOT NULL COMMENT '��������',
  `click` int(11) NOT NULL,
  `token` varchar(30) NOT NULL,
  `keyword` varchar(10) NOT NULL,
  `starpicurl` varchar(100) NOT NULL COMMENT '��д���ʼͼƬ��ַ',
  `title` varchar(60) NOT NULL COMMENT '�����',
  `txt` varchar(60) NOT NULL COMMENT '�û�����ҽ�ʱ�����ʾ��Ϣ',
  `sttxt` varchar(200) NOT NULL COMMENT '���',
  `statdate` int(11) NOT NULL COMMENT '���ʼʱ��',
  `enddate` int(11) NOT NULL COMMENT '�����ʱ��',
  `info` varchar(200) NOT NULL COMMENT '�˵��',
  `aginfo` varchar(200) NOT NULL COMMENT '�ظ��齱�ظ�',
  `endtite` varchar(60) NOT NULL COMMENT '�������������',
  `endpicurl` varchar(100) NOT NULL,
  `endinfo` varchar(60) NOT NULL,
  `fist` varchar(50) NOT NULL COMMENT 'һ�Ƚ���Ʒ����',
  `fistnums` int(4) NOT NULL COMMENT 'һ�Ƚ���Ʒ����',
  `fistlucknums` int(1) NOT NULL COMMENT 'һ�Ƚ��н�����',
  `second` varchar(50) NOT NULL COMMENT '���Ƚ���Ʒ����',
  `type` tinyint(1) NOT NULL,
  `secondnums` int(4) NOT NULL,
  `secondlucknums` int(1) NOT NULL,
  `third` varchar(50) NOT NULL,
  `thirdnums` int(4) NOT NULL,
  `thirdlucknums` int(1) NOT NULL,
  `allpeople` int(11) NOT NULL,
  `canrqnums` int(2) NOT NULL COMMENT '�������Ƴ齱����',
  `parssword` int(15) NOT NULL,
  `renamesn` varchar(50) NOT NULL DEFAULT '',
  `renametel` varchar(60) NOT NULL,
  `displayjpnums` int(1) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `four` varchar(50) NOT NULL,
  `fournums` int(11) NOT NULL,
  `fourlucknums` int(11) NOT NULL,
  `five` varchar(50) NOT NULL,
  `fivenums` int(11) NOT NULL,
  `fivelucknums` int(11) NOT NULL,
  `six` varchar(50) NOT NULL COMMENT '���Ƚ�',
  `sixnums` int(11) NOT NULL,
  `sixlucknums` int(11) NOT NULL,
  `zjpic` varchar(150) NOT NULL DEFAULT '',
  `daynums` mediumint(4) NOT NULL DEFAULT '0',
  `maxgetprizenum` mediumint(4) NOT NULL DEFAULT '1',
  `needreg` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=gbk");
E_D("replace into `p_lottery` values('1','18','0','879c2f933017228','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н�','1401897600','1407168000','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ܱ�','3','0','ӵ��','1','4','0','΢Ц','5','1','20','5','1234567890','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('2','0','0','879c2f933017228','�ιο�','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','�ιο����ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н�','1401897600','1404489600','�ף���������ιο��齱�ҳ�棬ף������Ŷ��','','�ιο���Ѿ�������','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ܱ�','3','0','ӵ��','2','4','0','΢Ц','5','0','10','5','1234567890','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('3','1','0','1fee0922b0a40db','ˮ������','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','ˮ�����˻��ʼ��','�ҽ�����ϵ����','��ϲ���н���','1401897600','1436025600','�ף���������ˮ�����˻ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','ˮ�����˻�Ѿ�������','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','΢������ƽ̨','1','0','','4','0','0','','0','0','2147483647','30','123456','','','0','0','1','','0','0','','0','0','','0','0','','1','1','0');");
E_D("replace into `p_lottery` values('4','0','0','879c2f933017228','�Ż݄�','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','�Ż݄����ɷ���','','ƾ���Ż݄���������ȫ�ൽ�����������ò�һ�١�','1401984000','1404576000','���Ż݄������鹹���������š�','�����Ż݄����ʹ�õ�˵��������','�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','��Ѿ����������ע���ǵ��´λ��','�ܱ�','1','0','ӵ��','3','2','0','΢Ц','3','0','12','5','123456','','','1','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('5','0','0','879c2f933017228','�ҽ�','http://v.24so.com/tpl/static/goldenEgg/user/start.jpg','�ҽ𵰻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н���','1401984000','1404576000','�ף����������ҽ𵰻ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','�ҽ𵰻�Ѿ�������','http://v.24so.com/tpl/static/goldenEgg/user/end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ܱ�','3','0','ӵ��','5','4','0','΢Ц','5','0','11','5','123456','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('8','3','0','a3a7daf71176d5b','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ���н�����','1402243200','1404835200','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','���غ���Ʊ','8','0','�������������','1','30','2','','0','0','10','5','12345','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('7','0','0','879c2f933017228','ˮ������','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','ˮ�����˻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н�','1401984000','1404576000','�ף���������ˮ�����˻ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','ˮ�����˻�Ѿ�������','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ܱ�','3','0','ӵ��','4','4','0','΢Ц','5','0','11','12','123456','','','0','0','0','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('9','1','0','a3a7daf71176d5b','�ιο�','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','�ιο����ʼ��','�ҽ�����ϵ���ǣ��绰138********','','1402243200','1404835200','�ף���������ιο��齱�ҳ�棬ף������Ŷ��','','�ιο���Ѿ�������','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ൺ��԰��һ����Ʊ','5','0','','2','0','0','','0','0','100','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('10','0','0','dgqaqc1402307446','�Ż�ȯ','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','�Ż�ȯ','','��ӭ��ȡ�Ż݄�','1402156800','1404144000','�Ż݄����ֽ�ʹ��','�Ż݄������˷��ֽ�','�Ż݄����ʼ����','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','����ڽ�����','10Ԫ����ȯ','10','0','','3','0','0','','0','0','100','5','12345','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('11','3','0','mhsqxc1401953951','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ���н���','1402329600','1404921600','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�ܱ�','5','1','ӵ��','1','30','2','����','40','0','10','5','123456789','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('12','7','0','mhsqxc1401953951','�ιο�','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','�ιο����ʼ��','�ҽ�����ϵ���ǣ��绰138********','','1402329600','1404921600','�ף���������ιο��齱�ҳ�棬ף������Ŷ��','','�ιο���Ѿ�������','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','΢����ƽ̨','10','0','','2','0','0','','0','0','1000','3','123456789','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('13','0','0','yosjzs1402383816','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н���','1402329600','1404921600','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','VIP�ײ�','1','0','�����ײ�','1','2','0','','0','0','50','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('14','3','0','yosjzs1402383816','�ιο�','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','�ιο����ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ�н���','1402329600','1404921600','�ף���������ιο��齱�ҳ�棬ף������Ŷ��','','�ιο���Ѿ�������','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�����ײ�','1','0','3','2','0','0','','0','0','100','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','1','1','0');");
E_D("replace into `p_lottery` values('15','0','0','yosjzs1402383816','ˮ������','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','ˮ�����˻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ���н���','1402416000','1405008000','�ף���������ˮ�����˻ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','ˮ�����˻�Ѿ�������','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','����ţ����','1','0','','4','0','0','','0','0','100','2','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('16','0','0','junxtg1402455483','�ιο�','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-start.jpg','�ιο����ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ���н���','1401552000','1406822400','�ף���������ιο��齱�ҳ�棬ף������Ŷ��','','�ιο���Ѿ�������','http://v.24so.com/tpl/User/default/common/images/img/activity-scratch-card-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','����������','10','0','�ൺ����һ����','2','10','0','','0','0','1000','5','123456','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('17','0','0','glkpuw1402307164','��Ա��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','�Ż݄�','','��ӭ��ȡ���ʳ����ʳ�������ܵ��Ż݄�','1401552000','1404144000','���ʳ����ʳ�������ܵ��Ż݄������ֽ�','���ʳ����ʳ�������ܵ���ڲ���ʹ��','���ʳ����ʳ�������ܵ��ѽ���','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','���ʳ����ʳ�������ܵ�','100','0','','3','0','0','','0','0','1000','5','0','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");
E_D("replace into `p_lottery` values('18','0','0','glkpuw1402307164','ˮ������','http://v.24so.com/tpl/static/luckyFruit/user/start.jpg','ˮ�����˻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','��ϲ���н�����','1401552000','1404144000','�ף���������ˮ�����˻ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','ˮ�����˻�Ѿ�������','http://v.24so.com/tpl/static/luckyFruit/user/end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','��ʳ�����','10','0','�������һ��','4','20','0','�����Ұ�����һ��','30','0','10000','5','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('23','1','0','diwxqe1402738986','���˴�ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','����ѡ��','1402848000','1405440000','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','2ë','2','0','','1','0','0','','0','0','5000','1','123456','','','1','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('22','3','0','kcmjgr1402792677','�Ż�ȯ','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','��һ�','','�õ��Ż�ȯ����ȥǰ̨�콱Ʒ','1402761600','1405353600','','����м�ĵĶһ�ȯ','','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','�����Ż�ȯ','100','1','','3','0','0','','0','0','100','3','123','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/uploads/k/kcmjgr1402792677/d/a/7/7/thumb_539d1591a5a02.jpg','0','1','0');");
E_D("replace into `p_lottery` values('21','3','0','kcmjgr1402792677','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','','1402761600','1405353600','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','123','11','0','','1','0','0','','0','0','100','3','0','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('25','0','0','ftxvbg1402882875','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰15872285008','��ϲ���н����벦��15872285008�ҽ�','1402848000','1405440000','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','ƻ��','1','0','','1','0','0','','0','0','11111','100','0','','','0','0','0','','0','0','','0','0','','0','0','','2','1','0');");
E_D("replace into `p_lottery` values('26','3','0','oucryx1402886291','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰138********','','1402934400','1405526400','�ף����������ת�̳齱�ҳ�棬ף������Ŷ��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','������','10','0','','1','0','0','','0','0','1000','3','123','','','0','0','1','','0','0','','0','0','','0','0','','0','1','0');");
E_D("replace into `p_lottery` values('27','8','0','eujhzm1403053453','��ת��','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-start.jpg','���˴�ת�̻��ʼ��','�ҽ�����ϵ���ǣ��绰��15603477871','��ϲ���н���','1403020800','1408032000','1��: �ڻҳ������ʼ�����ɲ����ת�̳齱���\r\n 2�� ÿ���˺Ŷ�Ӧ1��/��ĳ齱���ᣬָ����ָ������Ʊ��Ϊ����õ���Ʊ��\r\n 3�� ת�����ý���Ϊ��ȣ�һ�Ƚ�Ϊ��ֵ168Ԫ���˳Ƿ�˻��ֹȵ���Ʊ�����Ƚ�Ϊ��ֵ159Ԫ���ܴ��ڽ�ɽ���ֹ���Ʊ�����Ƚ�Ϊ��ֵ138Ԫ������Ư����Ʊ���ĵȽ�Ϊ��ֵ128Ԫ�Ļ�Ңˮ����԰��Ʊ����Ƚ�Ϊ��ֵ78Ԫ����üɽ��Ʊ��\r\n 4�����λ�Ľ�ֹ����Ϊ��2014��','�ף�����Ŭ��Ŷ��','���˴�ת�̻�Ѿ�������','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-lottery-end.jpg','�ף���Ѿ��������������ע���ǵĺ����Ŷ��','�˳Ƿ�˻��ֹ�','10','2','�ܴ��ڽ�ɽ���ֹ�','1','10','0','����Ư��','20','0','6000','1','123456789','','','0','0','1','��Ңˮ����԰','10','0','��üɽ','20','0','','0','0','','2','1','0');");
E_D("replace into `p_lottery` values('28','1','0','junxtg1402455483','�Ż݄�','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-start.jpg','�Ż݄�','','��ӭʹ���Ż݄���','1401552000','1404057600','�Ż݄����ܶ��֣�','�Ż݄����ܶ��֣�','��ѽ�����','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-end.jpg','','��׼��','10','0','','3','0','0','','0','0','10000','5','12345','','','0','0','1','','0','0','','0','0','','0','0','http://v.24so.com/tpl/Wap/default/common/css/guajiang/images/activity-coupon-winning.jpg','0','1','0');");

require("../../inc/footer.php");
?>