<?php
	include('../../../koneksi.php');
	include('../akses.php');
?>
<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Pondok Pesantren Tahfidz Daar El-Hikmah | Dashboard</title>

	<!-- Bootstrap core CSS -->
	<link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="../../../assets/css/style.css" rel="stylesheet" type="text/css" >

	<style type="text/css">
		body{

			background: url("../../../img/1.jpg") no-repeat fixed left;
			max-width: 100%;
			height: auto;
		}
	</style>


</head>

<body>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="../index.php">Daar El-Hikmah</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="../index.php">Dashboard</a></li>
					<li><a href="../posts/posts.php">Posts</a></li>
					<li><a href="../users/users.php">Users</a></li>
					<li><a href="../galery/posts.php">Galery</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="../index.php">Welcome, <?php echo $_SESSION['namalengkap']; ?></a></li>
					<li><a href="../../Logout.php">Logout</a></li>

				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
				</div>
				<div class="col-md-2">
					<div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Create Content
							<span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="../posts/posts.php">Add Posts</a></li>
								<li><a href="pendaftaran.php">Add Users</a></li>
								<li><a href="../galery/posts.php">Add Galery</a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</header>
		<br>

		<section id="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="active">Mendaftar User Baru</li>
				</ol>
			</div>
		</section>

	<!-- Content -->
	<content id="content">
		<div class="container">
			<?php
			include("../../../koneksi.php");
			?>

			<h3>Selamat Anda Berhasil Mendaftar !</h3>
			<h5>Silahkan Masuk untuk dapat mengakses data anda !</h5>
			<div>
			<a href="../../../login/index.php" target="_blank" class="btn btn-primary">
					<i class="glyphicon glyphicon-log-in"></i>
					Masuk
				</a>
			</div>
		</div>
	</content>
	<br><br><br><br><br><br><br><br><br><br><br><br>

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
	<script type="text/javascript" src="../../../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../../../assets/js/bootstrap.min.js"></script>

</body>
</html>