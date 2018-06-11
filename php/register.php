<?php
	session_start();
	include_once("../connect/connection.php");
if($connect){
		
 	$name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $pass=$_POST["password"];
    $epass = hash("sha512",$pass).md5("test");
    $sql3 = "SELECT * FROM client WHERE email= \"".$email."\" ";
    $re=mysqli_query($connect,$sql3);
    if (mysqli_num_rows($re)==0) {//tester lakyn email kifo
        include_once("../connect/connection.php");
            $ra=mysqli_query($connect,"INSERT INTO client (clientID,name,lastname,email,username,password,img) VALUES(NULL,'$name','$lastname','$email','$username','$epass','eeee')");
               if ($ra){
                $ep=base64_decode($epass);
              $sql1 = "SELECT * FROM client WHERE email=\"".$email."\" ";
              $result = mysqli_query($connect, $sql1);
              $row=mysqli_fetch_assoc($result);
              $_SESSION['id']=$row['clientID'];
              $_SESSION['email']=$row['email'];
                 header("location:../my/lite/index.php");
              // echo $_SESSION['email'];
            }   	
            else{header("location:../indexP.php");}
    }
    else{
        //si il trouve email simlaire
        header("location:../indexP.php");}
}
?>