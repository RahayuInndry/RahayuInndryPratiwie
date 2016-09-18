<html>
	<head>
		<title>Reistrasi</title>
		<link rel="stylesheet" href="style.css" />
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
				<form method="post" action="insert.php">
				<table border="0" width="60%" align="center">
					<h3 align="center"><font  size="6"><br>FORM PENDAFTARAN</font></h3>
						<hr size="2" style="border-color: #c0c0c0;"/><br><br>
					<tr>
						<td bgcolor="#FFCC66">Nama Lengkap</td>
						<td><input type="text" name="Nama_Lengkap" placeholder="Nama Lengkap..." size="22" required/></td>
					</tr>
					<tr>
						<td bgcolor="#FFCC66">NRP</td>
						<td><input type="text" name="NRP" placeholder="NRP"size="22" required/></td>
					</tr>
					<tr>
						<td bgcolor="#FFCC66">Pangkat </td>
						<td><input type="text" name="Pangkat" placeholder="Pangkat"size="40" required/></td>
					</tr>
					<tr>
						<td bgcolor="#FFCC66">Angkatan</td>
						<td>
							<select name="Angkatan">
							<option value="">[P i l i h]</option>
							<option value="Darat">Darat</option>
							<option value="Laut">Laut</option>
							<option value="Udara">Udara</option>
						</td>
					</tr>
					<tr>
						<td bgcolor="#FFCC66">Email</td>
						<td><input type="text" name="Email"  placeholder="Email..." size="22" required/></td>
					</tr>
					<tr>
						<td bgcolor="#FFCC66">Password</td>
						<td><input type="password" name="Password"  placeholder="Password" size="22" required/></td>
					</tr><tr>
						<td bgcolor="#FFCC66">Ulangi_Password</td>
						<td><input type="text" name="Ulangi_Password"  placeholder="Ulangi_Password" size="22" required/></td>
					</tr>
					<tr>
						<td align="center"></td>
						<td align="center">
						<input type="submit" name="submit" value="LAKSANAKAN!"/>
						<input type="reset" name="reset" value="RESET"/>
						</td>
					</tr>
		</table>
		</div>
		</div>
	</body>
</html>