<!DOCTYPE html>
<html>
<head>
	<title>Pondok Pesantren Tahfidz Daar El-Hikmah</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

	<style type="text/css">
		body{

			background: url("../img/1.jpg") no-repeat fixed left;
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
				<img src="../img/header.png" width="100%" class="col-md-12">
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
									<a href="../index.php" style="font-size:25px; color:Blue"><i class="glyphicon glyphicon-home"></i></a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil Pondok <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../modules/mod_profil/sejarah.php">Sejarah</a></li>
										<li><a href="../modules/mod_profil/kurikulum.php">Kurikulum</a></li>
										<li><a href="../modules/mod_profil/kegiatan.php">kegiatan</a></li>
									</ul>
								</li>
								<li>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pendaftaran<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../modules/mod_pendaftaran/pendaftaran.php">Daftar Santri Baru</a></li>
										<li><a href="../modules/mod_pendaftaran/info.php">Info Pendaftaran</a></li>
									</ul>
								</li>
								<li><a href="../modules/mod_galery/album_photo.php">Galery</a></li>
								<li><a href="index.php">login</a></li>
							</ul>
							<form method="post" action="../cari.php" class=" search pull-right col-md-4">
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
	<div class="container">

		<div class="row" style="margin-top:20px">
			<div class="col-xs-12 col-sm-8 col-md-5 col-sm-offset-2 col-md-offset-3">
				<form role="form" action="login.php" method="post">
					<fieldset>
						<h2>Masuk</h2>
						<hr class="colorgraph">
						<div class="form-group">
							<input type="text" name="username" class="form-control input-lg" placeholder="username" required>
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control input-lg" placeholder="Password" required>
						</div>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-md-12" align="center">
								<input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Masuk">
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

	</div>
	<br><br><br><br><br><br>


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
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

</body>
</html>