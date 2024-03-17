<?php

include 'connection.php';

if(isset($_POST['submit'])){

  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  if(!$full_name){
    header('location:../views/signup.php?error=Fullname is required');
    exit();
  }
  else if (!$username){
    header('location:../views/signup.php?error=Username is required');
    exit();
  }
  else if(!$phone_number){
    header('location:../views/signup.php?error=Phonenumber is required');
    exit();
  }
  else if(!$email){
    header('location:../views/signup.php?error=Email is required');
    exit();
  }



  else {


    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
      header('location:../views/signup.php?error=Your email "' . $email.'" has already registered!');
      exit();
    }
    else {

      $hashed_password = md5($password);

      $sql = "INSERT INTO users(full_name,username,phone_number,email,password)
      VALUES('$full_name', '$username', '$phone_number', '$email', '$hashed_password')";

      $result = mysqli_query($conn,$sql);


      if($result){
        header('location:../views/login.php');
        exit();
      }
      else {
        header('location:../views/signup.php?error=Something went wrong!');
        exit();
      }

    }
  }
}

else {
  header('location:../views/signup.php?error=Unknown error occured');
  exit();
}




