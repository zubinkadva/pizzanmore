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
.style56 {
	color: #6633FF;
	font-size: 24px;
	font-family: forte;
}
.style74 {font-size: 18px; color: #AA0000; font-family: "Times New Roman", Times, serif; }
.style83 {font-size: 18px; font-family: "Times New Roman", Times, serif; color: #880000; }
.style85 {
	color: #0000EE;
	font-size: 24px;
	font-family: "Trebuchet MS";
	font-weight: bold;
}
a:link {
	color: #00FFCC;
}
.style88 {
	color: #FF0000;
	font-family: "Courier New", Courier, monospace;
	font-size: 16px;
}
.style88 {	color: #FF0000;
	font-size: 24px;
	font-family: "Times New Roman", Times, serif;
}
.style88 {
	font-size: 24px;
	color: #003399;
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

function reset_data() {
reg_form.first_name.value="";
reg_form.middle_name.value="";
reg_form.last_name.value="";
reg_form.residence.value="";
reg_form.cell_number.value="";
reg_form.email.value="";
reg_form.room_number.value="";
reg_form.floor_number.value="";
reg_form.road_name.value="";
reg_form.city.value="";
reg_form.pincode.value="";
reg_form.username.value="";
reg_form.password1.value="";
reg_form.password2.value="";
reg_form.secret_answer.value="";
document.getElementById('missing').style.display='none';
document.getElementById('first_val').style.display='none';
document.getElementById('middle_val').style.display='none';
document.getElementById('last_val').style.display='none';
document.getElementById('residence_val').style.display='none';
document.getElementById('cell_val').style.display='none';
document.getElementById('email_val').style.display='none';
document.getElementById('room_val').style.display='none';
document.getElementById('floor_val').style.display='none';
document.getElementById('road_val').style.display='none';
document.getElementById('city_val').style.display='none';
document.getElementById('pincode_val').style.display='none';
document.getElementById('username_val').style.display='none';
document.getElementById('pass_val').style.display='none';
document.getElementById('pass2_val').style.display='none';
document.getElementById('secret_val').style.display='none';
document.getElementById('terms_val').style.display='none';
document.getElementById('email_val2').style.display='none';
document.getElementById('residence_val2').style.display='none';
document.getElementById('cell_val2').style.display='none';
document.getElementById('numeric').style.display='none';
document.getElementById('email_error').style.display='none';
document.getElementById('agree').style.display='none';
document.getElementById('pincode_val2').style.display='none';
document.getElementById('count').style.display='none';
document.getElementById('residence_val3').style.display='none';
document.getElementById('cell_val3').style.display='none';
document.getElementById('pincode_error').style.display='none';
document.getElementById('pincode_val3').style.display='none';
document.getElementById('pass2_val2').style.display='none';
document.getElementById('pass2_val21').style.display='none';
document.getElementById('pass_error').style.display='none';
}

function validate_data() {
var x=document.forms["reg_form"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");

document.getElementById('missing').style.display='none';
document.getElementById('numeric').style.display='none';
document.getElementById('email_error').style.display='none';
document.getElementById('first_val').style.display='none';
document.getElementById('middle_val').style.display='none';
document.getElementById('last_val').style.display='none';
document.getElementById('residence_val').style.display='none';
document.getElementById('cell_val').style.display='none';
document.getElementById('email_val').style.display='none';
document.getElementById('room_val').style.display='none';
document.getElementById('floor_val').style.display='none';
document.getElementById('road_val').style.display='none';
document.getElementById('city_val').style.display='none';
document.getElementById('pincode_val').style.display='none';
document.getElementById('username_val').style.display='none';
document.getElementById('pass_val').style.display='none';
document.getElementById('pass2_val').style.display='none';
document.getElementById('secret_val').style.display='none';
document.getElementById('terms_val').style.display='none';
document.getElementById('email_val2').style.display='none';
document.getElementById('residence_val2').style.display='none';
document.getElementById('cell_val2').style.display='none';
document.getElementById('agree').style.display='none';
document.getElementById('pincode_val2').style.display='none';
document.getElementById('count').style.display='none';
document.getElementById('residence_val3').style.display='none';
document.getElementById('cell_val3').style.display='none';
document.getElementById('pincode_error').style.display='none';
document.getElementById('pincode_val3').style.display='none';
document.getElementById('pass2_val2').style.display='none';
document.getElementById('pass2_val21').style.display='none';
document.getElementById('pass_error').style.display='none';

if(reg_form.agreement.checked==true||reg_form.agreement.checked==false) {

if(reg_form.agreement.checked==false) {
document.getElementById('terms_val').style.display='block';
document.getElementById('agree').style.display='block';
}
if(reg_form.first_name.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('first_val').style.display='block';
}
if(reg_form.middle_name.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('middle_val').style.display='block';
}
if(reg_form.last_name.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('last_val').style.display='block';
}
if(reg_form.residence.value=="") {
document.getElementById('residence_val').style.display='block';
document.getElementById('missing').style.display='block';
}

else if(reg_form.residence.value.length<7) {
document.getElementById('residence_val3').style.display='block';
document.getElementById('count').style.display='block';
}
if(reg_form.cell_number.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('cell_val').style.display='block';
}
else if(isDigits(reg_form.cell_number.value)==false) {
document.getElementById('numeric').style.display='block';
document.getElementById('cell_val2').style.display='block';
}
else if(reg_form.cell_number.value.length<7) {
document.getElementById('cell_val3').style.display='block';
document.getElementById('count').style.display='block';
}
if(reg_form.email.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('email_val').style.display='block';
}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
document.getElementById('email_val2').style.display='block';
document.getElementById('email_error').style.display='block';
}
if(reg_form.room_number.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('room_val').style.display='block';
}
if(reg_form.floor_number.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('floor_val').style.display='block';
}
if(reg_form.road_name.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('road_val').style.display='block';
}
if(reg_form.city.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('city_val').style.display='block';
}
if(reg_form.pincode.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('pincode_val').style.display='block';
}
else if(isDigits(reg_form.pincode.value)==false) {
document.getElementById('numeric').style.display='block';
document.getElementById('pincode_val2').style.display='block';
}
else if(reg_form.pincode.value.length<6) {
document.getElementById('pincode_error').style.display='block';
document.getElementById('pincode_val3').style.display='block';
}
if(reg_form.username.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('username_val').style.display='block';
}
if(reg_form.password1.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('pass_val').style.display='block';
}
if(reg_form.password2.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('pass2_val').style.display='block';
}
if(reg_form.secret_answer.value=="") {
document.getElementById('missing').style.display='block';
document.getElementById('secret_val').style.display='block';
}
else if(document.reg_form.password1.value!=document.reg_form.password2.value) {
document.getElementById('pass2_val2').style.display='block';
document.getElementById('pass2_val21').style.display='block';
document.getElementById('pass_error').style.display='block';
}
else if(reg_form.agreement.checked==true){
document.reg_form.action="reg_complete.php";
}
}
}
</script>
</head>
<body>
<div id="templatemo_content2">
  <table width="1021" height="50">
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
<div id="banners"> 
  <table width="796" height="50" border="0" align="left">
    <tr>
      <td height="46"><span class="style56">Customer Registration </span></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td><span class="style85">Personal Details </span></td>
    </tr>
  </table>
  <hr>
  <form name="reg_form" action="javascript:void()" method="post">
  <table width="545" border="0" align="center">
    <tr>
      <td width="194"><div align="center"><span class="style83">First Name </span></div></td>
      <td width="298"><div align="center">
         <input type="text" name="first_name" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;">
         
		</div></td>
      <td width="39"><div id="first_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div>        </td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">Middle Name  </span></div></td>
      <td><div align="center">
        <input type="text" name="middle_name" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div align="left"><div id="middle_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">Last Name </span></div></td>
      <td><div align="center">
        <input type="text" name="last_name" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div align="left"><div id="last_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">Residence Number </span></div></td>
      <td><div align="center">
        <input name="residence" type="text" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" maxlength="11" />
        
				</div></td>
      <td><div align="left"><div id="residence_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div>
	  <div align="left"><div id="residence_val2" style="display:none"> 
        <div align="left"><span class="style88"> **</span> </div>
      </div>
	  <div align="left"><div id="residence_val3" style="display:none"> 
        <div align="left"><span class="style88"> ****</span> </div>
      </div>
	  </td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">Cell Phone Number </span></div></td>
      <td><div align="center">
        <input name="cell_number" type="text" style="background: #FAF8CC;  border-left: 20px solid #330099;padding: 5px; -moz-border-radius: 20px;" maxlength="10" />
       
				</div></td>
      <td><div align="left"> <div id="cell_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div>
	  <div align="left"> <div id="cell_val2" style="display:none"> 
        <div align="left"><span class="style88"> **</span> </div>
      </div>
	  <div align="left"> <div id="cell_val3" style="display:none"> 
        <div align="left"><span class="style88"> ****</span> </div>
      </div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">E-Mail Address </span></div></td>
      <td><div align="center">
        <input type="text" name="email" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div align="left"><div id="email_val" style="display:none"> 
        <div align="left"><span class="style88"> *</span> </div>
      </div>
	  <div align="left"><div id="email_val2" style="display:none"> 
        <div align="left"><span class="style88"> ***</span> </div>
      </div>
	  </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td><span class="style85">Address Details </span></td>
    </tr>
  </table>
<hr>
  <table width="538" border="0" align="center">
    <tr>
      <td width="194"><div align="center"><span class="style74">Room / Building Number </span></div></td>
      <td width="298"><div align="center">
         <input name="room_number" type="text" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
         
		</div></td>
      <td width="32"><div id="room_val" style="display:none"> <span class="style88"> *</span>			</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style74">Floor Name / Number </span></div></td>
      <td><div align="center">
        <input name="floor_number" type="text" style="background: #FAF8CC; border-left: 20px solid #330099;  padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div id="floor_val" style="display:none"> <span class="style88"> *</span>			</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style74">Street / Road Name </span></div></td>
      <td><div align="center">
        <input name="road_name" type="text" style="background: #FAF8CC; border-left: 20px solid #330099;  padding: 5px; -moz-border-radius: 20px;" />
        </div></td>
      <td><div id="road_val" style="display:none"> <span class="style88"> *</span>			</div></td>
    </tr>
    <tr>
      <td><div align="center"><span class="style83">City</span></div></td>
      <td><div align="center">
        <input name="city" type="text" style="background: #FAF8CC; border-left: 20px solid #330099;  padding: 5px; -moz-border-radius: 20px;" />
       
				</div></td>
      <td><div id="city_val" style="display:none"> <span class="style88"> *</span>			</div></td>
    </tr>
    <tr>
      <td height="38"><div align="center"><span class="style74">Pincode</span></div></td>
      <td><div align="center">
        <input name="pincode" type="text" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div id="pincode_val" style="display:none"> <span class="style88"> *</span>			</div><div id="pincode_val2" style="display:none"> <span class="style88"> **</span>			</div>
	  <div id="pincode_val3" style="display:none"> <span class="style88"> *****</span>			</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="296" border="0">
    <tr>
      <td width="290"><span class="style85">Login Credentials </span></td>
    </tr>
  </table>
  <hr />
  <table width="548" border="0" align="center">
    <tr>
      <td width="199"><div align="center"><span class="style74">Desired Username</span></div></td>
      <td width="291"><div align="center">
        <input name="username" type="text" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
       				</div></td>
      <td width="44"> <div id="username_val" style="display:none"> <span class="style88"> *</span>			</div>
</td>
    </tr>
    <tr>
      <td><div align="center"><span class="style74">Password</span></div></td>
      <td><div align="center">
        <input name="password1" type="password" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        
				</div></td>
      <td><div id="pass_val" style="display:none"> <span class="style88"> *</span>			</div>
	  <div id="pass2_val2" style="display:none"> <span class="style88"> @</span>			</div></td>
    </tr>
    <tr>
      <td height="34"><div align="center"><span class="style74">Confirm Password </span></div></td>
      <td><div align="center">
        <input name="password2" type="password" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" />
        </div></td>
      <td><div id="pass2_val" style="display:none"> <span class="style88"> *</span>			</div>
	  <div id="pass2_val21" style="display:none"> <span class="style88"> @</span>			</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="316" border="0">
    <tr>
      <td width="310"><span class="style85">Password Recovery </span></td>
    </tr>
  </table>
  <hr />
  <table width="558" border="0" align="center">
    <tr>
      <td width="158"><div align="center"><span class="style74">Secret Question </span></div></td>
      <td width="358"><div align="center">
        <select name="secret_question" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;">
          <option>What is the name of your best friend from childhood?</option>
          <option>What is your vehicle registration number?</option>
          <option>What is the name of your favourite teacher?</option>
          <option>What is your first phone number?</option>
        </select>
      </div></td>
      <td width="28">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center"><span class="style74">Secret Answer </span></div></td>
      <td><div align="center">
        <input name="secret_answer" type="text" style="background: #FAF8CC; border-left: 20px solid #330099; padding: 5px; -moz-border-radius: 20px;" size="52" />
        
				</div></td>
      <td><div id="secret_val" style="display:none"> <span class="style88"> *</span>			</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
  
  
  
  <div  id="missing" style="display:none">
  <table width="200" border="0" align="center">
    <tr>
      <td><span class="style88">* Missing field(s) </span></td>
    </tr>
  </table>
  </div>
  
    <div  id="numeric" style="display:none">
  <table width="261" border="0" align="center">
    <tr>
      <td width="406"><span class="style88">** Numeric value expected </span></td>
    </tr>
  </table>
  </div>
  
      <div  id="email_error" style="display:none">
  <table width="300" border="0" align="center">
    <tr>
      <td width="294"><span class="style88">*** Not a valid email address </span></td>
    </tr>
  </table>
  </div>
  
       <div  id="agree" style="display:none">
  <table width="362" border="0" align="center">
    <tr>
      <td width="356"><span class="style88">* Please agree to the Terms and conditions and Privacy Policy </span></td>
    </tr>
  </table>
  </div>
  
         <div  id="count" style="display:none">
  <table width="362" border="0" align="center">
    <tr>
      <td width="356"><span class="style88">**** Please enter the correct number</span></td>
    </tr>
  </table>
  </div>
  
  
           <div  id="pincode_error" style="display:none">
  <table width="362" border="0" align="center">
    <tr>
      <td width="356"><span class="style88">***** Please check pincode</span></td>
    </tr>
  </table>
  </div>
  
             <div  id="pass_error" style="display:none">
  <table width="362" border="0" align="center">
    <tr>
      <td width="356"><span class="style88">@ Passwords do not match</span></td>
    </tr>
  </table>
  </div>
  
  
  
  <p>&nbsp;</p>
  <table width="200" border="0">
    <tr>
      <td><span class="style85">Declaration</span></td>
    </tr>
  </table>
<hr />
  <table width="728" border="0" align="center">
    <tr>
      <td width="668"><div align="center" class="style74"><input type="checkbox" name="agreement" />
                I agree to the <a href="termsandconditions.php">Terms and Conditions</a> and <a href="privacypolicy.php">Privacy Policy</a> 
				
				
				</div>      </td>
      <td width="50"><div id="terms_val" style="display:none"> <span class="style88"> *</span>				</div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="403" border="0">
    <tr>
      <td width="397"><span class="style85">Complete Registration </span></td>
    </tr>
  </table>
<hr>
  <table width="734" border="0">
    <tr>
      <td width="346"><div align="center"><input type="image" src="img/register.jpg" width="152" height="31" border="0" onclick="validate_data()"/></a></div></td>
      <td width="378"><div align="center"><input type="image" src="img/resetButton.png" width="130" height="40" border="0" onclick="reset_data()" /></a></div></td>
    </tr>
  </table>
  </form>
  <blockquote>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </blockquote>
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