<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_nearby_user`;");
E_C("CREATE TABLE `p_nearby_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL,
  `uid` varchar(32) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=306 DEFAULT CHARSET=gbk");
E_D("replace into `p_nearby_user` values('1','yicms','o8MTUjj_oIiraejMjUqapd8stDJA','�Ƶ�','1373771366');");
E_D("replace into `p_nearby_user` values('2','yicms','o8MTUjoDS4MeiFKlXgFPxgZIHeYk','����','1374732097');");
E_D("replace into `p_nearby_user` values('3','yicms','o8MTUjiNgEFHMNz3-HSWU24EIZfQ','��ʳ','1372401409');");
E_D("replace into `p_nearby_user` values('4','yicms','o8MTUjkqJTk7iBV1uLUq5rsqkPXM','������','1371571540');");
E_D("replace into `p_nearby_user` values('5','weixin','oBT5_jvHBtmvut_YofWmEAYFDkLM','ҽԺ','1372255174');");
E_D("replace into `p_nearby_user` values('6','yicms','o8MTUjpJIOxMrHQ29ZKCjO-CbUPA','����','1372243125');");
E_D("replace into `p_nearby_user` values('7','zhijiantong','o_5bTjq5t-dUAR1vLUroJhbOxAzk','��ʳ','1372243159');");
E_D("replace into `p_nearby_user` values('8','weixin','ot1B7joiYF7-hhGykOOWQpAHcg_o','�Ƶ�','1372303497');");
E_D("replace into `p_nearby_user` values('9','weixin','ot1B7jmPIWFYD-qxhpwQC8Cs214U','������','1372303936');");
E_D("replace into `p_nearby_user` values('10','123456789','oAIoEjwM8JQiF98ITetRf7Rcnhgg','С��','1373873812');");
E_D("replace into `p_nearby_user` values('11','yicms','oLA6VjhV6nlF0aq3c0BpAvIRX3Uk','�й�����','1382417093');");
E_D("replace into `p_nearby_user` values('12','feng','oQN2Fji46R_vR6yLm39l1Y5aN8kE','����','1374068732');");
E_D("replace into `p_nearby_user` values('13','yicms','oLA6VjsWFEqLyYSpd5IFL6oH6lC0','��������','1375237293');");
E_D("replace into `p_nearby_user` values('14','cch1988922','oe5zejvBHcmHyVrOyyNJk5I-lUBA','�Ƶ�','1374143324');");
E_D("replace into `p_nearby_user` values('15','yicms','oLA6VjkCryQTj_MOZ--97ll3BdzE','�¿�','1375616564');");
E_D("replace into `p_nearby_user` values('16','ssfwe4432424234324sfdsf','ohLn9jiVNHI8_kpnqEIm2fE67IhE','�ܱ߲�ѯ��Ϣ','1374414259');");
E_D("replace into `p_nearby_user` values('17','wlmqol','oWCOWjrfPnkm-NIQOW6HVRMAIY_o','����','1374470955');");
E_D("replace into `p_nearby_user` values('18','weixin01','o2Bu0jhiPFutEH1D_x0mhpghtE8s','ktv','1374477729');");
E_D("replace into `p_nearby_user` values('19','weixin01','o2Bu0jiFb5eNve0dmf_eA2WS7MlA','��ʳ','1374483671');");
E_D("replace into `p_nearby_user` values('20','yicms','oLA6VjvAf-fZqo8sKQbpXab4vKtA','�̵�','1381210185');");
E_D("replace into `p_nearby_user` values('21','ailanyin','oXHOhjq0J9M9kavEg2Xnre9fx9RA','�Ƶ�','1374568534');");
E_D("replace into `p_nearby_user` values('22','ailanyin','oXHOhjq8yRiYXPRtL0k7kgliLEbs','����','1374566096');");
E_D("replace into `p_nearby_user` values('23','ailanyin','oXHOhjvW4kP7MpT6miklE6VzjBKU','Ktv','1374569595');");
E_D("replace into `p_nearby_user` values('24','a6677000','oYICKjvpvz8WAAVZdxWbMSSI7r8Q','�Ƶ�','1374569588');");
E_D("replace into `p_nearby_user` values('25','yicms','oLA6Vjj52CkAvvK7Vp1yezzZdXt0','��ʳ','1374580462');");
E_D("replace into `p_nearby_user` values('26','yushanlaoxian','ouoR3jj2nATtukW2Mh-bdsZv00X0','����','1374591364');");
E_D("replace into `p_nearby_user` values('27','haihui','oiOrNjrE0TyBbCcz9GBP-ciVN7ZM','����','1374654977');");
E_D("replace into `p_nearby_user` values('28','yicms','oLA6Vjs88qfeB508tz6fmx8ZHF2U','����','1374654833');");
E_D("replace into `p_nearby_user` values('29','yicms','oLA6VjmVibFFiVvRXW5kReidlKjg','����','1374656927');");
E_D("replace into `p_nearby_user` values('30','yicms','oLA6VjqfMIl44Tw7T2tgmHQGeN_M','������','1374729167');");
E_D("replace into `p_nearby_user` values('31','weixin1','oDMG0jvytqi8_1EBeaiwGFLg7bkY','������','1374738280');");
E_D("replace into `p_nearby_user` values('32','xiaoweike','o6BKjjr4q-DSNPlykhQUdw1hE1Hw','��Ħ','1375087554');");
E_D("replace into `p_nearby_user` values('33','yicms','oLA6Vjrop0FnLVWOtya0jcQpGGh8','���','1376621010');");
E_D("replace into `p_nearby_user` values('34','yicms','oLA6VjgKA3PbI95FI_jtnObM3fPk','�Ƶ�','1382150502');");
E_D("replace into `p_nearby_user` values('35','yichangweixin','ozSfKjk8DbFxldOcDmaR42S994jo','�Ƶ�','1375024755');");
E_D("replace into `p_nearby_user` values('36','yicms','oLA6Vjr-cPf3MCZfHGKXDnSmdv7g','�Ƶ�','1374820610');");
E_D("replace into `p_nearby_user` values('37','suiyinzi1234','oeZrJjsD2y_ysEsjg-GJEKZhjtgA','������','1374904370');");
E_D("replace into `p_nearby_user` values('38','yicms','oLA6VjgQIl3tYEpR-JUjDlMBVask','����','1375501280');");
E_D("replace into `p_nearby_user` values('39','yicms','oLA6Vjpydf7p0hWwN6brzu4G8mbU','����','1374939842');");
E_D("replace into `p_nearby_user` values('40','Distribution','o3GOLjgI25czTCv0wRwoIB60e7i4','�Ƶ�','1375267363');");
E_D("replace into `p_nearby_user` values('41','yicms','oLA6VjkZaABL3sv5w7QvLwtPQw3A','��´����վ���','1374993958');");
E_D("replace into `p_nearby_user` values('42','lizhixiaogs','oPLF9jhwVC27ijL4o83p6DA9qXyc','ҽԺ','1375001780');");
E_D("replace into `p_nearby_user` values('43','yicms','oLA6Vjm26Pcf8TYRt2SdDbgAMy1M','����','1375001737');");
E_D("replace into `p_nearby_user` values('44','yicms','oLA6VjjRxmHB0xoeVFQh8oQ_Br-s','��ʳ','1375061378');");
E_D("replace into `p_nearby_user` values('45','yicms','oLA6Vjv30ocznYR7GXQfSwFc0fkY','��ʳ','1375068659');");
E_D("replace into `p_nearby_user` values('46','xiaoweike','o6BKjjnOY2QJlX9A3SmwTrI1dokE','ɣ��','1375107788');");
E_D("replace into `p_nearby_user` values('47','yicms','oLA6Vji8vEjlsLu8yePaocM5VxZU','����վ','1375111696');");
E_D("replace into `p_nearby_user` values('48','weixin11222','okqPEjldF_8oivt-FQHacQ92139k','ktv','1375115143');");
E_D("replace into `p_nearby_user` values('49','lizhixiaogs','oPLF9jkZ9pgAHtqfUhtWLi-jas-E','�ư�','1375141562');");
E_D("replace into `p_nearby_user` values('50','weixin11222','okqPEjowZYPhMntxZZ5kN6Pz_cHY','ҽԺ','1375845786');");
E_D("replace into `p_nearby_user` values('51','yicms','oLA6Vjl1wibCdSkzv9CzANlJQpZc','�Ƶ�','1375158029');");
E_D("replace into `p_nearby_user` values('52','yicms','oLA6Vjm2_NZZcY-W3IZLaHFN-dEY','����','1375278486');");
E_D("replace into `p_nearby_user` values('53','weixin1989','oLIEBjxPuMBG8vBBH9Zi0AEe7r3A','����','1376471048');");
E_D("replace into `p_nearby_user` values('54','yicms','oLA6VjnxrBgbSIFrFXljLZDF2YVc','��ʳ','1375285095');");
E_D("replace into `p_nearby_user` values('55','weixin1989','oLIEBj0sPCgbpp6PdCO_S9hn6B5I','�͹�','1377758180');");
E_D("replace into `p_nearby_user` values('56','yicms','oLA6Vjs2ECF-5nQjLm0DPLnArxec','�óԷ���ʲô','1375262512');");
E_D("replace into `p_nearby_user` values('57','ynceyi','olkx-jpGy8VSAnvSIv6mDQ6NDk4I','�����ܱ߲�ѯ��Ϣ','1375263955');");
E_D("replace into `p_nearby_user` values('58','yicms','oLA6VjpZ_1wmQPPwF5HjkBpy8df8','����','1375341690');");
E_D("replace into `p_nearby_user` values('59','Distribution','o3GOLjvbcyu5wLhfIkebHz5OpDWU','�Է�','1375360811');");
E_D("replace into `p_nearby_user` values('60','yicms','oLA6VjgMG0OSLTiCXCKnMEBKx8Js','������','1375414806');");
E_D("replace into `p_nearby_user` values('61','yicms','oLA6Vjp79RKgyRWBTysa-k1oK070','�Ƶ�','1375419217');");
E_D("replace into `p_nearby_user` values('62','yicms','oLA6Vji-nuGsEhPWqoA7Q54aRyyg','������','1375436146');");
E_D("replace into `p_nearby_user` values('63','yicms','oLA6Vjiljo_NbEGpJ6OMY7PmskMc','����','1383282624');");
E_D("replace into `p_nearby_user` values('64','yicms','oLA6Vjr3q55EfTuM2RH5lcirRRP0','�Ƶ�','1375591695');");
E_D("replace into `p_nearby_user` values('65','1730892509','oQMvfjsK2kbb2_PvyL7xulPbXeS8','����','1376008435');");
E_D("replace into `p_nearby_user` values('66','yicms','oLA6VjjFU-3iuAOXkiFbx-sGqyUk','����','1376199805');");
E_D("replace into `p_nearby_user` values('67','lizhixiaogs','oPLF9jm4y9HQFwQ-CMk2paxGlR_s','����','1375771129');");
E_D("replace into `p_nearby_user` values('68','yicms','oLA6Vjg-yNnO1c3B9vGhi5BmB9MQ','�Ƶ�','1375845244');");
E_D("replace into `p_nearby_user` values('69','yicms','oLA6VjlOyOpvFJwG32xjpISwKP5s','�͹�','1375871576');");
E_D("replace into `p_nearby_user` values('70','meinvshishanghui','o9QD0jlvfNn5RkhI-xJaJ_juqTXo','�Ź�','1376192194');");
E_D("replace into `p_nearby_user` values('71','yicms','oLA6Vjl2T8FMv0kAzXDKDu5Py99E','�Ƶ�','1375938584');");
E_D("replace into `p_nearby_user` values('72','yicms','oLA6VjrRT5pH5Sxcftf0JINF9Ikc','�Ƶ�','1375953590');");
E_D("replace into `p_nearby_user` values('73','1730892509','oQMvfjtxHqs0PzSimbywySqZCwPw','����','1376110482');");
E_D("replace into `p_nearby_user` values('74','yicms','oLA6VjpLrkrrBq5wNhyJ_pmpQc0w','������','1376112564');");
E_D("replace into `p_nearby_user` values('75','1730892509','oQMvfjmp_MnDz3Laig7p_zpdWLFs','����','1376008957');");
E_D("replace into `p_nearby_user` values('76','1730892509','oQMvfjgdmhbPRWrzRZd4NCS_X7uY','����','1376126941');");
E_D("replace into `p_nearby_user` values('77','1730892509','oQMvfjv-Yu5P5KE8cq4158Q-SHrg','�Ƶ�','1376131273');");
E_D("replace into `p_nearby_user` values('78','1730892509','oQMvfjk-mxHmpR8drPDGLURVjMew','����','1376132632');");
E_D("replace into `p_nearby_user` values('79','yicms','oLA6VjoV3NQVu9jjU01_QQIIlssQ','��ӰԺ','1376139739');");
E_D("replace into `p_nearby_user` values('80','1730892509','oQMvfjvw0E_Cvh15wP7CH-RrdUfc','����','1376150098');");
E_D("replace into `p_nearby_user` values('81','testtokennn','o0vHRjjRkaVNtHLAZTCHHRPdn8Ww','����','1376150812');");
E_D("replace into `p_nearby_user` values('82','1730892509','oQMvfjtQIlvI7ZH85ItZBhgnI_uI','����','1376179324');");
E_D("replace into `p_nearby_user` values('83','yicms','oLA6VjkMMcaOvQ90Y5_itDVMVv1o','�Ƶ�','1376191574');");
E_D("replace into `p_nearby_user` values('84','yicms','oLA6Vjstwif4BlXAK5MQ2Y1QoVQw','����','1381843729');");
E_D("replace into `p_nearby_user` values('85','cmzhl','o0EOjjgpz7Ji6N0LWDKM6NLAAKsc','����','1376230870');");
E_D("replace into `p_nearby_user` values('86','mthxjy','opw21jvluv8jygkPzPQnAZME1Xzs','��ʳ','1377765937');");
E_D("replace into `p_nearby_user` values('87','vcolorcn','o7KOIjogybB_ESUkf_tMo0OsYnWc','����','1376538082');");
E_D("replace into `p_nearby_user` values('102','tuijinli','oWKL6jop4_-zF4Vm2Fb6mvzu0SB0','����վ','1376588524');");
E_D("replace into `p_nearby_user` values('88','mthxjy','opw21jodail8a0N-_5oXREeM8_7E','�ʻ�','1376211020');");
E_D("replace into `p_nearby_user` values('89','yicms','oLA6VjvhDiVVc6WBzqKJdWhEQoYM','�Ƶ�','1377239812');");
E_D("replace into `p_nearby_user` values('90','yicms','oLA6VjgMHuGPGFE7UdhcJHyYKtMA','�ܱ߲�ѯ��Ϣ','1376239399');");
E_D("replace into `p_nearby_user` values('91','lizhixiaogs','oPLF9jv_z-MWkJFkotpnGo4Eo5Dk','�ߺ��ط���','1376258265');");
E_D("replace into `p_nearby_user` values('92','vcolorcn','o7KOIjgL5k5v5zSbRtaVg1uTD0rk','ę́��','1376453850');");
E_D("replace into `p_nearby_user` values('93','meinvshishanghui','o9QD0jsqtDuuUxb-WiQlme4Ok_GM','����','1376288701');");
E_D("replace into `p_nearby_user` values('94','vcolorcn','o7KOIji4-hCKQsRajpL-PAB4XIuU','����','1376293683');");
E_D("replace into `p_nearby_user` values('101','yicms','oLA6VjmuLdByPK56A3jrYO42A_V4','������','1376488024');");
E_D("replace into `p_nearby_user` values('95','yicms','oLA6VjjXqmwiNeJtEH7l1r-kwo54','����','1376358302');");
E_D("replace into `p_nearby_user` values('96','mengweixin','oItOOjh5-HW0-RpLl86-krciBzP8','������','1376359677');");
E_D("replace into `p_nearby_user` values('97','qiang','oqmaojt-Jd1UFl-HaB0Qx1ilC9cU','��ʳ','1376365300');");
E_D("replace into `p_nearby_user` values('98','zj2101','orFXSjoU_S7aVxA0w3dd32jk8wMQ','�ܱ߲�ѯ��ϢLBS','1376371899');");
E_D("replace into `p_nearby_user` values('99','yicms','oLA6VjhuctuJYYtfBxnyzIUZQQh8','������','1376387455');");
E_D("replace into `p_nearby_user` values('100','vcolorcn','o7KOIjp5ilgddPwTHgH6Q-fedb1s','����','1376448995');");
E_D("replace into `p_nearby_user` values('103','vcolorcn','o7KOIjoqU8TpTPUQMCMd4tgDCgpo','�ܱ߲�ѯ��Ϣlbs','1376789316');");
E_D("replace into `p_nearby_user` values('104','flycomos666','o_LwGj84Eko_bLZeoLP2GoTL3W48','����վ','1376874242');");
E_D("replace into `p_nearby_user` values('105','yicms','oLA6VjomDlGrSZfIMdHOWxKNvktA','�Ƶ�','1379740555');");
E_D("replace into `p_nearby_user` values('106','xinqiyuannet','opIOyjuzaVoGVHUBEnURNeMstYcE','����վ','1376915859');");
E_D("replace into `p_nearby_user` values('107','kpxiaopin','oifXKjk5b1jsErxG5dJzL-MCiapE','�Ƶ�','1378015015');");
E_D("replace into `p_nearby_user` values('108','yicms','oLA6VjiRJtbznNYy_MECK4L279OQ','����','1377070959');");
E_D("replace into `p_nearby_user` values('109','xysheyx','oMKCpjowEL1R9oHh5ylnBgazWSsg','�Ƶ�','1377184858');");
E_D("replace into `p_nearby_user` values('110','yicms','oLA6VjjmIZAb4KOOaVFw1abcjs2k','����','1380335963');");
E_D("replace into `p_nearby_user` values('111','yicms','oLA6Vjk_YlKdZ-bzfNifqZ3eS7sE','�Ƶ�','1383405244');");
E_D("replace into `p_nearby_user` values('112','yicms','oLA6VjkCvQs-JZqW691DHnt1pggY','�Ƶ�','1377731611');");
E_D("replace into `p_nearby_user` values('114','yicms','oLA6Vjn26avwgi_seq8zE_r1YLmo','�Ƶ�','1377911410');");
E_D("replace into `p_nearby_user` values('113','weixin1989','oLIEBjziqeJCUrKmv331SIfhQcTE','������','1377747413');");
E_D("replace into `p_nearby_user` values('115','yicms','oLA6VjpVUT00VJ2D_Zv_ErZgYY7Q','����','1377931069');");
E_D("replace into `p_nearby_user` values('116','yicms','oLA6Vjj_YEzV750wa-63CrZcGRsU','�õ�','1378061448');");
E_D("replace into `p_nearby_user` values('117','yicms','oLA6VjgKMG5I4snBoDry00BJgznw','����','1378976897');");
E_D("replace into `p_nearby_user` values('118','yicms','oLA6VjrKAXO7ILalakLqBDnlVP3A','ͣ����','1378059331');");
E_D("replace into `p_nearby_user` values('119','RoyIsTheBest','oERN1jlbhlexA9EwIzN6SSwmB2Wc','�ܱ߲�ѯ��Ϣ','1378087126');");
E_D("replace into `p_nearby_user` values('120','aksxycm','opwWXjiLgti3GKE7uBIz4THMZFXc','�Ƶ�','1378454663');");
E_D("replace into `p_nearby_user` values('121','aksxycm','opwWXjnoyVC67m_CxnH5IeukZGuY','�޳�','1378233955');");
E_D("replace into `p_nearby_user` values('122','aksxycm','opwWXjtrKUo8Fe19MB8IAf907EUM','�Ƶ�','1378198453');");
E_D("replace into `p_nearby_user` values('123','yicms','oLA6VjqgtPn5HIL-itOHKEbPsuDw','�Ƶ�','1378276853');");
E_D("replace into `p_nearby_user` values('124','lvyoukx2','orIzmjuP0jJgtJ_cHd61mFOESogo','�ܱ߲�ѯ��Ϣ','1378302506');");
E_D("replace into `p_nearby_user` values('125','yicms','oLA6VjuTEDCsBZFUZgMgfFcpmFC4','�Ƶ�','1385827183');");
E_D("replace into `p_nearby_user` values('126','13611081','oitS2jvVmzbzulV7sWNgMVu_m8iE','��ɳ��ʳ','1378368044');");
E_D("replace into `p_nearby_user` values('127','galaxyinfo','omI7bjoliy-FwzWNSCaCIOeLncAY','���繫˾','1378793236');");
E_D("replace into `p_nearby_user` values('128','yicms','oLA6VjhhrBWdB2yiCjt8H0XfZ8E8','ҽԺ','1378474289');");
E_D("replace into `p_nearby_user` values('129','yicms','oLA6VjpNaUsjza97yEqwPHqiqux0','��ʳ','1378489434');");
E_D("replace into `p_nearby_user` values('130','yicms','oLA6VjpFalRHJ48TEdk6b_cLiFPI','�̵�','1378732414');");
E_D("replace into `p_nearby_user` values('131','yicms','oLA6VjgKkr6LpY6GigBIpXt-s_gs','�Ƶ�','1378806378');");
E_D("replace into `p_nearby_user` values('132','galaxyinfo','omI7bjgBTz8YyMat4aJgT1Qm6Ohw','���繫˾','1378878943');");
E_D("replace into `p_nearby_user` values('133','weixiaoshuowx','ofAq9jpcly_Gi3JUl3LfirXTJt98','�ܱ߲�ѯ��Ϣlbs','1378882902');");
E_D("replace into `p_nearby_user` values('134','yicms','oLA6VjgQ_h3s9eZQx3zZpFkjcPcc','����','1378882781');");
E_D("replace into `p_nearby_user` values('135','kaipad','oiFEJj7FvfSjXpgEWb-_LF-o1BmM','�Ƶ�','1379323089');");
E_D("replace into `p_nearby_user` values('136','yicms','oLA6Vjkk_ldfJ4aqP-3a1sz2sRco','�̼�','1379004672');");
E_D("replace into `p_nearby_user` values('137','i30ymt','olT2ejipmqk7A3-3B8bkcIBXA1wA','����','1379006043');");
E_D("replace into `p_nearby_user` values('138','muzieee','oMLayjogefmPP2LgKAkpRfHrmPgY','����','1379051339');");
E_D("replace into `p_nearby_user` values('139','yicms','oLA6Vjgup2kFkbFpgVq9Zi4RGQVg','��ʳ','1379056823');");
E_D("replace into `p_nearby_user` values('140','05318899','oAeiDjs-MdNZdLM5YBtuhA6o-hRU','����','1379300513');");
E_D("replace into `p_nearby_user` values('141','lvyoukx2','orIzmjj_9l5ejfrJ_SO1oCBBVsYU','�ܱ߲�ѯ��Ϣ','1379125625');");
E_D("replace into `p_nearby_user` values('142','weiwangidc','o-hAKj0RfAoPOI3XxkwmrrTaM56w','�ó�ʲô','1379229850');");
E_D("replace into `p_nearby_user` values('143','iwendeng','ocKJ8juoEr5ZLlDOl-d0-xJiA_SU','�ĵ�ʦ������ʲô','1379237906');");
E_D("replace into `p_nearby_user` values('144','qiandu','oR5nPjpWWbczCLcGCh_R38XivLr0','�ܱ߲�ѯ��Ϣlbs','1379393726');");
E_D("replace into `p_nearby_user` values('145','lixiangnan','oYmGxjs4gHD4GYJ3Cqj76k4dEZfE','����','1379557739');");
E_D("replace into `p_nearby_user` values('146','yicms','oLA6VjlHpnWSNuak_YchHaCUCMwg','ԡ��','1386565144');");
E_D("replace into `p_nearby_user` values('147','yicms','oLA6Vjna55CQNN0Xsxb8REgkLU4U','����','1379586122');");
E_D("replace into `p_nearby_user` values('193','aqrxot1381991877','oNIy1jnxTO0BkMsMy2AXqJOI_upY','�Ƶ�','1382003469');");
E_D("replace into `p_nearby_user` values('148','yicms','oLA6VjpY4bMq07J1mzSpmE0GBFCc','��ʳ','1379691204');");
E_D("replace into `p_nearby_user` values('149','wayboo2013','oRF6Mjs4Xh1jpqJjDclub-9GjtcE','��ʳ','1379989434');");
E_D("replace into `p_nearby_user` values('150','nscn','ocPLdjgEmYLdc3MPd7FvEQQhrJng','����','1379841933');");
E_D("replace into `p_nearby_user` values('151','weidonglizazhi','o4vbNjjch0YmK-q41Pm3Krre2JLo','��ʳ','1379906854');");
E_D("replace into `p_nearby_user` values('152','1512268465','oHPinjjJweXSJP1U5wXtM2KwmvJM','����','1380463362');");
E_D("replace into `p_nearby_user` values('153','dc_xzs','o7EvSt9GblJ_8prHZCF11rrSUwJQ','��ʳ','1379925530');");
E_D("replace into `p_nearby_user` values('154','yicms','oLA6Vjp4sLSAuQLjhlvOQh_Js220','����','1380681047');");
E_D("replace into `p_nearby_user` values('155','weixin1','oDMG0juvBOBqbecEQs0qaLq8N6ho','ѧУ','1380010342');");
E_D("replace into `p_nearby_user` values('156','yicms','oLA6VjtrSG0x6vJUyLpqaRutA5EY','����','1380010892');");
E_D("replace into `p_nearby_user` values('157','iwendeng','ocKJ8jg6zltbHSbYK7MZAJvDvOQU','�Է�','1380011172');");
E_D("replace into `p_nearby_user` values('158','sqhuifu','oUwp4jhyqFSR6IlttlVezox3fim8','����','1380084077');");
E_D("replace into `p_nearby_user` values('159','yzhwowo','o4Liljnce_tFuq18VIY0W-dcBzLw','�Ƶ�','1380063519');");
E_D("replace into `p_nearby_user` values('160','hqdogo123','ouCjijk3RjiFTjroC62SbtUCRQgY','��ʳ','1380099587');");
E_D("replace into `p_nearby_user` values('161','Line_168','oqxV-jj4Bdb3fWP0XuJAw70uMHR0','��ͼ','1386389093');");
E_D("replace into `p_nearby_user` values('162','yicms','oLA6VjqQ32a3yDHQt49fTa20Q6no','����','1380109228');");
E_D("replace into `p_nearby_user` values('163','shukewang21','oXJahjtkj2dghsAIeS2GE3xQTCno','����','1380115541');");
E_D("replace into `p_nearby_user` values('164','shukewang21','oXJahjv2qKBugadP7zbVMzZ1yU38','����','1380117204');");
E_D("replace into `p_nearby_user` values('165','yicms','oLA6VjmSlQXq34nSpxcvKSmPLD14','���Ͽ�','1380284197');");
E_D("replace into `p_nearby_user` values('166','yucivip','o39Z5jjqGO26GH-B768l98tDr1lg','�Ƶ�','1380254168');");
E_D("replace into `p_nearby_user` values('167','weixintoke','o0UbZjqC6RwCZwVuV1JFk8uE2Cu0','����','1380336962');");
E_D("replace into `p_nearby_user` values('168','yicms','oLA6Vjtm70E_LztmIkuIZR9tPyJU','������','1380339971');");
E_D("replace into `p_nearby_user` values('169','wzhaopin','osSCHjjEbXKSO_uYSZlQpCuydcnc','����','1380358216');");
E_D("replace into `p_nearby_user` values('170','house5','oP7KPjhk_zv4d_Ds0hzNaq7jpcK4','¥��','1380421706');");
E_D("replace into `p_nearby_user` values('171','lixiangnan','oYmGxjuE8Ib-9qXxXnspSsyRSYwU','�Ƶ�','1380973242');");
E_D("replace into `p_nearby_user` values('172','yicms','oLA6VjhGC0a2mYEspL3T9LsDjehA','300','1382003563');");
E_D("replace into `p_nearby_user` values('173','yicms','oLA6VjvnjD3PoebdKNQ3IcRdkZr8','�Ƶ�','1381655796');");
E_D("replace into `p_nearby_user` values('174','yicms','oLA6VjonG3KbfUJfBk1bEzkgkJ2w','������','1380532788');");
E_D("replace into `p_nearby_user` values('175','yicms','oLA6VjmuLf9xzxeAbxYx9rZ2b10Y','��ʳ','1380533257');");
E_D("replace into `p_nearby_user` values('176','yicms','oLA6VjusIyzNe_rNJhzFzH6hMl0w','�Ƶ�','1383124792');");
E_D("replace into `p_nearby_user` values('177','yicms','oLA6VjgjJMjP_ho0gq3GcdBkygfk','����','1381045216');");
E_D("replace into `p_nearby_user` values('178','weixinxchsh0575','oNbK0jrluhKkLHWbpF8qzz0faEWw','ţ��','1381218215');");
E_D("replace into `p_nearby_user` values('179','yicms','oLA6Vjq5nrZnz6g32G8L0iGF5qB4','С��','1383117043');");
E_D("replace into `p_nearby_user` values('180','yepu521','owL-HjsfSX6Q6e1aordVY-gSfJrM','��������1069','1381309555');");
E_D("replace into `p_nearby_user` values('181','yepu521','owL-HjkdK0sftAcE2jmkDVcEdNNs','����ư�','1381466497');");
E_D("replace into `p_nearby_user` values('182','yicms','oLA6Vjlc5A_lc5FiY9WS_rV25LmY','������','1381487234');");
E_D("replace into `p_nearby_user` values('183','vzmrov1381475376','oLOjMjoa1MiN4lLKta3rSacSh_w8','�Ƶ�','1381495956');");
E_D("replace into `p_nearby_user` values('184','vzmrov1381475376','oLOjMjkXjkqfe8Q6YFi3JS_nqVDc','����','1381543493');");
E_D("replace into `p_nearby_user` values('185','fgmweixin','o8Z2xjuS8Gcg9C20ROXJ4AAHqWgc','�Ƶ�','1381567068');");
E_D("replace into `p_nearby_user` values('186','ywbici1381569054','oVIfgjlYbo8n8fPsTwf0n6ivOQSg','�Ƶ�','1381636244');");
E_D("replace into `p_nearby_user` values('187','yvieyy1381566226','obzpJt5R4TN5x5dI4-Mh8OPkudDw','�ܱ߲�ѯ��Ϣ','1381767093');");
E_D("replace into `p_nearby_user` values('188','klvwlk1381716983','o7mdruG3YXIjyLJ96BMdwysTCxDE','�Ƶ�','1381794895');");
E_D("replace into `p_nearby_user` values('189','edirui1381827084','oNqUHjxRjILJVhYNJLqlZLAkZxoE','��ʳ','1381835220');");
E_D("replace into `p_nearby_user` values('190','zjtspk1381829376','obk8uuKU09cM3so8FnfRUVdt59Gk','����','1381829653');");
E_D("replace into `p_nearby_user` values('191','yicms','oLA6VjvyFa2xUqLWS4DB7J4pXctU','����','1381830604');");
E_D("replace into `p_nearby_user` values('192','yicms','oLA6VjlbyFhVAeMyxDOkdYFhPhto','����','1381855716');");
E_D("replace into `p_nearby_user` values('194','pdyonq1382086429','oOLCvjmKbv0nwtxOiutWE28feQo8','�Ƶ��·838','1382091098');");
E_D("replace into `p_nearby_user` values('195','begxlh1382078530','odWafji9S8d-_BFSMJsi7t3EM9XI','����վ','1382172181');");
E_D("replace into `p_nearby_user` values('196','yicms','oLA6Vjpp9e2ko8Kq-pIBEWq7YhEk','�Ƶ�','1382171455');");
E_D("replace into `p_nearby_user` values('197','begxlh1382078530','odWafjlGke-tGogJdKnOMAbLJRTY','ҩ��','1382172220');");
E_D("replace into `p_nearby_user` values('198','begxlh1382078530','odWafjvlKZjLx38tj7kkIgEYS4OI','����վ','1382238922');");
E_D("replace into `p_nearby_user` values('199','yicms','oLA6VjtJNNJjHnq3i-FgHhj3HF2M','��ʳ','1382254369');");
E_D("replace into `p_nearby_user` values('200','isijoi1382324503','o69zwt5kk1D8jQR5jKhsA50sFO-Y','�Ƶ�','1382325181');");
E_D("replace into `p_nearby_user` values('201','psdojr1382321726','oXNfVjoM7t5hTCZ3JJRYUPdrNM9c','�Ƶ�','1382339014');");
E_D("replace into `p_nearby_user` values('202','yicms','oLA6VjmDWlR4Xy_AXvSHe2EVFeuM','�Ƶ�','1382350023');");
E_D("replace into `p_nearby_user` values('203','yicms','oLA6VjuphdtCeZkjZvFnPvgxVIew','С��','1382369755');");
E_D("replace into `p_nearby_user` values('204','Jd2QOQd6cTqo0qtjJq0OIHz1hwtb6T','ogZR5jjSXa52w4mdNZfKNEtSF5w0','��ʳ','1382379910');");
E_D("replace into `p_nearby_user` values('205','dmqodt1382418952','oQyuujtnOxJZ7Gi03z0eH68rBoHE','�Ƶ�','1382497202');");
E_D("replace into `p_nearby_user` values('206','oorlls1382401668','oRcQIjxi-3J9HKAPrks3ggGUjcBc','õ��԰','1383210857');");
E_D("replace into `p_nearby_user` values('207','rrzmjf1382595831','omDN3jvnQowA89YLcLXekFFYChTY','����ó�ʲô','1382603286');");
E_D("replace into `p_nearby_user` values('208','neftab1382579817','oNEeVtz5ImvmIecLJv8kclQE2SlI','�Ƶ�','1382608395');");
E_D("replace into `p_nearby_user` values('209','lubrxy1382614273','oeRult4UxL73mzd7AGjy-2AAU7SU','��˾','1382614657');");
E_D("replace into `p_nearby_user` values('210','yicms','oLA6VjgX3koK0ekPtG8N4Mcc7EsU','�Ƶ�','1382717938');");
E_D("replace into `p_nearby_user` values('211','jmgmoi1382781517','oLd49uKUXWFZGccxoKlywtPrBRRU','��ʳ','1382783633');");
E_D("replace into `p_nearby_user` values('212','yicms','oCsUfuCs0mwS1jBjUz1OpkvdSt30','��ͨ����','1383620612');");
E_D("replace into `p_nearby_user` values('213','dmnkxw1382332427','oIdCktwaLV6KMCPm0O4BGUSNQlNU','����','1383012904');");
E_D("replace into `p_nearby_user` values('214','hrkqkb1383015325','o_1_DtwnWMeqLA0Th14XLZCSwXCw','�Ƶ�','1383029649');");
E_D("replace into `p_nearby_user` values('215','yicms','oLA6VjkSka1U39TYJ5OLinf5Aee0','����ʵ�ֹ�����ʳ��ô','1383117542');");
E_D("replace into `p_nearby_user` values('216','yicms','oLA6Vjtjl6QCF4LnUnsRjZSf1fbI','��ʳ','1383029045');");
E_D("replace into `p_nearby_user` values('217','yicms','oLA6VjlxSQUGdwIL1FzSjS86VIxU','С��','1383069669');");
E_D("replace into `p_nearby_user` values('218','jwtgxv1383099851','oDemGt-sViOdIX6fGWec4SQB_rqQ','��ӰԺ','1383121723');");
E_D("replace into `p_nearby_user` values('219','xbiis','oQM6jjvMCTrrLPuKeKoE5z8eMx3A','��ʳ','1383178748');");
E_D("replace into `p_nearby_user` values('220','yicms','oCsUfuK2cF2DAG5zW3Ttq2E-5Rd0','����','1383190471');");
E_D("replace into `p_nearby_user` values('221','zcwlni1383133344','oec62jnj_OtSUqKrRDGZNfm5e0Bk','�Ƶ�','1383207222');");
E_D("replace into `p_nearby_user` values('222','medyoi1383200196','oGyZ4tzmt8v4UIDDf6p0Sjsohk20','�͹�','1383208500');");
E_D("replace into `p_nearby_user` values('223','yicms','oLA6VjtHM49JiaZ5dyAtOUdSduqs','KTV','1383209670');");
E_D("replace into `p_nearby_user` values('224','oorlls1382401668','oRcQIj4KTaoJFvKfn1-jF6OFFmAs','õ��԰','1383284853');");
E_D("replace into `p_nearby_user` values('225','yicms','oLA6Vjo4jEHdjIc3huQrtkywyylc','����','1383218607');");
E_D("replace into `p_nearby_user` values('226','yxchjj1383278231','o-S-WtwNpEyUcTGCrs-Y9yt0kwOE','�߸�Ь','1383280863');");
E_D("replace into `p_nearby_user` values('227','yicms','oLA6Vjthzlbb5FQEKyPoTcB7eaSI','��ʳ','1383969778');");
E_D("replace into `p_nearby_user` values('228','yicms','oCsUfuA3TFw3fOoBbPE-DFDdR_YI','��ʳ','1383405181');");
E_D("replace into `p_nearby_user` values('229','yicms','oLA6VjuW7N9NORcJ6b3v0leQi35w','�Ƶ�2000','1383654042');");
E_D("replace into `p_nearby_user` values('230','zstont1383273728','oIJk6t6JJVVn1Pjwh9rxpD63Thpc','����վ','1383558432');");
E_D("replace into `p_nearby_user` values('231','yicms','oLA6VjssvowymTbEbkK5kXrF01X0','����','1384017239');");
E_D("replace into `p_nearby_user` values('232','yicms','oLA6VjsgcNzv6mL09O5lQmq3eHek','�Ƶ�','1383618400');");
E_D("replace into `p_nearby_user` values('233','uduhzr1383613588','oY4mbjuUasoZ_2ReU1imXdIOAemI','�Ƶ�','1383659499');");
E_D("replace into `p_nearby_user` values('234','xfjsph1383723426','oKSnZjnkMBC_akuzCEf-oc3oiPkg','�Ƶ�','1383724704');");
E_D("replace into `p_nearby_user` values('235','xinptv1383704205','oQY_ijjcnXs6MprvS8NNiyR_YYv4','�Ƶ�','1383745610');");
E_D("replace into `p_nearby_user` values('236','oorlls1382401668','oRcQIj_TYzPOup5IxLKDkzElz7mc','������','1383786478');");
E_D("replace into `p_nearby_user` values('237','pwafzv1383795413','oIBCWjsbjxcUA9m61UoFD6azqDQ0','�Ƶ�','1383799090');");
E_D("replace into `p_nearby_user` values('238','yicms','oLA6VjrQ5md661KgMOkBcWsiPfy8','�Ƶ�','1384016653');");
E_D("replace into `p_nearby_user` values('239','yicms','oCsUfuIsHIWmolbH1iytg6gJnNFo','�̵�','1385365078');");
E_D("replace into `p_nearby_user` values('240','yicms','oLA6VjkMksOlDx8A6v03Mc8uk74Q','����','1384173092');");
E_D("replace into `p_nearby_user` values('241','kasdqn1383895237','ozQhOuOonFrOVn2IsM9UMfzUcr58','�Ƶ�','1384220030');");
E_D("replace into `p_nearby_user` values('242','nhjglv1384218944','oCMqHtzEA5St_42wfBxN_vis5m40','�͹�','1384246163');");
E_D("replace into `p_nearby_user` values('243','yicms','oCsUfuPiOWaFNdRs0RkBihRQbUbQ','��ʳ','1384516922');");
E_D("replace into `p_nearby_user` values('244','zmikye1384319527','okCDAjlZ2PMJItsu2Jr3Svp5XpNQ','����','1384435799');");
E_D("replace into `p_nearby_user` values('245','oafmoi1384421139','oOaC0t_26QZ9MFFCq01ziLZkNjPI','ѧУ','1384689422');");
E_D("replace into `p_nearby_user` values('246','yicms','oLA6VjigEKmt-gPECNM59Ey7MNmU','ҽԺ','1384481902');");
E_D("replace into `p_nearby_user` values('247','zekdpc1384481569','oYAXBjheKJfZ-hZJriYlv7UbSFpE','�͹�','1384483848');");
E_D("replace into `p_nearby_user` values('248','hoyzcl1384529758','oU--xjhPv8oO6wUrSKePL2qlhgms','�Ƶ�','1384530347');");
E_D("replace into `p_nearby_user` values('249','wlabxc1384416090','oguzqjl47_jtoPimo6-2JoXV6oMY','������װ','1384574778');");
E_D("replace into `p_nearby_user` values('250','zekdpc1384481569','oYAXBjtXd007N0dMeI2nrRIUixyA','��ѧ','1384575403');");
E_D("replace into `p_nearby_user` values('251','yicms','oLA6VjrdSq13bQwX_SqrQ70i3pNU','�ù�','1384686835');");
E_D("replace into `p_nearby_user` values('252','ofvdee1384753375','oIs4Bj9aGwf-lCo0nNEFAZIvAvZg','����Ժ','1384757651');");
E_D("replace into `p_nearby_user` values('253','yicms','oLA6VjpAtIuKDsQY2QZN2y8ppbFc','�Ƶ�','1386566544');");
E_D("replace into `p_nearby_user` values('254','khlxsi1384829822','om0PTtz5-1kUAeMZ6pquZES1k7Dw','�Ƶ�','1384849441');");
E_D("replace into `p_nearby_user` values('255','xwbdzz1384247488','osYVKtwDezvFIdjq9zlXWgyPoYS8','�����Ƶ�','1384857522');");
E_D("replace into `p_nearby_user` values('256','yicms','oCsUfuJH6gnc3k7jnLdD734YdMEE','������','1384882764');");
E_D("replace into `p_nearby_user` values('257','yicms','oLA6Vjv41tOYAwsQ1QqAB8Dq-ifk','��ʳ','1384912527');");
E_D("replace into `p_nearby_user` values('258','xwbdzz1384247488','osYVKt7SZJ66_Zc0Cp10KCbJvKw0','ҽԺ','1384914409');");
E_D("replace into `p_nearby_user` values('259','yicms','oCsUfuC0mqT4VM6JjbggaLvzGEXI','�Ƶ�','1385650427');");
E_D("replace into `p_nearby_user` values('260','xwbdzz1384247488','osYVKtwTLKdNMprsct0q4SAqJsoY','�Ƶ�','1384915381');");
E_D("replace into `p_nearby_user` values('261','sumkoh1384765764','oAjT-jsz8R0VIjSQ01VU7ezMmS9Q','�Ƶ�','1385027337');");
E_D("replace into `p_nearby_user` values('262','yicms','oLA6Vjg0OD2UEozyFb7k4ANh3O7A','��ʳ','1384959223');");
E_D("replace into `p_nearby_user` values('263','sumkoh1384765764','oAjT-jlWdfRft2Crzm0gI2JNiE6U','�Ƶ�','1385003536');");
E_D("replace into `p_nearby_user` values('264','pygvqn1384998752','o9huLjgq6kLfpjZTkR7NB4IvtEiU','�Ƶ�','1385003761');");
E_D("replace into `p_nearby_user` values('265','yicms','oCsUfuM5ZDJox3u6e3BO8-V1Hg2Y','������','1385023299');");
E_D("replace into `p_nearby_user` values('266','yicms','oCsUfuILpn-kFY066UvSZTeEWzLA','������','1385025327');");
E_D("replace into `p_nearby_user` values('267','zekdpc1384481569','oYAXBjqDTctoUHewngitnDwrExHo','����վ','1385049264');");
E_D("replace into `p_nearby_user` values('268','kasigz1383709700','o8MTUjk1KZ1w1In2kPpFnSmYIxFc','д��¥','1385090651');");
E_D("replace into `p_nearby_user` values('269','yicms','oLA6Vjod-qR_XeLnygUcQTV8MYpM','�ư�','1385120775');");
E_D("replace into `p_nearby_user` values('270','yicms','oLA6VjlNLCRGVennKYFzfIa-_Qtc','����','1385224478');");
E_D("replace into `p_nearby_user` values('271','ezdmqo1385347093','osZpntzCoSxSGpTs56Zc-w5CqVE4','����','1385347697');");
E_D("replace into `p_nearby_user` values('272','yicms','oCsUfuCNm-jx-pzKZH1x0SenyMUs','��ĦԺ','1385365248');");
E_D("replace into `p_nearby_user` values('273','yicms','oCsUfuJEHm2CnIyuLhP82NBTUN9M','�ܱ߲�ѯ��Ϣ','1386422686');");
E_D("replace into `p_nearby_user` values('274','yicms','oLA6Vju5vV23DT9pUHaz2oFes1C8','����','1385663900');");
E_D("replace into `p_nearby_user` values('275','cqaeqf1385791988','oaHICuOE5i4jPGZPX9Gwd9jq4O34','����','1385793284');");
E_D("replace into `p_nearby_user` values('276','yicms','oLA6Vjl-L_EBqffZM9_wgZJKs0HQ','�ŵ�','1385794351');");
E_D("replace into `p_nearby_user` values('277','yicms','oCsUfuHEHZrlBq5OWk9mn0p5ZVIg','ktv','1385821929');");
E_D("replace into `p_nearby_user` values('278','yicms','oLA6Vjpbwx2gwB2P0b9YWnROXb2k','������','1385889172');");
E_D("replace into `p_nearby_user` values('279','jwtgxv1383099851','oDemGt3h7kVYJoCHR5Lmfk-00eIY','�Ƶ�','1385956372');");
E_D("replace into `p_nearby_user` values('280','yicms','oLA6VjtxCZH3ecvEzYsPfoYNDbSM','����','1385969406');");
E_D("replace into `p_nearby_user` values('281','mtdvcw1385979783','oeicFj76Iwb3p-1YQDxSczjcEvLE','�Ƶ�','1385986423');");
E_D("replace into `p_nearby_user` values('282','yicms','oLA6Vjvwt0hyrYF0lwt3zPD9ZFvY','��ӰԺ','1386119501');");
E_D("replace into `p_nearby_user` values('283','bbpdvf1386040227','oONAguL2jTykSDG7tID1ihfzEE10','����','1386578659');");
E_D("replace into `p_nearby_user` values('284','yicms','oCsUfuA2YpF0sCjU4Ciizt0fZtfI','��˾','1386062990');");
E_D("replace into `p_nearby_user` values('285','cqicxo1386059661','ok7upjjOo3saVFga3-87fJOcXOGQ','����','1386133979');");
E_D("replace into `p_nearby_user` values('286','yicms','oLA6VjmaVVseA5dWkspeduxcZoRo','����','1386090559');");
E_D("replace into `p_nearby_user` values('287','cqicxo1386059661','ok7upjhZznaEJiDHtxgJuO99qpJY','����','1386119864');");
E_D("replace into `p_nearby_user` values('288','yicms','oLA6VjqNGniezHWc9YvRnRr-Vo4o','�ư�','1386121073');");
E_D("replace into `p_nearby_user` values('289','yicms','oCsUfuKkSKk8WMyBNkP_I0hnAw0c','��ʳ','1386144595');");
E_D("replace into `p_nearby_user` values('290','yicms','oLA6VjjF2yV1dFMMR9QCPdd68lBI','ҽԺ','1386150448');");
E_D("replace into `p_nearby_user` values('291','vfscnr1386223388','ogCnxjuD0mWQRb_zfOIaOJklju30','��ʳ','1386226641');");
E_D("replace into `p_nearby_user` values('292','sjbwpj1384332813','o1UubjqP-RNk46NAKL3C74whIWDI','��ҵ','1386232105');");
E_D("replace into `p_nearby_user` values('293','kasigz1383709700','o8MTUjvb0xEJKg0dzyuvJf7WibKk','��ʳ','1386253652');");
E_D("replace into `p_nearby_user` values('294','yicms','oLA6VjvjJ4H3EZxikvUeymTtRCCU','�ܱ���Ϣ','1386257742');");
E_D("replace into `p_nearby_user` values('295','yicms','oCsUfuAZRMFtAPKYNDMde3hVZ4HA','������','1386312781');");
E_D("replace into `p_nearby_user` values('296','yicms','oLA6VjhSfmSbh1ZZWJa_3OgG8g6w','������','1386381289');");
E_D("replace into `p_nearby_user` values('297','yicms','oLA6Vjm_xRCUlJo1mBsEnhJ9O0Gc','�Ƶ�','1386383095');");
E_D("replace into `p_nearby_user` values('298','yicms','oLA6VjtRfh2ciW76OJWLdFM9ydpE','��ͼ','1386391803');");
E_D("replace into `p_nearby_user` values('299','yicms','oCsUfuJmyBmnWVmInnTSpVKFmejs','ҽԺ','1386430860');");
E_D("replace into `p_nearby_user` values('300','kasigz1383709700','o8MTUjtbXao4XudiR9IQyd2n61TY','����','1386520895');");
E_D("replace into `p_nearby_user` values('301','yicms','oLA6VjikF2AO8lbM9AflQuYOzm0U','��Ƹ','1386526616');");
E_D("replace into `p_nearby_user` values('302','odzryk1386557784','oD7wNt9B4HuVOKbUgmWH9Z8Xj5ig','����','1386566779');");
E_D("replace into `p_nearby_user` values('303','kasigz1383709700','o8MTUjnMpz9SLmqiz5ShnLhrm4jg','�Ƶ�','1386566592');");
E_D("replace into `p_nearby_user` values('304','dwkcdf1386559560','ouAf2jh7tDanjyvlFBAY7U8lkbZw','�Ƶ�','1386580109');");
E_D("replace into `p_nearby_user` values('305','odzryk1386557784','oD7wNt_iWm0zHqI835DZKgYVrXoo','����','1386582524');");

require("../../inc/footer.php");
?>