<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_reply_info`;");
E_C("CREATE TABLE `p_reply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `infotype` varchar(20) NOT NULL DEFAULT '',
  `diningyuding` tinyint(1) NOT NULL DEFAULT '1',
  `diningwaimai` tinyint(1) NOT NULL DEFAULT '1',
  `config` text NOT NULL,
  `keyword` varchar(50) NOT NULL DEFAULT '',
  `apiurl` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=gbk");
E_D("replace into `p_reply_info` values('1','1fee0922b0a40db','���԰�','http://v.24so.com/uploads/1/1fee0922b0a40db/e/4/8/2/thumb_53901a623856a.jpg','лл��������','message','1','1','a:1:{s:9:\"needcheck\";i:1;}','','');");
E_D("replace into `p_reply_info` values('2','1fee0922b0a40db','O2O����������','http://v.24so.com/tpl/static/attachment/background/view/8.jpg','O2O����������','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','');");
E_D("replace into `p_reply_info` values('3','1fee0922b0a40db','O2O����������','http://v.24so.com/uploads/1/1fee0922b0a40db/b/8/c/f/53902e096246b.jpg','O2O����������','Shop','1','1','','�̳�','');");
E_D("replace into `p_reply_info` values('4','879c2f933017228','������΢�̳�','http://v.24so.com/uploads/8/879c2f933017228/e/f/3/4/thumb_53914867af9db.png','΢�������롰�̳ǡ����Զ��ظ�������������Ʒ���֧࣬����Ʒ�����������������򣬶���Ʒ���ﳵ���㣬�ٲ���չʾ��','Shop','1','1','','�̳�','');");
E_D("replace into `p_reply_info` values('5','879c2f933017228','���԰�','http://v.24so.com/uploads/8/879c2f933017228/0/8/a/e/thumb_53912b66a81cb.png','������ʮ���ѿƼ����޹�˾�����¼��24so����һ��רҵ��΢�ŵ�����Ӫ��ϵ������Ӫ�̣���2013��΢�������û�ͻ�����ڵ�������������ڰ���5000���̼ҡ���ҵ��΢���ϴרҵ�����ƶ�������ϵ��ֱ�����8��΢�������ߣ�ʵ�ֻ��������Ʒչʾ����','message','1','1','a:1:{s:9:\"needcheck\";i:0;}','','');");
E_D("replace into `p_reply_info` values('6','879c2f933017228','360ȫ������','http://v.24so.com/uploads/8/879c2f933017228/3/a/a/0/thumb_539149fe2d907.png','360ȫ������','panorama','1','1','','ȫ��','');");
E_D("replace into `p_reply_info` values('7','879c2f933017228','΢�Ź�','http://v.24so.com/uploads/8/879c2f933017228/a/a/7/8/thumb_53914a4b538e0.png','΢�Ź��������ù˿���΢������ʱ�����Ź�','Groupon','1','1','a:1:{s:5:\"tplid\";i:1;}','','');");
E_D("replace into `p_reply_info` values('8','879c2f933017228','΢����','http://v.24so.com/uploads/8/879c2f933017228/4/b/3/2/thumb_53914af0e479c.png','΢���ͣ��ù˿��㲻�������ٴι��򣬻��ڿͷ�������Ͳ�ǰ�͵�ò˶������ӡ�','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','����','');");
E_D("replace into `p_reply_info` values('9','879c2f933017228','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('10','879c2f933017228','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('11','879c2f933017228','�Ƶ귿��','http://v.24so.com/uploads/8/879c2f933017228/b/1/8/4/thumb_5391993638857.png','�Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��Ƶ귿��','Hotels','1','1','','�Ƶ�','');");
E_D("replace into `p_reply_info` values('12','a3a7daf71176d5b','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/uploads/a/a3a7daf71176d5b/c/a/1/6/thumb_53955bc02d673.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('13','a3a7daf71176d5b','�����Ϊ��Ա','http://v.24so.com/uploads/a/a3a7daf71176d5b/2/9/f/b/thumb_53955d14e8a94.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('14','mhsqxc1401953951','΢�̳�','http://v.24so.com/uploads/m/mhsqxc1401953951/8/f/8/0/thumb_539598cd22849.jpg','��ӭ��ע','Shop','1','1','','�̳�','');");
E_D("replace into `p_reply_info` values('15','tvjxcc1402290548','��ӭ����UZE�����̳�','http://v.24so.com/uploads/t/tvjxcc1402290548/c/4/d/4/thumb_5395cc394b8b1.JPG','UZE���� �����ꑵ؅^�����I����λ�ļ��M���B������оWվ���ṩ24*7�W�����۷��ա�','Shop','1','1','','�̳�','');");
E_D("replace into `p_reply_info` values('16','mhsqxc1401953951','��ӭ����','http://v.24so.com/uploads/m/mhsqxc1401953951/e/a/6/2/thumb_5395f77f8c688.jpg','��ӭ����','Dining','1','1','','����','');");
E_D("replace into `p_reply_info` values('17','mhsqxc1401953951','�ػ�ʳƷ','http://v.24so.com/uploads/m/mhsqxc1401953951/d/9/e/3/thumb_5395fbab67055.jpg','�ػ�ʳƷ������ζ���ּ�����������������','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('18','tvjxcc1402290548','΢�Ź�','http://v.24so.com/uploads/t/tvjxcc1402290548/c/3/6/3/thumb_5396658390271.jpg','΢�Ź�','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('19','tvjxcc1402290548','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('20','tvjxcc1402290548','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('21','aricpn1402370263','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('22','aricpn1402370263','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('23','yosjzs1402383816','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('24','yosjzs1402383816','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('25','yosjzs1402383816','�˵�','http://v.24so.com/uploads/y/yosjzs1402383816/b/e/f/e/thumb_5396bad607522.jpg','','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','����','');");
E_D("replace into `p_reply_info` values('26','yosjzs1402383816','�����ײ�','http://v.24so.com/uploads/y/yosjzs1402383816/5/f/6/e/thumb_5397bc524008f.jpg','�����ײ�','Groupon','1','1','a:1:{s:5:\"tplid\";i:0;}','','');");
E_D("replace into `p_reply_info` values('27','kcmjgr1402792677','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('28','kcmjgr1402792677','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('29','kcmjgr1402792677','��л���Ķ���','','���� ����','Dining','1','1','','����','');");
E_D("replace into `p_reply_info` values('30','kcmjgr1402792677','��ӭ����','http://v.24so.com/uploads/k/kcmjgr1402792677/5/d/0/4/thumb_539d097e61d91.jpg','��ӭ���ĵ���','panorama','1','1','','ȫ��','');");
E_D("replace into `p_reply_info` values('31','kcmjgr1402792677','��л������ס','','��л������ס��л������ס��л������ס��л������ס��л������ס��л������ס��л������ס','Hotels','1','1','','�Ƶ�','');");
E_D("replace into `p_reply_info` values('32','ftxvbg1402882875','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('33','ftxvbg1402882875','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('34','oucryx1402886291','��Ա��,ʡǮ������,����������֪��,�н���Ŷ','http://v.24so.com/tpl/static/images/member.jpg','���vip������������ݵ�����,��Ա��,ʡǮ������,����������֪��,�н���Ŷ','membercard','1','1','','','');");
E_D("replace into `p_reply_info` values('35','oucryx1402886291','�����Ϊ��Ա','http://v.24so.com/tpl/static/images/vip.jpg','�����Ϊ��Ա�����ܸ����Ż�','membercard_nouse','1','1','','','');");
E_D("replace into `p_reply_info` values('36','qnrwlm1402888833','���','/tpl/Wap/default/common/css/Photo/banner.jpg','','album','1','1','','','');");
E_D("replace into `p_reply_info` values('37','a0bbb64eef61a16','����ϵͳ','http://v.24so.com/uploads/a/a0bbb64eef61a16/7/e/e/b/thumb_539fea4e29b2d.jpg','����ϵͳ','Dining','1','1','','����','');");
E_D("replace into `p_reply_info` values('38','gdfrep1402472524','����չʾ','http://v.24so.com/uploads/g/gdfrep1402472524/4/8/c/a/thumb_539fff0685b4c.jpg','����չʾ','panorama','1','1','','ȫ��','');");
E_D("replace into `p_reply_info` values('39','oucryx1402886291','��л���Ķ���','','','Dining','1','1','a:3:{s:11:\"waimaiclose\";i:1;s:11:\"yudingclose\";i:1;s:10:\"yudingdays\";i:0;}','����','');");
E_D("replace into `p_reply_info` values('40','oucryx1402886291','ȫ��','','��˾ȫ��','panorama','1','1','','ȫ��','');");
E_D("replace into `p_reply_info` values('41','oucryx1402886291','��л����Ԥ��','http://v.24so.com/uploads/o/oucryx1402886291/c/6/0/5/thumb_53a004d987ad8.jpg','','Hotels','1','1','','�Ƶ�','');");
E_D("replace into `p_reply_info` values('42','junxtg1402455483','΢Ԥ��','','','Hotels','1','1','','�Ƶ�','');");

require("../../inc/footer.php");
?>