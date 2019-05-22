<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
	$jeniskelamin = mysqli_real_escape_string($mysqli, $_POST['jeniskelamin']);
	$umur = mysqli_real_escape_string($mysqli, $_POST['umur']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$hobi = mysqli_real_escape_string($mysqli, $_POST['hobi']);
	// checking empty fields
	if(empty($nama) || empty($jeniskelamin) || empty($age) || empty($email) || empty($hobi)) {
				
		if(empty($nama)) {
			echo "<font color='red'>Kolom Nama Kosong!</font><br/>";
		}
		if(empty($jeniskelamin)) {
			echo "<font color='red'>Kolom Jenis Kelamin Kosong!</font><br/>";
		}
		if(empty($umur)) {
			echo "<font color='red'>Kolom Umur Kosong!</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Kolom Email Kosong!</font><br/>";
		}
		if(empty($hobi)) {
			echo "<font color='red'>Kolom Hobi Kosong!</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE identitasku SET nama='$nama',jeniskelamin='$jeniskelamin',umur='$umur',email='$email',hobi='$hobi' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM identitasku WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$nama = $res['nama'];
	$jeniskelamin = $res['jeniskelamin'];
	$umur = $res['umur'];
	$email = $res['email'];
	$hobi = $res['hobi'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Beranda Utama</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr> 
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jeniskelamin"></td>
				</tr>
				<tr> 
					<td>Umur</td>
					<td><input type="text" name="umur"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr> 
					<td>Umur</td>
					<td><input type="text" name="hobi"></td>
				</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
