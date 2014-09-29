<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_wedding`;");
E_C("CREATE TABLE `p_wedding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `title` varchar(150) NOT NULL,
  `picurl` varchar(150) NOT NULL,
  `openpic` varchar(200) NOT NULL,
  `coverurl` varchar(200) NOT NULL,
  `woman` varchar(30) NOT NULL,
  `man` varchar(30) NOT NULL,
  `who_first` tinyint(1) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `time` int(11) NOT NULL,
  `place` varchar(200) NOT NULL,
  `lng` varchar(16) NOT NULL,
  `lat` varchar(16) NOT NULL,
  `video` varchar(200) NOT NULL,
  `mp3url` varchar(200) NOT NULL,
  `passowrd` int(20) NOT NULL,
  `word` varchar(200) NOT NULL,
  `qr_code` varchar(200) NOT NULL,
  `copyrite` varchar(150) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk");
E_D("replace into `p_wedding` values('1','0','1fee0922b0a40db','微喜帖','我们结婚啦','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','花开','陌上','1','010-88888888','1433088000','海南省三亚市','109.515084','18.229784','http://v.youku.com/v_show/id_XNDAwNTYxNjM2.html','http://v.24so.com/tpl/static/attachment/music/default/4.mp3','0','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','?北京二十四搜科技有限公司','1401953955');");
E_D("replace into `p_wedding` values('2','0','mhsqxc1401953951','微喜帖','微喜帖','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','李四','张三','1','0551-6347422','1402070400','临汾五一西路','','','','','0','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','','1402042527');");
E_D("replace into `p_wedding` values('3','1','879c2f933017228','喜帖','谢帖','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','董晓娜','王伟','1','0532-1234567','1404489600','山东省青岛市市北区泰山路34号','120.39421','36.100552','http://v.youku.com/v_show/id_XNjI4ODk5NDQ4.html ','','123456','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','http://v.24so.com/uploads/8/879c2f933017228/f/3/4/7/thumb_53918cae60aa6.jpg','24SO微商企版权所有','1402047681');");
E_D("replace into `p_wedding` values('4','0','dhybwc1402363778','微喜帖','制作微喜帖','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','杨欣','马辉','1','0532-8082920','1404057600','青大一路亚麦山城网店','E120°25′36.02″','N36°04′35.59″ ','','http://v.24so.com/tpl/static/attachment/music/default/2.mp3','123','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','御姐婚礼策划','1402372476');");
E_D("replace into `p_wedding` values('5','9','kcmjgr1402792677','喜帖','喜帖','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','周梦迪','毕宏洁','1','0393-8805811','1402848000','贵和园','','','','','0','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','','1402799805');");
E_D("replace into `p_wedding` values('7','12','oucryx1402886291','喜贴','喜贴','http://bcs.duapp.com/baeimgs/2cDQtFbl75.jpg','http://bcs.duapp.com/baeimgs/jNuxaj1cAj.jpg','http://bcs.duapp.com/baeimgs/Tnh1ROgm93.png','李文霞','井飞飞','1','0393-8805811','1403193600','雅苑酒店','','','','http://v.24so.com/tpl/static/attachment/music/default/2.mp3','0','亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福.','','','1402995557');");

require("../../inc/footer.php");
?>