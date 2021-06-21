<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_member.php'); ?>
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('member_Private.php');
     
  ?>
  <?php include('nav_member.php');?>
  <?php
  

  if(isset($_GET['page'])){
      $page = $_GET['page'];
  }else{
      $page = 1;
  }
  $record_show = 20;
  $offset = ($page - 1) * $record_show;
  $sql_total = "SELECT * FROM tbl_spare_part";
  $query_total = mysqli_query($con,$sql_total);
  $row_total = mysqli_num_rows($query_total);
  $page_total = ceil($row_total/$record_show);

  $query = "SELECT * FROM tbl_spare_part ORDER BY Item_ID ASC LIMIT $offset,$record_show" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $query);
$row_am = mysqli_fetch_assoc($result);
?>

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
                     
                                <form action="member_search_data.php" class="form-group" method="POST">
                                <label for=""><b>Search</b></label>
                                <select class="form-select2" aria-label="MFG" name="MFG" >
                                <option selected>MFG</option>
                                <option value="1">MFG1</option>
                                <option value="2">MFG2</option>
                                <option value="3">MFG3</option>
                                <option value="4">MFG4</option>
                                <option value="5">MFG5</option>
                                </select>
                                <select class="form-select2" aria-label="STATUS" name="Status" >
                                <option selected>STATUS</option>
                                <option value="Available">Available</option>
                                <option value="Busy">Busy</option>
                                </select>
                                <input type="text" placeholder="Search" name="empname" class="form-control2">
                                <input type="submit" value="ค้นหา" class="btn btn-danger my">
                                <br><br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Item number</th>
                                            <th>Item name</th>
                                            <th>ItemGrop</th>
                                            <th>Packing Grop</th>
                                            <th>warehouse</th>
                                            <th>Quantity</th>
                                            <th>MFG</th>
                                            <th>Status</th>
                                            <th>Borrowing</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php do { ?>
                                    <tr>
                                            <td><?php echo $row_am['Item_number']; ?></td>
                                            <td ><?php echo $row_am['Item_name']; ?></td>
                                            <td ><?php echo $row_am['Item_grop']; ?></td>
                                            <td ><?php echo $row_am['Packing_grop']; ?></td>
                                            <td ><?php echo $row_am['warehouse']; ?></td> 
                                            <td ><?php echo $row_am['Quantity']; ?></td>
                                            <td ><?php echo $row_am['Mfg_id']; ?></td>
                                            <td ><div class=" alert-<?=$row_am['Status'] == 'Available' ? 'success' : 'danger'?>" role="alert"><?php echo $row_am['Status']; ?></div></td>
                                            <td><a href="member_form_borrow.php?act=edit&ID=<?php echo $row_am['Item_ID']; ?>" class="btn btn-warning <?=$row_am['Status'] == 'Available' ? '' : 'disabled'?>"> ยืม </a> </td>
                                    </tr>
                                    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
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
