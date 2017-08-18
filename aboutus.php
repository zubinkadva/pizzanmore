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
.style50 {color: #333300}
.style51 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 18px;}
.style52 {color: #333300; font-size: 18px; font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style53 {
	font-family: "jing Jing";
	color: #0033CC;
	font-size: 24px;
	font-weight: bold;
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
            <li><a href="index.php">Home</a><a href="menu.php">Menu</a></li>
            <li><a href="startordering.php">Start Ordering </a></li>
            <li><a class="current">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <div id="myfuc">
    <table width="747" height="48" border="0" align="left">
    <tr>
      <td><span class="style32 style53">About Us</span> </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="848" border="0" align="center">


    <tr>
      <td width="842"><div align="justify" class="style50"><span class="style51"><a href="index.php">Pizza N More </a> is  <a href="startordering.php">fast food   delivery</a> service that has partnered with some of Mumbai's best restaurants   to offer the added convenience of delivery.</span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style50"><span class="style51">Offering a broad   array of fast food options we can accommodate just about every craving. </span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style50"><span class="style51">From   delicious pizza's, to burgers and other refreshments - we deliver it all right to your   door.</span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style50"><span class="style51">We have an easy to   use online ordering system and deliver  7-days a   week. </span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><p align="justify" class="style52">Pizza N More has a   diverse selection of restaurants available for delivery with quick and friendly   service.</p></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style50"><span class="style51">We have drivers ready to deliver your order immediately so that your   food is delivered quick and hot.</span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style50"></span></div></td>
    </tr>
    <tr>
      <td><p align="justify" class="style52"><a href="index.php">Pizza N More </a> is continuously   adding new restaurants every week to keep our customers satisfied. </p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="746" border="0" align="center">
    <tr>
      <td width="384"><img src="img/quote_klein2_.jpg" width="300" height="190" /></td>
      <td width="335"><img src="img/quote_moyers3.jpg" width="260" height="175" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
        <a href="termsandconditions.php">Terms &amp; Conditions </a> | 
        <a href="privacypolicy.php">Privacy Policy</a> |<a href="sitemap.php"> Sitemap </a>| 
        <a href="contactus.php">C<span class="style31">ontact_</span></a></span><a href="contactus.php"><span class="style31">Us</span></a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
    
</div> <!-- end of templatemo_footer -->

</body>
</html>