<!DOCTYPE html>
<html>
<head>
	<title>Pondok Pesantren Tahfidz Daar El-Hikmah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">

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
									<a href="../../index.php" style="font-size:25px; color:Blue"><i class="glyphicon glyphicon-home"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Pondok <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../mod_profil/sejarah.php">Sejarah</a></li>
										<li><a href="../mod_profil/kurikulum.php">Kurikulum</a></li>
										<li><a href="../mod_profil/kegiatan.php">kegiatan</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendaftaran<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="pendaftaran.php">Daftar Santri Baru</a></li>
										<li><a href="info.php">Info Pendaftaran</a></li>
									</ul>
								</li>
								<li><a href="../mod_galery/album_photo.php">Galery</a></li>
								<li><a href="../../login/index.php">login</a></li>
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

	<!-- Content -->
	<content id="content">
		<div class="container">
			<?php
			include("../../koneksi.php");
			?>

			<h3>Selamat Anda Berhasil Mendaftar !</h3>
			<h5>Silahkan Masuk untuk dapat mengakses data anda !</h5>
			<div>
			<a href="../../login/index.php" target="_blank" class="btn btn-primary">
					<i class="glyphicon glyphicon-log-in"></i>
					Masuk
				</a>
			</div>
		</div>
	</content>
	<br><br><br><br><br><br><br><br><br><br><br>

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
	<script type="text/javascript" src="../../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>