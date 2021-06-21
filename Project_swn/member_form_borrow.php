<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_member.php');?>
    
    <body class="sb-nav-fixed">
    <?php include('condb.php'); 
    include('member_Private.php');
    $Item_ID = $_REQUEST["ID"];
    $sql = "SELECT * FROM tbl_spare_part WHERE Item_ID='$Item_ID' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
  ?>
  
  <?php include('nav_member.php');?>
    
 

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
<form  name="sparepart" action="member_form_borrow_db.php" method="POST" id="member" class="form-horizontal">
<input type="hidden" name="Item_ID" value="<?php echo $Item_ID; ?>">  
<input type="hidden" name="m_userID" value="<?php echo $m_userID; ?>"> 
<input type="hidden" name="m_nameF" value="<?php echo $m_nameF;?>">   
<input type="hidden" name="Quantity" value="<?php echo $Quantity;?>"> 
<input type="hidden" name="Item_number" value="<?php echo $Item_number;?>">     
<input type="hidden" name="Item_name" value="<?php echo $Item_name;?>">  
<input type="hidden" name="Mfg_id" value="<?php echo $Mfg_id;?>">  
 
                                <div class="container">
                                <label for="colFormLabelSm" class="col-sm-5 col-form-label "><h3>รายการยืม</h3></label>
                                <table class="table">
  <thead class="bg-warning">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Item number</th>
      <th scope="col">Item name</th>
      <th scope="col">MFG</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">1</th>
      <td><?=$Item_number;?></td>
      <td><?=$Item_name;?></td>
      <td><?=$Mfg_id;?></td>
      <td> <input name="Quantity2" type="text" required class="form-control2" id="Quantity2"  value="<?=$Quantity;?>"  placeholder="Quantity"></td>
    </tr>
  </tbody>
</table>

  
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label "><h5>วันที่ยืม</h5></label>
    <div class="col-sm-3 ">
    <div class="input-group-prepend">
          <div name="date_borrow" class="input-group-text" id="date_borrow"><?php echo date("d/m/Y");?></div>
        </div>    
    </div> 
</div>
<br>
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label "><h5>วันที่คืน</h5></label>
    <div class="col-sm-3">
    <input type="date" id="date_return" name="date_return" value="<?php echo date("Y-m-d");?>">
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">ยืนยันการยืม</button>

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
