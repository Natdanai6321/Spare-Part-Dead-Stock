<meta charset="UTF-8">
<?php
include('condb.php');  
  $Item_ID = $_REQUEST["Item_ID"];
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
  
  $sql = "UPDATE tbl_spare_part SET  
      Item_number='$Item_number', 
      Item_name='$Item_name', 
      Item_grop='$Item_grop',
      Packing_grop='$Packing_grop',
      warehouse='$warehouse',
      Quantity='$Quantity',
      Mfg_id='$Mfg_id',
      Status='$Status'
      WHERE Item_ID='$Item_ID' ";
      
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);  

  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update Succesfuly');";
  echo "window.location = 'admin_table_sparepart.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>"; 
  echo "alert('Error back to Update again');";
  echo "window.location = 'admin_form_edit_sparepart.php?act=edit&ID=$Item_ID'; ";   
  echo "</script>";
}
?>