<?php  
include "Excel.class.php";
include "../../koneksi.php";

$excel = new Excel();

#send Header
$excel ->setHeader('Data_Mahasiswa.xls');
$excel ->BOF();

#Header tabel
$excel ->writeLabel(0, 0, "NIM");
$excel ->writeLabel(0, 1, "NAMA");
$excel ->writeLabel(0, 2, "EMAIL");
$excel ->writeLabel(0, 3, "JENIS_KELAMIN");
$excel ->writeLabel(0, 4, "JURUSAN");
$excel ->writeLabel(0, 5, "STATUS");

#ambil data
#isi data
$ulang =1;
$query = "select nim,nama,email,jenis_kelamin,jurusan,status from mahasiswa order by nim";
$sql = mysqli_query($koneksi,$query);
while ($row = mysqli_fetch_array($sql)) { //PDO
	$excel ->writeLabel($ulang, 0, $row[0]);
	$excel ->writeLabel($ulang, 1, $row[1]);
	$excel ->writeLabel($ulang, 2, $row[2]);
	$excel ->writeLabel($ulang, 3, $row[3]);
	$excel ->writeLabel($ulang, 4, $row[4]);
	$excel ->writeLabel($ulang, 5, $row[5]);
	$ulang++;
}

#akhir data
$excel ->writeLabel($ulang, 0, "ket : 1 jika aktif & 2 jika tidak aktif");
$excel ->EOF();
exit();
?>