<?php
require_once('../../koneksi.php');

$act    = $_GET['act'];


	//Update data santri
if ($act=='update'
){
	$id 			= $_POST['id'];
	$nama           = $_POST['nama'];
	$nisn           = $_POST['nisn'];
	$email          = $_POST['email'];
	$jk             = $_POST['jk'];
	$tmp            = $_POST['tmp'];
	$tgl            = $_POST['tgl'];
	$ortu           = $_POST['ortu'];
	$alamat         = $_POST['alamat'];
	$pek            = $_POST['pekerjaan'];
	$telp           = $_POST['telepon'];
	$asal_sekolah   = $_POST['asal_sekolah'];
	$alamat_sekolah = $_POST['alamat_sekolah'];
	$no_ijazah      = $_POST['no_ijazah'];
	$nilai_mtk      = $_POST['nilai_mtk'];
	$nilai_indo     = $_POST['nilai_indo'];
	$nilai_ing      = $_POST['nilai_ing'];
	$tgl_lulus      = $_POST['tgl_lulus'];
	$pernyataan     = $_POST['pernyataan'];
	$tgl_daftar     = $_POST['tgl_daftar'];


	$update = mysqli_query($koneksi, "UPDATE user SET nama='$nama', nisn='$nisn', email='$email',  jenis_kelamin='$jk', tempat_lhr='$tmp', tgl_lhr='$tgl', nama_ortu='$ortu', alamat='$alamat', pek_ortu='$pek', telephone='$telp', asal_sekolah='$asal_sekolah', alamat_sekolah='$alamat_sekolah', no_ijazah='$no_ijazah', nilai_uan_mtk='$nilai_mtk', nilai_uan_b_indo='$nilai_indo', nilai_uan_b_ing='$nilai_ing', tgl_lulus='$tgl_lulus', pernyataan='$pernyataan', tgl_daftar='$tgl_daftar' WHERE id_santri='$id'");
}
if($update){
	header("Location: index.php?id=".$id."&pesan=sukses");
}else{
	echo '<div class="alert alert-danger">Data gagal disimpan, silahkan coba lagi.</div>';
}
if(isset($_GET['pesan']) == 'sukses'){
	echo '<div class="alert alert-success">Data berhasil disimpan.</div>';
}


?>
