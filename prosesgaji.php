
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
			<h3 align="center"><font size="5">RINCIAN GAJI</font></h3><br>
			<?php
				include 'koneksi.php';
				$Nama_Lengkap = $_POST['Nama_Lengkap'];
				$NRP = $_POST ['NRP'];
				$query= "select Nama_Lengkap, NRP from login_tni where Nama_Lengkap like '%$Nama_Lengkap%'";
				$hasil = mysql_query($query);
				$data =mysql_fetch_array($hasil);
				echo "<left>";
				echo "<table border='0'>";
				echo "
				<tr>
				<td>Nama Lengkap</td><td>: ".$data['Nama_Lengkap']."</td>
				</tr>
				<tr>
				<td> NRP</td><td> : ".$data['NRP']."</td>
				</tr>";
				echo "</table>";
			?>
			<form name="prosestampil" id="prosestampil" action="prosestampil.php" method="post">
			<tr>
					<td>
							<select name="Bulan">
							<option value="">[BULAN]</option>
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="CARI"></td>
				</tr>
			</form>	
		</div>
	</div>
	</body>
</html>