<html>
	<head>
		<title> index</title>
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
			<form name="Signup" id="signup" action="signup.php" method="post">
			<input type="submit" value="signup" onClick="Proses()">
			</form>
			<form name="Login" id="login" action="login.php" method="post">
			<input type="submit" value="login" onClick="Proses()">
			</form>
		</div>
	</div>
	</body>
</html>