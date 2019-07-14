<?php

require_once('../../../koneksi.php');

if (isset($_POST['submit'])) {
	
	#create
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$nama 		= $_POST['nama'];
	$email 		= $_POST['email'];
	$nisn 		= $_POST['nisn'];
	$asal		= $_POST['asal_sekolah'];	

	//proses create
	$query ="INSERT into user(username,password,nama,email,nisn,asal_sekolah) values('$username','$password','$nama','$email','$nisn','$asal')";

	mysqli_query($koneksi,$query);
	$num = mysqli_affected_rows($koneksi);

	//pengecualian
	if ($num>0) {
		header("location:index.php");
	}else{
		echo "anda gagal mendaftar !";
		header("location:pendaftaran.php");
	}
}
?>