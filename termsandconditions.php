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
.style43 {font-family: "Times New Roman", Times, serif; color: #336600; font-size: 18px; font-weight: bold; }
.style55 {
	color: #003399;
	font-size: 24px;
	font-family: "jing Jing";
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
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <div id="myfuc">
    <table width="747" height="48" border="0" align="left">
    <tr>
      <td><span class="style32 style55">Terms and Conditions</span> </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="823" border="0" align="center">

    <tr>
      <td width="817"><div align="justify"><span class="style43">Pizza N More is starting a &quot;Customer Relationship  Manager Programme&quot;. </span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style43">The programme is specially designed for PizzaNMore customers who  place orders through  the PizzaNMore Number i.e. 1800-PIZZANMORE at Pizza N More restaurants operated by Pizza N More Private Limited  (&quot;PNMPL&quot;).</span></div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style43">The programme is as under - </span></div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <ul class="style43">
          <li>The programme shall be operational at all Pizza N More restaurants located in the cities of Mumbai and Navi Mumbai and operated by PNMPL.      
        </ul>
      </div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <ul class="style43">
          <li>To participate in the programme, a customer has to call on Pizza N More Number and has to purchase via Pizza N More any food product at a regular menu price.</li>
        </ul>
      </div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <ul class="style43">
          <li>In the programme buying/purchasing any food product at regular menu price means buying/purchasing, via Pizza N More that PNMPL  offers.</li>
        </ul>
      </div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <ul class="style43">
          <li>On purchase of any food product, via Pizza N More, a customer shall get a free offer coupon (&quot;offer coupon A&quot;) along with the order.</li>
        </ul>
      </div></td>
    </tr>
    <tr>
      <td><div align="justify"></div></td>
    </tr>
    <tr>
      <td><div align="justify">
        <ul class="style43">
          <li>Offer coupon A entitles a customer to get during the programme period, via Pizza N More, a Burger absolutely free on his/her next purchase  via Pizza N More.</li>
        </ul>
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <table width="825" border="0" align="center">
    <tr>
      <td width="819"><div align="justify"><span class="style43">That means if a customer calls on Pizza N More Number for the first time, he/she will get offer coupon A along with his/her  order, which offer coupon A entitles him/her to get, via Pizza N More, a Burger absolutely free on his/her next purchase, via Pizza N More, and not otherwise. </span></div></td>
    </tr>
    <tr>
      <td><div align="justify"><span class="style43">The customer will be entitled to get, subject to a maximum of four nos., one offer coupon A on every order placed by him/her via Pizza N More.</span></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
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