<?php
session_start();
if(isset($_SESSION["email"]) && !empty($_SESSION["email"]) && isset($_SESSION["pass"]) && !empty($_SESSION["pass"]) ){

header("Location:../indexP.php");
}else {
$email = $_POST["email"];
$pass = $_POST["password"];
if(!empty($email) && !empty($pass)){
   //$epass = hash("sha512",$pass).md5("univ_bba");
  include_once("../connect/connection.php");
  $query = mysqli_query($connect,"SELECT * FROM client WHERE  email = '$email' AND password='$pass'");
  $row = mysqli_num_rows($query);
  if($row > 0){
  if(isset($_POST["remember"])){
  $_SESSION["email"] = base64_encode($email);
  $_SESSION["pass"] = base64_encode($pass);

}
header("Location:../indexP.php");
  }else {
    echo "Error wrong email or password";
    header("Location:../index.html");
  }
}else {
  echo "Verify your email or password";
  header("Location:../index.html");
}
}
 ?>
