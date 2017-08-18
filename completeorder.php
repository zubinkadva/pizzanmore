
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
.style53 {font-size: 18px; font-family: "Times New Roman", Times, serif; font-weight: bold; color: #003300; }
.style57 {color: #000000; font-size: 24px; }
.style58 {color: #FF0000; }
.style59 {color: #CC9900}
.style60 {color: #000000; }
.style62 {font-size: 18px}
.style64 {font-size: 18}
.style67 {font-family: "jing Jing"}
.style69 {font-family: forte}
.style70 {color: #FF0000; font-size: 24px; font-family: forte; }
.style72 {font-size: 24px}
.style73 {color: #0000FF; font-size: 24px; font-family: forte; }
.style74 {color: #00FFCC; font-size: 24px; font-family: forte; }
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

<div id="templatemo_content">
  <p>
    <?php

	$cid=$_SESSION['islogged'];
mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query=mysql_query('select first_name,customer_id from customers where username="'.$cid.'"');
while($row=mysql_fetch_array($query)) {
$cname=strtolower($row['first_name']);
$ccid=$row['customer_id'];
}

foreach($_REQUEST as $pid=>$pqty) {
if($pqty=="" or $pqty=="0" or (float)$pqty==0) {
echo '<script>
alert("Illegal quantity entered\nOrder Cancelled!");
window.location="startordering.php";
</script>';
}

$query = mysql_query('select product_price from products where product_id="'.$pid.'"');
	while($row = mysql_fetch_array($query)) {
	$pprice=$row['product_price'];
	$total=$pqty*$pprice;
	mysql_query('update '.$ccid.'_'.$cname.'_orders set quantity="'.$pqty.'",total_price="'.$total.'" where product_id="'.$pid.'"'); 
	}
}

?>
  </p>
  <span class="style53">
    <?php
  $grandtotal=0;
  mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query = mysql_query('select first_name,last_name,residence,cell_phone from customers where username="'.$cid.'"');
	while($row = mysql_fetch_array($query)) {
	$first=$row['first_name'];
	$last=$row['last_name'];
	$resi=$row['residence'];
	$cell=$row['cell_phone'];
	}
	

	
  echo '<table width="597" border="1" align="center">';
    echo '<tr>';
      echo '<td colspan="2" rowspan="5"><div align="center"><img src="img/Logo.png" width="147" height="105" /></div></td>';
      echo '<td colspan="2"><div align="center">Pizza N More Restaurants Pvt. Ltd. </div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td colspan="2"><div align="center">101, Linked In Towers </div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td colspan="2"><div align="center">Near Regal Cinema</div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td colspan="2"><div align="center">Near Colaba Causeway </div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td colspan="2"><div align="center">Mumbai - 400 009</div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td width="124"><div align="center">Date</div></td>';
echo '      <td width="103"><div align="center">'.date("d-m-Y").'</div></td>';
echo '      <td width="168"><div align="center"></div></td>';
      echo '<td width="174"><div align="center"></div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td><div align="center"><span class="style58">Item Name </span></div></td>';
echo '      <td><div align="center"><span class="style58">Quantity</span></div></td>';
echo '      <td><div align="center"><span class="style58">Rate</span></div></td>';
      echo '<td><div align="center"><span class="style58">Total Price </span></div></td>';
echo '    </tr>';
$query = mysql_query('select product_name,product_price,quantity,total_price from '.$ccid.'_'.$cname.'_orders');
	while($row = mysql_fetch_array($query)) {
	$grandtotal+=$row['total_price'];
echo '    <tr>';
echo '      <td><div align="center">'.$row['product_name'].'</div></td>';
echo '      <td><div align="center">'.$row['quantity'].'</div></td>';
echo '      <td><div align="center"><span class="WebRupee" style="font-size:18px">Rs.</span>'.$row['product_price'].'</font></div></td>';
echo '      <td><div align="center"><span class="WebRupee" style="font-size:18px">Rs.</span>'.$row['total_price'].'</font></div></td>';
echo '    </tr>';
}
echo '    <tr>';
echo '      <td colspan="2"><div align="center"></div></td>';
echo '      <td height="25"><div align="center"><span class="style57">Grand Total </span></div></td>';
echo '      <td height="25"><div align="center"><span class="style57"><span class="WebRupee" style="font-size:18px">Rs.</span>'.$grandtotal.'</span></div></td>';
echo '    </tr>';
echo '    <tr rowspan="2">';
echo '      <td><div align="center">'.$first.'</div></td>';
echo '      <td><div align="center">'.$last.'</div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td><div align="center">'.$resi.'</div></td>';
echo '      <td><div align="center">'.$cell.'</div></td>';
echo '    </tr>';
echo '    <tr>';
echo '      <td colspan="4"><div align="center">Thank You !! </div></td>';
echo '    </tr>';
echo '  </table>';
  ?>
  </span>
  <p class="style53">&nbsp;</p>
  <table width="481" border="0" align="center">
    <tr>
      <td width="475" height="30"><div align="center" class="style73">You will shortly receive a call from us </div></td>
    </tr>
    <tr>
      <td height="34"><div align="center" class="style73">in order to confirm the placed order </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style59"><span class="style60"><span class="style62"><span class="style64"><span class="style62"><span class="style62"><span class="style67"><span class="style69"><span class="style72"><span class="style72"></span></span></span></span></span></span></span></span></span></span></div></td>
    </tr>
    <tr>
      <td height="42"><p align="center" class="style70">Please be patient </p>      </td>
    </tr>
    <tr>
      <td height="34"><div align="center" class="style74">Thank you for using our service </div></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
    </tr>
    <tr>
      <td height="34"><div align="center"><a href="index.php"><img src="img/continue_icon.gif" width="130" height="30" border="0" /></a></div></td>
    </tr>
    <tr>
      <td height="34">&nbsp;</td>
    </tr>
  </table>
  <p class="style53">&nbsp;</p>
  <p>&nbsp;</p>
  <div class="cleaner"></div>
</div> <!-- end of templatemo_content -->

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