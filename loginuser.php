<?php 
    require 'config.php';
    

      // cek login
      if(isset($_POST['login_user'])){
          $email = $_POST['email'];
          $password = $_POST['password'];
  
          // mencocokan database ada atau engga
          $cekdatabase = mysqli_query($connect, "SELECT * FROM user where email ='$email' and password='$password'");
  
          // hitung jumlah data
          $hitung = mysqli_num_rows($cekdatabase);
  
          if($hitung > 0){
              $_SESSION['log'] = 'True';
              header('location:user/index.php');
          } else {
              header('location:loginuser.php');
          }
      }
  
  
  if(!isset($_SESSION['log'])){
  
  } else{
      header('location:user/index.php');
  }
 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale:1.0" />
    <title>Form Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="main">
      <div class="card">
        <div class="card-title">
          <h3><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Masuk</span></h3>
        </div>
        <div class="card-body">
          <div class="card-body-top">
            <button id="login" class="btn" name="login" onclick="login()">Masuk</button>
            <button id="register" class="btn" name="register" onclick="register()">Daftar</button>
            <div id="pointer-btn"></div>
          </div>
          <div class="card-body-login">
          
          <!-- Login  -->
            <form id="login-form" method="post">
              <input class="input-form" type="email" placeholder="Masukan Email" required name="email" /><br /><br />
              <input class="input-form" type="password" placeholder="Masukan Password" required name="password" /><br /><br /><br />
              <input class="submit-form" type="submit" value="Login" name="login_user"/>
            </form>

          <!-- Daftar -->
            <form id="register-form" method="post" action="loginuser.php">
              <input class="input-form" type="nama" placeholder="Username" name="username" required /><br /><br />
              <input class="input-form" type="email" placeholder="Email" name="email" required /><br /><br />
              <input class="input-form" type="password" placeholder="Password" name="password" required /><br /><br />
              <!-- <input class="input-form" type="password" placeholder="Confrim Password" name="password2"  required /><br /><br /> -->
              <input class="submit-form" type="submit" value="Daftar" name="daftaruser"/>
            </form>
          </div>
        </div>
        <form>
          <div class="admin">
            <p>Masuk sebagai <a href="loginadmin.php">Admin</a></p>
          </div>
        </form>
      </div>
    </div>

    <script>
      var x = document.getElementById("login-form");
      var y = document.getElementById("register-form");
      var z = document.getElementById("pointer-btn");
      var l = document.getElementById("login");
      var r = document.getElementById("register");
      var ac = document.getElementById("action_title");

      function register() {
        x.style.left = "-450px";
        y.style.left = "25px";
        z.style.left = "215px";
        l.style.color = "#848484";
        r.style.color = "darksalmon";
        ac.textContent = "Register";
      }

      function login() {
        x.style.left = "25px";
        y.style.left = "450px";
        z.style.left = "30px";
        l.style.color = "darksalmon";
        r.style.color = "#848484";
        ac.textContent = "Login";
      }
    </script>
  </body>
</html>
