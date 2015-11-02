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

<p>insert new message</p>
<hr />
<p>
  <?php
$title=mysqli_real_escape_string($conn,    $_POST['title']   );
$msg=mysqli_real_escape_string($conn,$_POST['msg']);
$name=mysqli_real_escape_string($conn,$_POST['myname']);
$tag=mysqli_real_escape_string($conn,$_POST['tag']);

if ($title) {
	$sql = "insert into guestbook (title, msg, name, tag) values ('$title', '$msg','$name','$tag');";
	mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
	echo "message added.";
header("Refresh:1;url=02.list.php");
} else {
	echo "empty title, cannot insert.";
header("Refresh:3;url=02.list.php");
}

?>
</p>
</body>
</html>
