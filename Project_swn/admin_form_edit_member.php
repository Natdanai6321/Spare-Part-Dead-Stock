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
                                Member Edit 
                            </div>
                            <div class="card-body">
<form  name="member" action="admin_form_edit_member_db.php" method="POST" id="member" class="form-horizontal">

<input type="hidden" name="member_id" value="<?php echo $member_id; ?>">  
  
 

<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Username</label>
    <div class="col-sm-10">
    <input name="m_user" type="text" required class="form-control " id="m_user" value="<?=$m_user;?>"  placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Password</label>
    <div class="col-sm-10">
    <input name="m_pass" type="password" required class="form-control" id="m_pass"  value=""  placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Confirm Password</label>
    <div class="col-sm-10">
    <input name="pass_commit" type="password" required class="form-control" id="pass_commit"  value=""  placeholder="Confirm Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Firstname</label>
    <div class="col-sm-10">
    <input name="m_nameF" type="text" required class="form-control" id="m_nameF"  value="<?=$m_nameF;?>"  placeholder="Firstname">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Lastname</label>
    <div class="col-sm-10">
    <input name="m_nameL" type="text" required class="form-control" id="m_nameL"  value="<?=$m_nameL;?>"  placeholder="Lastname">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Personal ID</label>
    <div class="col-sm-10">
    <input name="m_userID" type="text" required class="form-control" id="m_userID"  value="<?=$m_userID;?>"  placeholder="Personal ID">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Department</label>
    <div class="col-sm-10">
    <input name="m_department" type="text" required class="form-control" id="m_department"  value="<?=$m_department;?>"  placeholder="Department">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Telephone</label>
    <div class="col-sm-10">
    <input name="m_tel" type="text" required class="form-control" id="m_tel"  value="<?=$m_tel;?>"  placeholder="Tel">
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
