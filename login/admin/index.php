<?php 
include('akses.php');
?>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../../assets/js/bootstrap.min.js"></script>
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
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

	<link href="../../assets/css/style.css" rel="stylesheet" type="text/css" >

	<style type="text/css">
		body{

			background: url("../../img/1.jpg") no-repeat fixed left;
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
				<a class="navbar-brand" href="index.php">Daar El-Hikmah</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Dashboard</a></li>
					<li><a href="posts/posts.php">Posts</a></li>
					<li><a href="users/users.php">Users</a></li>
					<li><a href="galery/posts.php">Galery</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a href="index.php">Welcome, <?php echo $_SESSION['namalengkap']; ?></a></li>
					<li><a href="../Logout.php">Logout</a></li>

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
								<li><a href="posts/posts.php">Add Posts</a></li>
								<li><a href="pendaftaran/pendaftaran.php">Add Users</a></li>
								<li><a href="galery/posts.php">Add Galery</a></li>
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
					<li class="active">Dashboard</li>
				</ol>
			</div>
		</section>


		<section id="main">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="list-group">
							<a href="index.php" class="list-group-item active main-color-bg"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
								Dashboard <span class="badge"></span>
							</a>
							<a href="posts/posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts<span class="badge"></span></a>
							<a href="users/users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge"></span></a>
							<a href="galery/posts.php" class="list-group-item"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Galery <span class="badge"></span></a>
						</div>

						<div class="well">
							<h4>Disk Space Used</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
									60%
								</div>
							</div>
							<h4>Bandwidth Used</h4>
							<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
									40%
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="panel panel-default">
							<div class="panel-heading" style="background-color:  #095f59;">
								<h3 class="panel-title">Website Overview</h3>
							</div>
							<div class="panel-body">
							<?php
							require "../../koneksi.php";
							$artikel = mysqli_query($koneksi, "SELECT count(judul_artikel) FROM artikel");
							$user = mysqli_query($koneksi, "SELECT count(nama) FROM user where level = 0");
							$gambar = mysqli_query($koneksi, "SELECT count(gambar) FROM gambar");
							$komentar = mysqli_query($koneksi, "SELECT count(pesan) FROM komentar");
							$data1 = mysqli_fetch_array($artikel);
							$data2 = mysqli_fetch_array($user);
							$data3 = mysqli_fetch_array($gambar);
							$data4 = mysqli_fetch_array($komentar);
							?>

								<div class="col-md-3">
									<div class="well dash-box">
										<a href="users/users.php">
											<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a> <?php echo $data2['count(nama)']; ?></h2>
											<h4>Users</h4>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
									<a href="galery/posts.php">
										<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></a> <?php echo $data3['count(gambar)']; ?></h2>
										<h4>Galery</h4>
									</div>
								</div>
								<div class="col-md-3">
								<a href="posts/posts.php">
									<div class="well dash-box">
										<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> <?php echo $data1['count(judul_artikel)']; ?></h2>
										<h4>Posts</h4>
									</div>
								</div>
								<div class="col-md-3">
									<div class="well dash-box">
										<h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> <?php echo $data4['count(pesan)']; ?></h2>
										<h4>Comments</h4>
									</div>
								</div>
							</div>
						</div>
						<!--Latest User-->
						<div class="panel panel-default">
							<div class="panel-heading"style="background-color:  #095f59;>
								<h3 class="panel-title">Latest Users</h3>
							</div>
							<div class="panel-body">
								<table class="table table-striped table-hover">
									<tr class="active">
										<th>No</th>
										<th>NISN</th>
										<th>Username</th>
										<th>Email</th>
										<th>Joined</th>
									</tr>
									<?php
									require "../../koneksi.php";
									$santri = mysqli_query($koneksi, "SELECT * FROM user where level=0 order by id_santri desc limit 3")or die(
										mysqli_error());
									$no = 1;
									while($data = mysqli_fetch_array($santri)){
										?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['nisn']; ?></td>
											<td><?php echo $data['username']; ?></td>
											<td><?php echo $data['email']; ?></td>
											<td><?php echo $data['tgl_daftar']; ?></td>
										</tr>
										<?php } ?>
								</table>

							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p align="center">Copyright &copy; Pondok Pesantren Tahfidz Daar El-Hikmah 2018</p>
					</div>
				</div>
			</div>
		</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    
    <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
