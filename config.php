<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 


// konek ke database
$connect = mysqli_connect("localhost","root","","dbcerai" );
//   if($connect){
//         echo 'Berhasil';
//     }



// Daftar Users
if(isset($_POST['daftaruser'])){

    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query_sql = "INSERT INTO user(username, email, password) VALUES ('$username', '$email', '$password')";
    if(mysqli_query($connect, $query_sql)){
        echo "<h3> Username $username berhasil terdaftar !<h3>";
    } else{
        echo "Pendaftaran Gagal : " . mysqli_error($connect);
    }

}


?>