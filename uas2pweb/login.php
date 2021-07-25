<?php
require 'function.php';

//cek Login, terdaftar apa kagak
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //cocokin dengan database, cari.. ada atau engga tuh data
    $cekdatabase = mysqli_query($conn,"SELECT * FROM login where email='$email' and password='$password'");
    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])){

} else {
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="email" type="email" placeholder="Email">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input name="password" type="password" placeholder="Password">
          </div>
          <div class="row button">
            <input name="login" type="submit" value="Login">
          </div>
          
        </form>
      </div>
    </div>
  </body>
</html>
