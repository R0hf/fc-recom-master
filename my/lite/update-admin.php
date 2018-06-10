<?php
session_start();
if($_GET){
$id = $_GET['id'];
	include_once("../../connect/connection.php");
		$sql = "SELECT * FROM client where clientID=".$id;
			$r=mysqli_query($connect, $sql);
			}
			$directory = "../../img/";

$file = $directory.basename($_FILES["fileto"]["name"]);
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$pathparts = pathinfo($file);
$ext =  $pathparts['extension'];
if($ext == "jpg" || $ext == "png") {
	move_uploaded_file($_FILES["fileto"]["tmp_name"], $file);
		include_once("../connect/connection.php");
		$sql1="SELECT * FROM client WHERE clientID='$id'";
		$i=mysqli_query($connect, $sql1);
		if($row=mysqli_fetch_assoc($i)){
			$imgh=$row["img"];
			if(!unlink($imgh)){
				echo "false";
			}
			 ;
		}
		$sql = "UPDATE client  set name='$name',lastname='$lastname',email='$email',username='$username',password='$password',img='$file' where clientID='$id'";	
		$r=mysqli_query($connect, $sql);
		
			header("location:pages-profile.php");
		}else{
			echo "Your file is not supported";
		  }
		
			?>
