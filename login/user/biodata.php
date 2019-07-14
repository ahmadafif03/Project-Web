
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
    <div class="row">
      <h2>Update Biodata Calon Santri Baru</h2>
    </div>

    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_santri='$_SESSION[id]'");
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
              <input type="text" name="nama" class="form-control" value="<?php echo $row['nama']; ?>" placeholder="NAMA LENGKAP" required>
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
                <a href="index.php" class="btn btn-warning">BATAL</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div> <!-- /container -->

  <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
