<!DOCTYPE html>
<html>
<head>
	<title>Pondok Pesantren Tahfidz Daar El-Hikmah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

	<style type="text/css">
	body{

		background: url("img/1.jpg") no-repeat fixed left;
		max-width: 100%;
		height: auto;
	}
</style>
</head>
<body>
	<!-- Header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<img src="img/header.png" width="100%" class="col-md-12">
			</div>
		</div>
	</header>

	<!-- Menu -->
	<nav id="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="navbar navbar-inverse">
						<div class="header">
							<button type="button" class="navbar-toggle collapsed" data-toogle="collapse" data-target="#navbar">
								<div class="icon-bar"></div>
								<div class="icon-bar"></div>
								<div class="icon-bar"></div>
							</button>
						</div>
						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php" style="font-size:25px; color:Blue"><i class="glyphicon glyphicon-home"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Pondok <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="modules/mod_profil/sejarah.php">Sejarah</a></li>
										<li><a href="modules/mod_profil/kurikulum.php">Kurikulum</a></li>
										<li><a href="modules/mod_profil/kegiatan.php">kegiatan</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendaftaran<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="modules/mod_pendaftaran/pendaftaran.php">Daftar Santri Baru</a></li>
										<li><a href="modules/mod_pendaftaran/info.php">Info Pendaftaran</a></li>
									</ul>
								</li>
								<li><a href="modules/mod_galery/album_photo.php">Galery</a></li>
								<li><a href="login/index.php">login</a></li>
							</ul>
							<form method="post" action="cari.php" class=" search pull-right col-md-4">
								<div class="input-group">
									<input type="text" name="judul_artikel" placeholder="Cari Artikel di sini..." class="form-control">
									<span class="input-group-btn">
										<input type="submit" name="cari" value="Cari" class="btn btn-primary">
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- Content -->
	<content id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="jumbotron">

						<?php
						require "koneksi.php";
						$id = $_GET['p'];

						$query = mysqli_query($koneksi,"SELECT * from artikel where id_artikel='$id'");
					//cek apakah kita sudah memposting artikel atau belum

						if (mysqli_num_rows($query) == 0) {


					//tampilkan pesan kalau artikel belum ada
							echo 'maaf, belum ada artikel';
						} 
						else 
						{

					//buat pengulangan untuk menampilkan data artikel dengan 
					//menggunakan while dan definisikan kedalam variabel data
							while ($data = mysqli_fetch_array($query)) 
							{


							//kita akan menampilkan judul artikel

								echo ' 
								<h3 class="judul"><strong><a herf="index1">'. $data['judul_artikel'] .'</a></strong>';
								echo '<p><em><h4>Di publikasikan pada : '. date('j, F Y',strtotime($data['tgl_artikel'])) .'</h4></em></p>';
								echo '
								<div class="row">';
								echo "<img src='login/admin/posts/images/".$data['gambar'] ."'width='100%'/>";
								echo '<h5 align="justify">'.$data['isi_artikel'].'</h5>
								</div>';
							}
						}
						?>

					</div>
				</div>

				<!-- Berita Terkini -->
				<div class="col-md-4">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#konten1" data-toggle="tab">Berita Terkini</a></li>
						<li><a href="#konten2" data-toggle="tab">Komentar</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="konten1">

							<?php
							require "koneksi.php";
							$query = mysqli_query($koneksi, "SELECT * FROM artikel order by id_artikel desc limit 3");
							if (mysqli_num_rows($query) == 0) {


									//tampilkan pesan kalau artikel belum ada
								echo 'maaf, belum ada artikel';
							} 
							else 
							{
								while ($data = mysqli_fetch_array($query)) 
								{
									echo '
									<ul> 
									<li>';
									echo '<a href="viewindex.php?p='.$data['id_artikel'].'">';
									echo "<img src='login/admin/posts/images/".$data['gambar'] ."'width='100%' class='img-rounded' alt='Cinque Terre'/><p> " .$data['judul_artikel']."</p></a>
									</li>
									</ul>";
								}
							}
							?>


						</div>
						<div class="tab-pane fade" id="konten2">
							<form method="post" action="action.php">
								<table width="200">
									<tr>
										<td colspan="3"><strong>Tingggalkan Komentar Anda : </strong></td>
									</tr>
									<tr>
										<td>Nama</td>
										<td>:</td>
										<td>
											<input type="text" name="nama" >
										</td>
									</tr>
									<tr>
										<td>Komentar</td>
										<td>:</td>
										<td>
											<textarea name="pesan"></textarea>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td></td>
										<td>
											<input type="submit" name="submit" value="kirim" >
										</td>

									</tr>
								</table>
								<br>
								<p>Komentar Lainnya : </p>
							</form>

							<?php
							include('koneksi.php');
							$query = mysqli_query ($koneksi,"SELECT * FROM komentar ORDER BY time || tanggal DESC");
							while ($d = mysqli_fetch_array($query))
							{
								$psn = $d['pesan'];
								echo "<table>";
								echo "<tr><td><b>". $d['nama'] . " <td> : <td> " . $psn . "</b></td></tr>";
								echo "<tr><td align=right>" . $d['time'] . " <td> : <td> " . $d['tanggal'] . "</td></tr></table><hr>";
							}
							?>
						</div>
					</div>
					<!--Time List-->
					<div class="list-group">
						<h5 class="list-group-item disabled">Time Line</h5>
						<p class="list-group-item">
							1. 01 Februari 2018<br>
							Pendaftaran Gelombang I<br><br>
							2. 10 April 2018<br>
							Pendaftaran Gelombang II<br><br>
							3. 16 April 2018<br>
							Seleksi Calon Santri Baru<br><br>
							4. 20 April 2018<br>
							Pengumuman Seleksi Calon Santri Baru<br><br>
						</p>
					</div>
					<!-- Kontak -->
					<div class="list-group">
						<h5 class="list-group-item disabled">KONTAK</h5>

						<p class="list-group-item">
							Pondok Pesantren Tahfidz Daar El-Hikmah<br><br>

							Jl. Raya Buluagung jawa,RT/RW :03/08, desa sengonagung,
							kecamatan Purwosari, Kabupaten Pasuruan, 67162 Indonesia<br>
							Email : pondokdaarelhikmah@gmail.com<br>
							Phone : +62-813-57479426<br>
						</p>
					</div>
				</div>
			</div>
		</div>
	</content>

	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p align="center">Copyright &copy; Pondok Pesantren Tahfidz Daar El-Hikmah 2018</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript -->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

</body>
</html>