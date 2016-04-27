<?php
include '../config/connectdb.php';


$user_name=isset($_POST['user_name']) ? $_POST['user_name'] : '';
$phone=isset($_POST['phone']) ? $_POST['phone'] : '';
$station=isset($_POST['station']) ? $_POST['station'] : '';
$department=isset($_POST['department']) ? $_POST['department'] : '';
$user_content=isset($_POST['user_content']) ? $_POST['user_content'] : '';

//echo $user_name.$phone.$station.$department.$user_content;

$sql = "insert into service(id,start_date,start_time,user_name,phone,station,department,user_content,staff_name,staff_content,end_date,end_time,status,flag)";
$sql .= " values (null,CURDATE(),NOW(),'$user_name','$phone','$station','$department','$user_content','ศูนย์เปล','','','','รอดำเนินการ',1)";
mysqli_query($con,$sql);
// Print auto-generated id
//$con_id = mysqli_insert_id($con);
mysqli_close($con);
?>
<script langquage='javascript'>
setTimeout(function(){window.location.href='http://localhost/cradle/index.php'},1000);
</script>
