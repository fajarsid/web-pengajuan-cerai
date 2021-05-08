<?php
  include "../config.php";
    $sql  = mysqli_query($connect, "SELECT * FROM form WHERE idform ='$_GET[idform]'");
    $data = mysqli_fetch_array($sql);
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
        <a href="index.php"><i class="fas fa-list"></i> Form Pengajuan</a>
        <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
      </div>
    </div>
    <!-- Akhir Navbar -->
    <!-- Form pengajuan -->
    <div class="container">
      <h3>Form pengajuan permohonan cerai</h3>
      <div class="pengajuan">
        <form action="#" method="post">
          <label for="">Nama Lengkap</label>
          <input type="text" id="namal" name="nama" placeholder="Nama Lengkap"  value="<?php echo $data['nama']; ?>"/>

          <label for="">NIK</label>
          <input type="number" name="nik" placeholder="Masukan NIK" value="<?php echo $data['nik']; ?>"/>

          <label for="jk">Jenis Kelamin</label>
          <select name="jk" value="<?php echo $data['jk']; ?>">
            <option value="<?php echo $data['jk']; ?>"></option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
          </select>

          <label for="">Tempat Lahir</label>
          <input type="text" name="tlahir" placeholder="Tempat Lahir" value="<?php echo $data['tlahir']; ?>"/>

          <label for="">Tanggal Lahir</label>
          <input type="date" name="ttl" value="<?php echo $data['ttl']; ?>" />

          <label for="agama">Agama</label>
          <select name="agama" value="<?php echo $data['agama']; ?>">
            <option value="<?php echo $data['agama']; ?>"></option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Khonghucu</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Protestan">Protestan</option>
            <option value="Khatolik">Khatolik</option>
          </select>

          <label for="">Pekerjaan</label>
          <input type="text" name="pekerjaan" placeholder="Pekerjaan" value="<?php echo $data['pekerjaan']; ?>" />
         
          <label for="">Alamat</label>
          <textarea type="textarea" name="alamat" value="<?php echo $data['alamat']; ?>"> </textarea>

          <input type="submit" value="Simpan" name="tambahdata"/>
        </form>

        <?php
            include "../config.php";

            if(isset($_POST['tambahdata'])){
                mysqli_query($connect, "UPDATE form SET 
                nama = '$_POST[nama]',
                nik = '$_POST[nik]',
                jk = '$_POST[jk]',
                tlahir = '$_POST[tlahir]',
                ttl = '$_POST[ttl]',
                agama = '$_POST[agama]'
                pekerjaan = '$_POST[pekerjaan]'
                alamat = '$_POST[alamat]'
                where idform = '$_GET[idform]'
                ");

                echo 'Permohonan telah diedit';
                echo "<meta http-equiv=refresh content=1;URL='index.php'>";
            }
        ?> 

      </div>
    </div>
  </body>
</html>
