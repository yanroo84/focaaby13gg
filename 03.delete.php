<?php
    require("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<p>delete message</p>
<hr />
<?php
$id=(int)$_GET['id'];

if ($id>0) {
	$sql = "update guestbook set status=1 where id=$id;";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "message deleted.";
} else {
	echo "empty id, cannot delete.";
}
header("Refresh:1;url=02.list.php");
?>
</body>
</html>
