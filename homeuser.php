<html>
	<head>
		<title>Home User</title>
		<link rel="stylesheet" href="style.css">
		
	</head>
	<body>
	<div id="container">
		<div id="header">
			<div id="logo">
				<?php
					include"header.php";
				?>
			</div>
		</div>
		<div id="content">
			<form name="Signup" id="signup" action="RincianGaji.php" method="post">
			<input type="submit" value="signup" onClick="Proses()">
			</form>
			<form name="Login" id="login" action="Remunerasi.php" method="post">
			<input type="submit" value="login" onClick="Proses()">
			</form>
		</div>
	</div>
	</body>
</html>