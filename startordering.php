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
.style53 {font-size: 16px}
-->
</style>
<style type="text/css">
<!--
.style555 {
	font-size: 16px;
	font-family: "Trebuchet MS";
	color: #006600;
}
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
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="index.php" >Home</a><a href="menu.php">Menu</a></li>
            <li><a class="current">Start Ordering </a></li>
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <p>
   <!-- end of templatemo_menu -->
 
   <!-- end of templatemo_content -->
 </p>
 <form name="orrdering" method="get" action="orderdetails.php">
  <span class="style555">
 <?php
mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query = mysql_query("select * from products");
echo '<table rules="ROWS" width="50%" align="CENTER">';
echo '<tr><td align="CENTER">';
echo '<font color="blue">Product Name</font>';
echo '</td>';
echo '<td align="CENTER">';
echo '<font color="blue">Product Price</font>';
echo '</td>';
if(!empty($_SESSION['islogged'])) {
echo '<td align="CENTER">';
echo '<font color="blue">Check the box to order</font>';
echo '</td>';
}
echo '</tr>';
while($row = mysql_fetch_array($query)) {
echo '<tr>';
echo '<td width="10%" align="CENTER">';
echo $row['product_name'];

echo '</td>';
echo '<td width="3%" align="CENTER">';
echo '<span class="WebRupee">Rs.</span>';
echo $row['product_price'];
echo '</td>';

if(!empty($_SESSION['islogged'])) {
echo '<td width="3%" align="CENTER">';
echo '<input type="checkbox" name="'.$row['product_id'].'" value="'.$row['product_id'].'">';
echo '</td>';
}
echo '</tr>';
}
echo '</table>';
echo '<br><br><br>';
if(!empty($_SESSION['islogged'])) {
echo '<table align="CENTER">';
echo '<tr><td>';
echo '<input type="image" src="img/place_order.png" width="96" height="30" name="order_image">';
echo '</td></tr>';
echo '</table>';
}
else if(empty($_SESSION['islogged'])) {
echo '<table align="CENTER">';
echo '<tr><td>';
echo '<font color="purple">Please Log In To place An Order</font>';
echo '</td></tr>';
echo '</table>';
}

?>
</span>
</form>
  <p>&nbsp;</p>
</div>
	
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