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
			<div style="width:70%; height:30px; padding-top:10px; background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold; ">
									About - How it Works
						</div>
						
						<div id="content" style="font-size:20px; font-family:'Times New Roman', Times, serif; ">
						
						<div style="background:url(images/tcrepeat1.png) repeat; width:98%; padding:1%; float:left; margin-top:2%;  height:auto; padding-bottom:2%; border-radius:3px; -moz-border-radius:3px; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#8AE4EE; ">
									
							My Thinking Cap is designed to get adults and children researching answers to questions that you might never
have thought to even ask, or find out about. When you ask questions in a certain way, the answers could astound
you! Every question is a <span style="color:#CCCC00;">“Lucky Dip”</span>. What will you discover today?<br/><br/>

Why is the sky blue? What are some medicinal uses of Baking Soda? What do you see, with given co-ordinates,
on Google Earth? How do bees pollinate? What is a Cebuella Pygmaea? Where was Nims Island filmed? Why
do chickens faces sometimes turn dark red? How does cannabis oil affect cancer cells? Where is the Kusma-
Gyadi Bridge? How many times could Earth fit into Jupiter? ..... and hundreds more.<br/><br/>

Every Lucky Dip question gives the researcher some points to expand upon. Here is an example of one of our
many Lucky Dips. This Lucky Dip is from the category : “Animals and Plants”<br/><br/>

How do bees pollinate?<br/>
Why do bees pollinate?<br/>
If there weren't any bees in the world, what would happen?<br/><br/>

My Thinking Cap is an excellent tool for homeschooling families as there are no right or wrong answers involved.
It encourages children to do their own research and find their own rational answers by opening up the mind of
their own. It can also be used as a great conversation starter the next time you entertain family and friends.<br/><br/>

My Thinking Cap challenges adults to break the barriers of cognitive dissonance as we offer a way to ask
questions in a certain manner, which will help you in your own research and will inevitably, lead to your own
answers.<br/><br/>

You can even track your progress by keeping a record of how many Lucky Dips you have researched!<br/><br/>

With 10 different categories to choose from, and hundreds of questions to research, and more questions being
submitted every day from all over the world, you will always have something to keep you entertained while you
expand your mind.<br/><br/>

Simply select a category or let My Thinking Cap select one for you ~ and then <span style="color:#CCCC00;">“Lucky Dip”</span> for your questions to
research. If you don't like the question, simply <span style="color:#CCCC00;">“Dip again”</span><br/><br/>

We recommend having internet access to research your questions. (or a very big library or a debate team ;) )<br/><br/>

It's a big place in there and out there. We know that some of the answers you find out for yourself will inspire you,
encourage you, stun you, motivate you to take more action or put you in a total state of awe.<br/><br/>

We are all born with a mind of our own so let’s use it!

								</div>
								 
									 <div style="width:100%; height:30px;">
									 </div>
									 <div style="width:100%; text-align:center;">
									 <A href="category.php"><img src="images/enter.png" border="0" width="100" height="85" style="margin-top:10%;"/>&nbsp; </A>
									 </div>
						</div>
						
			</div>
	</div>
</div>

<?php include_once("bottom_bar.php");?>

</body>
</html>
