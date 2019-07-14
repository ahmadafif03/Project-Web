<?php


//membuat koneksi kedatabase
include('../../../koneksi.php');


//membuat variabel dari inputan form

$judul 		= $_POST['judul_artikel'];
$isi 		= $_POST['isi_artikel'];
$tgl 		= date('Y-m-d');
$fileName 	= $_FILES['gambar']['name'];
$fileTemp 	= $_FILES['gambar']['tmp_name'];
$ket 		= $_POST['keterangan'];

//proses query memasukkan data ke database

$query = mysqli_query($koneksi,"INSERT INTO artikel VALUES ('','$judul','$isi','$tgl','$fileName','$ket')");


//cek apakah querynya berhasil atau tidak
if ($query) {


//jika berhasil maka tampilkan pesan
	echo 'berhasil membuat artikel dengan judul '.$judul ;
	header('location:../../../index.php');

}
else
{

//tampilkan pesan error jika query tidak berhasil

	echo 'gagal membuat artikel dengan judul '.$judul ;

} 
move_uploaded_file($fileTemp, "images/".$fileName);

?>

