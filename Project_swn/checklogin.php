<?php 
session_start();
        if(isset($_POST['a_user'])){
                  include("condb.php");
                  $_Status_admin = 0;
                  $a_user = $_POST['a_user'];
                  $a_pass = $_POST['a_pass'];

                  $sql="SELECT * FROM tbl_admin_member
                  WHERE  a_user='".$a_user."' 
                  AND  a_pass='".$a_pass."' ";
                  $result = mysqli_query($con,$sql);

                  $sql2="SELECT * FROM tbl_member 
                  WHERE  m_user='".$a_user."' 
                  AND  m_pass='".$a_pass."' ";
                  $result2 = mysqli_query($con,$sql2);
                  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_Status_admin = 1;
                      $_SESSION["user_id"] = $row["a_id"];
                      $_SESSION["a_name"] = $row["a_name"];
                      $_SESSION["status"] = $_Status_admin;
                      
                      if($_SESSION["user_id"]!=''){ 
                        Header("Location: admin_Page.php");
                      }

                }elseif(mysqli_num_rows($result2)==1){
                  $row = mysqli_fetch_array($result2);
                  $_Status_admin = 2;
                  $_SESSION["user_id"] = $row["member_id"];
                  $_SESSION["m_nameF"] = $row["m_nameF"];
                  $_SESSION["m_userID"] = $row["m_userID"];
                  $_SESSION["status"] = $_Status_admin;
                  if($_SESSION["user_id"]!=''){ 

                    Header("Location: member_Page.php");
                  }
                  
                }
                
                else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }}else{

             Header("Location: swn_login_form.php"); //user & password incorrect back to login again
 
        }
?>