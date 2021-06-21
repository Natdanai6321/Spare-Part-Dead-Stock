<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php'); ?>
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');
     
  ?>
  <?php include('nav_admin.php');?>
    
    <script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
  });
});
  </script>
  <?php
  $query = "SELECT * FROM tbl_member ORDER BY member_id ASC" or die("Error:" . mysqli_error());
  $result = mysqli_query($con, $query);
  $row_am = mysqli_fetch_assoc($result);
?>

    <div id="layoutSidenav_content">
                <main>
                    <br>
             
                </main>
              <?php include('footer.php');?>
            </div>
        </div>
    <?php include('scripts.php');?>
    </body>
</html>
