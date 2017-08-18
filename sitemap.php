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
a:link {
	color: #006600;
}
a:visited {
	color: #333300;
}
.style53 {
	color: #0000FF;
	font-family: "jing Jing";
	font-size: 24px;
}
.style62 {font-size: 18px; color: #6600FF; }
.style75 {color: #0000CC; font-size: 18px; font-family: raavi; }
.style99 {color: #000099; font-size: 18px; font-family: raavi; }
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
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <div id="myfuc">
    <table width="897" height="48" border="0" align="left">
    <tr>
      <td width="751"><p class="style53">&nbsp;</p>
        
        <p class="style53">Sitemap Of www.pizzanmore.com</p></td>
      <td width="136"><img src="img/sitemap_icon.png" width="136" height="112" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>

  </div>

  <table width="826" height="430" border="1" align="center">
    <tr>
      <td width="402" height="41"><div align="center"><span class="style62">Description of Page </span></div></td>
      <td width="261"><div align="center"><span class="style62">Page Name </span></div></td>
    </tr>
    <tr>
      <td height="34"><div align="center"><span class="style99">The Main page providing an overview of essential details </span></div></td>
      <td><div align="center"><a href="index.php" class="style75">The Pizza N More Home Page </a></div></td>
    </tr>
    <tr>
      <td height="37"><div align="center"><span class="style99">Our First Menu Category consisting og juicy burgers </span></div></td>
      <td><div align="center"><a href="menu_burgers.php" class="style75">pizzanmore/menu_burgers</a></div></td>
    </tr>
    <tr>
      <td height="37"><div align="center"><span class="style99">Our Second Menu Category consisiting of Tasty Pizza's </span></div></td>
      <td><div align="center"><a href="menu.php" class="style75">pizzanmore/menu</a></div></td>
    </tr>
    <tr>
      <td height="36"><div align="center"><span class="style99">Our Third Menu Category consisting of Tempting Side Orders </span></div></td>
      <td><div align="center"><a href="menu_sideorders.php" class="style75">pizzanmore/menu_sideorders</a></div></td>
    </tr>
    <tr>
      <td height="36"><div align="center"><span class="style99">Our Fourth Menu Catrgory consisting of refreshing Refreshments </span></div></td>
      <td><div align="center"><a href="menu_refreshments.php" class="style75">pizzanmore/menu_refreshments</a></div></td>
    </tr>
    <tr>
      <td height="32"><div align="center"><span class="style99">Jump to ordering instantly by selecting indivisual menu items </span></div></td>
      <td><div align="center"><a href="startordering.php" class="style75">pizzanmore/startordering</a></div></td>
    </tr>
    <tr>
      <td height="34"><div align="center"><span class="style99">Get to know more about us which helps us serve you better </span></div></td>
      <td><div align="center"><a href="aboutus.php" class="style75">pizzanmore/aboutus</a></div></td>
    </tr>
    <tr>
      <td height="38"><div align="center"><span class="style99">Essential contact information to help you reach us </span></div></td>
      <td><div align="center"><a href="contactus.php" class="style75">pizzanmore/contactus</a></div></td>
    </tr>
    <tr>
      <td height="34"><div align="center"><span class="style99">Keep it personal as your private information is our concern </span></div></td>
      <td><div align="center"><a href="privacypolicy.php" class="style75">pizzanmore/privacypolicy</a></div></td>
    </tr>
    <tr>
      <td height="45"><div align="center"><span class="style99">The conditions which we follow and expect you to do the same </span></div></td>
      <td><div align="center"><a href="termsandconditions.php" class="style75">pizzanmore/termsandconditions</a></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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
        <a href="termsandconditions.php">Terms &amp; Conditions </a> |<a href="privacypolicy.php"> Privacy Policy</a> | 
        <a href="sitemap.php">Sitemap</a> | 
        <a href="contactus.php">C<span class="style31">ontact_</span></a></span><a href="contactus.php"><span class="style31">Us</span></a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
    
</div> <!-- end of templatemo_footer -->

</body>
</html>