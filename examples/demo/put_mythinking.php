<?php
ob_start();
include_once("dbconnection.php");
$category_id=$_SESSION['cat_id'];
echo $category_id;
setcookie("demo[$category_id]",0,time()+3600*24);
echo $_COOKIE['demo'][$category_id];

$id=$_GET['ld'];
$ar=array();
if(isset($_GET['qno']))
$qno=$_GET['qno'];
else
$qno=0;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<title> My Thinking Cap</title>
<link href="style.css"rel="stylesheet" type="text/css" />
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=300,width=400,left=90,top=90,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
}
</script>
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

<!-- preloader -->
<!-- Stylesheet -->
	  <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen, print"/>

<style>
#preloader {
    position:absolute;
    top:0;
    left:0;
    right:0;
    bottom:0;
    background-color:#fff; /* change if the mask should have another color then white */
    z-index:999999; /* makes sure it stays on top */
}

#status {
    width:200px;
    height:200px;
    position:absolute;
    left:50%; /* centers the loading animation horizontally one the screen */
    top:50%; /* centers the loading animation vertically one the screen */
    background-image:url(img/status.gif); /* path to your loading animation */
    background-repeat:no-repeat;
    background-position:center;
    margin:-100px 0 0 -100px; /* is width and height divided by two */
}


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
<?php 

if($_COOKIE['demo'][$category_id]<4)
{
$get_id=$_COOKIE['demo'][$category_id]+1;
echo $get_id;
setcookie("demo[$category_id]",$get_id,time()+3600*24);
?>
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
     <div id="fb-root"></div>
        <script type="text/javascript">
            var button;
            var userInfo;
            
            window.fbAsyncInit = function() {
                FB.init({ appId: '143118829183236', 
                    status: true, 
                    cookie: true,
                    xfbml: true,
                    oauth: true});

               showLoader(true);
               
               function updateButton(response) {
                    button       =   document.getElementById('fb-auth');
                    userInfo     =   document.getElementById('user-info');
                  
                    
                    if (response.authResponse) {
                        //user is already logged in and connected
                        FB.api('/me', function(info) {
                            login(response, info);
                        });
                        
                        button.onclick = function() {
                            FB.logout(function(response) {
                                logout(response);
                            });
                        };
                         document.getElementById("postit").style.display="block";
                    } else {
                        //user is not connected to your app or logged out
                      
                        button.onclick = function() {
                            showLoader(true);
                            FB.login(function(response) {
                                if (response.authResponse) {
                                    FB.api('/me', function(info) {
                                        login(response, info);
                                    });	   
                                } else {
                                    //user cancelled login or did not grant authorization
                                    showLoader(false);
                                }
                            }, {scope:'email,user_birthday,status_update,publish_stream,user_about_me'});  	
                        }
                         document.getElementById("postit").style.display="none";
                    }
                }
                
                // run once with current status and whenever the status changes
                FB.getLoginStatus(updateButton);
                FB.Event.subscribe('auth.statusChange', updateButton);	
            };
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol 
                    + '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
            
            
            function login(response, info){
                if (response.authResponse) {
                    var accessToken                                 =   response.authResponse.accessToken;
                    
                    userInfo.innerHTML                             = '<img src="https://graph.facebook.com/' + info.id + '/picture">' + info.name;
                    button.innerHTML                               = 'Logout';
                    showLoader(false);
                    document.getElementById('other').style.display = "block";
                }
            }
        
            function logout(response){
                userInfo.innerHTML                             =   "";
                document.getElementById('debug').innerHTML     =   "";
                document.getElementById('other').style.display =   "none";
                showLoader(false);
            }

            //stream publish method
            function streamPublish(name, description, hrefTitle, hrefLink, userPrompt){
                showLoader(true);
                FB.ui(
                {
                    method: 'stream.publish',
                    message: '',
                    attachment: {
                        name: name,
                        caption: '',
                        description: (description),
                        href: hrefLink
                    },
                    action_links: [
                        { text: hrefTitle, href: hrefLink }
                    ],
                    user_prompt_message: userPrompt
                },
                function(response) {
                    showLoader(false);
                });

            }
            function showStream(){
                FB.api('/me', function(response) {
                    //console.log(response.id);
                    streamPublish(response.name, 'I like the articles of Thinkdiff.net', 'hrefTitle', 'http://thinkdiff.net', "Share thinkdiff.net");
                });
            }

            function share(){
                showLoader(true);
                var share = {
                    method: 'stream.share',
                    u: 'http://thinkdiff.net/'
                };

                FB.ui(share, function(response) { 
                    showLoader(false);
                    console.log(response); 
                });
            }

            function graphStreamPublish(){
                showLoader(true);
                
                FB.api('/me/feed', 'post', 
                    { 
                        message     : "I love thinkdiff.net for facebook app development tutorials",
                        link        : 'http://ithinkdiff.net',
                        picture     : 'http://thinkdiff.net/iphone/lucky7_ios.jpg',
                        name        : 'iOS Apps & Games',
                        description : 'Checkout iOS apps and games from iThinkdiff.net. I found some of them are just awesome!'
                        
                }, 
                function(response) {
                    showLoader(false);
                    
                    if (!response || response.error) {
                        alert('Error occured');
                    } else {
                        alert('Post ID: ' + response.id);
                    }
                });
            }

            function fqlQuery(){
                showLoader(true);
                
                FB.api('/me', function(response) {
                    showLoader(false);
                    
                    //http://developers.facebook.com/docs/reference/fql/user/
                    var query       =  FB.Data.query('select name, profile_url, sex, pic_small,id from user where uid={0}', response.id);
                    query.wait(function(rows) {
                       document.getElementById('debug').innerHTML =  
                         'FQL Information: '+  "<br />" + 
                         'Your name: '      +  rows[0].name                                                            + "<br />" +
                         'Your Sex: '       +  (rows[0].sex!= undefined ? rows[0].sex : "")                            + "<br />" +
                         'Your Profile: '   +  "<a href='" + rows[0].profile_url + "'>" + rows[0].profile_url + "</a>" + "<br />" +
                         '<img src="'       +  rows[0].pic_small + '" alt="" />' + "<br />" +rows[0].id ;
                     });
                });
            }
</script>
<script type="text/javascript">
            function setStatus(){
alert('hello');
                showLoader(true);
                
                status1 = document.getElementById('q1').innerHTML + " " +document.getElementById('q2').innerHTML + " " + document.getElementById('q3').innerHTML;
                FB.api(
                  {
                    method: 'status.set',
                    status: status1
                  },
                  function(response) {
                  //alert(response);
                    if (response == 0){
                        alert('Your Text was not Posted.');
                    }
                    else{
                        alert('Your Text Posted.');
                    }
                    showLoader(false);
                  }
                );
//twitterpost();
            }

function twitterpost()
{

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    //document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
//alert(xmlhttp.responseText);
    }
  }
