<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `p_photo_list`;");
E_C("CREATE TABLE `p_photo_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `info` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=gbk");
E_D("replace into `p_photo_list` values('1','879c2f933017228','1','24SO','0','http://v.24so.com/uploads/8/879c2f933017228/1/6/9/8/thumb_538e91dd1f02f.jpg','0','1','24SO');");
E_D("replace into `p_photo_list` values('2','879c2f933017228','1','24SO','0','http://v.24so.com/uploads/8/879c2f933017228/e/6/e/2/thumb_538e91f54bf93.jpg','0','1','24SO');");
E_D("replace into `p_photo_list` values('3','879c2f933017228','1','24SO','0','http://v.24so.com/uploads/8/879c2f933017228/3/9/7/9/thumb_538e921220f57.jpg','0','1','24SO');");
E_D("replace into `p_photo_list` values('4','1fee0922b0a40db','2','婚纱展','1','http://v.24so.com/uploads/1/1fee0922b0a40db/b/4/0/7/thumb_53902f5e4f480.jpg','0','1','');");
E_D("replace into `p_photo_list` values('5','dhybwc1402363778','5','1','0','http://v.24so.com/uploads/d/dhybwc1402363778/0/b/c/2/thumb_539697592a1d8.jpg','0','1','');");
E_D("replace into `p_photo_list` values('6','dhybwc1402363778','5','2','0','http://v.24so.com/uploads/d/dhybwc1402363778/3/3/d/5/thumb_5396976f394e4.jpg','0','1','');");
E_D("replace into `p_photo_list` values('7','dhybwc1402363778','5','3','0','http://v.24so.com/uploads/d/dhybwc1402363778/0/0/f/6/thumb_53969793dcf1a.jpg','0','1','');");
E_D("replace into `p_photo_list` values('8','dhybwc1402363778','6','1','0','http://v.24so.com/uploads/d/dhybwc1402363778/4/e/3/0/thumb_539697d30ed5c.JPG','0','1','');");
E_D("replace into `p_photo_list` values('9','c6a3b2d7590ae01','7','答谢晚宴','0','http://v.24so.com/uploads/c/c6a3b2d7590ae01/6/6/b/6/thumb_5397f8efec0e5.jpg','0','1','');");
E_D("replace into `p_photo_list` values('10','c6a3b2d7590ae01','7','答谢晚宴','0','http://v.24so.com/uploads/c/c6a3b2d7590ae01/e/6/6/1/thumb_5397f90ed586b.jpg','0','1','');");
E_D("replace into `p_photo_list` values('11','c6a3b2d7590ae01','8','助学金颁发仪式','0','http://v.24so.com/uploads/c/c6a3b2d7590ae01/6/6/4/3/thumb_5397f99929f25.jpg','0','1','');");
E_D("replace into `p_photo_list` values('12','c6a3b2d7590ae01','8','中天人和奖助学金颁发仪式','0','http://v.24so.com/uploads/c/c6a3b2d7590ae01/0/b/3/a/thumb_5397f9d498392.jpg','0','1','');");
E_D("replace into `p_photo_list` values('13','qnrwlm1402888833','10','1','1','http://v.24so.com/uploads/q/qnrwlm1402888833/3/b/e/6/thumb_539f9a517ca10.jpg','0','1','');");
E_D("replace into `p_photo_list` values('14','qnrwlm1402888833','10','2','2','http://v.24so.com/uploads/q/qnrwlm1402888833/3/2/8/a/thumb_539f9a8ebb7e7.JPG','0','1','');");
E_D("replace into `p_photo_list` values('15','qnrwlm1402888833','10','3','3','http://v.24so.com/uploads/q/qnrwlm1402888833/1/8/7/c/thumb_539f9ab93f681.JPG','0','1','');");
E_D("replace into `p_photo_list` values('16','qnrwlm1402888833','10','4','4','http://v.24so.com/uploads/q/qnrwlm1402888833/d/d/1/6/thumb_539f9ae05b3eb.JPG','0','1','');");
E_D("replace into `p_photo_list` values('17','qnrwlm1402888833','10','5','5','http://v.24so.com/uploads/q/qnrwlm1402888833/0/7/d/8/thumb_539f9b0ecc4b3.JPG','0','1','');");
E_D("replace into `p_photo_list` values('18','qnrwlm1402888833','10','6','6','http://v.24so.com/uploads/q/qnrwlm1402888833/c/2/b/d/thumb_539f9b41c3185.JPG','0','1','');");
E_D("replace into `p_photo_list` values('19','qnrwlm1402888833','10','7','7','http://v.24so.com/uploads/q/qnrwlm1402888833/c/a/0/3/thumb_539f9b7d74b13.JPG','0','1','');");
E_D("replace into `p_photo_list` values('20','qnrwlm1402888833','10','8','8','http://v.24so.com/uploads/q/qnrwlm1402888833/b/3/c/3/thumb_539f9baa028b8.JPG','0','1','');");
E_D("replace into `p_photo_list` values('21','qnrwlm1402888833','10','9','9','http://v.24so.com/uploads/q/qnrwlm1402888833/6/f/7/3/thumb_539f9bd74a6c2.jpg','0','1','');");
E_D("replace into `p_photo_list` values('22','qnrwlm1402888833','10','10','10','http://v.24so.com/uploads/q/qnrwlm1402888833/c/5/4/8/thumb_539f9c111b97f.jpg','0','1','');");
E_D("replace into `p_photo_list` values('23','qnrwlm1402888833','10','11','11','http://v.24so.com/uploads/q/qnrwlm1402888833/f/2/3/a/thumb_539f9c3abcf03.jpg','0','1','');");
E_D("replace into `p_photo_list` values('24','qnrwlm1402888833','10','12','12','http://v.24so.com/uploads/q/qnrwlm1402888833/b/9/0/b/thumb_539f9c6a43111.jpg','0','1','');");
E_D("replace into `p_photo_list` values('25','qnrwlm1402888833','10','13','13','http://v.24so.com/uploads/q/qnrwlm1402888833/1/4/7/5/thumb_539f9c9a45677.jpg','0','1','');");
E_D("replace into `p_photo_list` values('26','qnrwlm1402888833','10','14','14','http://v.24so.com/uploads/q/qnrwlm1402888833/1/b/a/6/thumb_539f9cecdd6bb.jpg','0','1','');");
E_D("replace into `p_photo_list` values('27','qnrwlm1402888833','10','15','15','http://v.24so.com/uploads/q/qnrwlm1402888833/6/5/8/5/thumb_539f9d2536569.jpg','0','1','');");

require("../../inc/footer.php");
?>