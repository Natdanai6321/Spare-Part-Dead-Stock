<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include('h_admin.php'); ?>

<body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');

    ?>
    <?php include('nav_admin.php'); ?>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                "aaSorting": [
                    [0, 'ASC']
                ],
            });
        });
    </script>

    <?php
    $query = "SELECT * FROM tbl_admin_member ORDER BY a_id ASC" or die("Error:" . mysqli_error());
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
                        Admin
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Department</th>
                                    <th>Tel</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>User</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Department</th>
                                    <th>Tel</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php do { ?>
                                    <tr>
                                        <td><?php echo $row_am['a_user']; ?></td>
                                        <td><?php echo $row_am['a_nameF']; ?></td>
                                        <td><?php echo $row_am['a_nameL']; ?></td>
                                        <td><?php echo $row_am['a_department']; ?></td>
                                        <td><?php echo $row_am['a_tel']; ?></td>
                                    </tr>
                                <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <?php include('footer.php'); ?>
    </div>
    </div>
    <?php include('scripts.php'); ?>
</body>

</html>