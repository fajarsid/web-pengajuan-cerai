<!-- <?php 
  require 'validasi.php';

 
?> -->



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <!-- link tabel -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="../css/styleuser.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Administator</title>
  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar">
      <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
      <div class="nav-right">
        <a href="index.php"><i class="fas fa-list"></i> Data Pemohon</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Tabel Pemhon -->
    <div class="container-tabel">
      <table id="tabel-admin" class="display" style="width: 100%">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>JK</th>
            <th>TTL</th>
            <th>Agama</th>
            <th>Pekerjaan</th>
            <th>KTP</th>
            <th>S Nikah</th>
            <th>KK</th>
            <th>Akte</th>
            <th>SK Desa</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody >
          <?php
            include "../config.php";
            $no=1;
            $ambildata = mysqli_query($connect, "select * from form");
            while ($tampil = mysqli_fetch_array($ambildata)){
              echo "
                <tr>
                  <td>$no</td>
                  <td>$tampil[nama]</td>
                  <td>$tampil[nik]</td>
                  <td>$tampil[jk]</td>
                  <td>$tampil[ttl]</td>
                  <td>$tampil[agama]</td>
                  <td>$tampil[pekerjaan]</td>
                  <td>$tampil[ktp]</td>
                  <td>$tampil[snikah]</td>
                  <td>$tampil[kk]</td>
                  <td>$tampil[akte]</td>
                  <td>$tampil[sdesa]</td>
                  <td>$tampil[alamat]</td>
                </tr>";
              
              $no++;
            }
            ?>
        </tbody>
      </table>
    </div>
    <!-- tabel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#tabel-admin").DataTable();
      });
    </script>
  </body>
</html>
