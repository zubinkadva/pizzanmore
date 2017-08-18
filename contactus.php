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
	font-family: "Trebuchet MS";
	font-size: 24px;
	color: #663399;
	font-weight: bold;
}
.style49 {font-size: 18px; font-family: "Times New Roman", Times, serif; font-weight: bold; color: #003300; }
.style92 {font-size: 18px; font-family: "Times New Roman", Times, serif; font-weight: bold; color: #003300; font-style: italic; }
.style94 {font-family: "jing Jing"; font-size: 24px; color: #0033FF; font-weight: bold; }
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
            <li><a href="aboutus.php">About Us </a></li>
            <li><a class="current">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <div id="myfuc">
    <table width="833" height="78" border="0" align="left">
    <tr>
      <td width="700"><span class="style94">Contact Us</span> </td>
      <td width="123" rowspan="2"><img src="img/contact-icon.png" width="122" height="126" /></td>
    </tr>
    <tr>
      <td height="52">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="853" border="0" align="center">
    <tr>
      <td width="843"><div align="center"><span class="style32">Corporate Offices </span></div></td>
    </tr>
    <tr>
      <td><div align="center">*</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style49">Pizza N More Restaurants Pvt. Ltd. </span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style49">101, Linked In Towers </span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style49">Near Regal Cinema </span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style49">Near Colaba Causeway </span></div></td>
    </tr>

    <tr>
      <td><div align="center"><span class="style49">Mumbai - 400 009 </span></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="850" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><span class="style32">Contact Us For Queries on </span></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">*</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><span class="style49">For opening of new restaurants in South and West India </span></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style49"><u>Mumbai</u> </div></td>
    </tr>
    <tr>
      <td width="378"><div align="center"><em><span class="style49"><a href="mailto:alok.udaiwal@pizzanmore.com">alok.udaiwal@pizzanmore.com</a></span></em></div></td>
      <td width="456"><div align="center"><em><span class="style49"><a href="mailto:preeti.kotwal@pizzanmore.com">preeti.kotwal@pizzanmore.com</a></span></em></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center" class="style49"><u>Rest of the country</u> </div></td>
    </tr>
    <tr>
      <td><div align="center"><em><span class="style49"><a href="mailto:ravi.hardikar@pizzanmore.com">ravi.hardikar@pizzanmore.com</a></span></em></div></td>
      <td><div align="center"><em><span class="style49"><a href="mailto:pramoy.kamden@pizzanmore.com">pramoy.kamden@pizzanmore.com</a></span></em></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><span class="style49">Tel : +91 - 22 - 44895235 </span></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="850" border="0" align="center">
    <tr>
      <td width="380"><div align="center"><span class="style32">Careers</span></div></td>
      <td width="454"><div align="center"><span class="style32">Corporate Offers </span></div></td>
    </tr>
    <tr>
      <td><div align="center">*</div></td>
      <td><div align="center">*</div></td>
    </tr>
    <tr>
      <td><div align="center"><em><span class="style49"><a href="mailto:careers@pizzanmore.com">careers@pizzanmore.com</a></span></em></div></td>
      <td><div align="center"><span class="style49">For corporate enquiries and bulk orders of Gift Card </span></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
      <td><div align="center"><span class="style49"><em><a href="mailto:info@pizzanmore.com;"><i>info@pizzanmore.com</a></em> and +91 - 22 - 44895235 </span></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="852" border="0" align="center">
    <tr>
      <td width="842"><div align="center"><span class="style32">Customer Feedback </span></div></td>
    </tr>
    <tr>
      <td><div align="center">*</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style92"><a href="mailto:feedback@pizzanmore.com">feedback@pizzanmore.com</a></span></div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style49">Tel : +91 - 22 - 44895235 </span></div></td>
    </tr>
    <tr>
      <td><div align="center"></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div> 
<!-- end of templatemo_content -->

<div id="templatemo_footer">

	<div id="footer_logo">
    	<a href="index.php"><img src="img/Logo.png" alt="LOGO" width="148" height="108" /></a>
      <p>&nbsp;</p>
  </div>
    
  	<div id="footer_right">
    
	    <span class="style1"><a href="index.php" class="current">Home</a> | 
        <a href="termsandconditions.php">Terms &amp; Conditions </a> | 
        <a href="privacypolicy.php">Privacy Policy</a> | 
        <a href="sitemap.php">Sitemap</a> | 
        <a href="contactus.php">C<span class="style31">ontact_</span></a></span><a href="contactus.php"><span class="style31">Us</span></a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
    
</div> <!-- end of templatemo_footer -->

</body>
</html>