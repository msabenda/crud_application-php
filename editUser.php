<?php

session_start();
include '../process/connection.php';

// to take id in the url your using superglobal GET

$id = $_GET['id'];

// Create a query ambayo itachukua information kutoka kwenye database

$sql = "SELECT * FROM users WHERE id=$id";

$selected = mysqli_query($conn, $sql);

// Associative Array
$user = mysqli_fetch_assoc($selected);


// How to print array
// print_r($user);
// if(mysqli_num_rows($selected) >0) {

// }





?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up | Form</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<div class="container">

    <div class="card shadow-lg p-3 mb-5 bg-body rounded">
      <div class="card-header bg-primary text-white">
        <h4>Edit User</h4>
      </div>

      <div class="card-body" >

      <form action="../process/edit.php" method="post">
       
      <div class="alert">
<?php
if(isset($_GET['error'])){

  echo "<p> . $_GET[error] . </p>";
}?>
</div>
          <div class="form-group pb-3">
            <label for="full_name">Full Name:</label>
            <!-- //putting value attribute -->
            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="" value="<?=$user['full_name']?>">
          </div>
          <div class="form-group pb-3">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="" value="<?=$user['username']?>">
          </div>
          <div class="form-group pb-3">
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="" value="<?=$user['phone_number']?>">
          </div>
          <div class="form-group pb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="" value="<?=$user['email']?>">
          </div>
          <!-- <div class="form-group"> -->
            <!-- <label for="password">Password:</label> -->
            <!-- <button class="btn btn-primary"  >Change Password</button> -->
            <!-- <input type="password" name="password" class="form-control" id="password" placeholder="" value="<?=$user['password']?>"> -->
          </div>

     <!-- Hidden inabeba value bila kupitisha kwenye url -->
     <input type="hidden" name="user_id" value="<?=$user['id']?>">
          <button type="submit" class="btn btn-primary btn-block mt-3" value="Update" name="edit">Update</button>
        </form>

        <!-- <div class="text-center mt-3">
          Already have an account? <a href="login.php" target="_blank">Login here</a>. -->
        </div>
      </div>
    </div>
  </div>

</div>



  
</body>
</html>