status1 = document.getElementById('q1').innerHTML + " " +document.getElementById('q2').innerHTML + " " + document.getElementById('q3').innerHTML;
//alert("http://krititech.com/demos/twitterphp/send.php?status="+status1);
xmlhttp.open("GET","http://krititech.com/demos/twitterphp/send.php?status="+status1,true);
xmlhttp.send();
}
            
            function showLoader(status){
                if (status)
                    document.getElementById('loader').style.display = 'block';
                else
                    document.getElementById('loader').style.display = 'none';
            }
            
        </script>
        
        <div id="loader" style="display:none">
            
        </div>
        
        <div id="debug"></div>
        
        <div id="other" style="display:none">
         <div id="other1" style="display:none">
            <a href="#" onclick="showStream(); return false;">Publish Wall Post</a> |
            <a href="#" onclick="share(); return false;">Share With Your Friends</a> |
            <a href="#" onclick="graphStreamPublish(); return false;">Publish Stream Using Graph API</a> |
            <a href="#" onclick="fqlQuery(); return false;">FQL Query Example</a>
            </div>
            <br />
            <textarea style="display:none" id="status" cols="50" rows="5">My Status</textarea>
            <br />
        </div>
		<div id="header" style="background:#666666; text-align:left;">
<a href="index.php"><img src="images/logo1.jpg" style="width:100%; height:auto; float:left; " /></a>
</div>

<div id="wrapper">
	<div id="scroller">
			<div id="container" style="padding-top:20px;">
						
						<div style="width:70%; height:30px; padding-top:10px; background:url(images/repeat1.png) repeat-x; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:15px; text-align:center; font-weight:bold; ">
									Your Lucky Dip
						</div>
							
						
						
						
						<div id="content" style="margin-bottom:50px; font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px;">
