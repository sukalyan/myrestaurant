<?php
include_once("dbconnection.php");

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
	height:65px;
	
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

	
<!-- code for contact form css -->
<style>
<style type="text/css" media="screen">
	
	 p {margin: 0 0 1em; font-size: 14px;}
	 
	 input, textarea, select {
	   border: 1px solid #111;
	   padding: 0.5em;
	   font-size: 15px;
     line-height: 1.2em;
     width: 80%;
     background: #444;
     color: #fff;
     font-family: helvetica, sans-serif;
     background: -webkit-gradient(linear, left top, left bottom, from(#222), to(#444));
     -webkit-appearance: none;
 	   -webkit-box-shadow: 1px 1px 1px #333;
	 }
	 
	 input:focus, textarea:focus, select:focus {outline-color: #c00;}
	 
	 textarea {
     height: 55px;
     background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.05, #333));
   }
   
   select {
     padding: 0.5em 1em 0.5em 0.75em;
     -webkit-background-size: 1600px 32px;
   }
	 
	 input[type=text] {
     background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #222), color-stop(0.12, #333));
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
   
   input[type=reset] {
      width: auto;
      padding: 0.25em 1em;
      line-height: 1.5em;
      background: -webkit-gradient(linear, left top, left bottom, from(#333), to(#222));
      border: 2px solid #444;
      text-shadow: 0 0 2px #300;
      font-weight: bold;
      color: #999;
      -webkit-box-shadow: 1px 1px 3px #000;
    }
   
   input[type=checkbox],
   input[type=radio] {
     display: inline-block;
     font-size: 15px;
     line-height: 1em;
     margin: 0 0.25em 0 0;
     padding: 0;
     width: 1.25em;
     height: 1.25em;
     -webkit-border-radius: 0.25em;
     vertical-align: text-top;
   }
   
   input[type=radio] {
      -webkit-border-radius: 2em;
    }

   input[type=checkbox]:checked {
     -webkit-background-size: 28px 28px;
   }
   
   input[type=radio]:checked {
      -webkit-background-size: 28px 28px;
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
						
						<div style="width:70%; height:30px; padding-top:10px; background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold; ">
									Submit a Feedback
						</div>
						<div id="content" style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px;">
									
									<form name="businessform" method="post" action="insert.php">
									What was your last Lucky  Dip about and did you learn something new
									<br />
									<br />
									<p><input type="text" placeholder="Text Area" name="question1" style="height:60px;" autofocus></p>
									

<p><input type="text" placeholder="First Name" name="fname"></p>

<p><input type="text" placeholder="State" name="state" ></p>
<p><input type="text" placeholder="Country" name="country" ></p>

<p><input type="text" placeholder="E-mail" name="email" ></p>
<p>Thank you for your feedback as it</p>
<p><input type="submit" value="Submit"> </p>
</form>

						</div>
			</div>
			</div>
			</div>
			<?php include_once("bottom_bar.php");?>
</body>
</html>
