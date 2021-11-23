<?php  
	//koneksi ke database
	require 'fungsi.php';
	require 'bootstrap.html';
	$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

	//tombol cari diklik
	if ( isset($_POST["cari"]) ) {
		$mahasiswa = cari($_POST["keyword"]);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MG 7</title>
</head>
<body style="background-color: lightsteelblue;">
	<br>
	<h1 style="text-align: center; background-color: #8CC2F2;">Data Mahasiswa</h1>

	<a href="tambah.php"style="color: brown;">Tambah Data Mahasiswa</a>
	<br><br>

	<form action="" method="post" style="background-color: #7AC5E0">
		<button type="submit" name="cari">Cari</button>
		<input type="text" name="keyword" size="30" autofocus placeholder="Searching..." autocomplete="off">

	</form>
	<br>

	<table class="table table-striped" style="background-color: skyblue;">

		<thead>
		<tr>
			<th scope="col">No.</th>
			<th scope="col">Aksi</th>
			<th scope="col">Gambar</th>
			<th scope="col">NIM</th>
			<th scope="col">Nama</th>
			<th scope="col">Prodi</th>
			<th scope="col">Email</th>
		</tr>
		</thead>

		<tbody>
		<?php $i = 1; ?>
		<?php foreach ( $mahasiswa as $row ):?>

		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin akan menghapus? ')">Hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="80"></td>
			<td><?= $row["nim"]; ?></td>
			<td><?= $row["nama"]; ?></td>
			<td><?= $row["jurusan"]; ?></td>
			<td><?= $row["email"]; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>