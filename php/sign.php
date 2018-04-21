<?php

session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["password"]) && !empty($_SESSION["password"]) ){
header("Location:../index.html");
}else {
$email = $_POST["email"];
$password = $_POST["password"];
if(!empty($email) && !empty($password)){
  $epass = hash("sha512",$password).md5("dzbooking");
  include_once("../connect/connection.php");
  $query = mysqli_query($connect,"SELECT * FROM client WHERE  email = '$email' AND password='$epass'");
  $row = mysqli_num_rows($query);
  if($row > 0){

if(isset($_POST["remember"])){
  $_SESSION["email"] = base64_encode($email);
  $_SESSION["password"] = base64_encode($epass);

}
header("Location:../index.html");
  }else {
    echo "Error wrong email or password";
  }
}else {
  echo "Verify your email or password";
}
}
 ?>


