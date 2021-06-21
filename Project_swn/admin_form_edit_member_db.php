<meta charset="UTF-8">
<?php
include('condb.php');  


  $member_id = $_REQUEST["member_id"];
  $m_user = $_REQUEST["m_user"];
  $m_pass = $_REQUEST["m_pass"];
  $m_pass2 = $_REQUEST["pass_commit"];
  $m_nameF = $_REQUEST["m_nameF"];
  $m_nameL = $_REQUEST["m_nameL"];
  $m_userID = $_REQUEST["m_userID"];
  $m_department = $_REQUEST["m_department"];
  $m_tel = $_REQUEST["m_tel"];

  if($m_pass != $m_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'admin_form_edit_member.php?act=edit&ID=$member_id'; ";   
		echo "</script>";
	}else{
  $sql = "UPDATE tbl_member SET  
      m_user='$m_user', 
      m_pass='$m_pass', 
      m_nameF='$m_nameF',
      m_nameL='$m_nameL',
      m_userID='$m_userID',
      m_department='$m_department',
      m_tel='$m_tel'
      WHERE member_id='$member_id' ";
  
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
mysqli_close($con); 
  }
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update Succesfuly');";
  echo "window.location = 'admin_table_member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>"; 
  echo "alert('Error back to Update again');";
  echo "window.location = 'admin_form_edit_member.php?act=edit&ID=$member_id'; ";   
  echo "</script>";
}
?>