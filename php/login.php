<?php
    session_start();

    include("../connect/connection.php") ;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = $_POST['email'] ;
     $pass = $_POST['password'] ;
         $epass = hash("sha512",$pass).md5("test");



     if(!empty($email) && !empty($pass)){  
       $query = mysqli_query($connect,"SELECT * FROM client WHERE  email = '$email' AND password='$epass'");
        $count = mysqli_num_rows($query);
        if($count > 0){
              $_SESSION['email'] = $email ;
              $_SESSION['password'] = base64_decode($epass) ;
              header("Location:../indexP.php") ;

        }else{
            echo "verify your informations";
        }
    }else{
      echo "you should enter your informations";
    }
  }else{
      echo "you cant browse directly" ;
    }


 ?>
