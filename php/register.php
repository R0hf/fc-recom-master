<?php
	
	include_once("../connect/connection.php");
	if($connect){
		echo "string";
	
   	$name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $ra=mysqli_query($connect,"INSERT INTO client (id,name,lastname,email,username,password) VALUES (NULL,'$name','$lastname','$email','$username','$password')");
    }
   	
?>