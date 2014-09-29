<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_home`;");
E_C("CREATE TABLE `p_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `apiurl` varchar(150) NOT NULL,
  `homeurl` varchar(120) NOT NULL,
  `info` varchar(120) NOT NULL,
  `musicurl` varchar(180) NOT NULL DEFAULT '',
  `plugmenucolor` varchar(10) NOT NULL DEFAULT '',
  `copyright` varchar(200) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `radiogroup` mediumint(4) NOT NULL DEFAULT '0',
  `advancetpl` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=gbk");
E_D("replace into `p_home` values('1','879c2f933017228','��ѩ������ͤ��΢����','http://v.24so.com/uploads/8/879c2f933017228/1/2/b/e/thumb_539147cd29e12.png','','','΢������ͨ��΢����ڷ��ʵ��ֻ���վ,,ͨ��΢��վչʾ��ҵ�Ĳ�Ʒ�����,�,��������Ϣ���û���ʱ��ؿɲ�ѯ����ҵ��ȫ����Ϣ.�����Ĺ���ƽ̨���Ӹ����ֵ.,����һ��������һ���������ܱ��ڿͻ���ϵ�����á�','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/8/879c2f933017228/a/5/d/1/thumb_539147dceaf61.png','1','0');");
E_D("replace into `p_home` values('2','1fee0922b0a40db','��ӭ��ע������ʮ���ѿƼ����޹�˾����΢�ź�','http://v.24so.com/uploads/1/1fee0922b0a40db/1/c/d/b/thumb_538fe894ebddd.jpg','','','��ӭ��ע������ʮ���ѿƼ����޹�˾����΢�ź�','','#FF1443','?������ʮ���ѿƼ����޹�˾','http://v.24so.com/uploads/1/1fee0922b0a40db/7/4/1/0/thumb_538fe9210a3f5.jpg','1','0');");
E_D("replace into `p_home` values('3','mhsqxc1401953951','����Դ','http://v.24so.com/uploads/m/mhsqxc1401953951/4/e/9/7/thumb_5395d570b68fc.jpg','','','��ӭ��ע','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','','5','0');");
E_D("replace into `p_home` values('8','dhybwc1402363778','�ڽ�ʱ�л���߻�','http://v.24so.com/uploads/d/dhybwc1402363778/4/2/c/1/thumb_5396622267365.jpg','','','�ൺ�ڽ����߻����޹�˾����һ��רҵ�Ļ������߻����޹�˾�����л���߻�����ȫ��ʱ�С��������Ԫ��,׼ȷ��׽ʱ��Ԫ��,��ȫ�������Ի������컯����','http://v.24so.com/tpl/static/attachment/music/default/3.mp3','#FF0000','? 2001-2015 �ڽ����߻���Ȩ����','http://v.24so.com/uploads/d/dhybwc1402363778/3/e/4/e/thumb_539665ce0ec3c.jpg','5','0');");
E_D("replace into `p_home` values('4','ocbtfr1402282562','΢����','http://v.24so.com/uploads/o/ocbtfr1402282562/3/3/6/b/thumb_539527a780fa5.jpg','','','��ӭʹ���ൺ������','','','','http://v.24so.com/uploads/o/ocbtfr1402282562/6/1/0/c/thumb_53952a29530b0.jpg','0','0');");
E_D("replace into `p_home` values('5','a3a7daf71176d5b','�ൺ������','http://hiphotos.baidu.com/lvpics/pic/item/9e3df8dcd100baa19e8d03114710b912c9fc2ef2.jpg','','','��ӭʹ���ൺ������','http://v.24so.com/tpl/static/attachment/music/default/3.mp3','#FF0000','24so�ൺ','http://v.24so.com/uploads/a/a3a7daf71176d5b/9/c/a/7/thumb_539531dd78ed8.jpg','7','0');");
E_D("replace into `p_home` values('6','tvjxcc1402290548','UZE����','http://v.24so.com/uploads/t/tvjxcc1402290548/e/8/5/5/thumb_539548d9e001f.JPG','','','��ӭ��עUZE�����ںţ�','','#8A8AFF','','http://v.24so.com/uploads/t/tvjxcc1402290548/f/e/a/f/thumb_539549f479ce3.jpg','0','0');");
E_D("replace into `p_home` values('7','vhvake1402306510','΢����','http://v.24so.com/uploads/v/vhvake1402306510/9/9/c/c/thumb_539586e5ac0bb.jpg','','','����ͩ��ҵ��������ң�ע��רҵ�뼼����һ�ֶ����ͼ������ء��Ͻ���̬��...','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','#148AFF','','http://v.24so.com/uploads/v/vhvake1402306510/c/b/9/0/thumb_53958742f3fd8.jpg','2','0');");
E_D("replace into `p_home` values('9','c6a3b2d7590ae01','�ൺ�����˺�','http://v.24so.com/uploads/c/c6a3b2d7590ae01/2/f/c/f/thumb_53967894d55ce.jpg','','','�����˺ͣ�����������רҵ��ͷ��˾��������2000�꣬�����ҵ��Ϊ�߼��˲���ѡ��','','','','https://mp.weixin.qq.com/misc/getheadimg?token=1836009176&amp;fakeid=3087208328&amp;r=18354','15','0');");
E_D("replace into `p_home` values('10','ainbtq1402292243','���ݼ�����ֲ������޹�˾','http://v.24so.com/uploads/a/ainbtq1402292243/7/2/3/8/thumb_5396b4bc0a9b8.jpg','','','��ӭ��ע���ݼ�򫲣�����޹�˾��','','','','http://v.24so.com/uploads/a/ainbtq1402292243/d/a/3/0/thumb_53967a5066210.jpg','0','0');");
E_D("replace into `p_home` values('11','aricpn1402370263','Wellcome to here��','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','','','Wellcome to here��Ʒ֮Ե','','','','http://v.24so.com/uploads/a/aricpn1402370263/6/9/c/0/thumb_53969d99a3231.jpg','0','0');");
E_D("replace into `p_home` values('12','yosjzs1402383816','��ӭ��עƷ֮Ե','http://v.24so.com/uploads/y/yosjzs1402383816/9/9/c/9/thumb_5396afe3719a0.jpg','','','��ӭ��עƷ֮Ե��','','','','http://v.24so.com/uploads/y/yosjzs1402383816/7/9/e/2/thumb_5396b00eef7cb.jpg','0','0');");
E_D("replace into `p_home` values('13','6845f758f8e1a94','��ӭ���벩����ֲ�΢����','http://v.24so.com/uploads/6/6845f758f8e1a94/0/a/b/f/thumb_5396d1927d5a7.jpg','','','�������΢����','','','','http://v.24so.com/uploads/6/6845f758f8e1a94/3/d/2/4/thumb_5396d1b4abb5b.jpg','0','0');");
E_D("replace into `p_home` values('14','a0bbb64eef61a16','��л��ע˷�紫ý','http://v.24so.com/uploads/a/a0bbb64eef61a16/7/8/5/9/thumb_53990487261d2.jpg','','','����379,һ��רע�����������������ѵ�����ƽ̨,һ���̼���������֮�以ͨ����������վ���ǲ��������֡����Ρ������������������������Ρ�������ѵ����ҵ��','http://v.24so.com/tpl/static/attachment/music/default/1.mp3','','','http://v.24so.com/uploads/a/a0bbb64eef61a16/3/5/8/5/thumb_53990559b3387.jpg','0','0');");
E_D("replace into `p_home` values('15','qxrzxy1402460503','���ϰ���','http://v.24so.com/uploads/q/qxrzxy1402460503/5/e/2/5/thumb_53980f3d6ef62.jpg','','','���ϰ���--ȫ�������ƶ����黥��ƽ̨��̽�������ǻۣ�̽����Ů�����С������е�������ɺͰ��أ�������պð����е��������⣬����������£������а��顢��ͥ����������г�������л��ǻۣ���������������������������������΢�Ź��ںţ�zhangsha','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/q/qxrzxy1402460503/9/8/6/0/thumb_53980f821eb9d.jpg','0','0');");
E_D("replace into `p_home` values('16','85fa9a93c81ad7e','΢����','http://v.24so.com/uploads/8/85fa9a93c81ad7e/d/c/6/e/thumb_539826c082313.jpg','','','΢����','','#FF0000','2014-2024 �ൺ24so��Ȩ����','','10','0');");
E_D("replace into `p_home` values('17','junxtg1402455483','�Ƶ���','http://v.24so.com/uploads/j/junxtg1402455483/7/3/b/d/thumb_53992691c1852.jpg','','','�ൺ�ķ���Ƶ����1992��4�¿�ҵ���½�װ��ʱ��2010�꣬¥��15�㣬���пͷ�����351�䣨�ף���\r\n��������ൺ��;����վ����������������ͺ������Ļ���԰���󿿺���·�����š���������ٹ�·���ൺ�ۣ���������·�����ź��ķ���ҵ���ģ�����','','','','http://v.24so.com/uploads/j/junxtg1402455483/7/f/1/2/thumb_539927b84bcfd.jpg','0','0');");
E_D("replace into `p_home` values('18','glkpuw1402307164','΢����','http://v.24so.com/uploads/g/glkpuw1402307164/8/6/6/c/thumb_53993a2a6294c.jpg','','','��ӭ��ע���ʳ����ʳ�������ܵ�','','#FF0000','?������ʮ���ѿƼ����޹�˾�ൺ�ֹ�˾','','1','0');");
E_D("replace into `p_home` values('19','f0cdf4ad5650e89','lucca¬��������','http://v.24so.com/uploads/f/f0cdf4ad5650e89/6/1/a/1/thumb_539941d60f710.jpg','','','�鿴ȫ��','','','','','0','0');");
E_D("replace into `p_home` values('20','mleyln1402732919','��л��ע������','http://v.24so.com/uploads/m/mleyln1402732919/b/8/4/4/thumb_539c0604c34a2.jpg','','','1111','','','','','0','0');");
E_D("replace into `p_home` values('21','kcmjgr1402792677','home','http://v.24so.com/tpl/static/attachment/icon/lovely/bookmark.png','','','������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨������ó��Ӫƽ̨','','','','','0','0');");
E_D("replace into `p_home` values('22','diwxqe1402738986','��ҳ','http://v.24so.com/uploads/d/diwxqe1402738986/3/9/a/b/thumb_539d10c52d6e5.jpg','','','��������','','','','','0','0');");
E_D("replace into `p_home` values('23','','','','','','','','','','','7','0');");
E_D("replace into `p_home` values('24','kcbvom1402885756','���º�����۾����޹�˾','http://v.24so.com/uploads/k/kcbvom1402885756/9/6/b/6/thumb_539e5ee05d3fc.jpg','','','��ӭ����������۾��������������侵�б��ϣ�','','#FF0000','���º�����۾����޹�˾��Ȩ����','http://v.24so.com/uploads/k/kcbvom1402885756/0/2/d/e/thumb_539e65f30905f.jpg','1','0');");
E_D("replace into `p_home` values('25','ftxvbg1402882875','��ӭ��ע����ͷ����','http://v.24so.com/uploads/f/ftxvbg1402882875/6/e/8/0/thumb_539e82a566d6b.jpg','','','��ӭ��ע����ͷ���ߣ�','','','','http://v.24so.com/uploads/f/ftxvbg1402882875/4/c/5/e/thumb_539e82cc050ee.png','0','0');");
E_D("replace into `p_home` values('26','oucryx1402886291','���ã���л����ע�ƽ�ʱ��������ֲ�','http://v.24so.com/uploads/o/oucryx1402886291/a/7/e/c/thumb_539e94c7e0c2f.jpg','','','��ѵ��ּ��\r\n����˳Ӧ����չ���Ƶľ������õ�רҵ���ʣ�������ѧ���ɡ���֯���š����ֱ��ݡ���ͨ�������������ۡ�����֪ʶ����ְҵ���ʵ�רҵ�ĸ������˲š�\r\n','http://v.24so.com/tpl/static/attachment/music/default/2.mp3','','','http://v.24so.com/uploads/o/oucryx1402886291/7/7/1/6/thumb_539e989d59a86.jpg','0','0');");
E_D("replace into `p_home` values('27','qnrwlm1402888833','7��õ������','http://v.24so.com/uploads/q/qnrwlm1402888833/8/9/2/9/thumb_539e9c1da9428.jpg','','','��л��ע7��õ������...','','','','http://v.24so.com/uploads/q/qnrwlm1402888833/5/f/9/f/thumb_539e9c556e88a.jpg','16','0');");
E_D("replace into `p_home` values('28','0d8553ddf4f8102','��л����ע�¶������������������ģ�','http://v.24so.com/uploads/0/0d8553ddf4f8102/e/7/9/2/thumb_539ea91feec79.JPG','','','��л����ע�¶������������������ģ�','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','','','http://v.24so.com/uploads/0/0d8553ddf4f8102/4/a/0/3/thumb_539ea92da6337.jpg','0','0');");
E_D("replace into `p_home` values('29','ysemxs1402913598','��л����ע������Ǫ����˼�','http://v.24so.com/uploads/y/ysemxs1402913598/8/b/9/0/thumb_539fa9632b797.png','','','��Ǫ����˼��׷�ʼ����2000�꣬�����˽�ʮ��ķ�չ�Ѿ��ǹ��ڻ��˼��׷���ҵһ���쵱����Ʒ�ơ� ���˼��׷��Ǵ������ѣ������������ľ�Ӫ�ص㣬�����ִ�������ʽ��Ͳ���ģʽ��װ�޼�����죬������Ǫ����˼��׷���ӵ�ж�������ŵ꣬ǰ��ʮ�ֹ�����','','','','http://v.24so.com/uploads/y/ysemxs1402913598/5/c/c/b/thumb_539fa5757674c.jpg','9','0');");
E_D("replace into `p_home` values('30','gdfrep1402472524','��ӭ��ע���������','http://v.24so.com/uploads/g/gdfrep1402472524/c/d/3/2/thumb_5399d694bc674.jpg','','','����˽����......','','#FF0000','2001-2014 ������ʮ���ѿƼ����޹�˾��Ȩ����','http://v.24so.com/uploads/g/gdfrep1402472524/f/5/7/5/thumb_5399da5d43634.jpg','1','0');");
E_D("replace into `p_home` values('31','qweeqm1402996029','���������������','http://v.24so.com/uploads/q/qweeqm1402996029/b/5/c/d/thumb_53a0099d0ee59.jpg','','','���������������...','','','','http://v.24so.com/uploads/q/qweeqm1402996029/7/d/7/9/thumb_53a009c84afca.jpg','0','0');");
E_D("replace into `p_home` values('32','eujhzm1403053453','ɽ������Ʊ��ͨ','http://v.24so.com/uploads/e/eujhzm1403053453/3/f/5/4/thumb_53a0ee51a8d97.jpg','','','ɽ������Ʊ��ͨ','','','','','0','0');");
E_D("replace into `p_home` values('33','xgmone1402987078','��ӭ���봺�������׶�԰΢����','http://v.24so.com/uploads/x/xgmone1402987078/2/d/2/9/thumb_53a0f2b50ea53.jpg','','','�������鿴��ϸ��Ϣ','','','','','0','0');");
E_D("replace into `p_home` values('34','rzxdlc1402480377','����vb�����','http://v.24so.com/uploads/r/rzxdlc1402480377/1/7/0/d/thumb_53a0fc3cb96b4.jpg','','','��ʽ����ܣ�','','','','','0','0');");

require("../../inc/footer.php");
?>