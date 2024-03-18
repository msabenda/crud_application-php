<?php

session_start();
include 'connection.php';

if(isset($_POST['edit'])){

  $full_name = $_POST['full_name'];
  $username = $_POST['username'];
  $phone_number = $_POST['phone_number'];
  $email = $_POST['email'];
  $id = $_POST['user_id'];


  if(!$full_name){
    header('location:../views/editUser.php?id='.$id.'&error=Fullname is required');
    exit();
  }
  else if (!$username){
    header('location:../views/editUser.php?id='.$id.'&error=username is required');
        exit();
  }
  else if(!$phone_number){
    header('location:../views/editUser.php?id='.$id.'&error=phonenumber is required');
    exit();
  }
  else if(!$email){
    header('location:../views/editUser.php?id='.$id.'&error=email is required');
    exit();
  }



  else {


      $sql = "UPDATE users SET full_name='$full_name', username = '$username', phone_number='$phone_number', email='$email' WHERE id = $id";

      $result = mysqli_query($conn,$sql);


      if($result){
       echo "Edited successful !!";
      }
      else {
        echo "Fail to edit !";
       
      }

    }
  }

else {
  header('location:../views/signup.php?error=Unknown error occured');
  exit();
}




