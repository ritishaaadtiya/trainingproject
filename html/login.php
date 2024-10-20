<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <title>Login Page</title>
</head>
<body>
<?php
include '../dbdata/connectDb.php';
if($_SERVER["REQUEST_METHOD"]=='POST'){
   $email = $_POST['email'];
   $password = $_POST['psw'];
   $query = "SELECT * FROM register WHERE email = '$email' AND password = '$password';";
   $result = mysqli_query($con, $query);
   if(mysqli_num_rows($result)> 0){
    header(header: "location: showdb.php");
  }else{
    echo "Invalid Username or Password";
  }
}


?>

<form action="" method="post">

  <div class="container">
  <div class = "heading">
  <h2>Login</h2>
</div>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>
    <div class = "check-forgot">
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
   <a class="link" href="">forgot password</a>
    </div>
    <button class="btn" onclick="window.location.href='showdb.php'" type="submit">Login</button>
    <!-- <button class="button" onclick="window.location.href='showdb.php';">Show Data</button> -->
    <p class="pera">Already have an account? <a href="register.php">Sign in</a>.</p>
  </div>

 
</form>

</body>
</html>