<?php
include_once("dbconnection.php");
$id=$_GET['id'];
//$ar=array();

//$q2=mysql_query("select `id` from `promote` where `category_id` like '%|$id|%' and `status`='1'") or die(mysql_error());
//$r2=mysql_fetch_array($q2);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<title>My Thinking Cap</title>
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
	height:48px;
	
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
</style>
 

<style>


	.button2 {
	 padding:5%;
	 height: 60px;
	 width:100%;
	 color: white;
	 text-decoration: none;
	 font-size: 14px;
	 font-family: helvetica, arial;

	 display: block;
	 text-align: center;
	 position: relative;

	 /* BACKGROUND GRADIENTS */
	
	 background:url(images/buttonbg.jpg) repeat-x;

	 /* BORDER RADIUS */
	 -moz-border-radius: 10px;
	 -webkit-border-radius: 10px;
	 border-radius: 10px;

	 border: 1px solid #368DBE;
	 border-top: 1px solid #c3d6df;


	 /* TEXT SHADOW */

	 text-shadow: 1px 1px 1px black;

	 /* BOX SHADOW */
	 -moz-box-shadow: 0 1px 3px black;
	 -webkit-box-shadow: 0 1px 3px black;
	 box-shadow: 0 1px 3px black;
	 cursor:pointer;
	}
	
	/* WHILE HOVERED */
	
	
	/* WHILE BEING CLICKED */
	
	.button2:hover {
		 background:url(images/buttonbg1.jpg) repeat-x;
	}
	
	
	
</style>


</head>


<body>

<div id="header" style="background:#666666; text-align:left;">
<a href="index.php"><img src="images/logo1.jpg" style="width:100%; height:auto; float:left; " /></a>
</div>

<div id="wrapper">
	<div id="scroller">
<div id="container" style="padding-top:20px; min-height:500px;">
						
						<div style="width:70%; height:30px; padding-top:10px; background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold; ">
									What will you discover today?
						</div>

						<div id="content" style="margin-bottom:50px; font-size:20px; font-family:'Times New Roman', Times, serif; ">
<div style=" width:98%; padding:1%; float:left; margin-top:2%;  height:auto; padding-bottom:2%; border-radius:3px; -moz-border-radius:3px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#8AE4EE; ">

<table style="width:30%;" align="center">
<tr>


<td><a href="put_mythinking.php?ld=<?php echo $id;?>"><button name="btn" class="button2"> Lucky Dip </button></a></td>

</tr>


</table>
<?php /*?><?php } 
else
{
?>
There Are No Lucky Dibs In This Category..
<a href="index.htm"><input type="button" name="btn3" value="exit"></a>
<?php } ?><?php */?>
</div>
</div>
</div>
	</div>
			</div>
	<?php include_once("bottom_bar.php");?>
<!-- jQuery Plugin -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>

<!-- Preloader -->
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$("#status").fadeOut(); // will first fade out the loading animation
			$("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
		})
	//]]>
</script> 
</body>
</html>

