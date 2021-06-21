<meta charset="UTF-8">
<?php
include('condb.php');  
$m_userID = $_REQUEST["m_userID"];
$m_nameF = $_REQUEST['m_nameF'];
$Item_ID = $_REQUEST["Item_ID"];
$Quantity = $_REQUEST["Quantity"];
$Quantity_edit = $_REQUEST["Quantity2"];
$Mfg_id = $_REQUEST["Mfg_id"];
$time_1 = date("Y-m-d");
$time_2 = $_REQUEST["date_return"];
$B_Status_call = 'No';
$Item_number = $_REQUEST["Item_number"];
$Item_name = $_REQUEST["Item_name"];
$Quantity = $Quantity - $Quantity_edit;

if($Quantity < 0){
    echo "<script type='text/javascript'>";
    echo "alert('Quantity ไม่พอต่อความต้องการ');";
    echo "window.location = 'member_form_borrow.php?act=edit&ID=$Item_ID'; ";
    echo "</script>";
}
else{
      $sql = "UPDATE tbl_spare_part SET  
      Quantity='$Quantity'
      WHERE Item_ID='$Item_ID' ";
      $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 

    $sql2 = "INSERT INTO tbl_borrow_sparepart(B_ItemID,B_user, B_userID, B_Item_number, B_Item_name,B_Mfg, B_Item_quantity,B_Status,date_borrow,date_return)
    VALUES('$Item_ID','$m_nameF', '$m_userID', '$Item_number', '$Item_name','$Mfg_id', '$Quantity_edit', '$B_Status_call','$time_1','$time_2')";
    $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());
    mysqli_close($con);
}
if($result2){
    echo "<script type='text/javascript'>";
    echo "alert('Borrow Succesfuly');";
    echo "window.location = 'member_table_approve.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Borrow again');";
    echo "window.location = 'member_form_borrow.php?act=edit&ID=$Item_ID'; "; 
    echo "</script>";
  }

?>