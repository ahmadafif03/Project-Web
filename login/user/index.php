<?php
include("akses.php");
include("../../koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pondok Pesantren Tahfidz Daar El-Hikmah | user</title>

	<!-- Bootstrap -->
	<link href="../../assets/css/style.css" rel="stylesheet">
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<style type="text/css">
		body{

			background: url("../../img/1.jpg") no-repeat fixed left;
			max-width:  100%;
			height: auto;
		}
	</style>
</head>

<body>
	<!-- Header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<img src="../../img/header.png" width="100%" class="col-md-12">
			</div>
		</div>
	</header>
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
										<li><a href="../../modules/mod_profil/sejarah.php">Sejarah</a></li>
										<li><a href="../../modules/mod_profil/kurikulum.php">Kurikulum</a></li>
										<li><a href="../../modules/mod_profil/kegiatan.php">kegiatan</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendaftaran<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../../modules/mod_pendaftaran/pendaftaran.php">Daftar Santri Baru</a></li>
										<li><a href="../../modules/mod_pendaftaran/info.php">Info Pendaftaran</a></li>
									</ul>
								</li>
								<li><a href="../../modules/mod_galery/album_photo.php">Galery</a></li>
								<li><a href="../../login/logout.php">logout</a></li>
							</ul>
							<form method="post" action="../../cari.php" class=" search pull-right col-md-4">
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

	<div class="container">
		Welcome
		<p><?php echo $_SESSION['namalengkap']; ?></p>
		<br><br><br><br><br>
		<div class="container" style="text-align: center;">
			<div class="row">
				<div class="col-md-4">
					<div class="col-md-8" style="text-align: center;">
						<img src="../../img/2.png" width="100%" class="col-md-12">
						<h3>Lengkapi Biodata</h3>
						<h5>Calon santri baru diharap untuk melengkapi biodata</h5>
					</div>
					<div class="col-md-8" style="text-align: center;">
						<?php
						require "../../koneksi.php";
						$user = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error());
						$data = mysqli_fetch_array($user);
						?>
						<br><h4><a href="biodata.php?id=<?php echo  $_SESSION['id']; ?>">Isi Biodata</a></h4>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-8" style="text-align: center;">
						<img src="../../img/3.png" width="100%" class="col-md-12">
						<h3>Lihat Biodata</h3>
						<h5>Calon santri baru dapat melihat data yang telah diisi</h5>
					</div>
					<div class="col-md-8" style="text-align: center;">
						<br><h4><a href="view.php">Lihat Data</a></h4>
					</div>
				</div>

				<div class="col-md-4">
					<div class="col-md-8" style="text-align: center;">
						<img src="../../img/4.png" width="100%" class="col-md-12">
						<h3>Print Data</h3>
						<h5>Calon santri baru dapat mencetak data disini</h5>
					</div>
					<div class="col-md-8" style="text-align: center;">
						<br><h4><a href="../admin/laporan/print.php">Print</a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p align="center">Copyright &copy; Pondok Pesantren Tahfidz Daar El-Hikmah 2018</p>
			</div>
		</div>
	</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>