<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pizza N More</title>
<meta name="keywords" content="orange spice, free css templates, CSS, HTML" />
<meta name="description" content="ree CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="rupees.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {color: #928f8a}
.style2 {color: #EE0000}
.style25 {font-size: 16px; color: #FFFF66; }
.style29 {color: #00FF00}
.style30 {font-size: 16px; color: #66FFFF; font-weight: bold; }
.style31 {color: #999999}
.style49 {
	color: #660066;
	font-size: 16px;
	font-family: "Trebuchet MS";
}
.style50 {color: #333300}
.style51 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 18px;}
.style52 {color: #333300; font-size: 18px; font-family: "Times New Roman", Times, serif; font-weight: bold; }
-->
</style>
<style type="text/css">
<!--
a:link {
	color: #0099FF;
}
a:visited {
	color: #00CCFF;
}
-->
</style>
</head>
<body>
<div id="templatemo_content2">
  <table width="1021" height="50">
   <?php
  if(!empty($_SESSION['islogged'])) { 
  ?>
  <tr>
    <td width="278"><div align="center" class="style30">
      <div align="right">Welcome <?php echo $_SESSION['islogged'];?> </div>
    </div></td>
    <td width="268">&nbsp;</td>
    <td width="459"><div align="center" class="style30">
      <div align="right"><a href="signout.php">Sign Out</a> </div>
    </div></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td colspan="2" rowspan="2">&nbsp;</td>
    <td><div align="right"><strong><span class="style25">Call us @ <span class="style29">1800-PIZZANMORE</span> </span></strong></div></td>
  </tr>
  <tr>
    <td><div align="right"><strong><span class="style25">and place an order over the phone too </span></strong></div></td>
  </tr>
</table>
</div>
<div id="templatemo_header">
  <div id="site_title"></div>
  <!-- end of site_title -->
</div>
<!-- end of templatemo_header -->
<span class="style49">
<div id="templatemo_content">
<form name="orderdetails" action="completeorder.php" method="get">
<?php



$cid=$_SESSION['islogged'];
mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query=mysql_query('select first_name,customer_id from customers where username="'.$cid.'"');
while($row=mysql_fetch_array($query)) {
$cname=strtolower($row['first_name']);
$ccid=$row['customer_id'];
}

	echo '<table align="CENTER" rules="ROWS">';
	echo '<tr><td align="CENTER">';
	echo '<font color="blue">Product Name</font>';
	echo '</td>';
	echo '<td align="CENTER" width="200">';
	echo '<font color="blue">Enter quantity</font>';
	echo '</td>';
	echo '<td align="CENTER">';
	echo '<font color="blue">Price Per</font>';
	echo '</td>';
		mysql_query('truncate '.$ccid.'_'.$cname.'_orders');
		
		if(count($_REQUEST)==2) {
		echo '<script>
	alert("No Item Selected!");
	window.location="startordering.php";
	</script>';
	}
	
	
foreach($_REQUEST as $i) {
$query = mysql_query('select product_name,product_price from products where product_id="'.$i.'"');
	while($row = mysql_fetch_array($query)) {
	$pname=$row['product_name'];
	$pprice=$row['product_price'];
	mysql_query('insert into '.$ccid.'_'.$cname.'_orders(product_id,product_name,product_price) values("'.$i.'","'.$pname.'","'.$pprice.'")');

	echo '<tr>';
	echo '<td align="CENTER">';
	echo $pname;
	echo '</td>';
	echo '<td align="CENTER">';
	echo '<input type="text" size="5" maxlength="1" name="'.$i.'" value="1">';
	echo '</td>';
	echo '<td align="CENTER">';
	echo '<span class="WebRupee">Rs.</span>'.$pprice.'</font>';
	echo '</td>';
	echo '</tr>';
	}

}
echo '</table>';
echo '<br><br><br><br>';
echo '<table align="CENTER">';
echo '<tr>';
echo '<td colspan="2" align="CENTER">';
echo '<input type="image" src="img/untitled.png" width="150" height="45">';
echo '</td>';
echo '</tr>';
echo '</table>';

echo '<br><br><br><br>';
?>
</form>
  <div class="cleaner"></div>
</div> <!-- end of templatemo_content -->
</span>
<div id="templatemo_footer">

	<div id="footer_logo">
    	<a href="index.php"><img src="img/Logo.png" alt="LOGO" width="148" height="108" /></a>
      <p>&nbsp;</p>
  </div>
    
  	<div id="footer_right">
    
	    <span class="style1"><a href="index.php" class="current">Home</a> | 
        <a href="termsandconditions.php">Terms &amp; Conditions </a> |<a href="privacypolicy.php"> Privacy Policy</a> | 
        <a href="sitemap.php">Sitemap</a> | 
        <a href="contactus.php">C<span class="style31">ontact_</span></a></span><a href="contactus.php"><span class="style31">Us</span></a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
    
</div> <!-- end of templatemo_footer -->

</body>
</html>