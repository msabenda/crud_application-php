<?php
session_start();

// maintaing connection with a database
include '../process/connection.php';

if (isset($_SESSION['id'])){

  $id = $_SESSION['id'];

  $sql = "SELECT * FROM users WHERE NOT id=$id";
  $users = mysqli_query($conn, $sql);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
<div class="container">

  <div class="container welcome-container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="welcome-heading mt-3">Welcome <?=$_SESSION['username']?></h1>
                <p class="welcome-text">This is your official account</p>
            </div>
            <div class="text-center">
      
            <a href="../process/logout.php"> 
  <button class="btn btn-primary ">Log out</button>
  
  <a href="profile.php"><button class="btn btn-success ">My Profile</button></a>
  </a>
            </div>
        </div>
    </div>

 

  <table class="table mt-5 shadow-lg p-3 mb-5 bg-body rounded">
  <thead>
    <tr>
      <th scope="col">S/N</th>
      <th scope="col">FullName</th>
      <th scope="col">Username</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $i = 1;
    foreach($users as $user) {
      ?>
       <tr>
      <th scope="row"><?=$i++;?></th>
      <td><?=$user['full_name']?></td>
      <td><?=$user['username']?></td>
      <td><?=$user['phone_number']?></td>
      <td><?=$user['email']?></td>

      <td>
       <a href="editUser.php?id=<?=$user['id']?>"><button type="button" class="btn btn-primary">Edit</button></a> 
       <a href="../process/delete.php?id=<?=$user['id']?>"><button type="button" class="btn btn-danger">Delete</button></a> 
      </td>
      </tr>

      <?php } ?>
   
  </tbody>
</table>
</div>
  
  </body>
  </html>

  <?php } ?>