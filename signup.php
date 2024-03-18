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
        <h4>Sign Up</h4>
      </div>

      <div class="card-body" >

      <form action="../process/register.php" method="post">
       
      <div class="alert">
<?php
if(isset($_GET['error'])){

  echo "<p> . $_GET[error] . </p>";
}?>
</div>
          <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" class="form-control" id="full_name" placeholder="">
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="">
          </div>
          <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="">
          </div>

        
          <button type="submit" class="btn btn-primary btn-block mt-3" value="Submit" name="submit">Sign Up</button>
        </form>

        <div class="text-center mt-3">
          Already have an account? <a href="login.php" target="_blank">Login here</a>.
        </div>
      </div>
    </div>
  </div>

</div>



  
</body>
</html>