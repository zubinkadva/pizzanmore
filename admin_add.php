
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
function isDigits(argvalue) {
argvalue = argvalue.toString();
var validChars = "0123456789";
var startFrom = 0;
	if (argvalue.substring(0, 2) == "0x") {
	validChars = "0123456789abcdefABCDEF";
	startFrom = 2;
	}
	else if (argvalue.charAt(0) == "0") {
	validChars = "01234567";
	startFrom = 1;
	}
		for (var n = 0; n < argvalue.length; n++) {
			if (validChars.indexOf(argvalue.substring(n, n+1)) == -1) return false;
		}
		
return true;
}

function Validate_data() {
document.getElementById('pid').style.display='none';
document.getElementById('pname').style.display='none';
document.getElementById('pdesc').style.display='none';
document.getElementById('pprice').style.display='none';
document.getElementById('pcat').style.display='none';
document.getElementById('missing').style.display='none';
document.getElementById('integer').style.display='none';
document.getElementById('pprice2').style.display='none';

if(admin_add.tpid.value=="") {
document.getElementById('pid').style.display='block';
document.getElementById('missing').style.display='block';
}
if(admin_add.tpname.value=="") {
document.getElementById('pname').style.display='block';
document.getElementById('missing').style.display='block';
}
if(admin_add.tpdesc.value=="") {
document.getElementById('pdesc').style.display='block';
document.getElementById('missing').style.display='block';
}
if(admin_add.tpcat.value=="") {
document.getElementById('pcat').style.display='block';
document.getElementById('missing').style.display='block';
}
if(admin_add.tpprice.value=="") {
document.getElementById('pprice').style.display='block';
document.getElementById('missing').style.display='block';
}
else if(isDigits(admin_add.tpprice.value)==false) {
document.getElementById('pprice2').style.display='block';
document.getElementById('integer').style.display='block';
}
else {
admin_add.action="admin_add2.php";
}
}
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
  <table width="429" border="0" align="center">
    <tr>
      <td width="419"><span class="style57">Administartor Priveleges - Add New Item Page 1 </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <form name="admin_add" action="javascript:void(0)" method="post" enctype="multipart/form-data">
  <table width="674" border="0" align="center">
    <tr>
      <td width="189"><div align="center" class="style68">Product ID </div></td>
      <td width="429"><label>
        <div align="center">
          <input name="tpid" type="text" style="background: #FAF8CC; border-left: 20px solid #0066CC; padding: 5px; -moz-border-radius: 20px;" size="30"/>        
          </label>
        </div></td>
      <td width="42"><div id="pid" style="display:none"> 
	  <div align="left"><span class="style88"> *</span> </div>
	  </div></td>
    </tr>
    <tr>
      <td><div align="center" class="style68">Product Name </div></td>
      <td><div align="center">
        <input name="tpname" type="text" style="background: #FAF8CC; border-left: 20px solid #0066CC; padding: 5px; -moz-border-radius: 20px;" size="30"/>
      </div></td>
      <td><div id="pname" style="display:none"> 
	  <div align="left"><span class="style88"> *</span> </div>
	  </div>	  </td>
    </tr>
    <tr>
      <td><div align="center" class="style68">Product Description </div></td>
      <td><label>
        <div align="center">
          <textarea name="tpdesc" cols="25" rows="5" style="background: #FAF8CC; border-left: 20px solid #0066CC; padding: 5px; -moz-border-radius: 20px;"></textarea>
        </div>
      </label></td>
      <td><div id="pdesc" style="display:none"> 
	  <div align="left"><span class="style88"> *</span> </div>
	  </div>	  </td>
    </tr>
    <tr>
      <td><div align="center" class="style68">Product Price </div></td>
      <td><div align="center">
        <input name="tpprice" type="text" style="background: #FAF8CC; border-left: 20px solid #0066CC; padding: 5px; -moz-border-radius: 20px;" size="30"/>
      </div></td>
      <td><div id="pprice" style="display:none"> 
	  <div align="left"><span class="style88"> *</span> </div>
	  </div>	
	  <div id="pprice2" style="display:none"> 
	  <div align="left"><span class="style88"> **</span> </div>
	  </div>  </td>
    </tr>
    <tr>
      <td><div align="center" class="style68">Product Category </div></td>
      <td><div align="center">
        <label>
        <select name="tpcat" style="background: #FAF8CC; border-left: 20px solid #0066CC; padding: 5px; -moz-border-radius: 20px;">
          <option value="burgers">Burgers</option>
          <option value="pizza">Pizza</option>
          <option value="side_orders">Side Orders</option>
          <option value="refreshments">Refeshments</option>
        </select>
        </label>
      </div></td>
      <td><div id="pcat" style="display:none"> 
	  <div align="left"><span class="style88"> *</span> </div>
	  </div>	  </td>
    </tr>
    
	  <tr>
	    <td colspan="2"><div id="missing" style="display:none">
          <div align="center"><span class="style88"> *<span class="style69"> Missing Field(s)</span></span> </div>
	    </div></td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td colspan="2"><div id="integer" style="display:none">
          <div align="center"><span class="style88"> **<span class="style69"> Numeric value expected</span></span> </div>
	    </div></td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td></td>
	  <tr>
	 <td colspan="3"><div align="center"><input type="image" src="img/continue-icon.png" width="140" height="43" onclick="Validate_data()"/>
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