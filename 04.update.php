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

<p>update message</p>
<hr />
<?php
$id=(int)$_POST["id"];
$title=mysqli_real_escape_string($conn,$_POST['title']);
$msg=mysqli_real_escape_string($conn,$_POST['msg']);
$name=mysqli_real_escape_string($conn,$_POST['myname']);


if ($id>0) {
	$sql = "update guestbook set title='$title', msg='$msg', name='$name' where id=$id;";
	mysqli_query($conn,$sql) or die("MySQL query error"); //執行SQL
	echo "message updated";
    header("Refresh:1;url=02.list.php");
} else echo "empty message id.";
?>

</body>
</html>
