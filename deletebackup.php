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

<p>deleted message !! </p> 
<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>message</td>
    <td>name</td>
  </tr>
<?php
$sql = "select * from guestbook where status =1;";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr><td>" , $rs['id'] ,
	"</td><td>" , $rs['title'],
	"</td><td>" , $rs['msg'], 
	"<td>", $rs['name'], "</td>",
	"<td>","<a href='reopen.php?id=",$rs['id'] ,"'>還原</a> --- ","</td></td></tr>";
}
?>
</table>
<p><a href="02.list.php">回清單</a> </p>
</body>
</html>