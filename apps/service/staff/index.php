<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
        <thead>
          <th>สถานะ</th>
          <th>วันที่</th>
          <th>หน่วยงาน</th>
          <th>เบอร์โทร</th>
          <th>เรื่อง</th>
          <th>ผู้แจ้ง</th>
          <th>ผู้รับผิดชอบ</th>
          <th>id</th>
          <th>action</th>

        </thead>

    <?php
    $staffname = $_SESSION['ses_username'];
    echo $staffname;
    $ini_staffname='ศูนย์เปล';

    if($_SESSION['ses_role'] != "staff"){
      //go anther page
    }else{
      include '../../config/connectdb.php';
      //$sql='select * from service where user_name ="$username" and flag="1"';
      //$sql="select * from service where user_name ='$username' and flag =1 ";
      $sql="select * from service where staff_name ='ศูนย์เปล' or staff_name = '$staffname' and flag =1 ";
      $result = mysqli_query($con, $sql);
      //start test
      if (!$result) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }
      //end test
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      ?>
      <tr>
        <td><?php echo $row['status']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['station']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['user_content']; ?></td>
        <td><?php echo $row['user_name']; ?></td>
        <td><?php echo $row['staff_name']; ?></td>
        <td><?php echo $row['id']; ?></td>
        <td><a href="staff_update.php?id=<?php echo $row['id'];?> & status=รับเรื่อง">รับเรื่อง</a></td>
        <td><a href="staff_update.php?id=<?php echo $row['id'];?> & status=เรียบร้อย">เรียบร้อย</a></td>
        <td><a href="staff_update.php?id=<?php echo $row['id'];?> & status=รอดำเนินการ">ยกเลิก</a></td>
      </tr>
      <?php
      }
    } ?>
    </table>
  </body>
</html>
