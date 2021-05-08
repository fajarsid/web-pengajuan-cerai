<?php 
  require '../config.php';
  require '../validasi.php';

 
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
    <title>Dashboard</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar">
      <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
      <div class="nav-right">
        <a href="index.php"><i class="fas fa-list"></i> Data Pemohon</a>
        <a href="tambah_data.php"><i class="fa fa-fw fa-user"></i> Tambah Pemohon</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <!-- Akhir Navbar -->
    <!-- Form pengajuan -->
    <div class="container">
      <h3>Form pengajuan permohonan cerai</h3>
      <div class="pengajuan">
        <form action="proses_act.php" method="post" enctype="multipart/form-data">
          <label for="">Nama Lengkap</label>
          <input type="text" id="namal" name="nama" placeholder="Nama Lengkap" />

          <label for="">NIK</label>
          <input type="number" name="nik" placeholder="Masukan NIK" />

          <label for="jk">Jenis Kelamin</label>
          <select name="jk">
            <option value="...">...</option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>

          <label for="">Tempat Lahir</label>
          <input type="text" name="tlahir" placeholder="Tempat Lahir" />

          <label for="">Tanggal Lahir</label>
          <input type="date" name="ttl" />

          <label for="agama">Agama</label>
          <select name="agama">
            <option value="Islam">...</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Khonghucu</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Protestan">Protestan</option>
            <option value="Khatolik">Khatolik</option>
          </select>

          <label for="">Pekerjaan</label>
          <input type="text" name="pekerjaan" placeholder="Pekerjaan" />
          <br> <br>

          <!-- Alert file -->
          <?php
            if(isset($_GET['alert'])){
              if($_GET['alert']=="gagal_ukuran"){
                ?>
                <div class="alert alert-warning">
                  <strong>Warning!</strong> Ukuran File Terlalu Besar
                </div>
                <?php
              }elseif ($_GET['alert']=="gagal_ekstensi") {
                ?>
                <div class="alert alert-warning">
                  <strong>Warning!</strong> Ekstensi Gambar Tidak Diperbolehkan
                </div>
                <?php
              }elseif ($_GET['alert']=="berhasil") {
                ?>
                <div class="alert alert-success">
                  <strong>Success!</strong> Gambar Berhasil Disimpan
                </div>
                <?php
              }				
            }
		      ?>
          <!-- Form upload gambar -->
          <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg</p>
          <label for="">Kartu Tanda Penduduk</label>
          <input type="file" name="ktp" required="required"/>

          <label for="">Surat Nikah</label>
          <input type="file" name="snikah" required="required"/>

          <label for="">Kartu Keluarga</label>
          <input type="file" name="kk" required="required"/>

          <label for="">Akte Kelahiran Anak (opsional)</label>
          <input type="file" name="akte" required="required" />

          <label for="">Surat Keterangan Desa</label>
          <input type="file" name="sdesa" required="required"/>

          <label for="">Alamat</label>
          <textarea type="textarea" name="alamat"> </textarea>

          <input type="submit" value="Simpan" name="simpandata"/>
        </form>
      </div>
    </div>
  </body>
</html>
