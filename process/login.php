<?php

session_start();
include 'connection.php';

if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];


  if(!$email){
    header('location:../views/login.php?error=Email is required');
    exit();
  }
  else if(!$password){
    header('location:../views/login.php?error=Password is required');
    exit();
  }
  else {


    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
      $user = mysqli_fetch_assoc($result);
      $hashed_password = md5($password);


      if($hashed_password != $user['password']){
        header('location:../views/login.php?error=Incorrect password');
        exit();
      }
      else {

        $_SESSION['id'] = $user['id'];
        $_SESSION['full_name'] = $user['full_name'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['phone_number'] = $user['phone_number'];
        $_SESSION['email'] = $user['email'];
      
        header('location:../views/home.php?id='.$_SESSION['id']);
      }


    } else {
      header('location:../views/login.php?error=Email "'. $email.'" has not yet registered, Please do Register');
      exit();
    }
  }
}