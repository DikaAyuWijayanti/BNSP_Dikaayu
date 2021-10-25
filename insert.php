<?php 
	include 'conn.php';

	$nomor_surat = $_POST['nomor_surat'];
	$kategori = $_POST['kategori'];
	$judul = $_POST['judul'];
	
	$format = array('pdf', 'pdf');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['file']['tmp_name'];

	if(in_array($ekstensi, $format) === true){
		move_uploaded_file($file_tmp, "file/$nama");
		$query = mysqli_query($db, "INSERT INTO tb_anggota VALUES ('', '$nomor_surat', '$kategori', '$judul'");
		header("Location: index.php?data=success");
	}
	else{
		header("Location: index.php?data=file_salah");
	}
?>