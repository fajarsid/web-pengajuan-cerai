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


    $rand1 = rand();
    $rand2 = rand();
    $rand3 = rand();
    $rand4 = rand();
    $rand5 = rand();
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
            $xx = $rand1.'_'.$ktp;
            $xsnikah = $rand2.'_'.$snikah;
            $xkk = $rand3.'_'.$kk;
            $xakte = $rand4.'_'.$akte;
            $xsdesa = $rand5.'_'.$sdesa;
            move_uploaded_file($_FILES['ktp']['tmp_name'], 'img/'.$xx);
            move_uploaded_file($_FILES['snikah']['tmp_name'], 'img/'.$xsnikah);
            move_uploaded_file($_FILES['kk']['tmp_name'], 'img/'.$xkk);
            move_uploaded_file($_FILES['akte']['tmp_name'], 'img/'.$xakte);
            move_uploaded_file($_FILES['sdesa']['tmp_name'], 'img/'.$xsdesa);

            mysqli_query($connect, "INSERT INTO form(nama, nik, jk, tlahir, ttl, agama, pekerjaan, ktp, snikah, kk, akte, sdesa, alamat) 
            VALUES('$nama','$nik','$jk', '$tlahir', '$ttl', '$agama', 
            '$pekerjaan', '$xx', '$xsnikah', '$xkk', '$xakte', '$xsdesa', '$alamat' )");
            // echo (".'$nama'.'$nik'.'$jk'.'$tlahir'.'$ttl'.'$agama'.'$pekerjaan'.'$xx'.'$xsnikah'.'$xkk'.'$xakte'.'$xsdesa'.");
            header("locatin:index.php?alert=berhasil");
        } else {
            echo (".'$nama'.'$nik'.'$jk'.'$tlahir'.'$ttl'.'$agama'.'$pekerjaan'.");
            header("location:index.php?alert=gagal_ukuran");
        }
    }

// }


?>