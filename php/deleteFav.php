<?php

	include("../connect/connection.php") ;
	
	$HotId = $_POST['variable'];
	$ClId = $_POST['alv'];

	$sql = "DELETE FROM favourite WHERE hotelID = '$HotId' AND clientID = '$ClId'" ;
     $res=mysqli_query($connect,$sql );

  ?>