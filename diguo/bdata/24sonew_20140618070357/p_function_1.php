<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_function`;");
E_C("CREATE TABLE `p_function` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` tinyint(3) NOT NULL,
  `usenum` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `funname` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `isserve` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=gbk");
E_D("replace into `p_function` values('1','1','0','������ѯ','tianqi','������ѯ����:��  ������+����','1','1');");
E_D("replace into `p_function` values('2','1','0','����','qiushi','���¡�ֱ�ӷ�������','1','1');");
E_D("replace into `p_function` values('3','1','0','������','jishuan','������ʹ�÷�������������50-50��������100*100','1','1');");
E_D("replace into `p_function` values('4','4','0','�ʶ�','langdu','�ʶ����ؼ��ʡ������ʶ�pigcms���û�Ӫ��ϵͳ','1','1');");
E_D("replace into `p_function` values('5','3','0','����ָ����ѯ','jiankang','����ָ����ѯ���������ߣ����ء���������170,65','1','1');");
E_D("replace into `p_function` values('6','1','0','��ݲ�ѯ','kuaidi','��ݣ����������ݺš��������˳��117215889174','1','1');");
E_D("replace into `p_function` values('7','1','0','Ц��','xiaohua','Ц����ֱ�ӷ���Ц��','1','1');");
E_D("replace into `p_function` values('8','2','0','��ͷʫ','changtoushi',' ��ͷʫ+�ؼ��ʡ�������ͷʫ�Ұ���','1','1');");
E_D("replace into `p_function` values('9','1','0','����','peiliao','���졡ֱ����������ؼ��ʼ���','1','1');");
E_D("replace into `p_function` values('10','1','0','����','liaotian','���졡ֱ����������ؼ��ʼ���','1','1');");
E_D("replace into `p_function` values('11','3','0','�ܹ�����','mengjian','�ܹ����Ρ��μ�+�ؼ��ʡ�����:�μ���ĸ','1','1');");
E_D("replace into `p_function` values('12','2','0','��������','yuyinfanyi','���룫�ؼ��� �����������','1','1');");
E_D("replace into `p_function` values('13','2','0','�𳵲�ѯ','huoche','�𳵲�ѯ���𳵣����У�Ŀ�ĵء������Ϻ��Ͼ�','1','1');");
E_D("replace into `p_function` values('14','2','0','������ѯ','gongjiao','���������У�������š������Ϻ�����774','1','1');");
E_D("replace into `p_function` values('15','2','0','���֤��ѯ','shenfenzheng','���֤�����롡���������֤342423198803015568','1','1');");
E_D("replace into `p_function` values('16','1','0','�ֻ������ز�ѯ','shouji','�ֻ������ز�ѯ(���� ����) �ֻ����ֻ����롡�����ֻ�13917778912','1','1');");
E_D("replace into `p_function` values('17','3','0','���ֲ�ѯ','yinle','���֣������� ?�������ְ���һ����','1','1');");
E_D("replace into `p_function` values('18','1','0','�����ܱ���Ϣ��ѯ','fujin','�����ܱ���Ϣ��ѯ(�̣£ӣ� �ظ�:����+�ؼ���  ��:�����Ƶ�','1','1');");
E_D("replace into `p_function` values('43','4','0','�齱','lottery','�齱,����齱���ɲμ����˴�ת��','1','1');");
E_D("replace into `p_function` values('20','3','0','�Ա�����','taobao','�����Ա����ؼ��ʡ����ɷ����Ա�3g�ֻ�����','2','1');");
E_D("replace into `p_function` values('21','4','0','��Ա���Ϲ���','userinfo','��Ա���Ϲ��������Ա�����ɲ���','2','1');");
E_D("replace into `p_function` values('22','1','0','����','fanyi','���룫�ؼ��� �����������','1','1');");
E_D("replace into `p_function` values('23','4','0','�������ӿ�','api','�������ӿ�����ģ�飬���ڹ���ƽ̨���ؽӿ��ļ������ýӿ���Ϣ��','1','1');");
E_D("replace into `p_function` values('24','1','0','��������','suanming','�������� �������ؼ��ʡ������������','1','1');");
E_D("replace into `p_function` values('25','3','0','�ٶȰٿ�','baike','�ٶȰٿơ�ʹ�÷������ٿƣ��ؼ��ʡ������ٿƱ���','2','1');");
E_D("replace into `p_function` values('26','2','0','��Ʊ��ѯ','caipiao','�ظ�����:��Ʊ+���ּ��ɲ�ѯ��Ʊ�н���Ϣ,������Ʊ˫ɫ��','1','1');");
E_D("replace into `p_function` values('42','4','0','���˴�ת��','choujiang','����齱�����ɲμ����˴�ת�̳齱�','2','1');");
E_D("replace into `p_function` values('29','1','0','3G��ҳ','shouye','������ҳ,����΢3g ��վ','1','1');");
E_D("replace into `p_function` values('30','1','0','DIY����ҳ','adma','DIY����ҳ,���ڴ�����ά������ҳȨ�޿���','1','1');");
E_D("replace into `p_function` values('31','4','0','��Ա��','huiyuanka','�������vip��Ա��,�ظ���Ա��������ȡ��Ա��','1','1');");
E_D("replace into `p_function` values('36','4','0','ͨ��Ԥ��ϵͳ','host_kev','ͨ��Ԥ��ϵͳ �����ھƵ�Ԥ����ktv����������Ԥ���ȡ�','2','1');");
E_D("replace into `p_function` values('34','1','0','��ʲ�ѯ','geci','��ʲ�ѯ �ظ���ʣ��������ɲ�ѯһ�׸����ĸ��,������������','1','1');");
E_D("replace into `p_function` values('35','2','0','����whois��ѯ','','����whois��ѯ���ظ����������� �ɲ�ѯ��վ������Ϣ,����whoisע��ʱ��ȵ�\r\n ��������pigcms.com','1','1');");
E_D("replace into `p_function` values('37','4','0','�Զ����','diyform','�Զ����(���ڱ�����ԤԼ,����)��','1','1');");
E_D("replace into `p_function` values('38','2','0','�������綩��','dx','�������綩��','1','1');");
E_D("replace into `p_function` values('39','2','0','�����̳�','shop','�����̳�,����ϵͳ','1','1');");
E_D("replace into `p_function` values('40','2','0','�����Ź�ϵͳ','etuan','�����Ź�ϵͳ','1','1');");
E_D("replace into `p_function` values('41','4','0','�Զ���˵�','diymen_set','�Զ���˵�,һ��������app','1','1');");
E_D("replace into `p_function` values('44','4','0','�ιο�','gua2','�ιο��齱�','1','1');");
E_D("replace into `p_function` values('45','4','0','ȫ��','panorama','','1','1');");
E_D("replace into `p_function` values('46','4','0','����ϲ��','wedding','','2','1');");
E_D("replace into `p_function` values('47','4','0','ͶƱ','vote','','2','1');");
E_D("replace into `p_function` values('48','4','0','����','estate','','2','1');");
E_D("replace into `p_function` values('49','4','0','3G���','album','','1','1');");
E_D("replace into `p_function` values('50','4','0','�ҽ�','GoldenEgg','','2','1');");
E_D("replace into `p_function` values('51','4','0','ˮ����','LuckyFruit','','2','1');");
E_D("replace into `p_function` values('52','4','0','���԰�','message','','2','1');");
E_D("replace into `p_function` values('53','4','0','΢����','car','','2','1');");
E_D("replace into `p_function` values('54','4','0','΢��ǽ','wall','','1','1');");
E_D("replace into `p_function` values('55','4','0','ҡһҡ','shake','','1','1');");
E_D("replace into `p_function` values('56','4','0','΢��̳','forum','','1','1');");
E_D("replace into `p_function` values('57','4','0','΢ҽ��','medical','','1','1');");
E_D("replace into `p_function` values('58','4','0','Ⱥ����Ϣ','message','','1','1');");
E_D("replace into `p_function` values('59','4','0','����ͳ��','share','','1','1');");
E_D("replace into `p_function` values('60','4','0','�Ƶ����','hotel','','1','1');");
E_D("replace into `p_function` values('61','4','0','΢����','school','','1','1');");
E_D("replace into `p_function` values('62','1','0','','','','1','1');");
E_D("replace into `p_function` values('63','1','0','','','','1','1');");

require("../../inc/footer.php");
?>