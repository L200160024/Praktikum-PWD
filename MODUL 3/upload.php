<html>
	<head>
		<title>
			Upload File
		</title>
	</head>
	<body>
		<?php
		error_reporting(E_ALL ^ E_NOTICE);
		$direktori='images/';
		$nama_foto = $_FILES ['foto']['name'];
		$size_foto = $_FILES ['foto']['size'];
		$tipe_foto = $_FILES ['foto']['type'];
		$upload = $direktori.$nama_foto;
		$submit = $_POST['submit'];

		if ($submit){
			move_uploaded_file($_FILES ["foto"]["tmp_name"], $upload);
			echo "<H1>File Berhasil di upload</H1>
				  <br><br>
				  <img border='0' src='$upload'><br><br>
				  <b>Informasi File :</b><br>
				  Nama file   : $nama_foto<br>
				  Ukuran file : $size_foto byte<br>
				  Tipe file   : $tipe_foto<br>";
		}else{
			?>
			<form method="POST"  enctype="multipart/form-data" action="upload.php">
				Upload file : <input type="file" name="foto" size="20"><br>
				<input type="submit" name="submit" value="UPLOAD">
			</form>
			<?php
		}
		?>
	</body>
</html>