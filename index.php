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
.style34 {
	color: #33FFCC;
	font-family: "berlin Sans FB";
	font-size: 24px;
	font-style: italic;
}
.style49 {color: #FFFF00; font-family: "Times New Roman", Times, serif; font-size: 24px;}
-->
</style>
<style type="text/css">
<!--
.style16 {font-size: 18px; font-family: "Trebuchet MS"; color: #CC0000; }
.style17 {color: #6600FF}
.style18 {font-size: 18px; font-family: "Trebuchet MS"; color: #6600FF; }
.style22 {font-size: 18px; font-family: "Trebuchet MS"; color: #66FF33; }
.style50 {color: #99FFFF}
.style51 {
	color: #CCFF99;
	font-size: 18px;
	font-family: "Times New Roman", Times, serif;
}
.style54 {font-size: 18px}
.style55 {color: #66FF33}
.style56 {font-family: "Trebuchet MS"}
.style88 {
	font-size: 24px;
	color: #003399;
}
-->
</style>
        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="galleria.js"></script>
        <style>
            .content{color:#eee;font:14px/1.4 "helvetica neue", arial,sans-serif;width:600px;margin:20px auto}
            h1{line-height:1.1;letter-spacing:-1px;}
            a {color:#fff;}
            #galleria{height:400px;}
        .style89 {color: #FF0000}
        .style90 {color: #FF0000; font-size: 18px; }
        </style>
		<script language="javascript">
		function validate_data() {
		document.getElementById('pass_val').style.display='none';
		document.getElementById('user_val').style.display='none';
		document.getElementById('missing').style.display='none';
		if(login_form.user_name.value=="") {
		document.getElementById('missing').style.display='block';
		document.getElementById('user_val').style.display='block';
		}
		if(login_form.user_password.value=="") {
		document.getElementById('missing').style.display='block';
		document.getElementById('pass_val').style.display='block';
		}
		else {
		document.login_form.action="login.php";
		}
		}
		</script>
		<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
<style type="text/css">
<!--
a:link {
	color: #6666FF;
}
a:visited {
	color: #00CCFF;
}
-->
</style></head>
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
            <li><a class="current">Home</a><a href="menu.php">Menu</a></li>
            <li><a href="startordering.php">Start Ordering </a></li>
            <li><a href="aboutus.php">About Us </a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>    	
  </div> 
</div> 
<!-- end of templatemo_header -->

<div id="templatemo_content">
  <p>&nbsp;</p>
  <hr>
  <table width="200" border="0">
    <tr>
      <td>        <div class="content" style="width:900px">

  
       <!-- Start WOWSlider.com BODY section -->
	<div   id="wowslider-container1">
	<div style="height:50%;width:50$" class="ws_images"><ul>
<li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
<li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
<li><img src="data1/images/4.jpg" alt="4" title="4" id="wows1_3"/></li>
<li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_4"/></li>
<li><img src="data1/images/6.jpg" alt="6" title="6" id="wows1_5"/></li>
<li><img src="data1/images/7.jpg" alt="7" title="7" id="wows1_6"/></li>
<li><img src="data1/images/8.jpg" alt="8" title="8" id="wows1_7"/></li>
<li><img src="data1/images/9.jpg" alt="9" title="9" id="wows1_8"/></li>
<li><img src="data1/images/10.jpg" alt="10" title="10" id="wows1_9"/></li>
<li><img src="data1/images/11.jpg" alt="11" title="11" id="wows1_10"/></li>
<li><img src="data1/images/12.jpg" alt="12" title="12" id="wows1_11"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="1"><img src="data1/tooltips/1.jpg" alt="1"/>1</a>
<a href="#" title="2"><img src="data1/tooltips/2.jpg" alt="2"/>2</a>
<a href="#" title="3"><img src="data1/tooltips/3.jpg" alt="3"/>3</a>
<a href="#" title="4"><img src="data1/tooltips/4.jpg" alt="4"/>4</a>
<a href="#" title="5"><img src="data1/tooltips/5.jpg" alt="5"/>5</a>
<a href="#" title="6"><img src="data1/tooltips/6.jpg" alt="6"/>6</a>
<a href="#" title="7"><img src="data1/tooltips/7.jpg" alt="7"/>7</a>
<a href="#" title="8"><img src="data1/tooltips/8.jpg" alt="8"/>8</a>
<a href="#" title="9"><img src="data1/tooltips/9.jpg" alt="9"/>9</a>
<a href="#" title="10"><img src="data1/tooltips/10.jpg" alt="10"/>10</a>
<a href="#" title="11"><img src="data1/tooltips/11.jpg" alt="11"/>11</a>
<a href="#" title="12"><img src="data1/tooltips/12.jpg" alt="12"/>12</a>
</div></div>
<a class="wsl" href="http://wowslider.com">Creating Photo Gallery HTML by WOWSlider.com v2.5</a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
    </div>
    </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <hr>
  <p>&nbsp;</p>
  <?php
  if(empty($_SESSION['islogged'])) {
  
  ?>
<div id="loginback">

  <table width="892" height="156" border="0" align="left">
    <tr>
      <td height="94" colspan="4"><div class="style34" id="loginback2">
        <div align="left">
          <table width="811" height="45" border="0">
              <tr>
                <td><p>Customer Login </p>                  </td>
              </tr>
              </table>
        </div>
      </div>        </td>
    </tr>
	<form name="login_form" action="javascript:void()" method="post">
    <tr>
      <td width="165"><div align="center" class="style49">Username</div></td>
      <td width="285"><div align="center" class="style49">
        <input name="user_name" type="text" style="background: #FAF8CC; border-left: 20px solid #347C17; padding: 5px; -moz-border-radius: 20px;" />
      </div></td>
      <td width="35"><div id="user_val" align="left" style="display:none"><span class="style88 style89"> *</span> </div>      </td>
      <td width="389"><div align="center" class="style49">New User? </div></td>
    </tr>
    <tr>
      <td>      </td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td><div align="center" class="style49">Password</div></td>
      <td><div align="center" class="style49">
        <input name="user_password" type="password" style="background: #FAF8CC; border-left: 20px solid #347C17; padding: 5px; -moz-border-radius: 20px;" />
      </div></td>
      <td><div id="pass_val" align="left" style="display:none"><span class="style88 style89"> *</span> </div></td>
      <td width="389" rowspan="3"><div align="center" class="style49">
        <div align="center"><a href="userregistration.php"><img src="img/signup.png" width="186" height="46" /> </a></div>
      </div></td>
    </tr>
    <tr>
      <td colspan="3">
        <div align="center" class="style90" style="display:none" id="missing"> * Missing field(s) </div>
      </td>
      </tr>
    <tr>
      <td colspan="3"><div align="center"><input type="image" src="img/login.png" width="118" height="37" border="0" onclick="validate_data()" /></a></div></td>
      </tr>
	  </form>
  </table>
 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<?php
}
if(!empty($_SESSION['islogged'])) {
?>
 <div id="logged_back">
<table width="455" border="0">
  <tr>
    <td width="449" colspan="2"><span class="style16">Hello,</span></td>
  </tr>
  <tr>
    <td colspan="2"><span class="style16"><?php echo $_SESSION['islogged'];?></span></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><span class="style16">Welcome To <span class="style17">Pizza N More </span></span></td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style22"><a href="menu.php">Check out our new additions</a> </span></td>
    <td><a href="menu.php"><img src="img/MenuIcon.gif" width="88" height="88" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="style16"><a href="startordering.php">Place an order instantly</a> </span></td>
    <td><a href="startordering.php"><img src="img/imagesCAZ8M0HJ.jpg" width="69" height="169" border="0" /></a></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
</div>
 <p>
   <?php
}
if(!empty($_SESSION['isadmin'])) {

?>
 </p>
 <p>&nbsp; </p>
 <div id="admin_back">
  <table width="592" border="0">
    <tr>
      <td width="582"><span class="style22">Additional Administrator Priveleges </span></td>
    </tr>
    <tr>
      <td><hr></td>
    </tr>
    <tr>
      <td><span class="style34"><a href="admin_add.php">Add a new item</a> </span></td>
    </tr>
    <tr>
      <td><span class="style34"><a href="admin_delete.php">Remove an existing item </a></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
</div>
<?php
}
?>
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
        <a href="privacypolicy.php">Privacy Policy</a> | 
        <a href="sitemap.php">Sitemap</a> | 
        <a href="contactus.php">Contact_</a></span><a href="contactus.php">Us</a><br />
        <br />
        
    	Copyright © 2012 <a href="#" class="style2">PizzaNMore.com</a> - 
  <a href="http://www.iwebsitetemplate.com" target="_parent">Website Created</a> by<span class="style1"> MCA Semester 1 </span></div>
</div> <!-- end of templatemo_footer -->
</body>
</html>