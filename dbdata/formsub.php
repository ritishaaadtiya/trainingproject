<?php
include 'connectDb.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $confirmPsw = $_POST['confrm-psw'];
    $emailExist = "SELECT * FROM register where email = '$email'";
    $result = mysqli_query($con,$emailExist);
    if(mysqli_num_rows($result) == 0 and ($confirmPsw == $password)) {
        $query = "INSERT INTO Register (name,email, password) VALUES ('$name','$email', '$password')";
        mysqli_query($con,$query);
        echo "<h2>Data Saved </h2>";
    }else{
        if($password != $confirmPsw){
            echo "password Should be Matched!";
        }
        else{
            echo "Email already Exist";
        }
    }

}
mysqli_close($con);