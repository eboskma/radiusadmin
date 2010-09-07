<?php

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Datarift Radius Admin</title>
		<link rel="stylesheet" type="text/css" href="jqtouch/jqtouch/jqtouch.min.js" />
		<link rel="stylesheet" type="text/css" href="jqtouch/themes/jqt/theme.min.css" />
		<link rel="stylesheet" type="text/css" href="css/app.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="jqtouch/jqtouch/jqtouch.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</head>
	<body>
		<div id="home" class="current">
			<div class="toolbar">
				<h1>RadiusAdmin</h1>
				<a class="button flip" href="#login">Login</a>
			</div>
			<ul class="rounded">
			</ul>
		</div>
		<form action="login.php" method="post" accept-charset="utf-8">
			<ul class="rounded">
				<li><input type="text" name="username" placeholder="Username" /></li>
				<li><input type="password" name="password" placeholder="Password" /></li>
			</ul>
			<a class="whiteButton login">Login</a>
			<a class="grayButton goback">Cancel</a>
		</form>
	</body>
</html>