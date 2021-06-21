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
    $sql_total = "SELECT * FROM tbl_borrow_sparepart";
    $query_total = mysqli_query($con,$sql_total);
    $row_total = mysqli_num_rows($query_total);
    $page_total = ceil($row_total/$record_show);

    $query = "SELECT * FROM tbl_borrow_sparepart WHERE B_Status='Finish' AND B_userID='$m_userID' ORDER BY B_id ASC LIMIT $offset,$record_show" or die("Error:" . mysqli_error());
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
                                History 
                            </div>
                            <div class="card-body">
                     
                                <form action="member_table_History_Search.php" class="form-group" method="POST">
                                <label for=""><b>Search</b></label>
                                <select class="form-select2" aria-label="MFG" name="MFG" >
                                <option selected>MFG</option>
                                <option value="1">MFG1</option>
                                <option value="2">MFG2</option>
                                <option value="3">MFG3</option>
                                <option value="4">MFG4</option>
                                <option value="5">MFG5</option>
                                </select>
                                <input type="text" placeholder="Search" name="empname" class="form-control2">
                                <input type="submit" value="ค้นหา" class="btn btn-danger my">
                                <br><br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Personal ID</th>
                                            <th>Name</th>
                                            <th>Item Number</th>
                                            <th>Item Name</th>
                                            <th>MFG</th>
                                            <th>Quantity</th>
                                            <th>Date Borrow</th>
                                            <th>Date Return</th>
                                            <th>Date Return True</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php do { ?>
                                    <tr>
                                            <td><?php echo $row_am['B_userID']; ?></td>
                                            <td ><?php echo $row_am['B_user']; ?></td>
                                            <td ><?php echo $row_am['B_Item_number']; ?></td>
                                            <td ><?php echo $row_am['B_Item_name']; ?></td>
                                            <td ><?php echo $row_am['B_Mfg']; ?></td> 
                                            <td ><?php echo $row_am['B_Item_quantity']; ?></td>
                                            <td ><?php echo $row_am['date_borrow']; ?></td>
                                            <td ><?php echo $row_am['date_return']; ?></td>
                                            <td ><?php echo $row_am['date_return_True']; ?></td>
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
    <?php include('scripts.php');?>
    </body>
</html>





