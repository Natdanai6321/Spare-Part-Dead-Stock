<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_member.php'); ?>
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('member_Private.php');
  ?>
  <?php
  

  if(isset($_GET['page'])){
      $page = $_GET['page'];
  }else{
      $page = 1;
  }
  $record_show = 20;
  $offset = ($page - 1) * $record_show;
  $sql_total = "SELECT * FROM tbl_borrow_sparepart";
  $query_total = mysqli_query($con,$sql_total);
  $row_total = mysqli_num_rows($query_total);
  $page_total = ceil($row_total/$record_show);
 
  $sql = "SELECT * FROM tbl_borrow_sparepart
  WHERE B_userID LIKE '%$m_userID%' AND B_Status LIKE'%Yes%' ORDER BY B_id ASC  LIMIT $offset,$record_show";
   $result=mysqli_query($con,$sql);
   $row_am =  mysqli_fetch_assoc($result);
   $count = mysqli_num_rows($result);
   $check = $row_am['B_id'];?>
  <?php include('nav_member.php');?>


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
                        
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Item number</th>
            <th>Item name</th>
            <th>MFG</th>
            <th>Quantity</th>
            <th>Date borrow</th>
            <th>Date return</th>
            <th>Status</th>
        
        </tr>
    </thead>
    <tbody>
    <?php if($check !=''){?>
    <?php do { ?>
    <tr>
            <td><?php echo $row_am['B_Item_number']; ?></td>
            <td ><?php echo $row_am['B_Item_name']; ?></td>
            <td ><?php echo $row_am['B_Mfg']; ?></td>
            <td ><?php echo $row_am['B_Item_quantity']; ?></td>
            <td ><?php echo $row_am['date_borrow']; ?></td>
            <td ><?php echo $row_am['date_return']; ?></td> 
            <td ><div class=" alert-success" role="alert">กำลังยืม</div></td> 
    </tr>
    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
    <?php  } ?>
    <?php  { ?>
        <tr>   
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

<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
<li class="page-item <?=$page > 1 ? '' : 'disabled' ?>">
<a class="page-link" href="?page=<?=$page-1?>" aria-label="Previous">
<span aria-hidden="true">&laquo;</span>
</a>
</li>
<li class="page-item active"><a class="page-link" href="?page=<?=$page?>"><?=$page?></a></li>
<li class="page-item <?=$page < $page_total ? '' : 'disabled'?>">
<a class="page-link" href="?page=<?=$page+1?>" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
</a>
</li>
</ul>
</nav>      
                </main>
              <?php include('footer.php');?>
            </div>
        </div>
    <?php include('scripts.php');?>
    </body>
</html>
