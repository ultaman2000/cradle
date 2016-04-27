<?php

/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
$table = 'service';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'status', 'dt' => 0 ),
    array(
      'db' => 'start_date',
      'dt' => 1,
      'formatter' => function( $d, $row ) {
          #return date( 'jS M y', strtotime($d));
          return date( 'd-m-Y', strtotime($d));
      }
    ),
    array( 'db' => 'station', 'dt' => 2 ),
    array( 'db' => 'phone', 'dt' => 3 ),
    array( 'db' => 'user_content', 'dt' => 4 ),
    array( 'db' => 'user_name', 'dt' => 5),
    array( 'db' => 'staff_name', 'dt' => 6 ),
    /*array( 'db' => 'ip_address', 'dt' => 7 ),*/
    array( 'db' => 'id', 'dt' => 7 )
    /*,
    array(
        'db'        => 'salary',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '$'.number_format($d);
        }
    )*/
);

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'cradle',
    'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( '../library/ssp.class.php' );
echo json_encode(
    SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, "flag = 1")
);

/*
    include './apps/config/connectdb.php';
    $sql =  'select * from service order by id desc';
    $result = mysqli_query($con,$sql);
    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
        echo '<tr>';
        echo '<td>' . $row['sstatus'] . '</td>';
        echo '<td>' . $row['sdate'] . '</td>';
        echo '<td>' . $row['sroom'] . '</td>';
        echo '<td>' . $row['stel'] . '</td>';
        echo '<td>' . $row['sissue'] .'</td>';
        echo '<td>' . $row['ssender'] . '</td>';
        echo '<td>' . $row['srespon'] . '</td>';
        echo '<td>' . $row['ip_address'] . '</td>';
        echo '<td>' . $row['id'] . '</td>';
        echo '</tr>';
    }
    mysqli_free_result($result);
    mysqli_close($con);
    */

?>
