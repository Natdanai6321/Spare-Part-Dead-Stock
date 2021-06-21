<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php'); ?>
    
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');
    $Item_ID = $_REQUEST["ID"];
    $sql = "SELECT * FROM tbl_spare_part WHERE Item_ID='$Item_ID' ";
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
                                Sparepart Edit 
                            </div>
                            <div class="card-body">
<form  name="sparepart" action="admin_form_edit_sparepart_db.php" method="POST" id="member" class="form-horizontal">

<input type="hidden" name="Item_ID" value="<?php echo $Item_ID; ?>">  
  
 

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Item number</label>
    <div class="col-sm-10">
    <input name="Item_number" type="text" required class="form-control " id="Item_number" value="<?=$Item_number;?>"  placeholder="Item number">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Item name</label>
    <div class="col-sm-10">
    <input name="Item_name" type="text" required class="form-control" id="Item_name"   value="<?=$Item_name;?>" placeholder="Item name" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Item grop</label>
    <div class="col-sm-10">
    <input name="Item_grop" type="text" required class="form-control" id="Item_grop"  value="<?=$Item_grop;?>"  placeholder="Item Grop" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Packing grop</label>
    <div class="col-sm-10">
    <input name="Packing_grop" type="text" required class="form-control" id="Packing_grop"  value="<?=$Packing_grop;?>"  placeholder="Packing grop" >
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Warehouse</label>
    <div class="col-sm-10">
    <input name="warehouse" type="text" required class="form-control" id="warehouse"  value="<?=$warehouse;?>"  placeholder="Warehouse">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Quantity</label>
    <div class="col-sm-10">
    <input name="Quantity" type="text" required class="form-control" id="Quantity"  value="<?=$Quantity;?>"  placeholder="Quantity">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Mfg id</label>
    <div class="col-sm-10">
    <input name="Mfg_id" type="text" required class="form-control" id="Mfg_id"  value="<?=$Mfg_id;?>"  placeholder="Mfg id">
    </div>
  </div>
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
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
