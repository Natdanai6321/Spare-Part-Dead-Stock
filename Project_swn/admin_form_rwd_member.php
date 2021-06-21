<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php'); ?>
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');
    $member_id = $_REQUEST["ID"];
    $sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
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
                                Form Reset Password
                            </div>
                            <div class="card-body">

<form action="admin_form_rwd_member_db.php" method="post" class="form-horizontal">
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Username</label>
    <div class="col-sm-10">
    <input type="text" name="m_user" required class="form-control" autocomplete="off" value="<?php echo $row['m_user'];?>" disabled>
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">New Password</label>
    <div class="col-sm-10">
    <input name="m_pass1" type="password" required class="form-control" id="m_pass1"  value=""  placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Confirm Password</label>
    <div class="col-sm-10">
    <input name="m_pass2" type="password" required class="form-control" id="m_pass2"  value=""  placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
 <br>
 <input type="hidden" name="member_id" value="<?php echo $row['member_id'];?>">
  <button type="submit" class="btn btn-primary">save</button>

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
