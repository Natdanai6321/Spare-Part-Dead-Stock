<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php'); ?>
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');
  ?>
  <?php

  $sql = "SELECT * FROM tbl_borrow_sparepart
  WHERE B_Status LIKE'%No%' ORDER BY B_id ASC  ";
   $result=mysqli_query($con,$sql);
   $row_am =  mysqli_fetch_assoc($result);
   $count = mysqli_num_rows($result);
   if($row_am['B_id'] == ''){$check = '';}
   else{$check =$row_am['B_id'];}
   
   ?>
  <?php include('nav_admin.php');?>


    <div id="layoutSidenav_content">
                <main>
                    <br>
                    <div class="container-fluid px-4">
                      <div class="card mb-4">
                          <div class="card-header">
                              <i class="fas fa-table me-1"></i>
                              Sparepart 
                          </div>
                          <div class="card-body">
                        
                          <table id="datatablesSimple">
    <thead>
        <tr>
            <th>Personal ID</th>
            <th>Name</th>
            <th>Item number</th>
            <th>Item name</th>
            <th>MFG</th>
            <th>Quantity</th>
            <th>Date borrow</th>
            <th>Date return</th>
            <th>Status</th>
            <th>Accept</th>
        </tr>
    </thead>
    <tfoot>
            <tr>
            <th>Personal ID</th>
            <th>Name</th>
            <th>Item number</th>
            <th>Item name</th>
            <th>MFG</th>
            <th>Quantity</th>
            <th>Date borrow</th>
            <th>Date return</th>
            <th>Status</th>
            <th>Accept</th>
            </tr>
    </tfoot>
    <tbody>
  <?php if($check != ''){?>
    <?php do { ?>
    <tr>   
            <td><?php echo $row_am['B_userID']; ?></td>
            <td ><?php echo $row_am['B_user']; ?></td>
            <td><?php echo $row_am['B_Item_number']; ?></td>
            <td ><?php echo $row_am['B_Item_name']; ?></td>
            <td ><?php echo $row_am['B_Mfg']; ?></td>
            <td ><?php echo $row_am['B_Item_quantity']; ?></td>
            <td ><?php echo $row_am['date_borrow']; ?></td>
            <td ><?php echo $row_am['date_return']; ?></td> 
            <td ><div class=" alert-danger" role="alert">Unapprove</div></td>
            <td > 
                 <a href="admin_accept_sparepart_db.php?ID=<?php echo $row_am['B_id']; ?>" class="btn btn-success">Accept</a> &nbsp; 
                 <a href="admin_cancel_sparepart_db.php?ID=<?php echo $row_am['B_id']; ?>" class="btn btn-outline-danger" id="Cancel">Cancel</a></td>  

    </tr>
    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
    <?php }?>
    <?php  { ?>
        <tr>   
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>

    </tr>
    <?php }?>
    </tbody>
    </table>
                                
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
