<meta charset="UTF-8">
<?php
include('condb.php');  
$B_id = $_REQUEST["ID"];
$B_ItemID = $_REQUEST["B_ItemID"];
$B_Item_quantity = $_REQUEST["B_Item_quantity"];

$sql = "SELECT * FROM tbl_spare_part
WHERE Item_ID LIKE '%$B_ItemID%' ORDER BY Item_ID ASC  ";
 $result=mysqli_query($con,$sql);
$row_am =  mysqli_fetch_assoc($result);
$var1 = $row_am['Quantity'];

$Quantity = $var1 + $B_Item_quantity;
$sql1 = "UPDATE tbl_spare_part SET  
Quantity='$Quantity'
WHERE Item_ID='$B_ItemID' ";

$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

$sql = "DELETE FROM tbl_borrow_sparepart WHERE B_id ='$B_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 

if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Delete Succesfuly');";
  echo "window.location = 'member_table_approve.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>