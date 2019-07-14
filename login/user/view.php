
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
  <div class="jumbotron">
    <h2>Data Calon Santri Baru</h2>
    <hr>
    <div class="panel panel-default">
      <div class="panel-body">
        <?php
        require "../../koneksi.php";
        include('akses.php');
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE id_santri='$_SESSION[id] '");
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
    <a href="index.php" class="btn btn-success" role="button"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>

  </div>
</div>

</div>
</div>

</div> <!-- /container -->

<script src="../../assets/js/jquery.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
</body>
</html>
