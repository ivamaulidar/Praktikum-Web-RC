<?php 
	
	//koneksi ke database 
	$koneksi = mysqli_connect("localhost", "root", "", "minggu7");


	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];

		while( $row = mysqli_fetch_assoc($result) ){
			$rows[] = $row;
		}
	return $rows;
	}



	function tambah($data){
		global $koneksi;

		//ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);

		// upload gambar
		$gambar = upload();
		if( !$gambar ){
			return false;
		}

		//query insert data
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";
		mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
	}



	function upload(){
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		//cek apakah tidak ada gambar diupload
		if( $error === 4 ){
			echo "<script>
					alert('pilih gambar dahulu');
				</script>";

			return false;
		}


		//cek apakah yg diupload gambar
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'pdf'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
			echo "<script>
					alert('Yang diupload harus gambar/pdf');
				</script>";

			return false;
		}


		//cek ukuran filenya kalau terlalu besar
		if($ukuranFile > 1000000){
			echo "<script>
					alert('Ukuran gambar terlalu besar');
				</script>";
		}



		//lolos pengecekan
		//generate nama gambar biar tidak sama
		$namaFileBaru = uniqid();
		$namaFileBaru .= '.';
		$namaFileBaru .= $ekstensiGambar;


		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

		return $namaFileBaru;
	}



	function hapus($id){
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

	return mysqli_affected_rows($koneksi);
	}




	function ubah($data){
		global $koneksi;
		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambarlama = htmlspecialchars($data["gambarlama"]);


		//cek apakah user pilih gambar baru
		if( $_FILES['gambar']['error'] === 4 ){
			$gambar = $gambarlama;
		}
		else{
			$gambar = upload();
		}

		//query update data
		$query = "UPDATE mahasiswa SET
					nama = '$nama',
					nim = '$nim',
					email = '$email',
					jurusan = '$jurusan',
					gambar = '$gambar'

					WHERE id = $id
					";

		mysqli_query($koneksi,$query);

	return mysqli_affected_rows($koneksi);
	}



	function cari($keyword){
		$query = "SELECT * FROM mahasiswa WHERE 
					nama LIKE '%$keyword%' OR 
					nim LIKE '%$keyword%' OR
					email LIKE '%$keyword%' OR
					jurusan LIKE '%$keyword%'
					";

	return query($query);
	}

?>