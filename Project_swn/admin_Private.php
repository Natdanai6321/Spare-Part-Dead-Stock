<?php 
    $user_id = $_SESSION['user_id'];
    $a_name = $_SESSION['a_name'];
    $status = $_SESSION["status"];
    if($status!= 1){
        Header("Location: index.php");  
      } 
   if($user_id==''){
      Header("Location: index.php");  
    } ?>