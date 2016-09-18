<?php
	include"koneksi.php";
	$query=mysql_query("select * from login");
?>

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
	<?php
			$conn = mysql_connect("localhost","root","");
			if($conn) {
			$db = mysql_select_db("tubes");
			$query = "select * from data_gaji";
			$result = mysql_query($query) or die ("err".mysql_eror());
			echo "<table border='0' bordercolor'#000000' style='font-family; Verdana; font-size: 9pt'align='center' >";
			echo "<tr bgcolor='#CCCCCC'>";
			echo "<th style='padding: 5px'>Bulan</th>
			<th style='padding: 5px'>NRP</th>
			<th style='padding: 5px'>Pangkat</th>
			<th style='padding: 5px'>Angkatan</th>
			<th style='padding: 5px'>Gaji_Pokok</th>
			<th style='padding: 5px'>ULP</th>
			<th style='padding: 5px'>Uang_Beras</th>
			<th style='padding: 5px'>Tunjangan_Anak</th>
			<th style='padding: 5px'>Tunjangan_Istri</th>
			<th style='padding: 5px'>BPJS</th>
			<th style='padding: 5px'>Tabungan_Kodim</th>
			<th style='padding: 5px'>Arisan_Kodim</th>
			<th style='padding: 5px'>Potongan-Sosial</th>
			<th style='padding: 5px'>Potongan_Koperasi</th>
			<th style='padding: 5px'>Remunerasi</th>";
			
			echo "</tr>";
			//iterasi
			while ($data = mysql_fetch_row($result)){
			echo "<tr>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(0)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(1)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(2)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(3)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(4)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(5)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(6)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(7)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(8)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(9)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(10)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(11)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(12)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(13)</td>";
			echo "<td bgcolor=#E4E4E7 style='padding: $px'>$data(14)</td>";
			
			echo "</tr";
			}
			echo "</table>";
			}else{
			echo "Error: " . mysql_error() ."<br>";
			}
			echo "<br><br><br>";
		?>
		</div>
	</div>
	</body>
</html>