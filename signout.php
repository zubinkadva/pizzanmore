<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Signing Out...</title>
</head>

<body>
<?php
session_start();
session_destroy();
header("refresh:3;url=index.php");
?>
<br>
<table width="200" border="0">
  <tr>
    <td><div align="center"><img src="images/loading.gif" /></div></td>
    <td><div align="center">Please wait... </div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Signing out...</div></td>
  </tr>
</table>

</body>
</html>
