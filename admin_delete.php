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

<style type="text/css">
<!--
.style1 {color: #928f8a}
.style2 {color: #EE0000}
.style25 {font-size: 16px; color: #FFFF66; }
.style29 {color: #00FF00}
.style30 {font-size: 16px; color: #66FFFF; font-weight: bold; }
.style31 {color: #999999}
-->
</style>
<style type="text/css">
<!--
.style57 {
	font-family: "berlin Sans FB";
	font-size: 18px;
	color: #6633FF;
}
.style68 {font-size: 14px; color: #0066CC; font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
-->
.style88 {
	font-size: 24px;
	color: #FF0000;
}
.style69 {font-size: 16px}
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

<script language="javascript">

</script>
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
   <!-- end of templatemo_menu -->
 
   <!-- end of templatemo_content -->
  </p>
  <form name="admin_delete" action="admin_deleted.php" method="post">
  <table width="429" border="0" align="center">
    <tr>
      <td width="419"><span class="style57">Administartor Priveleges - Delete Existing Item </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="272" border="0" align="center">
    <tr>
      <td width="266" class="style68"><div align="center">Please Select An Item To Delete </div></td>
    </tr>
    <tr>
      <td><label>
        <div align="center">
		<?php
		mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query=mysql_query('select product_name from products');
   echo '<select name="delete[]">';
while($row = mysql_fetch_array($query)) {
 echo '<option value="'.$row['product_name'].'">'.$row['product_name'].'</option>';
  }
 echo '</select>';
 ?>
          </div>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">
        <p><input type="image" src="img/13543691-vector-icons--to-add-and-remove-for-the-internet-and-web-design.jpg" width="140" height="33" onclick="Validate_data()"/></p>
        </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp; </p>
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