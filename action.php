
<?php
include('koneksi.php');
//inisialisasi tanggal
	$tanggal = date ('Y-m-d');
	$time = date ('H-m-s');
//inisialisasi waktu
	$nama 	= $_POST['nama'];
	$pesan 	= $_POST['pesan'];

if (isset($_POST['submit'])) {

//query untuk menambah data ke dalam tabel
	$query = mysqli_query ($koneksi,"INSERT INTO komentar (nama, pesan, tanggal, time) values ('$nama','$pesan', '$tanggal','$time')");
	$num = mysqli_affected_rows($koneksi);

	//pengecualian
	if ($num>0) {
		header("location:index.php");
	}else{
		echo "anda gagal memberi komentar !";
	}
}

?>
