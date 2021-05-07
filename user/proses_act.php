<?php
    include '../config.php';


// if(isset($_POST['simpandata'])){

  
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $tlahir = $_POST ['tlahir'];
    $ttl = $_POST['ttl'];
    $agama = $_POST['agama'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];


    $rand = rand();
    $ekstensi = array('png', 'jpg','jpeg');
    $ktp = $_FILES['ktp']['name'];
    $snikah = $_FILES['snikah']['name'];
    $kk = $_FILES['kk']['name'];
    $akte = $_FILES['akte']['name'];
    $sdesa = $_FILES['sdesa']['name'];

    $ukuran = $_FILES['ktp']['size'];

    // $ukuran = $_FILES['ktp', 'snikah', 'kk', 'akte', 'sdesa' ]['size'];
    // $ukuran = $_FILES['snikah']['size'];
    // $ukuran = $_FILES['kk']['size'];
    // $ukuran = $_FILES['akte']['size'];
    // $ukuran = $_FILES['sdesa']['size'];
    $ext = pathinfo($ktp, PATHINFO_EXTENSION);

    if(!in_array($ext, $ekstensi)){
        header("location:index.php?alert=gagal_ekstensi");
        
    } else{
        if($ukuran < 1044070){
            $xx = $rand.'_'.$ktp;
            $xsnikah = $rand.'_'.$snikah;
            $xkk = $rand.'_'.$kk;
            $xakte = $rand.'_'.$akte;
            $xsdesa = $rand.'_'.$sdesa;
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'img/'.$rand.'_'.$ktp);
            move_uploaded_file($_FILES['snikah']['tmp_name'], 'img/'.$rand.'_'.$snikah);
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'img/'.$rand.'_'.$kk);
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'img/'.$rand.'_'.$akte);
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'img/'.$rand.'_'.$sdesa);

            mysqli_query($connect, "INSERT INTO form(nama, nik, jk, tlahir, ttl, agama, pekerjaan, ktp, snikah, kk, akte, sdesa, alamat) VALUES('$nama','$nik','$jk', '$tlahir', '$ttl', '$agama', '$pekerjaan', '$xx', '$snikah', '$kk', '$akte', '$sdesa', '$alamat' )");
            echo (".'$nama'.'$nik'.'$jk'.'$tlahir'.'$ttl'.'$agama'.'$pekerjaan'.'$xx'.");
            header("locatin:index.php?alert=berhasil");
        } else {
            echo (".'$nama'.'$nik'.'$jk'.'$tlahir'.'$ttl'.'$agama'.'$pekerjaan'.");
            header("location:index.php?alert=gagal_ukuran");
        }
    }

// }


?>