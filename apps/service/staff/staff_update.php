<?php
session_start();

$staffname = $_SESSION['ses_username'];

$id=$_GET['id'];
$status = isset($_GET['status']) ? $_GET['status'] : 'รอดำเนินการ';

if($status == 'รับเรื่อง' || $status == 'เรียบร้อย'){
  $staffname = $staffname;
}else if($status == 'รอดำเนินการ'){
  $staffname = 'ศูนย์เปล';
}else{
  exit();
}

// Create connection

include '../../config/connectdb.php';
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//$sql_check_staff = "SELECT * FROM service WHERE staff_name='$staffname' AND status='$status' AND id='$id'";
$sql_check_staff = "SELECT * FROM service WHERE id='$id'";
$result_check=mysqli_query($con, $sql_check_staff);
$row=mysqli_fetch_array($result_check, MYSQLI_ASSOC);

if($status == 'รอดำเนินการ'){

 $sql_reset = "UPDATE service SET staff_name='ศูนย์เปล', status='รอดำเนินการ' WHERE id='$id'";
 if (mysqli_query($con, $sql_reset)) {
   echo "Record updated successfully";
 } else {
   echo "Error updating record: " . mysqli_error($con);
 }
 exit();
}


if ($row['staff_name'] == 'ศูนย์เปล' || $row['staff_name'] == $staffname) {

  $sql = "UPDATE service SET staff_name='$staffname',status='$status' WHERE id='$id'";
  if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }

}else{
    echo "มีผู้รับงานไปก่อนแล้ว :) ";
}


mysqli_close($con);
?>
