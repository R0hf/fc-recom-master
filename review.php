<?php 
      include_once("connect/connection.php") ;
    	
     $position = (float)$_POST['position_review'] ;
     $price = (float)$_POST['price_review'] ;
     $quality = (float)$_POST['quality_review'] ;
     $comfort = (float)$_POST['comfort_review'] ;
     $id = (float)$_POST['verify_review'] ;

     $rate = ( $position + $price + $quality + $comfort )/2 ;

     $sql = " INSERT INTO review (reviewID, hotelID, clientID, rPosition, rComfort, rPrice, rQuality, rate) VALUES (NULL,'$id',22,'$position','$comfort','$price','$quality','$rate') " ;
     $res=mysqli_query($connect,$sql );

     $k = mysqli_query($connect, "SELECT * FROM review WHERE (`hotelID` = '$id') ");
     $count=mysqli_num_rows($k);
     $sum = 0 ;

     while ($row = mysqli_fetch_assoc($k)){
     	$sum = $sum + $row['rate'] ;
     }
     $final = $sum / $count ;

     $sql2 = "UPDATE `hotel` SET `rate` = '$final' WHERE `hotel`.`hotelID` = '$id'";
     $res2 = mysqli_query($connect,$sql2 );
     

    
    

?>