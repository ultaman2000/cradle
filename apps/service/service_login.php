<?php
echo '<meta charset="utf-8">';
$username = $_POST['username'];
//echo $username;
$password = $_POST['password'];
//echo $password;
include '../config/connectdb.php';
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);


$sql="select * from user where username ='$username' and password ='$password' ";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num <= 0){
    echo "<script type=\"text/javascript\"> alert('Username OR Password Fail.'); window.location.replace(\"http://localhost/cradle/index.php\"); </script>";
}else{
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    //echo $row['id'];
    if($row['role']==1){                          //ตรวจสอบสถานะของผู้ใช้ว่าเป็น Staff
      //echo "Hi Welcome Back Admin<br />";     //สร้าง session สำหรับให้ Staff นำค่าไปใช้งาน
      $_SESSION['ses_userid'] = session_id();     //สร้าง session สำหรับเก็บค่า ID
      $_SESSION['ses_username'] = $username;      //สร้าง session สำหรับเก็บค่า Username
      $_SESSION['ses_role'] = "staff";            //สร้าง session สำหรับเก็บค่า สถานะความเป็น staff
      echo "<meta http-equiv='refresh' content='1;URL=staff/index.php'>";
      //ส่งค่าจากหน้านี้ไปหน้า index_admin.php
      //echo "waiting..............................";
    }
  }
}
mysqli_close($con);

?>