<?php 
$q=mysql_query("select `id` from `promote` where `category_id` like '%|$id|%' and `status`='1' and `demo`='1' ") or die(mysql_error());
$cnt=mysql_num_rows($q);
if($cnt>0)
{
while($r=mysql_fetch_array($q))
{
$ar[]=$r['id'];
}
//foreach($ar as $ex_id)
//{
//echo $ex_id;
//
//
//}
$u_id=$_COOKIE['cookie']['one'];
//echo "select `ques_ids` from `user` where `id`='$u_id'";
$q2=mysql_query("select `ques_ids` from `user` where `id`='$u_id'");
$r2=mysql_fetch_array($q2);
$ques_ids=$r2['ques_ids'];
$user_ex_ids=explode(",",$ques_ids);
//print_r($user_ex_ids);
if(array_intersect($ar,$user_ex_ids)==$ar )
{
//echo "exists";
$id_final="";
$result = array_diff($user_ex_ids,$ar);
foreach($result as $res_id)
{
if($res_id!="")
{
		$id_final=$id_final.",".$res_id;
}
}
//echo "update `user` set `ques_ids`='$id_final' where `id`='$u_id'";
mysql_query("update `user` set `ques_ids`='$id_final' where `id`='$u_id'");
//print_r($ar);
//print_r($result);
$ar1=array_diff($ar,$result);
//print_r($ar1);
}
else
{

if(isset($_COOKIE['ldid']))
{
//echo $_COOKIE['ldid'].'kkkkkkkkk<br />';
}
else
setcookie('ldid', 'x', time()+(3600*24*7));
$result1 = array_intersect($user_ex_ids,$ar);
//print_r($result1);
$ar1=array_diff($ar,$result1);
//print_r($ar1);
}
//print_r($ar);
$max=max($ar1);
//echo $max."max";
//$x=0;
//$val=rand(1,1000);
//echo $val."val";
//$a=($val/1000)*$max;
//echo $a."a";
//foreach($ar1 as $b)
//{
//if($b>=$a)
//{
//$x= $b;
//echo $x."x";
//break;
//}
//}
//if($qno==$x)
$q1=mysql_query("select * from `promote` where `id`>'$qno' and `status`='1' and `category_id` like '%|$id|%'");
//else
//$q1=mysql_query("select * from `promote` where `id`='$x' and `status`='1' ");
//echo "select * from `promote` where `id`='$x' and `status`='1'";
$cnt2=mysql_num_rows($q1);
//echo "----------------$x-------------$cnt2--------------$qno----------------------";
if($cnt2==0)
$q1=mysql_query("select * from `promote` where `id`>'0' and `status`='1' and `category_id` like '%|$id|%'");
$r1=mysql_fetch_array($q1);
$_COOKIE['ldid']=$qno;
?>


<div style="width:85%; height:50px; padding-top:10px; margin:auto; color:#ffffff; font-family:Arial, Helvetica, sans-serif; font-size:18px; font-weight:bold; margin-top:20px; text-align:center; ">
									<div style="50%; float:left;"> <img id="fb-auth" src="images/facebook1.png"  style="width:100%; height:auto;"   align="left"   />
									</div>
									<div style="50%; float:right;">
									<a href="JavaScript:newPopup('https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fdev.twitter.com%2Fdocs%2Ftweet-button&amp;text=<?php echo $r1['question1']." ".$r1['question2']."  ".$r1['question3'] ;?>');" class="btn" id="b" target="new"><i></i><img src="images/twitter2.png"    align="left" style="width:100%; height:auto; "  /></a>
									
							</div>		
						<input type="button" id="postit" style="display:block" value="Post On My Wall" onclick="setStatus(); return false;" />
						
						</div> <div id="user-info"></div>

<div style="background:#000000; height:100px; padding:5px; border-radius:3px; -moz-border-radius:3px;">
<div style="width:100%;font-size:16px;float:left; ">
Attempted
<span style="font-size:16px; line-height:1.0;">
 			<?php echo $r1['no_of_attempts']; ?> times.
</span>
</div>
<div style="color:#FFFFFF; float:left; font-size:16px;">
<span style="font-weight:bold;">Submitted By:</span>  <br/>
<span style="font-size:16px; line-height:1.0;">
<?php echo $r1['first_name']?>&nbsp;&nbsp;&nbsp;,<?php echo $r1['age']?>&nbsp;&nbsp;&nbsp;,<?php echo $r1['state']?>&nbsp;&nbsp;&nbsp;,<?php echo $r1['country']?>
</span>
<br />

</div>
</div>




<br />
<br />
<div style="width:100%; height:auto; font-family:'Times New Roman', Times, serif; font-size:22px; color:#FFFFFF; line-height:1.5;">
																																						<p id="q1" style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $r1['question1'];?></p>
																																												<p id="q2" style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $r1['question2'];?></p>
																																												<p id="q3" style="font-size:20px; font-family:'Times New Roman', Times, serif; padding:5px; color:#FFFFFF;"><?php echo $r1['question3'];?></p>
			<br />
</div>

<table style="width:100%;">
<tr>

<td><a href="put_mythinking.php?ld=<?php echo "$id";?>&qno=<?php echo $r1['id'];?>"><input type="button" name="btn1" value="Dip Again" class="button2" onClick="document.location.reload(true)"></a></td>
<td><a href="thinking.php?ld=<?php echo $r1['id'];?>"><button name="btn" class="button2" onClick="document.location.reload(true)">  Apply<br/>Thinking Cap </button></a></td>
<td><a href="category.php"><button  name="btn2"  class="button2" onClick="document.location.reload(true)">Change<br/> Category</button></a></td>
</tr>


</table>
<?php } 
else
{
?>
There Are No Lucky Dibs In This Category..
<a href="category.php"><input type="button" name="btn3" value="exit"></a>
<?php } ?>
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
<?php  ob_flush(); 
}
else
echo "<h3 style='color:#FFFFFF; font-size:22px; text-align:center;'> This Is A demo Version...</h3>";
?>



