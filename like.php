﻿<?php
    require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>update message</p>
<hr />
<?php
$id=(int)$_GET['id'];
$like=mysqli_real_escape_string($conn,$_GET['like']);

if ($id>0) {
	$sql = "update guestbook set like='$like+1', where id=$id;";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "message liked.";
    header("Location:02.list.php");
} else {
	echo "empty id, cannot delete.";
}
?>
</body>
</html>
