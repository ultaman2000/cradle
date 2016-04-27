<?php
error_reporting(E_ERROR | E_PARSE);
include '../config/connectdb.php';
$phone = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$phone = trim($phone);

$sql = "SELECT * FROM phone WHERE phone = $phone and flag = 1" ;
//mysql_query("SET NAMES UTF8") or die  ;
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
if($row){
  echo $row["station"]."|".$row["department"];
}
mysqli_close($con);
?>
