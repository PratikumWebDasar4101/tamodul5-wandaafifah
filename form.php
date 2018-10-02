<?php 
if (isset($_POST['error'])){
	$error=$_POST['error'];
	$pesan="";

	if ($error=="variabel_belum_diinput"){
		$pesan="<h3>Akses halaman ini dari formulir</h3>";
	}
	if ($error=="nama_tidak_ada"){
		$pesan="<h3>Nama tidak boleh kosong</h3>";
	}
	if ($error=="nama_harus_huruf"){
		$pesan="<h3>Nama harus huruf</h3>";
	}
} else{
	$error="";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center>
		<h1>Formulir</h1>

		<?php error_reporting(0);
			echo $pesan;
			  ?>

		<form  action="prosesnya.php" method="POST" enctype="multipart/form-data">
			NIM : <input type="number"  name="nim" maxlength="10"  required ><br></br>
			Nama : <input type="text" name="nama"  minlength="1" maxlength="20" ><br></br>
			Email : <input type="text" name="email"  placeholder="Enter Valid Email Address" ><br></br>
			Jenis Kelamin :	<input type="radio" name="JenisKelamin" value="Laki-Laki" required>Laki-laki
					 		<input type="radio" name="JenisKelamin" value="Perempuan" required>Perempuan
					 		<br>
					 			</br>
			Program Studi :
					<select name="prodi">
						<option>Manajemen Informatika</option>		
						<option>perhotelan</option>
						<option>DKV</option>
						<option>Ilmu komunikasi</option>
						<option>Administrasi Bisnis</option>
						<option></option>
					</select>
						<br>
					<br>
			Fakultas :
					<select name="fakultas">
						<option>FIT</option>
						<option>FKB</option>
						<option>FRI</option>
						<option>FIK</option>	
						<option>FIF</option>
						<option>FEB</option>
						<option>FTE</option>
					</select>
						<br>
					<br>
			Hobi :
					<input type="checkbox" name="hobi[]" value="Jalan-jalan" >jalan-jalan
					<input type="checkbox" name="hobi[]" value="Baca Novel">Baca Novel
						<br>
					<br>
			Pilih Foto :
					<input name="pict" type="file" accept="image/*"><br><br>
				
			<input type="submit" name="upload" id="upload" value="Kirim"></td>
			
	</form>
</body>
</center>
</html>