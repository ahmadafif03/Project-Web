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
          <li><a href="users.php">Users</a></li>
          <li><a href="../galery/posts.php">Galery</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="../index.php">Welcome, <?php echo $_SESSION['namalengkap']; ?></a></li>
          <li><a href="../../Logout.php">Logout</a></li>

        </ul>
      </div><!--/.nav-collapse -->
    </div>
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
        <li class="active">View Data Calon Santri Baru</li>
      </ol>
    </div>
  </section>

  <div class="container">
    <div class="jumbotron">
      <h2>Data Calon Santri Baru</h2>
      <hr>
      <div class="panel panel-default">
        <div class="panel-body">
          <?php
          require "../../../koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_santri='$_GET[id]'");
          $r     = mysqli_fetch_array($query);
          ?>
          <table class="table table-hover">
            <tr>
              <td>NISN</td>
              <td>:</td>
              <td><?php echo $r['nisn']; ?></td>
            </tr>
            <tr class="info">
              <td>Nama Lengkap</td>
              <td>:</td>
              <td><?php echo $r["nama"]; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><?php echo $r["email"]; ?></td>
            </tr>
            <tr class="info">
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><?php echo $r['jenis_kelamin']; ?></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><?php echo $r["tempat_lhr"]; ?></td>
            </tr>
            <tr class="info">
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><?php echo $r["tgl_lhr"]; ?></td>
            </tr>
            <tr>
              <td>Nama Orang Tua</td>
              <td>:</td>
              <td><?php echo $r['nama_ortu']; ?></td>
            </tr>
            <tr class="info">
              <td>Alamat</td>
              <td>:</td>
              <td><?php echo $r["alamat"]; ?></td>
            </tr>
            <tr>
              <td>Pekerjaan Orang Tua</td>
              <td>:</td>
              <td><?php echo $r["pek_ortu"]; ?></td>
            </tr>
            <tr class="info">
              <td>Telephone</td>
              <td>:</td>
              <td><?php echo $r['telephone']; ?></td>
            </tr>
            <tr>
              <td>Asal Sekolah</td>
              <td>:</td>
              <td><?php echo $r["asal_sekolah"]; ?></td>
            </tr>
            <tr class="info">
              <td>Alamat Sekolah</td>
              <td>:</td>
              <td><?php echo $r["alamat_sekolah"]; ?></td>
            </tr>
            <tr>
              <td>No Ijazah</td>
              <td>:</td>
              <td><?php echo $r['no_ijazah']; ?></td>
            </tr>
            <tr class="info">
              <td>Nilai UAN MTK</td>
              <td>:</td>
              <td><?php echo $r["nilai_uan_mtk"]; ?></td>
            </tr>
            <tr>
              <td>Nilai UAN B.INDO</td>
              <td>:</td>
              <td><?php echo $r["nilai_uan_b_indo"]; ?></td>
            </tr>
            <tr class="info">
              <td>NILAI UAN B.ING</td>
              <td>:</td>
              <td><?php echo $r['nilai_uan_b_ing']; ?></td>
            </tr>
            <tr>
              <td>Tanggal Lulus</td>
              <td>:</td>
              <td><?php echo $r["tgl_lulus"]; ?></td>
            </tr>
            <tr class="info">
              <td>Tanggal Daftar</td>
              <td>:</td>
              <td><?php echo $r["tgl_daftar"]; ?></td>
            </tr>
            <tr>
              <td>Pernyataan</td>
              <td>:</td>
              <td><?php echo $r['pernyataan']; ?></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-1">
          <a href="users.php" class="btn btn-success" role="button">
            <i class="glyphicon glyphicon-chevron-left"></i> 
            Back
          </a>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

</div> <!-- /container -->

<script src="../../../assets/js/jquery.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
</body>
</html>
