<!DOCTYPE html>
<html>

<head>
	<title>Proses Simpan Data...</title>
</head>

<body>
	<?php
	include 'mysql_connect.php';

	// menyimpan data kedalam variabel
	$nim            = $_POST['nim'];
	$nama_mhs       = $_POST['nama_mhs'];
	$jenis_kelamin  = $_POST['jenis_kelamin'];
	$tanggal_lahir      = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
	$alamat         = $_POST['alamat'];
	$no_tlp        = $_POST['no_tlp'];
	$email          = $_POST['email'];
	$semester       = $_POST['semester'];

	$insert_query = "INSERT INTO master_mahasiswa (nim, nama, jenis_kelamin, tanggal_lahir, alamat, no_tlp, email, semester) values ('$nim', '$nama_mhs','$jenis_kelamin','$tanggal_lahir','$alamat','$no_tlp','$email','$semester')";

	// menjalankan perintah insert ke tabel
	$result = mysqli_query($conn, $insert_query);
	if (!$result) {
		echo "Gagal Menyimpan Data!";
	} else {
		echo "Data Sudah Tersimpan";
	}

	// menutup koneksi
	mysqli_close($conn);

	?>
	<br>
	<a href="list_mahasiswa.php"> Kembali</a>
</body>

</html>