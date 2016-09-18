<?ohp
	include"koneksi.php";
?>
<html>
	<head>
		<title>login</title>
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
			<form name="login" id="login" action="proseslogin.php" method="post">
					<h3 align="center"><font size="6"><br>LOGIN</font></h3>
					<hr size="2" style="border-color: #c0c0c0;"/><br><br>
					<center>
					<table>
					<tr>
						<td><p class="huruf"><b>Nama_Lengkap</b><br>
							<input type="text" name="Nama_Lengkap" size="40"/></p></td>
					</tr>
					<tr>
						<td><p class="huruf"><b>Password</b><br>
							<input type="text" name="Password" size="40"/></p></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" value="LOGIN">
					</tr>
					</table>
					</center>
			</form><br><br>
		</div>
	</body>
</html>
			
	