<?php
include('condb.php');  

  $Item_number = $_REQUEST["Item_number"];
  $Item_name = $_REQUEST["Item_name"];
  $Item_grop = $_REQUEST["Item_grop"];
  $Packing_grop = $_REQUEST["Packing_grop"];
  $warehouse = $_REQUEST["warehouse"];
  $Quantity = $_REQUEST["Quantity"];
  $Mfg_id = $_REQUEST["Mfg_id"];

  if($Quantity < 1){
    $Status = 'Busy';
  }
  else{
    $Status = 'Available';
  }
 
  $sql = "INSERT INTO tbl_spare_part(Item_number, Item_name, Item_grop, Packing_grop, warehouse,Quantity,Mfg_id,Status)
       VALUES('$Item_number', '$Item_name', '$Item_grop', '$Packing_grop', '$warehouse', '$Quantity','$Mfg_id','$Status')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);
  
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'admin_table_sparepart.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "window.location = 'admin_form_add_sparepart.php; "; 
  echo "</script>";
}
?>