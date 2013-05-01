<?php
include_once("dbconnection.php");

$ldid=$_GET['ld'];
$query=mysql_query("select * from `promote` where `id`='$ldid'");
$res=mysql_fetch_array($query);
$cnt=$res['no_of_attempts']+1;
mysql_query("update `promote` set `no_of_attempts`='$cnt' where `id`='$ldid'");


$u_id=$_COOKIE['cookie']['one'];
$q=mysql_query("select `no_of_attempts` from `user` where `id`='$u_id'");
$r=mysql_fetch_array($q);

$attempts=$r['no_of_attempts']+1;
mysql_query("update `user` set `no_of_attempts`='$attempts' where `id`='$u_id'");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<title>Scrolling DIV demo on iPhone / iPod Touch / Android / iPad</title>
<link href="style.css"rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../../src/iscroll.js?v3.7.1"></script>

<script type="text/javascript">
var myScroll;
var a = 0;
function loaded() {
	setHeight();	// Set the wrapper height. Not strictly needed, see setHeight() function below.

	// Please note that the following is the only line needed by iScroll to work. Everything else here is to make this demo fancier.
	myScroll = new iScroll('scroller', {desktopCompatibility:true});
}

// Change wrapper height based on device orientation. Not strictly needed by iScroll, you may also use pure CSS techniques.
function setHeight() {
	var headerH = document.getElementById('header').offsetHeight,
		footerH = document.getElementById('footer').offsetHeight,
		wrapperH = window.innerHeight - headerH - footerH;
	document.getElementById('wrapper').style.height = wrapperH + 'px';
}

// Check screen size on orientation change
window.addEventListener('onorientationchange' in window ? 'orientationchange' : 'resize', setHeight, false);

// Prevent the whole screen to scroll when dragging elements outside of the scroller (ie:header/footer).
// If you want to use iScroll in a portion of the screen and still be able to use the native scrolling, do *not* preventDefault on touchmove.
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);

// Load iScroll when DOM content is ready.
document.addEventListener('DOMContentLoaded', loaded, false);
</script>

<style type="text/css" media="all">
body,ul,li {
	padding:0;
	margin:0;
	border:0;
}

body {
	font-size:12px;
	-webkit-user-select:none;
    -webkit-text-size-adjust:none;
	font-family:helvetica;
/*	padding-bottom:44px;	/*	This prevents the scroller to lock if the user swipes down outside of the screen.
							 	NOT needed if in home screen mode and on Android. */
}

#header {
	width:100%;
	height:auto;
	min-height:50px;
	line-height:45px;
	background-image:-webkit-gradient(linear, 0 0, 0 100%, color-stop(0, #fe96c9), color-stop(0.05, #d51875), color-stop(1, #7b0a2e));
	padding:0;
	color:#eee;
	font-size:20px;
	text-align:center;
}

#header a {
	color:#f3f3f3;
	text-decoration:none;
	font-weight:bold;
	text-shadow:0 -1px 0 rgba(0,0,0,0.5);
}

#footer {
	width:100%;
	height:60px;
	
	padding:0;
	border-top:1px solid #444;
	border-top:1px solid #0066CC;
}

#footer li {
	display:block;
	float:left;
}

#footer li {
	width:50%;
	text-align:center;
}

#footer a.remove {
	border-right:1px solid #333;
}

#footer a.add {
	border-left:1px solid #6a6a6a;
}

#footer a {
	display:block;
	text-decoration:none;
	font-size:12px;
	color:#eee;
	line-height:24px;
	text-shadow:0 -1px 0 #000;
}

#footer span {
	display:block;
	font-size:30px;
	font-weight:bold;
}

#wrapper {
	height:200px;		/* Of course you need to specify the object height */

	position:relative;	/* On older OS versions "position" and "z-index" must be defined (absolute | relative), */
	z-index:1;			/* it seems that recent webkit is less picky and works anyway. */

	width:100%;
	
	overflow:hidden;
}

#scroller {
/*	-webkit-touch-callout:none;*/
	-webkit-tap-highlight-color:rgba(0,0,0,0);

	float:left;
	width:100%;
	padding:0;

/*	-webkit-box-shadow:0 0 8px #555;	/* Don't use box shadows, they slow down drastically CSS animations */
}

#scroller ul {
	list-style:none;
	padding:0;
	margin:0;
	width:100%;
	text-align:left;
}

#scroller li {
	padding:0 10px;
	height:40px;
	line-height:40px;
	border-bottom:1px solid #ccc;
	border-top:1px solid #fff;
	background-color:#fafafa;
	font-size:14px;
}

#scroller li > a {
	display:block;
}
input[type=submit] {
     width: auto;
     padding: 0.25em 1em;
     line-height: 1.5em;
     background: -webkit-gradient(linear, left top, left bottom, from(#a00), to(#600));
     border: 2px solid #c00;
     text-shadow: 0 0 2px #300;
     font-weight: bold;
     -webkit-box-shadow: 1px 1px 3px #000;
     margin-right: 0.5em;
   }
</style>



</head>


<body>
		<div id="header" style="background:#666666; text-align:left;">
			<img src="images/logo1.jpg" style="width:100%; height:auto; float:left; " />
		</div>

<div id="wrapper">
	<div id="scroller">
			<div id="container">
						
						<div style="width:70%; height:30px; padding-top:10px; background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold; ">
									Thinking Cap On
						</div>
						<div style="width:70%; height:50px; padding-top:10px; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; margin-top:20px;">
									Share On <img src="images/fb.png"  width="30" height="30" align="left";  />
									<img src="images/twitter1.png"  width="30" height="30" align="left";  />
						</div>
						<div id="content" style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;">
									
									
									<p style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $res['question1'];?></p>
									<p style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $res['question2'];?></p>
									<p style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $res['question3'];?></p>


<p><a href="category.php" style="text-decoration:none;"><input type="submit" value="Done"></a></p>

</div>
</div>
						</div>
			</div>
			<?php include_once("bottom_bar.php");?>
</body>
</html>
