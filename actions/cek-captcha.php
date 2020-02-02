<?php
  session_start();
  include"koneksi.php";
  
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  
  $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";

  $data = mysqli_query($conn,$sql);

  // menghitung jumlah data yang ditemukan
  $cek = mysqli_num_rows($data);

  if($_SESSION["Captcha"]!=$_POST["isValueCaptcha"]){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('NOT MATCH!!');
    window.location.href='../../binus-tp2';
    </script>");

  }
  else{		
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login gagal');
    window.location.href='../../binus-tp2';
    </script>");
  }
?>