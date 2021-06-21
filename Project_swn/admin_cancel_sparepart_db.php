<meta charset="UTF-8">
<?php
include('condb.php');  
$B_id = $_REQUEST["ID"];
$sql = "SELECT * FROM tbl_borrow_sparepart
WHERE B_id LIKE '%$B_id%' ORDER BY B_id ASC ";
$result=mysqli_query($con,$sql);
$row_am =  mysqli_fetch_assoc($result);

$B_ItemID = $row_am['B_ItemID'];
$B_Item_quantity = $row_am['B_Item_quantity'];

$sql1 = "SELECT * FROM tbl_spare_part
WHERE Item_ID LIKE '%$B_ItemID%' ORDER BY Item_ID ASC ";
$result1=mysqli_query($con,$sql1);
$row_am1 =  mysqli_fetch_assoc($result1);

$Quantity = $row_am1['Quantity'];
$Quantity = $Quantity + $B_Item_quantity;

$sql2 = "UPDATE tbl_spare_part SET  
Quantity='$Quantity'
WHERE Item_ID='$B_ItemID' ";

$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

$sql3 = "DELETE FROM tbl_borrow_sparepart WHERE B_id ='$B_id' ";
$result3 = mysqli_query($con, $sql3) or die ("Error in query: $sql3 " . mysqli_error()); 
mysqli_close($con);  

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Cnacel Succesfuly');";
    echo "window.location = 'admin_table_sparepart_request.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }