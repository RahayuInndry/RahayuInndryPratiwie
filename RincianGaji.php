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
			<form name="Signup" id="signup" action="prosesgaji.php" method="post">
				<h3 align="center"><font size="6"><br>Rincian Gaji TNI</font></h3>
				<hr size="2" style="border-color: #c0c0c0;"/><br><br>
				<table>
				<tr>
					<td><input type="text" name="Nama_Lengkap" placeholder="Nama Lengkap..." size="22"/></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="CARI"></td>
				</tr>
			</table>
			</form>
		</div>
	</div>
	</body>
</html>