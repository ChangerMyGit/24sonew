<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_catemenu`;");
E_C("CREATE TABLE `p_catemenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `name` varchar(120) NOT NULL,
  `orderss` varchar(10) NOT NULL DEFAULT '0',
  `picurl` varchar(120) NOT NULL,
  `url` varchar(200) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL,
  `RadioGroup1` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=gbk");
E_D("replace into `p_catemenu` values('1','0','879c2f933017228','�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:13888888888','1','0');");
E_D("replace into `p_catemenu` values('2','0','879c2f933017228','����','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=879c2f933017228&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('3','0','879c2f933017228','���','3','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu7.png','{siteUrl}/index.php?g=Wap&amp;m=Photo&amp;a=index&amp;token=879c2f933017228&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('4','0','1fee0922b0a40db','�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:18672784210','1','0');");
E_D("replace into `p_catemenu` values('5','0','1fee0922b0a40db','��ַ','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=1fee0922b0a40db&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('6','0','tvjxcc1402290548','�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel��18753002501','1','0');");
E_D("replace into `p_catemenu` values('7','6','tvjxcc1402290548','��˾�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu10.png','','1','0');");
E_D("replace into `p_catemenu` values('8','0','vhvake1402306510','һ������','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel��010-68027979','1','0');");
E_D("replace into `p_catemenu` values('9','0','vhvake1402306510','�̼ҵ�ַ','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','','1','0');");
E_D("replace into `p_catemenu` values('10','0','vhvake1402306510','�ιο�','3','http://v.24so.com/tpl/static/attachment/icon/colorful/3.png','','1','0');");
E_D("replace into `p_catemenu` values('11','0','a3a7daf71176d5b','��ϵ��ʽ','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:15264221335','1','0');");
E_D("replace into `p_catemenu` values('13','0','a3a7daf71176d5b','LBS','2','http://v.24so.com/tpl/static/attachment/icon/lovely/marker.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=a3a7daf71176d5b&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('14','0','mhsqxc1401953951','һ������','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:02583228363','1','0');");
E_D("replace into `p_catemenu` values('15','0','mhsqxc1401953951','����','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=mhsqxc1401953951&amp;wecha_id={wechat_id}&amp;companyid=10','1','0');");
E_D("replace into `p_catemenu` values('16','0','dhybwc1402363778','����','0','http://v.24so.com/tpl/static/attachment/icon/colorful/5.png','tel:15610067896','1','0');");
E_D("replace into `p_catemenu` values('17','0','dhybwc1402363778','�绰','0','http://v.24so.com/tpl/static/attachment/icon/colorful/5.png','tel:18661795118','1','0');");
E_D("replace into `p_catemenu` values('18','0','dhybwc1402363778','����','0','http://v.24so.com/tpl/static/attachment/icon/lovely/map.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=dhybwc1402363778&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('19','0','c6a3b2d7590ae01','һ������','3','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','','1','0');");
E_D("replace into `p_catemenu` values('20','0','c6a3b2d7590ae01','һ������','6','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','','1','0');");
E_D("replace into `p_catemenu` values('23','20','c6a3b2d7590ae01','������˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}&amp;companyid=17','1','0');");
E_D("replace into `p_catemenu` values('21','0','c6a3b2d7590ae01','ͼƬ����','8','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu7.png','{siteUrl}/index.php?g=Wap&amp;m=Photo&amp;a=index&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('22','0','c6a3b2d7590ae01','��������','7','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu4.png','{siteUrl}/index.php?g=Wap&amp;m=Reply&amp;a=index&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('24','20','c6a3b2d7590ae01','�Ϻ���˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}&amp;companyid=18','1','0');");
E_D("replace into `p_catemenu` values('25','20','c6a3b2d7590ae01','�ൺ��˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}&amp;companyid=21','1','0');");
E_D("replace into `p_catemenu` values('26','19','c6a3b2d7590ae01','������˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:010-59105965','1','0');");
E_D("replace into `p_catemenu` values('27','19','c6a3b2d7590ae01','�Ϻ���˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:021-60512467','1','0');");
E_D("replace into `p_catemenu` values('28','19','c6a3b2d7590ae01','�ൺ��˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:0532-85918062','1','0');");
E_D("replace into `p_catemenu` values('29','19','c6a3b2d7590ae01','���Ϲ�˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:0531-87035217','1','0');");
E_D("replace into `p_catemenu` values('30','19','c6a3b2d7590ae01','���ݹ�˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:020-85201175','1','0');");
E_D("replace into `p_catemenu` values('31','20','c6a3b2d7590ae01','���Ϲ�˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}&amp;companyid=19','1','0');");
E_D("replace into `p_catemenu` values('32','20','c6a3b2d7590ae01','���ݹ�˾','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=c6a3b2d7590ae01&amp;wecha_id={wechat_id}&amp;companyid=20','1','0');");
E_D("replace into `p_catemenu` values('33','0','yosjzs1402383816','ԤԼ�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','�绰��15864235795','1','0');");
E_D("replace into `p_catemenu` values('34','0','qxrzxy1402460503','���ְ�','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu16.png','http://music.baidu.com/','1','0');");
E_D("replace into `p_catemenu` values('35','0','qxrzxy1402460503','΢��Ӱ','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu17.png','http://www.sogou.com/sogou?query=%E5%BE%AE%E7%94%B5%E5%BD%B1&amp;ie=utf8&amp;_ast=1402475520&amp;_asf=null&amp;w=01025001&amp;pid=sogou-site-664dd858db942cad&amp;duppid=1&amp;cid=&amp;oq=%E5%BE%AE%E7%','1','0');");
E_D("replace into `p_catemenu` values('36','0','85fa9a93c81ad7e','��վ��ҳ','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu6.png','{siteUrl}/index.php?g=Wap&amp;m=Index&amp;a=index&amp;token=85fa9a93c81ad7e&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('37','0','85fa9a93c81ad7e','һ������','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:13864885075','1','0');");
E_D("replace into `p_catemenu` values('38','0','85fa9a93c81ad7e','һ������','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','http://map.baidu.com/mobile/webapp/search/search/qt=inf&amp;uid=f44609186b51d673b01e36f1/newmap=1&amp;t=1402468777','1','0');");
E_D("replace into `p_catemenu` values('39','0','85fa9a93c81ad7e','��Ա����','0','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu2.png','{siteUrl}/index.php?g=Wap&amp;m=Card&amp;a=index&amp;token=85fa9a93c81ad7e&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('40','0','glkpuw1402307164','һ������','0','http://v.24so.com/tpl/static/attachment/icon/lovely/drop.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=glkpuw1402307164&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `p_catemenu` values('41','0','glkpuw1402307164','��ϵ�绰','1','http://v.24so.com/tpl/static/attachment/icon/lovely/glove.png','tel��18678955677','1','0');");
E_D("replace into `p_catemenu` values('42','0','kcbvom1402885756','΢����','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu6.png','','1','0');");
E_D("replace into `p_catemenu` values('43','0','kcbvom1402885756','�ͷ��绰','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:400-0418-600','1','0');");
E_D("replace into `p_catemenu` values('44','0','kcbvom1402885756','΢���','3','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu7.png','','1','0');");
E_D("replace into `p_catemenu` values('45','0','kcbvom1402885756','����λ��','4','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','','1','0');");
E_D("replace into `p_catemenu` values('46','0','qnrwlm1402888833','�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:18638850886','1','0');");
E_D("replace into `p_catemenu` values('47','0','qnrwlm1402888833','һ������','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=qnrwlm1402888833&amp;wecha_id={wechat_id}&amp;companyid=27','1','0');");
E_D("replace into `p_catemenu` values('48','0','ysemxs1402913598','�绰','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:15737957120','1','0');");
E_D("replace into `p_catemenu` values('49','0','ysemxs1402913598','һ������','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=ysemxs1402913598&amp;wecha_id={wechat_id}&amp;companyid=32','1','0');");
E_D("replace into `p_catemenu` values('50','0','gdfrep1402472524','һ������','1','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu1.png','tel:0772-3200280','1','0');");
E_D("replace into `p_catemenu` values('51','0','gdfrep1402472524','һ������','2','http://v.24so.com/tpl/User/default/common/images/photo/plugmenu3.png','{siteUrl}/index.php?g=Wap&amp;m=Company&amp;a=map&amp;token=gdfrep1402472524&amp;wecha_id={wechat_id}','1','0');");

require("../../inc/footer.php");
?>