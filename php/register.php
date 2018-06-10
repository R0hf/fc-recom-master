<?php
	
	include_once("../connect/connection.php");
	if($connect){
		echo "string";
 	$name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $pass=$_POST["password"];
    // $epass = hash("sha512",$pass).md5("test");
    $ra=mysqli_query($connect,"INSERT INTO client (clientID ,name , lastname , email , username , password , img ) VALUES(NULL,'$name','$lastname','$email','$username','$pass','')");
    
    header("location:../my/lite/index.html");
    }   	
?>