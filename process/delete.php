<?php 


// Include connection

include 'connection.php';

$user_id = $_GET['id'];

echo 'User id is ' . $user_id;

$sql = "DELETE FROM users WHERE id=$user_id";

// Running a created query

$isDeleted = mysqli_query($conn, $sql);

//Condition to check if is deleted;

if($isDeleted){
  header('location: ../views/home.php?msg=User has successful deleted');
}

else {
  header('location: ../views/home.php?mag=Failed to delete!');
}