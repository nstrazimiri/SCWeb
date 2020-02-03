<?php
header("Location: ./mad/");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>St.Clair | Information Technology Programs</title>
	<link rel="icon" href="images/sob-logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/custom.css?v=s6d8f46s84fs">
  </head>
  <body>

    <div class="container homeindex">
		<div class="row" id="sobimg">
			<img src="images/sob-logo.png" alt="Zekelman School of Business">
			<h1>Information Technology Programs</h1>
		</div>
		<div class="row" id="triangledivider">
			<a href="#triangledivider"><img src="images/triangle-divider.png" alt="div diver triangle"></a>
		</div>
		<div class="row" id="goldbg">
			<div class="cont">
				<div class="col-md-3"><a href="mad/"><h2>MAD</h2><h4>B990</h4><h5>Mobile Applications Development</h5></a></div>
				<div class="col-md-3"><a href="/net"><h2>NET</h2><h4>T860/T861</h4><h5>Computer Systems Networking</h5></a></div>
				<div class="col-md-3"><a href="/web"><h2>WEB</h2><h4>B948</h4><h5>Web Development<br>&nbsp;</h5></a></div>
				<div class="col-md-3"><a href="/dab"><h2>DAB</h2><h4>B018</h4><h5>Data Analytics for Business</h5></a></div>
				<p class="clear"></p>
			</div>
		</div>
	</div>
	<div class="container ft">
		<footer>
			<p>St. Clair College | All Rights Reserved <?=date('Y');?> &copy;</p>
		</footer>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>