<?php
session_start();
include 'koneksi.php';
$Nama_Lengkap = $_POST['Nama_Lengkap'];
$Password = $_POST['Password'];
//query untuk mendapatkan record dari NamaLengkap
$query = "SELECT * FROM login_tni Where Nama_Lengkap = '$Nama_Lengkap'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
//cek kesesuaian password
if ($password ==$data['password'])
{
echo "Berhasil";
	//menyimpan nama lengkap dan level ke dalam session
	$_SESSION['level'] = $data['level'];
	$_SESSION['Nama_Lengkap'] = $data['Nama_Lengkap'];
	$_SESSION['Password'] = $data['Password'];
	//jika level admin
	if ($_SESSION['level'] == "admin"){
		echo "<script>alert ('Selamat datang ADMIN! ');
		document.location='home.php' </script> ";
	}
	//jika kondisi level user maka akan diarahkan ke halaman lain
	else if ($_SESSION['level'] == "user"){
		echo "<script>alert ('Selamat datang USER! ');
		document.location='home.php' </script> ";
	}
}
	else
	echo "<script>alert ('login gagal');
	document.location='index.php' </script> ";
	
?>
	
