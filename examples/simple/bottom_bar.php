<?php
include_once("dbconnection.php");
$query=mysql_query("select * from `promote` where `status`='1'");
$count=mysql_num_rows($query);
?>
<div id="footer">

						<div class="button">

									<div class="bottomtext">

												<A href="promote.php"><img src="images/submit.png" border="0" /></A>

												

												<A href="promote.php">Submit</A>

									</div>

						</div>

						<div class="button">

									<div class="bottomtext">

												<a href="business.php"><img src="images/businees.png" border="0" /></a>

												

												<a href="business.php">Business</a>

									</div>

						</div>

						<div class="button">

									<div class="bottomtext">

												<A href="about.php"><img src="images/about.png" border="0" /></A>

												

												<A href="about.php">About</A>

									</div>

						</div>

						<div class="button" style="width:21%;">

									<div class="bottomtext">

												

												
												<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; margin-top:18px; color:#FFFFFF;"><?php echo $count?></span>
												<a href="#">Total Lds</a>
												

									</div>

						</div>

			</div>