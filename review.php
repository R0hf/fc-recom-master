<?php 
      include_once("connect/connection.php")
    	
      $room_type_review = $_POST["room_type_review"]; 
      $sql2 = mysqli_query($connect, "select * from roomtypes where `roomType` =".$room_type_review);
                    $r = mysqli_fetch_assoc($sql2);
      $date = $_POST["date"]; 
	    $contenu = $_POST["contenu"];

       //$sql = "INSERT INTO actuallite (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')";
      $ra=mysqli_query($con,"INSERT INTO rate (id,titre,date,contenu) VALUES (NULL,'$titre','$date','$contenu')");
      echo $titre."</br>";
      echo $date."</br>";
      echo $contenu;
    


?>