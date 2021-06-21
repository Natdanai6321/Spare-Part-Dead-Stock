<?php
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
  //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
  $m_user = $_REQUEST["m_user"];
  $m_pass = $_REQUEST["m_pass"];
  $m_pass2 = $_REQUEST["pass_commit"];
  $m_nameF = $_REQUEST["m_nameF"];
  $m_nameL = $_REQUEST["m_nameL"];
  $m_userID = $_REQUEST["m_userID"];
  $m_department = $_REQUEST["m_department"];
  $m_tel = $_REQUEST["m_tel"];
  //เพิ่มเข้าไปในฐานข้อมูล
  if($m_pass != $m_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
		echo "window.location = 'admin_form_add_member.php; ";   
		echo "</script>";
	}else{
  $sql = "INSERT INTO tbl_member(m_user, m_pass, m_nameF, m_nameL,m_userID, m_department,m_tel)
       VALUES('$m_user', '$m_pass', '$m_nameF', '$m_nameL','$m_userID', '$m_department', '$m_tel')";

  $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
  
  mysqli_close($con);
  }
  
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Register Succesfuly');";
  echo "window.location = 'admin_table_member.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to register again');";
  echo "window.location = 'admin_form_add_member.php; "; 
  echo "</script>";
}
?>