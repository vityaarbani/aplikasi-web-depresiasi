<?php
session_start();
session_destroy();

echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center><h2><font color='black'>Anda Sudah Logout</font></h2><br/></center>"
?>
<title>CV. BV</title>
	<style type="text/css">
			header, section, footer, aside, nav, article, figure, figcaption {
				display: block;}
			body {
				color: #666666;
				background-color: #f9f8f6;
				background-image: url("aa.png");
				background-position: center;
				height: 600px;
			  	weight: 200px;
        </style>
<center>
<a href="index.php" onClick='self.history()'>
<input type="Submit" name="login" value="Login"></a>
</center>