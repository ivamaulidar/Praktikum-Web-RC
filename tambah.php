<?php 

	require 'fungsi.php';

	//koneksi database
	$koneksi = mysqli_connect("localhost", "root", "", 'minggu7');

	//cek tombol submit
	if(isset($_POST["submit"])){

		//cek data berhasil di kirim
		if ( tambah($_POST) > 0 ) {
			echo "
				<script>
					alert('Berhasil');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('Gagal');
					document.location.href = 'index.php';
				</script>
			";
		}

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TAMBAH DATA</title>
</head>
<body style="background-color: #66D7EB">

	<h1>Tambah Data Mahasiswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="nama">Nama : </label><input type="text" name="nama" id="nama" required>
			</li>

			<li>
				<label for="nim">NIM : </label><input type="text" name="nim" id="nim" required>
			</li>

			<li>
				<label for="email">Email : </label><input type="text" name="email" id="email" required>
			</li>

			<li>
				<label for="jurusan">Prodi : </label><input type="text" name="jurusan" id="jurusan" required>
			</li>

			<li>
				<label for="gambar">Gambar : </label><input type="file" name="gambar" id="gambar">
			</li>

			
			<button type="submit" name="submit">Kirim</button>
			

		</ul>

	</form>


</body>
</html>