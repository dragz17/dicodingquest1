<html>
<head>
	<title>Tambahkan Data</title>
</head>

<body>
<?php

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$jeniskelamin = mysqli_real_escape_string($mysqli, $_POST['jeniskelamin']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$hobi = mysqli_real_escape_string($mysqli, $_POST['hobi']);
		

	if(empty($nama) || empty($jeniskelamin) || empty($umur) || empty($email) || empty($hobi)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Isi kolom Nama!</font><br/>";
		}
		if(empty($jeniskelamin)) {
			echo "<font color='red'>Isi kolom Jenis Kelamin!</font><br/>";
		}
		if(empty($umur)) {
			echo "<font color='red'>Isi kolom Umur!</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Isi kolom Email!</font><br/>";
		}
		if(empty($hobi)) {
			echo "<font color='red'>Isi kolom Hobi!</font><br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
	} else { 
		//masukkan data	
		$result = mysqli_query($mysqli, "insert into identitasku (nama,jeniskelamin,umur,email,hobi) values ('$nama','$jeniskelamin','$umur','$email','$hobi')");
		
		//tampilkan pesan berhasil
		echo "<font color='green'>Entri data berhasil cuy!";
		echo "<br/><a href='index.php'>Liat Hasil...</a>";
	}
}
?>
</body>
</html>
