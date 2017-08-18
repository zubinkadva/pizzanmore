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
.style32 {
	color: #003399;
	font-size: 24px;
	font-family: "jing Jing";
	font-weight: bold;
}
.style37 {font-family: "Times New Roman", Times, serif}
.style38 {font-size: 18px; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #336600; }
.style39 {color: #336600}
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
      <td width="512"><p class="style32">&nbsp;</p>
        <p class="style32">&nbsp;</p>
        <p class="style32">Privacy Policy</p></td>
      <td width="375"><div align="right"><img src="img/RoomAnimatedKeyRight.gif" width="91" height="36" /></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="799" border="0" align="center">

    <tr>
      <td width="793"><div align="justify" class="style38"><u>Our Commitment To Your Privacy</u></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">Your privacy is important to us.</div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">To better protect your privacy the following notice explains the information we collect, how it is used, how it is safeguarded, and how to contact us if you have any concerns. </div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style37"><span class="style39"></span></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38"><u>What Information Is Collected</u></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">As part of the order process, the following information is collected from shoppers:      </div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">Name Shipping/Billing Address, Email address, Phone number, Credit/Debit Card Information</div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style37"><span class="style39"></span></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38"><u>How That Information Is Used</u>      </div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">The information is used to fill your order, to contact you if we have questions, and to send email with special offers.</div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style37"><span class="style39"></span></span></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38"><u>Our Commitment To The Security of Your Data</u></div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">TheFastFoodDude does not rent, sell, or share personal information about you with other people or non-affiliated companies except to provide products or services you've requested, when we have your permission</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="799" border="0" align="center">
    <tr>
      <td><div align="justify" class="style38">We limit access to personal information about you to employees who we believe reasonably need to come into contact with that information to provide products or services to you or in order to do their jobs.</div></td>
    </tr>
    <tr>
      <td><div align="justify" class="style38">We have physical, electronic, and procedural safeguards that comply with federal regulations to protect personal information about you</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <table width="200" border="0">
    <tr>
      <td><img src="img/RoomAnimatedKeyLeft.gif" width="91" height="36" /></td>
    </tr>
  </table>
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
        <a href="privacypolicy.php">Privacy Policy </a>| 
        <a href="sitemap.php">Sitemap</a> | 
        <a href="contactus.php">C<span class="style31">ontact_</span></a></span><a href="contactus.php"><span class="style31">Us</span></a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
    
</div> <!-- end of templatemo_footer -->

</body>
</html>