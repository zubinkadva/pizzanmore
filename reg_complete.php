<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pizza N More</title>
<meta name="keywords" content="orange spice, free css templates, CSS, HTML" />
<meta name="description" content="ree CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-family: raavi;
	color: #660099;
}
.style53 {	color: #003300;
	font-size: 18px;
	font-family: "berlin Sans FB";
}
.style54 {
	font-size: 16px;
	color: #00FFCC;
	font-family: "Trebuchet MS";
	font-weight: bold;
}
-->
</style>
</head>
<body>
<?php
$first_name=$_REQUEST['first_name'];
$middle_name=$_REQUEST['middle_name'];
$last_name=$_REQUEST['last_name'];
$residence=$_REQUEST['residence'];
$cell_number=$_REQUEST['cell_number'];
$email=$_REQUEST['email'];
$room_number=$_REQUEST['room_number'];
$floor_number=$_REQUEST['floor_number'];
$road_name=$_REQUEST['road_name'];
$city=$_REQUEST['city'];
$pincode=$_REQUEST['pincode'];
$username=$_REQUEST['username'];
$password2=$_REQUEST['password2'];
$secret_question=$_REQUEST['secret_question'];
$secret_answer=$_REQUEST['secret_answer'];

mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query=mysql_query('select max(customer_id) from customers');
while($row=mysql_fetch_array($query)) {
$cid=$row[0];
}
$cid+=1;
mysql_query('insert into customers values("'.$cid.'","'.$first_name.'","'.$middle_name.'","'.$last_name.'","'.$residence.'","'.$cell_number.'","'.$email.'","'.$room_number.'","'.$floor_number.'","'.$road_name.'","'.$city.'","'.$pincode.'","'.$username.'","'.$password2.'","'.$secret_question.'","'.$secret_answer.'","no")');
mysql_query('create table '.$cid.'_'.$first_name.'_orders (product_id varchar(10),product_name varchar(50),product_price int,quantity int,total_price int)');
header("refresh:3;url=index.php");
?>
<p>&nbsp;</p>
<p><span class="h10 style1">Add Successfull </span>
  <!-- end of templatemo_content -->
</p>
<p><span class="style54">Now, login with your credentials </span></p>
<p>
  
  <!-- end of templatemo_footer -->
  <img src="images/loading.gif" width="16" height="16" /></p>
<p><span class="style53">Please wait while redirecting... </span></p>
</body>

</html>