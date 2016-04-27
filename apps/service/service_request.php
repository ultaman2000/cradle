<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>แจ้งเรื่อง</title>

    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/sticky-footer.css" rel="stylesheet">

    </style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>แจ้งเรื่อง</h1>
      </div>
      <form id="request_form" method="post" action="service_add.php" onsubmit="return formValidation()">
        <div class="form-group">
          <label for="fullname">ชื่อ-นามสกุล</label>
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="ชื่อ-นามสกุล">
        </div>
        <div class="form-group">
          <label for="phone">เบอร์โทรศัพท์</label>
          <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์" onChange="JavaScript:doCallAjaxPhonBook('phone','station','department');">
          <p class="help-block"></p>
        </div>
        <div class="form-group">
          <label for="station">สถานที่</label>
          <input type="text" class="form-control" name="station" id="station" placeholder="หน่วยงาน">
        </div>
        <div class="form-group">
          <label for="dep">ฝ่าย/กลุ่ม</label>
          <input type="text" class="form-control" name="department" id="department" placeholder="ฝ่าย/กลุ่ม">
        </div>
        <div class="form-group">
          <label for="content">เรื่อง</label>
          <textarea class="form-control" rows="5" name="user_content" id="user_content" placeholder="...."></textarea>
          <!--<p class="help-block">....</p>-->
        </div>

        <button type="submit" class="btn btn-default">ส่ง</button>
        <button type="reset" class="btn btn-default">ล้างข้อมูล</button>
      </form>
    </div>

    <footer class="footer">
      <div class="container">
        <p class="text-muted">ศูนย์เปล โรงพยาบาลระยอง.</p>
      </div>
    </footer>

    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.dataTables.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript" src="../../assets/js/vfunction.js"></script>
    <script type="text/javascript">
      function formValidation(){
        var user_name = document.getElementById("user_name");
        var phone = document.getElementById("phone");
        var station = document.getElementById("station");
  			var department = document.getElementById("department");
  			var user_content = document.getElementById("user_content");
        if(notEmpty(user_name,"กรุณาระบุชื่อผู้ติดต่อ")){
          if(notEmpty(phone,"กรุณาระบุหมายเลขโทรศัพท์ติดต่อ(ภายใน)")){
  					if(notEmpty(station,"กรุณาระบุสถานที่ติดต่อ")){
  						if(notEmpty(department,"กรุณาระบุแผนกหรือสังกัด")){
  							if(notEmpty(user_content,"กรุณาระบุรายการที่แจ้ง")){
  									    return true;
  									}
  								}
  			        }
  						}
  					}
              return false;
        }

        function doCallAjaxPhonBook(phone,station,department){
        	HttPRequest = false;
          // Mozilla,Safari,IE
        	if (window.XMLHttpRequest)
            { HttPRequest = new XMLHttpRequest(); if( HttPRequest.overrideMimeType ){ HttPRequest.overrideMimeType('text/html');}
          }else if(window.ActiveXObject)
            { try { HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");} catch(e){ try { HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");} catch(e){}}}
        	if(!HttPRequest){
            alert('Cannot create XMLHTTP instance');
        		return false;
          }

        	var url = 'service_ajax_getfield.php';
        	var getPhone = "phone_number=" + encodeURI( document.getElementById(phone).value);
        	HttPRequest.open('POST',url,true);
        	HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        	//HttPRequest.setRequestHeader("Content-length", getPhone.length);
        	//HttPRequest.setRequestHeader("Connection", "close");
        	HttPRequest.send(getPhone);

        	HttPRequest.onreadystatechange = function(){ // Return Request
            if(HttPRequest.readyState == 4){
        	     var page = HttPRequest.responseText;
        	     if(page != ""){
        	        var data = page.split("|");
        	        document.getElementById(station).value = data[0];
        	        document.getElementById(department).value = data[1];
        	     }//else{ alert('ไม่มีข้อมูลหมายเลขโทรศัพท์ โปรดติดต่อผู้ดูแล'); }
        	  }
        	}

        }
    </script>
  </body>
</html>
