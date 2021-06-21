<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php');?>
    
    <body class="sb-nav-fixed">
    <?php include('condb.php'); 
    include('admin_Private.php');
    $B_id = $_REQUEST["ID"];
    $sql = "SELECT * FROM tbl_borrow_sparepart WHERE B_id='$B_id' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
  ?>
  
  <?php include('nav_admin.php');?>
    
 

    <div id="layoutSidenav_content">
                <main>
                    <br>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Sparepart Borrow 
                            </div>
                            <div class="card-body">
<form  name="sparepart" action="admin_Finished_sparepart_db.php" method="POST" id="member" class="form-horizontal">
<input type="hidden" name="B_Item_quantity" value="<?php echo $B_Item_quantity;?>">  
<input type="hidden" name="B_id" value="<?php echo $B_id;?>"> 
<input type="hidden" name="B_ItemID" value="<?php echo $B_ItemID;?>">  
                                <div class="container">
                                <label for="colFormLabelSm" class="col-sm-5 col-form-label "><h3>รายการคืน</h3></label>
                                <table class="table">
  <thead class="bg-warning">
    <tr>
      
      <th scope="col">Username</th>
      <th scope="col">Personal ID</th>
      <th scope="col">Item number</th>
      <th scope="col">Item name</th>
      <th scope="col">MFG</th>
      <th scope="col">Quantity</th>
      <th scope="col">Quantity After</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <td><?=$B_user;?></td>
      <td><?=$B_userID;?></td>
      <td><?=$B_Item_number;?></td>
      <td><?=$B_Item_name;?></td>
      <td><?=$B_Mfg;?></td>
      <td> 
      <div class="input-group-prepend">
          <div name="date_borrow" class="input-group-text" id="date_borrow"><?=$B_Item_quantity;?></div>
        </div>    
    </div> </td>
    <td> <input name="Quantity2" type="text" required class="form-control2" id="Quantity2"  value="<?=$B_Item_quantity;?>"  placeholder="Quantity"></td>
    </tr>
  </tbody>
</table>

  <br>
  <button type="submit" class="btn btn-primary">ยืนยันการคืน</button>

</form>
</div>
                            </div>
                        </div>
                    </div>
                </main>
              <?php include('footer.php');?>
            </div>
        </div>
    <?php include('scripts.php');?>
    </body>
</html>
