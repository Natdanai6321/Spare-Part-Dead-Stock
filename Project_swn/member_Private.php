<?php 
    $user_id = $_SESSION['user_id'];
    $m_nameF = $_SESSION['m_nameF'];
    $m_userID = $_SESSION['m_userID'];
   
    $status = $_SESSION["status"];
    if($status!= 2){
        Header("Location: index.php");  
      } 
   if($user_id==''){
      Header("Location: index.php");  
    } ?>