<meta charset="UTF-8">
<?php
include('condb.php');  
$B_id = $_REQUEST["ID"];
$B_Status = 'Yes';
  
$sql = "UPDATE tbl_borrow_sparepart SET B_Status='$B_Status' WHERE B_id='$B_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);  

if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update Succesfuly');";
  echo "window.location = 'admin_table_sparepart_request.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>"; 
  echo "alert('Error back to Update again');";
  echo "window.location = 'admin_table_sparepart_request.php'; ";   
  echo "</script>";
}


?>
