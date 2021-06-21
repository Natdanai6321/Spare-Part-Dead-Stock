<meta charset="UTF-8">
<?php
include('condb.php');  
$B_id = $_REQUEST["B_id"];
$B_Item_quantity = $_REQUEST["B_Item_quantity"];
$B_ItemID = $_REQUEST["B_ItemID"];
$B_Status = 'Finish';
$time_1 = date("Y-m-d");

$sql = "SELECT * FROM tbl_spare_part
WHERE Item_ID LIKE '%$B_ItemID%' ORDER BY Item_ID ASC ";
$result=mysqli_query($con,$sql);
$row_am =  mysqli_fetch_assoc($result);

$Quantity = $row_am['Quantity'];
$Quantity = $Quantity + $B_Item_quantity;

$sql2 = "UPDATE tbl_spare_part SET  
Quantity='$Quantity'
WHERE Item_ID='$B_ItemID' ";

$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());


$sql1 = "UPDATE tbl_borrow_sparepart SET  
B_Status='$B_Status',
date_return_True ='$time_1'
WHERE B_id='$B_id' ";

$result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());
mysqli_close($con);  

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('คืนสำเร็จแล้ว');";
    echo "window.location = 'admin_table_sparepart_Borrowing.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }