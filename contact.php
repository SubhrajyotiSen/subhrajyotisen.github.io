<!DOCTYPE html>
<html>
<head>
	<title>WIOS Designs
	</title>
	<link rel="icon" href="wios5.png" type="image/png" sizes="32x32">
	<meta name="description=" content="WIOS Designs">
	<script type ="text/javascript">
		var w;
		var h;
		var i = 0;
		function size(){
			w = window.innerWidth;
			h = window.innerHeight;
			document.getElementById("sv").style.height = 19*(h/20);
			document.getElementById("sv").style.width = 19*(w/20);
		}
		function change(){
			if(i%2==0){
				document.getElementById("menu").style.WebkitAnimation="moverightu 0.4s forwards";
				document.getElementById("menu").style.animation="moverightu 0.4s forwards ";
			}
			if(i%2==1){
				document.getElementById("menu").style.WebkitAnimation="moveleftu 0.4s forwards";
				document.getElementById("menu").style.animation="moveleftu 0.4s forwards ";
			}
			i++;
		}

	</script>
	<style type = "text/css" >
		body {
			background-image: url("pat3.png");
			background-attachment: fixed;
			background-size: cover;
			color: white;
			padding: 0px;
			margin: 0px;
			text-align: center;
			min-width: 600px;
			font-family: R;
		}
		text:hover {
			cursor: pointer;
			cursor: hand;
		}
		@font-face {
			font-family: D;
			src: url(cantarell.ttf);
		}
		@font-face {
			font-family: R;
			src: url(lovelo.otf);
		}
		li{
			font-family: D;
			display: inline-flex;
			margin-right: 20px;
			text-align: center;
		}
		a{
			text-decoration: none;
			color: white;
			font-size: 20px;
		}
		a:hover{
			color: #cccccc;
		}
		img.link:hover{
			cursor: pointer;
			cursor: hand;
			opacity: 0.9;
		}
		@-webkit-keyframes moverightu{
			from { left: -570px; }
			to { left: -10px; }
		}
		@keyframes moverightu{
			from { left: -570px; }
			to { left: -10px; }
		}
		@-webkit-keyframes moveleftu{
			to { left: -570px; }
			from{ left: 0px; }
		}
		@keyframes moveleftu{
			to { left: -570px; }
			from { left: 0px; }
		}
		img.dp{
		}
		img.dp:hover{
			transform: translateY(-50px) scale(1.5);
			overflow: hidden;
		}

	</style>
 </head>

<body onLoad="size()" onResize="size()">
	<div id="head" style="z-index: 19; box-shadow: 0px 4px 4px rgba(0,0,0,0.5); position: fixed; display: block; left: 0px; width: 100%; text-align:center; top: 0px; padding-top: 5px; min-height: 65px; background: black;">
			<img class="link" onclick="change()" src="menu.png" height="21" width="21" style="margin: 15px; position: absolute; left: 0px;">
			<img src="text2.png"><p style="margin: 10px;"><br></p>
	</div>
	<div id="menu" style="z-index: 20; position: fixed; display: inline-flex; left: -570px; top: 40px;">
		<p style="display: inline-flex; padding: 5px;">
			<ul style="list-style-type: none; padding: 10px; margin: 0px; margin-top: 10px;">
				<li> <a href="index.html">Home</a></li>
				<li> <a href="about.html">About Us</a></li>
				<li> <a href="gallery.html">Gallery</a></li>
				<li> <a href="contact.html">Contact Us</a></li>
				<li> <a href="comingsoon.html">Coming Soon</a></li>

			</ul>
		</p>
	</div>
	<div id="thala" style="position: absolute; display: block; top: 75px; text-align: center; left: 0px; width: 100%;">
		<p style="padding: 5px; font-size: 40px; font-family: R; font-weight: bold; display: inline-flex; text-align:center; margin-bottom: 0px; letter-spacing: 10px;">
			Contact Us<br>
		</p><br>
		<p style="margin-top: 0px;padding: 5px; font-size: 20px; font-family: D; font-weight: lighter; display: inline-flex; text-align:center; color: #b0b0b0;">
			wioswd@gmail.com
		</p><br>
		<ul>
			<li style="padding-left: 20px; padding-right: 20px; line-height: 25px; display: inline-block;">
				<img src="pb.jpg" width="150" height="150" style="border: 5px solid white; border-radius: 5px; margin-bottom: 5px;"><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 20px;"> Prajwal</b><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 15px;">+91 99454 03708</b><br>
				<a href="https://www.facebook.com/Prajwal.balu"><img class="link" src="fb.png" width="20" height="20" style="vertical-align: -2px;"></a><br>

			</li>

			<li style="padding-left: 20px; padding-right: 20px; line-height: 25px; display: inline-block;">
				<img src="ss.jpg" width="150" height="150" style="border: 5px solid white; border-radius: 5px; margin-bottom: 5px;"><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 20px;"> Subhrajyoti Sen</b><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 15px;">+91 89517 30620</b><br>
				<a href="https://www.facebook.com/subhrajyoti.sen"><img class="link" src="fb.png" width="20" height="20" style="vertical-align: -2px;"></a><br>
			</li>
			<li style="padding-left: 20px; padding-right: 20px; line-height: 25px; display: inline-block;">
				<img src="kd.jpg" width="150" height="150" style="border: 5px solid white; border-radius: 5px; margin-bottom: 5px;"><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 20px;"> Karthik D</b><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 15px;">+91 90032 50108</b><br>
				<a href="https://www.facebook.com/karthik.theprofile"><img class="link" src="fb.png" width="20" height="20" style="vertical-align: -2px;"></a><br>

			</li>
			<li style="padding-left: 20px; padding-right: 20px; line-height: 25px; display: inline-block;">
				<img src="sh.jpg" width="150" height="150" style="border: 5px solid white; border-radius: 5px; margin-bottom: 5px;"><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 20px;"> Shree Hari</b><br>
				<b style="color: white; font-weight: 200; font-family: D; font-size: 15px;">+91 96112 64028</b><br>
				<a href="https://www.facebook.com/shree.hari.5494"><img class="link" src="fb.png" width="20" height="20" style="vertical-align: -2px;"></a><br>

			</li>
		</ul>
			<br><br>
		<form name="contactform" style="border: 1px solid white; display: inline-block; padding: 20px; 50px 20px 50px; text-align: left;">
		<b style="font-weight: 200; font-family: aFont; font-size: 20px; letter-spacing: 5px;">
		<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $email_from = 'form@wiosdesigns.xyz';
  $email_subject = "$name sent a message";
  $email_body = "Name: $name.\n"."Mail: $visitor_email\n"."Phone: $phone\n"."Message:\n $message";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  $to = "subhrajyoti12@gmail.com";
  mail($to,$email_subject,$email_body,$headers);
  echo 'YOUR MESSAGE WAS SENT'
?>
		</b> <br><br>
		</form>

	</div>


</body>
</html>
