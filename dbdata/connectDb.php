<?php
// Connecting to Databse 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
  echo "Database successfuly connected <br>";
}else{
    echo "Warning !";
}
