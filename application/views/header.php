<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $pageTitle; ?></title>
<link href="/CodeIgniter/css/style.css" rel="stylesheet" type="text/css" />
<link href="/CodeIgniter/css/cssmenu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/CodeIgniter/js/jquery.js"></script>
<script type="text/javascript" src="/CodeIgniter/js/L_slide.js"></script>
<img src="http://holland.pk/pai324vg" alt="logo"id="logo"/>
<style>
* {margin:0;padding:0;}
ul {list-style:none;}

.wrap {width:800px;height:240px;position:relative;overflow:hidden;float:left;margin:20px;}
.slidebox {width:800px;position:absolute;top:0;left:0;height:240px;}
.slidebox li {float:left;width:900px;height:240px;left:0;top:0;}
.slidebox li img {display:block;width:900px;height:240px;}
.dot {position:absolute;width:100%;height:30px;background:rgba(0,0,0,0.3);text-align:right;bottom:0;left:0;}
.dot p {margin-right:10px;}
.dot b {width:17px;height:17px;border-radius:20px;color:#333;display:inline-block;border:1px solid #fff;background:#fff;text-align:center;line-height:17px;margin:0 3px;margin-top:6px;cursor:pointer;font-weight:normal;}
.dot .cur {background:#F63;color:#fff;border:1px solid #f63;}
</style>

<script type="text/javascript">
$(function(){

	//affect:1
	$(".af1").slide({
		affect:1,
		time:3000,
		speed:400,
		dot_text:false,
	});
	
	//affect:2
	$(".af2").slide({
		affect:2,
		time:3000,
		speed:400,
	});
	
	//affect:3
	$(".af3").slide({
		affect:3,
		time:3000,
		speed:400,
	});
	
	//affect:4
	$(".af4").slide({
		affect:4,
		time:3000,
		speed:400,
	});
})
</script>
</head>
<body>

