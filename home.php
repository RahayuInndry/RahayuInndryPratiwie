<html>
	<head>
		<title>Input Gaji</title>
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
			<form method="post" action="prosesdata.php">
					<table border="1" width="60%" align="center">
						<h3 align="center"><font  size="6"><br>Tambah Data Gaji</font></h3>
						<hr size="2" style="border-color: #c0c0c0;"/><br><br>
							<tr>
								<td bgcolor="#FFCC66">NRP</td>
								<td><input type="text" name="NRP" placeholder="NRP..." size="22" required/></td>
							</tr>			
							<tr>
								<td bgcolor="#FFCC66">Pangkat</td>
								<td><input type="text" name="Pangkat" placeholder="Pangkat..." size="22" required/></td>
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
									<td bgcolor="#FFCC66">Gaji Pokok</td>
									<td><input type="text" name="Gaji_Pokok" placeholder="Gaji Pokok..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">ULP</td>
									<td><input type="text" name="ULP" placeholder="ULP..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Beras</td>
									<td><input type="text" name="Uang_Beras" placeholder="Beras..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Tunjangan Anak</td>
									<td><input type="text" name="Tunjangan_Anak" placeholder="Tunjangan Anak..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Tunjangan Istri</td>
									<td><input type="text" name="Tunjangan_Istri" placeholder="Tunjangan Istri..." size="22" required/></td>
								</tr>
							
								<tr>
									<td bgcolor="#FFCC66">BPJS</td>
									<td><input type="text" name="BPJS" placeholder="BPJS..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Tabungan Kodim</td>
									<td><input type="text" name="Tabungan_Kodim" placeholder="Tabungan Kodim..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Arisan Kodim</td>
									<td><input type="text" name="Arisan_Kodim" placeholder="Arisan Kodim..." size="22" required/></td>
									</tr>
								<tr>
									<td bgcolor="#FFCC66">Potongan Sosial</td>
									<td><input type="text" name="Potongan_Sosial" placeholder="Potongan Sosial..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Potongan Koperasi</td>
									<td><input type="text" name="Potongan_Koperasi" placeholder="Potongan Koperasi..." size="22" required/></td>
								</tr>
								<tr>
									<td bgcolor="#FFCC66">Remunerasi</td>
									<td><input type="text" name="Remunerasi" placeholder="Remunerasi..." size="22" required/></td>
								</tr>
								<tr>
									<td align="center"></td>
									<td align="center">
										<input type="submit" name="submit" value="SIMPAN"/>
										<input type="reset" name="reset" value="RESET"/>
									</td>
								</tr>
					</table>
				</form>
				<br><br>
		</div>
	</div>
	</body>
</html>