<?php

	include("../connect/connection.php") ;
	
	$HotId = $_POST['variable'];
	$ClId = $_POST['alv'];


	$sql = "INSERT INTO favourite (id_fav, clientID ,hotelID ) VALUES (NULL,'$ClId','$HotId')" ;
     $res=mysqli_query($connect,$sql );

  ?>