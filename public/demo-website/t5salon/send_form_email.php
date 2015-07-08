<!DOCTYPE html>
<html Content-Type>
<head>
<meta charset="UTF-8">
<meta name="description" content="HA Hair Salon">
<meta name="keywords" content="Salon,beauty,hair">
<meta name="author" content="Wicky Gao">
<link rel="stylesheet" href="includes/css/bootstrap.min.css" />
<link rel="stylesheet" href="includes/css/style.css" />
<script src="includes/js/jquery-1.11.2.min.js"  type="text/javascript" /></script>
<script src="includes/js/bootstrap.min.js" type="text/javascript" /></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript" /></script>

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

<title>T5 Hair Salon</title>

</head>

<body>
<div class="container main">
  <div class="header" id="header">
    <div align="center"><a href="index.html"><img src="images/logo.png" alt="logo" width="252" height="80" align="middle" /></a></div>
   
<ul id="MenuBar1" class="MenuBarHorizontal">
          <li><a href="index.html">Home</a></li>
          <li><a href="service.html">Service</a></li>
          <li><a href="online.html">Book Online</a></li>
          <li><a href="assembly.html">Assembly</a></li>
          <li><a href="contacts.html">Contacts</a></li>
    </ul>

    <div class="clearfix"></div>
  </div>
<?php
	$host="localhost";
	$username="root";
	$password="";
	$db="t5";
	
	mysql_connect($host,$username,$password);
	mysql_select_db($db)or die(mysql_error());
		  
	@$sender = $_POST['Name'];
	@$sender_mail= $_POST['Email'];
	@$sender_subject = $_POST['Subject'];
	@$message = $_POST['message'];

	$sql = "INSERT INTO contact (name,email,subject,message)
	VALUES ('$sender','$sender_mail', '$sender_subject','$message')";
		
	$result=mysql_query($sql);
	
		if ($result) {
			echo "New record created successfully";
		} else {
			echo "Input data is fall";
		}
?>

<div class="row contact-footer">
  	<div class="col-md-3 company-detail">
  	  <div class="icon-top"><img src="images/foot-location.png" alt="location" width="30px" height="30px"/></div>
      Queen Street<br />
      Auckland
  	</div>
    <div class="col-md-3 company-detail">
    	<div class="icon-top"><img src="images/foot-phone number.png" alt="ph"  width="30px" height="30px"/></div>
      0000000000000
    </div>
    <div class="col-md-3 company-detail">
   <div class="icon-top"><a href="mailto:beini.gao@gmail.com"><img src="images/foot-envlope.png" alt="envlope"  width="30px" height="30px"/></a></div>
     SAMPLE@gmail.com
    </div>
    <div class="col-md-3  copyright">
    	Copyright © 2015 <br/>
        T5 Hair Salon <br/>
        reserved
    </div>
  </div>
</div>

<div class="clearfix"></div>

<script>
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
