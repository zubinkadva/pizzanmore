<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Signing In...</title>
</head>

<body>
<?php
$db_pass="";
$db_admin="";
$uname=$_REQUEST["user_name"];
$upass=$_REQUEST["user_password"];
mysql_connect("localhost", "root", "") or die("Can not connect to database: ".mysql_error());
mysql_select_db("foodorderingsystem") or die("Can not select the database: ".mysql_error());
$query=mysql_query('select password,isadmin from customers where username="'.$uname.'"');
while($row=mysql_fetch_array($query)) {
$db_pass=$row['password'];
$db_admin=$row['isadmin'];
}

if($upass==$db_pass and $db_admin=="yes") {
$_SESSION['islogged']=$uname;
$_SESSION['isadmin']=$db_admin;
header("refresh:3;url=index.php");
}
else if($upass==$db_pass) {
$_SESSION['islogged']=$uname;
header("refresh:3;url=index.php");
}
else {
echo '<script language="javascript">';
echo 'alert("Please check your credentials!")';
echo '</script>';
header("refresh:0.0;url=index.php");
}
?>
<br>
<table width="200" border="0">
  <tr>
    <td><div align="center"><img src="images/loading.gif" /></div></td>
    <td><div align="center">Please wait... </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Authenticating...</div></td>
  </tr>
</table>
</body>
</html>
