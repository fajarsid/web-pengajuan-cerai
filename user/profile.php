<?php
  require '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="../css/styleuser.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Profile</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar">
      <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
      <div class="nav-right">
        <a href="index.html"><i class="fas fa-list"></i> Form Pengajuan</a>
        <a href="profile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Profile User -->
    <div class="wrapper">
      <div class="text">Informasi Profile</div>
      <form action="#">
        <div class="form-row">
          <div class="input-data">
            <input type="text" required disabled  />
            <div class="underline"></div>
            <label for="">Nama Lengkap</label>
          </div>
          <div class="input-data">
            <input type="number" required disabled />
            <div class="underline"></div>
            <label for="">NIK</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" required disabled />
            <div class="underline"></div>
            <label for="">Jenis Kelamin</label>
          </div>
          <div class="input-data">
            <input type="text" required disabled />
            <div class="underline"></div>
            <label for="">Tempat Lahir</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="number" required disabled />
            <div class="underline"></div>
            <label for="">Tanggal Lahir</label>
          </div>
          <div class="input-data">
            <input type="text" required disabled />
            <div class="underline"></div>
            <label for="">Agama</label>
          </div>
        </div>
        <div class="form-row">
          <div class="input-data">
            <input type="text" required disabled />
            <div class="underline"></div>
            <label for="">Pekerjaan</label>
          </div>
          <div class="input-data">
            <textarea type="textarea" required disabled></textarea>
            <br />
            <div class="underline"></div>
            <label for="">Alamat</label>
          </div>
        </div>
        <div>
          <button class="btn-print">Print Surat</button>
        </div>
      </form>
    </div>
  </body>
</html>
