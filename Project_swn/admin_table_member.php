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
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Member 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Password</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Personal ID</th>
                                            <th>Department</th>
                                            <th>Tel</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User</th>
                                            <th>Password</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Personal ID</th>
                                            <th>Department</th>
                                            <th>Tel</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php do { ?>
                                    <tr>
                                            <td><?php echo $row_am['m_user']; ?></td>
                                            <td><a href="admin_form_rwd_member.php?act=rwd&ID=<?php echo $row_am['member_id']; ?>" class="btn btn-info btn-sm"> Password </a> </td>
                                            <td ><?php echo $row_am['m_nameF']; ?></td>
                                            <td ><?php echo $row_am['m_nameL']; ?></td>
                                            <td ><?php echo $row_am['m_userID']; ?></td>
                                            <td ><?php echo $row_am['m_department']; ?></td>
                                            <td ><?php echo $row_am['m_tel']; ?></td>
                                            <td><a href="admin_form_edit_member.php?act=edit&ID=<?php echo $row_am['member_id']; ?>" class="btn btn-warning btn-sm"> แก้ไข </a> </td>
                                            <td><a href="admin_del_member.php?ID=<?php echo $row_am['member_id']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('ยันยันการลบ')">ลบ</a> </td>
                                    </tr>
                                    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
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
