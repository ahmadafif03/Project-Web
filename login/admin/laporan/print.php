<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body>
<?php
include "../../../koneksi.php";
include('../akses.php');
?>
<h1 class="page-header">CETAK DATA CALON SANTRI BARU</h1>
<table class="table table-striped table-hover">
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM user where id_santri='$_SESSION[id]'");
				$row = mysqli_fetch_array($sql);
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
						echo '
						<tr>
							<th align="left"> NISN </th>
							<td> : </td>
							<td>'.$row['nisn'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Nama </th>
							<td> : </td>
							<td>'.$row['nama'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Email </th>
							<td> : </td>
							<td>'.$row['email'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Jenis Kelamin </th>
							<td> : </td>
							<td>'.$row['jenis_kelamin'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tempat Lahir </th>
							<td> : </td>
							<td>'.$row['tempat_lhr'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left">  Nama Orang Tua </th>
							<td> : </td>
							<td>'.$row['nama_ortu'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Alamat </th>
							<td> : </td>
							<td>'.$row['alamat'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pekerjaan Orang Tua </th>
							<td> : </td>
							<td>'.$row['pek_ortu'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Telephone </th>
							<td> : </td>
							<td>'.$row['telephone'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left">Asal Sekolah </th>
							<td> : </td>
							<td>'.$row['asal_sekolah'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left">Alamat Sekolah </th>
							<td> : </td>
							<td>'.$row['alamat_sekolah'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> No.Ijazah </th>
							<td> : </td>
							<td>'.$row['no_ijazah'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Nilai UN Matematika </th>
							<td> : </td>
							<td>'.$row['nilai_uan_mtk'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Nilai UN Bahasa Indonesia </th>
							<td> : </td>
							<td>'.$row['nilai_uan_b_indo'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Niali UN Bahasa Inggris </th>
							<td> : </td>
							<td>'.$row['nilai_uan_b_ing'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tanggal Lulus </th>
							<td> : </td>
							<td>'.$row['tgl_lulus'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Pernyataan </th>
							<td> : </td>
							<td>'.$row['pernyataan'].'</td>
						</tr>
						';
						echo '
						<tr>
							<th align="left"> Tanggal Daftar </th>
							<td> : </td>
							<td>'.$row['tgl_daftar'].'</td>
						</tr>
						';

				}
				?>
			</table>

<script>
	window.load = print_d();
	function print_d(){
		window.print();
	}
</script>
</body>
</html>