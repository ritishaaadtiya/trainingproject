<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/register.css">
    <title>Register</title>
</head>
<body>   
<form action="../dbdata/formsub.php" method="post">

<div class="container">
<div class = "heading">
<h2>Sign up</h2>
</div>
<label for="name"><b>Full Name</b></label>
<input type="text" placeholder="Enter Your Name" name="name" required>
  <label for="email"><b>Email</b></label>
  <input type="email" placeholder="Enter Username" name="email" required>

  <label for="psw"><b>Password</b></label>
  <input type="text" placeholder="Enter Password" name="psw" required>
  <label for="confirm-psw"><b>Confrim Password</b></label>
  <input type="text" placeholder="Renter Password" name="confrm-psw" required>
  
  <button class="btn" type="submit">Sign up</button>
  <!-- <button class="button" onclick="window.location.href='showdb.php';">Show Data</button> -->
  <p class="pera">Already have an account? <a href="register.php">Sign in</a>.</p>
</div>


</form>
</body>
</html>