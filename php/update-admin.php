<?php
if($_GET){
$id = $_GET['id'];
	include_once("../connect/connection.php");
		$sql = "SELECT * FROM admin where id=".$id;
			$r=mysqli_query($connect, $sql);
			}

$username=$_POST['username'];
$passwordOld=$_POST['password1'];
$passwordNew=$_POST['password2'];
		$sql = "UPDATE admin  set username='$username',password='$passwordNew' where (id='$id' & $password.id=$passwordOld) ";	
		$r=mysqli_query($connect, $sql);
		
			header("location:../admin/pages/forms.php");
		}else{
			echo "error password old";
		  }
?>