<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cradle</title>

    <!-- Bootstrap Core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <!--link href="./assets/css/bootstrap-table.css" rel="stylesheet"-->

    <!-- Custom CSS -->
    <link href="./assets/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/css/font-awesome.min.css">
    <link href="./assets/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="./assets/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="./assets/css/dataTables.tableTools.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style media="screen">
      /*div.container { max-width: 967px }*/
    </style>


</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
            <!--
            http://startbootstrap.com/template-overviews/simple-sidebar/
            <div class="col-lg-12">
                <span><h1 style="display:inline;">ComServ</h1><h6 style="display:inline;"><a href="#menu-toggle" class="fa fa-cog fa-spin fa-x fa-fw margin-bottom" id="menu-toggle" style="text-decoration:none;color:black;"></a></h6></span>
                <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            </div>
          -->
        </div>
        <!-- /#sidebar-wrapper --
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ศูนย์เปล ร.พ.ระยอง</a><a href="#menu-toggle" class="fa fa-cog fa-spin fa-x fa-fw margin-bottom" id="menu-toggle" style="text-decoration:none;color:black;"></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a></li>
              <li><a href="./apps/service/service_request.php">แจ้งเรื่อง</a></li>
              <li><a href="#">รายงาน</a></li>
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>-->
            </ul>
            <!--<form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>-->
            <!--
            <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
              </form>
            -->
            <!--</div><!--/.navbar-collapse -->
            <!--ul class="nav navbar-nav navbar-right">
              <!--li><a href="#">เข้าสู่ระบบ</a></li-->
              <form class="navbar-form pull-right" method="post" action="./apps/service/service_login.php" onsubmit="return formValidation()">
                    <input class="form-control" type="text" placeholder="Username" name='username' id='username'>
                    <input class="form-control" type="password" placeholder="Password" name='password' id='password'>
                    <button type="submit" class="btn" name='submit'>Sign in</button>
              </form>
              <!--<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </li>-->
              <!--
            </ul>
          <!--</div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
        <!-- Page Content -->

        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <table id="datatables" class="display responsive no-wrap" width="100%">
                        <thead>
                            <tr>
                              <th>สถานะ</th>
                              <th>วันที่</th>
                              <th>หน่วยงาน</th>
                              <th>เบอร์โทร</th>
                              <th>เรื่อง</th>
                              <th>ผู้แจ้ง</th>
                              <th>ผู้รับผิดชอบ</th>
                              <!--th>ip address</th-->
                              <th>id</th>
                            </tr>
                        </thead>
                      </thead>
                      <tbody>

                      </tbody>
                      <tfoot>
                            <tr>
                              <th>สถานะ</th>
                              <th>วันที่</th>
                              <th>หน่วยงาน</th>
                              <th>เบอร์โทร</th>
                              <th>เรื่อง</th>
                              <th>ผู้แจ้ง</th>
                              <th>ผู้รับผิดชอบ</th>
                              <!--th>ip address</th-->
                              <th>id</th>
                            </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
                  <hr>
              <footer>
                <p class="well pull-right">&copy; 2016 Cradle Center, RYH. &nbsp; <a href="http://getbootstrap.com/"><img class="img-rounded" width="32px" height="32px" src="./assets/images/bootstrap.png" alt="bootstrap" /></a>&nbsp; <a href="https://datatables.net/"><img class="img-rounded" width="32px" height="32px" src="./assets/images/datatables.png" alt="datatables" /></a></p>
              </footer>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.dataTables.min.js"></script>
    <script src="./assets/js/dataTables.responsive.min.js"></script>
    <script src="./assets/js/dataTables.tableTools.js"></script>
    <script type="text/javascript" src="assets/js/vfunction.js"></script>    
    <!--script src="./assets/ajax/service_processing.php"></script-->
    <!--script src="./assets/js/bootstrap-table.js"></script-->
    <!--script src="./assets/js/bootstrap-table-key-events.js"></script-->
    <!-- Menu Toggle Script -->
    <script type="text/javascript">
      function formValidation(){
        var username = document.getElementById("username");
        var password = document.getElementById("password");
        if(notEmpty(username,"กรุณาระบุ username")){
          if(notEmpty(password,"กรุณาระบุ password")){
                return true;
          }
        }
          return false;
        }

      $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
      });

      $(document).ready(function() {
        $('#datatables').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": "./assets/ajax/service_processing.php",
          responsive: true,
          "order": [[0,'asc'],[ 7, 'desc' ]],
          "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            if ( aData[0] == "เรียบร้อย" )
            {
              $('td', nRow).css('background-color', 'Green');
            }
            else if ( aData[0] == "รอดำเนินการ" )
            {
              $('td', nRow).css('background-color', 'Yellow');
            }
          }
        });
      });
    </script>
    <!--script type="text/javascript" language="javascript" class="init">


  $.fn.dataTable.TableTools.defaults.aButtons = [ "copy", "csv", "xls" ];

  $(document).ready(function() {
  	$('#example').DataTable( {
  		dom: 'T<"clear">lfrtip'
  	} );
  } );


</script-->
</body>

</html>
