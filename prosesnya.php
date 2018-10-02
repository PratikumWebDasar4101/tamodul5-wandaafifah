<?php
$jeniskelamin = $_POST['JenisKelamin'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$hobi = $_POST['hobi'];

	if (isset($_POST['nama']) AND isset($_POST['email']  )){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$nama = htmlspecialchars($nama);
		$email = strip_tags($email);
	}else{
   	header("Location: form.php?error=variabel_belum_diinput");
}
	if(empty($nama)){
   	header("Location: form.php?error=nama_kosong");
	}else{
		if (is_numeric($nama)){
     		 header("Location: form.php?error=nama_harus_huruf");
	}else{
		echo "Nim  : $nim" . "<br>";
		echo "Nama : $nama" . "<br>";
		echo "Gender : $jeniskelamin" . "<br>";
		echo "Prodi : $prodi" . "<br>";
		echo "Fakultas : $fakultas" . "<br>";
		echo "Hobi: " ;
			foreach ($hobi as $key) {
		echo "$key, ";	
	}
		}
	}
	echo "<br><br>";
		$file = $_FILES['pict'];
		$nama_file = $file['name'];
		$nama_tmp = $file['tmp_name'];
		$upload_dir = "upload/";
	move_uploaded_file($nama_tmp,$upload_dir.$nama_file);
	?>
		<img src="<?php echo $upload_dir .$nama_file; ?>">