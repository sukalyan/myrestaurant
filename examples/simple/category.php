<?php
include_once("dbconnection.php");
//echo $_COOKIE['tttt']['two']."qwertr";
if (!isset($_COOKIE["cookie"]))
  {
    header("location:firsttime.php");
  }
  else
  {
  $ar=array();


if (!isset($_COOKIE['tttt']['two']))
  {



                 $q=mysql_query("select `id` from `category`");
                while($r=mysql_fetch_array($q))
{
$ar[]=$r['id'];

}

$max=max($ar);
$x=0;
$val=rand(1,1000);
$a=($val/1000)*$max;

foreach($ar as $b)
{


if($b>=$a)
{
$x= $b;

break;

} }
 setcookie("tttt[two]",$x,time()+3600*24);
//echo $_COOKIE['tttt']['two']."qwertr";

}

else

{
$x=$_COOKIE['tttt']['two'];
//echo $x."abc";
}

  
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
</style>




	
</head>


<body>

<div id="header" style="background:#666666; text-align:left;">
<a href="index.php"><img src="images/logo1.jpg" style="width:100%; height:auto; float:left; " /></a>
</div>

<div id="wrapper">
	<div id="scroller">
			<div id="container" style="padding-top:20px;">
						
						<div style="width:70%; height:30px; padding-top:10px;  background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold;">
									Available Categories
						</div>
					<div class="content">
					<div style="background:url(images/tcrepeat1.png) repeat; width:98%; padding:1%; float:left; margin-top:2%;  height:auto; padding-bottom:2%; border-radius:3px; -moz-border-radius:3px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#8AE4EE; ">	
		<div class="menu" style="margin-top:20px;">
			<?php
			//echo $_COOKIE['cookie']['one'];
			$query=mysql_query("select * from `category` order by `serial_no`");
		while($result=mysql_fetch_array($query))
		{
		$q1=mysql_query("select `id` from `promote` where `category_id` like '%|$result[id]|%' and `status`='1'");
		$count=mysql_num_rows($q1);
		
			
				?>
			
			<a href="all.php?id=<?php echo $result['id'];?>"><?php echo $result['category_name']; ?> &nbsp; &nbsp; (<?php echo $count?>) </a>
			<?php
			}


			?>
			<a href="all.php?id=<?php echo $x;?>" style="display:none;">Bonus Lucky Dip</a>
			</div>
			</div>
			</div>
		
		</div>
		</div>

			</div>
			<?php include_once("bottom_bar.php");
			setcookie("tttt[two]",'44',time()+3600*24*7);?>


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
<?
}
?>
