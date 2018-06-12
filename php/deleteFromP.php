<?php
	session_start();
	include("../connect/connection.php") ;
	
	$HotId = $_GET['id'];
	$ClId = $_SESSION['id'];

	$sql = "DELETE FROM favourite WHERE hotelID = '$HotId' AND clientID = '$ClId'" ;
     $res=mysqli_query($connect,$sql );

     header("location:../my/lite/table-basic.php") ;

  ?>