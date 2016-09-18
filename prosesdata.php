<?php
include 'koneksi.php';
	
	$NRP = $_POST['NRP'];
	$Pangkat = $_POST['Pangkat'];
	$Angkatan = $_POST['Angkatan'];
	$Gaji_Pokok = $_POST['Gaji_Pokok'];
	$ULP = $_POST['ULP'];
	$Uang_Beras = $_POST['Uang_Beras'];
	$Tunjangan_Anak = $_POST['Tunjangan_Anak'];
	$Tunjangan_Istri = $_POST['Tunjangan_Istri'];
	$BPJS = $_POST['BPJS'];
	$Tabungan_Kodim = $_POST['Tabungan_Kodim'];
	$Arisan_Kodim = $_POST['Arisan_Kodim'];
	$Potongan_Sosial = $_POST['Potongan_Sosial'];
	$Potongan_Koperasi= $_POST['Potongan_Koperasi'];
	$Remunerasi = $_POST['Remunerasi'];
	
	$tambah = "insert into data_gaji(NRP,Pangkat,Angkatan,Gaji_Pokok,ULP,Uang_Beras,Tunjangan_Anak,Tunjangan_Istri,BPJS,
	Tabungan_Kodim,Arisan_Kodim,Potongan_Sosial,Potongan_Koperasi,Remunerasi)
	values('$NRP','$Pangkat','$Angkatan','$Gaji_Pokok','$ULP','$Uang_Beras','$Tunjangan_Anak','$Tunjangan_Istri','$BPJS','$Tabungan_Kodim',
	'$Arisan_Kodim','Potongan_Sosial','Potongan_Koperasi','Remunerasi')";
	
	if (mysql_query($tambah)){
	echo "<script>alert ('data telah di tersimpan ');
	document.location='home.php' </script> ";
	}else{
		echo "Data Tidak Berhasil disimpan. ".mysql_error();
	}
	?>