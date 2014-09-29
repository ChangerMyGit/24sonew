<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<link href="style/style.css" type="text/css" rel="stylesheet">
<script src="js/mootools1.3.js"></script>
<script src="js/mootools-more.js"></script>
<script src="js/config.php"></script>
<script src="js/manage.js"></script>
<script src="js/artDialog4.1.6/artDialog.js?skin=default"></script>
<script src="js/artDialog4.1.6/plugins/iframeTools.js"></script>
<script src="js/ajaxUpload.js"></script>
<title></title>
</head>
<body id="body">
<input type="hidden" id="longitude" value="1" />
<input type="hidden" id="latitude" value="1" />
<div style="color:#f00;padding:10px 20px 0 20px">宽和高都是0表示不限制尺寸</div>
<form enctype="multipart/form-data" action="?m=manage&c=background&a=action_picUpload" id="thumbForm" method="POST" style="padding:10px 20px;"><div id="thumbtip" style="color:#f00;"></div>
<p>宽度 <input type="text" name="width" id="width" style="width:100px;" value="" class="colorblur" onfocus="this.className='colorfocus';" onblur="this.className='colorblur';"></input> px</p>
<p>高度 <input type="text" name="height" id="height" style="width:100px;" value="" class="colorblur" onfocus="this.className='colorfocus';" onblur="this.className='colorblur';"></input> px</p>
<p>选择:<input type="file" style="width:80%;" name="thumb"></input></div><div style="padding:3px 0;text-align:center;"><input id="submitbtn" name="doSubmit" type="submit" class="button" value="上传"></input></p>
<input type="hidden" name="channelid" id="channelid" />
</form>
<script>
if (art.dialog.data('width')) {
	document.getElementById('width').value = art.dialog.data('width');// 获取由主页面传递过来的数据
	document.getElementById('height').value = art.dialog.data('height');
	if (art.dialog.data('channelid')) {
		document.getElementById('channelid').value = art.dialog.data('channelid');
	}
	var domid=art.dialog.data('domid');
}else{
	var domid=art.dialog.data('domid');
}

// 返回数据到主页面
function returnHomepage(url){
	var origin = artDialog.open.origin;
	var dom = origin.document.getElementById(domid);
	dom.value = url;
	(function(){art.dialog.close();}).delay(1000);
}
window.addEvent('domready',function(){
	$('thumbForm').addEvent('submit',function(e){
		//$('submitbtn').setStyle('display','none');
		var loading=new Element('span',{'id':'loading'}).inject($('submitbtn'),'before');
		$('loading').set('html','<img src="image/loading.gif"/>');
		this.upload().addEvent('onFinish',function(){
			$('loading').dispose();
			//$('submitbtn').setStyle('display','inline');
			if(this.responseText.contains("upload")){
				if($('tip')){
					$('tip').dispose();
				}
				$('thumbForm').set('html','<div style="text-align:center;margin-top:50px"><img src="image/success.png" align="absmiddle"> 上传成功</div>');
				returnHomepage(this.responseText);
			}else{
				$('thumbtip').set('html',this.responseText);
			}
		});
		return false;
	});
});
</script>
</body>
</html>