<html>
	<head>
		<title>Data Gaji</title>
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
		<table>
			<?php
				include 'koneksi.php';
				$Nama_Lengkap = $_GET['Nama_Lengkap'];
				$query = mysql_query("SELECT Nama_Lengkap,NRP FROM login_tni where Nama_Lengkap='$Nama_Lengkap'");
				$row = mysql_fetch_array($query);
			?>
				<tr>
				<td bgcolor="#FFCC66">Nama Lengkap</td>
				<td><input type="text" name="Nama_Lengkap" placeholder="Nama Lengkap..." size="22" required/>
				<input type="submit" value="cari" onClick="Proses()"></td>
				</tr>
		</table>
		</div>
	</div>
	</body>
</html>