<?php
 include 'config.php'; 
 session_start();
 
 $email = $_POST['email']; 
 $password = $_POST['password']; 
 
 $email = mysqli_real_escape_string($db,$email);
 $v = mysqli_query($db,"SELECT * FROM `login` WHERE email='$email'");
 $cek=mysqli_fetch_array($v);
 
 if($v){
  $rows= mysqli_num_rows($v);
 }
 if($rows==1){
  if($cek['level']==1){
   $_SESSION['email']=$email;
   header('location:TEMPLATE.php');
     }else if($cek['level']==0){
   $_SESSION['email']=$email;
   header('location:baru/indexjadi.php');    
  }
 }else{
  header('location:login.php');
 } 
   
?>