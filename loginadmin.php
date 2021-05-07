<?php 
    require 'config.php';
    

      // cek login
      if(isset($_POST['login_admin'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
  
          // mencocokan database ada atau engga
          $cekdatabase = mysqli_query($connect, "SELECT * FROM admin where email ='$email' and password='$password'");
  
          // hitung jumlah data
          $hitung = mysqli_num_rows($cekdatabase);
  
          if($hitung > 0){
              $_SESSION['log'] = 'True';
              header('location:admin/index.php');
          } else {
              header('location:loginadmin.php');
          }
      }
  
  
  if(!isset($_SESSION['log'])){
  
  } else{
      header('location:admin/index.php');
  }
 
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale:1.0" />
    <title>Login Admin</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main">
      <div class="card">
        <div class="card-title">
          <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> Admin <span id="action_title">Masuk</span></h3>
        </div>
        <div class="card-body">
          <div class="card-body-login">
            <form id="login-form" method="post">
              <input class="input-form" type="email" placeholder="Masukan Email" required name="email"/><br /><br />
              <input class="input-form" type="password" placeholder="Masukan Password" required name="password"/><br /><br /><br />
              <input class="submit-form" type="submit" value="Login" name="login_admin"/>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </body>
</html>
