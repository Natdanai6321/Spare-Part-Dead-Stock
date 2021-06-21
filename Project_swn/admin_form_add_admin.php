<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include('h_admin.php'); ?>
    
    <body class="sb-nav-fixed">
    <?php include('condb.php');
    include('admin_Private.php');
  ?>
  <?php include('nav_admin.php');?>
    <div id="layoutSidenav_content">
                <main>
                    <br>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add New Admin 
                            </div>
                            <div class="card-body">
<form  name="member" action="admin_form_add_admin_db.php" method="POST" id="member" class="form-horizontal">
<div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Username</label>
    <div class="col-sm-10">
    <input name="a_user" type="text" required class="form-control " id="a_user"   placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2">
    </div>
  </div>
<br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Password</label>
    <div class="col-sm-10">
    <input name="a_pass" type="password" required class="form-control" id="a_pass"  placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Confirm Password</label>
    <div class="col-sm-10">
    <input name="pass_commit" type="password" required class="form-control" id="pass_commit"  placeholder="Confirm Password" pattern="^[a-zA-Z0-9]+$" minlength="2">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Firstname</label>
    <div class="col-sm-10">
    <input name="a_nameF" type="text" required class="form-control" id="a_nameF"   placeholder="Firstname">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Lastname</label>
    <div class="col-sm-10">
    <input name="a_nameL" type="text" required class="form-control" id="a_nameL"   placeholder="Lastname">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Department</label>
    <div class="col-sm-10">
    <input name="a_department" type="text" required class="form-control" id="a_department"   placeholder="Department">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-sm-1 col-form-label ">Telephone</label>
    <div class="col-sm-10">
    <input name="a_tel" type="text" required class="form-control" id="a_tel"   placeholder="Tel">
    </div>
  </div>

 <br>
  <button type="submit" class="btn btn-success">Add</button>

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
