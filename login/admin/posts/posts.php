<?php 
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
		max-width:  100%;
		height: auto;
	}
</style>

<script src="../../../assets/ckeditor/ckeditor.js"></script>


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
					<li><a href="posts.php">Posts</a></li>
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
								<li><a href="posts.php">Add Posts</a></li>
								<li><a href="../pendaftaran/pendaftaran.php">Add Users</a></li>
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
					<li class="active">Membuat Artikel Baru</li>
				</ol>
			</div>
		</section>


		<section id="main">
			<div class="container">
				<h3>Tambah Artikel Baru</h3>
				<form method="post" name="posting_form" action="submit.php" enctype="multipart/form-data">
					Judul Artikel<br>
					<input type="text" name="judul_artikel" size="30"><br>
					Isi Artikel<br>
					<textarea name="isi_artikel" id="editor_berita" cols="10" rows="5">Isi Artikel</textarea>
					<script language="javascript">
						CKEDITOR.replace( 'editor_berita', {
							extraPlugins: 'magicline',
							allowedContent: true
						});</script>


						<td colspan="4">Upload Gambar (Ukuran Maks = 1 MB) : <input type="file" name="gambar" id="gambar" required="" /> | 
							Keterangan : <input type="text" name="keterangan"  /> |</td>
							<input type="submit" name="submit" value="simpan">
						</form>
						<br><br>
						<div class="jumbotron">
							<h3>Artikel Yang telah dibuat</h3>

							<?php


				//buat dulu koneksi kedatabase
							include('../../../koneksi.php');


				//buat query terlebih dahulu
							$query = mysqli_query($koneksi,"SELECT * FROM artikel");


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
									echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';



				//tampilkan tanggal pembuatan artikel
				//gunakan fungsi strtotime untuk merubah bentuk date 
				//kedalam bentuk string
									echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';

									echo "<img src='images/".$data['gambar']."' width='600px' height='400px'/>";
									echo "</br>";
									echo $data['keterangan'];



				//menampilkan isi artikel yang sudah kita buat
									echo '<p>'.$data['isi_artikel'].'</p>';
								}
							}


							?>
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
    	
    	<script src="../../../assets/js/bootstrap.min.js"></script>
    </body>
    </html>
