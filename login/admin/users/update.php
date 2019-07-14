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
        <li class="active">Update Data Calon Santri Baru</li>
      </ol>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <h2>Update Biodata Calon Santri Baru</h2>
    </div>

    <?php
    include('../../../koneksi.php');
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_santri='$_GET[id]'");
    $row = mysqli_fetch_array($query);
    ?>

    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal" method="POST" <?php echo "action=\"action.php?act=update\""; ?>>
          <input type="hidden" name="id" value="<?php echo $row['id_santri']; ?>">
          <div class="form-group">
            <label class="col-sm-3 control-label">NISN</label>
            <div class="col-sm-3">
              <input type="text" name="nisn" class="form-control" value="<?php echo $row['nisn']; ?>" placeholder="NISN" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">NAMA LENGKAP</label>
            <div class="col-sm-4">
              <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="NAMA LENGKAP" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">TEMPAT & TANGGAL LAHIR</label>
            <div class="col-sm-3">
              <input type="text" name="tmp" class="form-control" value="<?php echo $row['tempat_lhr']; ?>" placeholder="TEMPAT LAHIR">
            </div>
            <div class="col-sm-2">
              <div class="input-group date" data-provide="datepicker">
                <input type="date" name="tgl" class="form-control" value="<?php echo $row['tgl_lhr']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">EMAIL</label>
            <div class="col-sm-3">
              <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="EMAIL" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">JENIS KELAMIN</label>
            <div class="col-sm-2">
              <select name="jk" class="form-control">
                <option value="">JENIS KELAMIN</option>
                <option value="Laki-Laki" <?php if($row['jenis_kelamin'] == 'Laki-Laki'){ echo 'selected'; } ?>>LAKI-LAKI</option>
                <option value="Perempuan" <?php if($row['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?>>PEREMPUAN</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nama Orang Tua</label>
            <div class="col-sm-2">
              <input type="text" name="ortu" class="form-control" value="<?php echo $row['nama_ortu']; ?>" placeholder="NAMA ORANG TUA">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">ALAMAT</label>
            <div class="col-sm-6">
              <textarea name="alamat" class="form-control" placeholder="ALAMAT"><?php echo $row['alamat']; ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Pekerjaan Orang Tua</label>
            <div class="col-sm-3">
              <input type="text" name="pekerjaan" class="form-control" value="<?php echo $row['pek_ortu']; ?>" placeholder="PEKERJAAN ORANG TUA">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Telephone</label>
            <div class="col-sm-2">
              <input type="text" name="telepon" class="form-control" value="<?php echo $row['telephone']; ?>" placeholder="TELEPHONE">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Asal Sekolah</label>
            <div class="col-sm-2">
              <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row['asal_sekolah']; ?>" placeholder="ASAL SEKOLAH">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Alamat Sekolah</label>
            <div class="col-sm-6">
              <textarea name="alamat_sekolah" class="form-control" value="<?php echo $row['alamat_sekolah']; ?>" placeholder="ALAMAT SEKOLAH"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">No Ijazah</label>
            <div class="col-sm-3">
              <input type="text" name="no_ijazah" class="form-control" value="<?php echo $row['no_ijazah']; ?>" placeholder="NOMOR IJAZAH">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nilai UAN MTK</label>
            <div class="col-sm-2">
              <input type="text" name="nilai_mtk" class="form-control" value="<?php echo $row['nilai_uan_mtk']; ?>" placeholder="NILAI MTK">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nilai UAN B.IND</label>
            <div class="col-sm-2">
              <input type="text" name="nilai_indo" class="form-control" value="<?php echo $row['nilai_uan_b_indo']; ?>" placeholder="NILAI INDO">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Nilai UAN B.ING</label>
            <div class="col-sm-2">
              <input type="text" name="nilai_ing" class="form-control" value="<?php echo $row['nilai_uan_b_ing']; ?>" placeholder="NILAI ING">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Tanggal Lulus</label>
            <div class="col-sm-2">
              <div class="input-group date" data-provide="datepicker">
                <input type="date" name="tgl_lulus" class="form-control" value="<?php echo $row['tgl_lulus']; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Pernyataan</label>
            <div class="col-sm-2">
              <input type="text" name="pernyataan" class="form-control" value="<?php echo $row['pernyataan']; ?>" placeholder="PERNYATAAN">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Tanggal Daftar</label>
            <div class="col-sm-2">
              <div class="input-group date" data-provide="datepicker">
                <input type="date" name="tgl_daftar" class="form-control" value="<?php echo $row['tgl_daftar']; ?>">
              </div>
            </div>
          </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">&nbsp;</label>
              <div class="col-sm-6">
                <input type="submit" name="save" class="btn btn-primary" value="SIMPAN">
                <a href="users.php" class="btn btn-warning">BATAL</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div> <!-- /container -->

  <script src="../../../assets/js/jquery.js"></script>
  <script src="../../../assets/js/bootstrap.min.js"></script>
</body>
</html>
