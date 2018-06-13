<?php 
 session_start();

    include("../../connect/connection.php") ;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = $_POST['email'] ;
     $pass = $_POST['password'] ;
         
     if(!empty($email) && !empty($pass)){  
       $query = mysqli_query($connect,"SELECT * FROM admin WHERE  email = '$email' AND password='$pass'");
       $row = mysqli_fetch_assoc($query) ;
        $count = mysqli_num_rows($query);
        if($count > 0){
              $_SESSION['username'] = $row['username'] ; 
             header("Location:dash.php") ;

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