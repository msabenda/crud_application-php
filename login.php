<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Form</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<link rel="stylesheet" href="../css/style.css">

</head>
<body>

<div class="container">
<div class="login-container shadow-lg p-3 mb-5 bg-body rounded">
  <div class="heading">
  <h2>Login</h2>
  </div>
    
    <form action="../process/login.php" method="post">

    <div class="alert">
<?php
if(isset($_GET['error'])){

  echo "<p> . $_GET[error] . </p>";
}?>
</div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control mb-3" id="email"  placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control mb-3" id="password" placeholder="Password">
        </div>

        <div class="forgot_password">
        <a href="">Forgot Password?</a>
        </div>
      
        <button type="submit" name="submit" class="btn btn-primary btn-login btn-block mt-3 mb-3">Login</button>
        <p>Don't have account? <a href="signup.php">Sign Up</a></p>

    </form>
</div>

</div>
</body>
</html>
