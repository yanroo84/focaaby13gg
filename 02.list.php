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

<p>my guest book !! </p> 
<hr />
<table width="200" border="1">
  <tr>
    <td>id</td>
    <td>title</td>
    <td>message</td>
    <td>name</td>
    <td>like</td> 
    <td>link</td>
  </tr>
<?php
$sql = "select * from guestbook where status =0;";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

	echo "<tr><td>" , $rs['id'] ,
	"</td><td>" , $rs['title'],
	"</td><td>" , $rs['msg'], 
	"<td>", $rs['name'], "</td>",
	"<td>",$rs['counter'],"個讚","</td>",
	"<td>","<a href='03.delete.php?id=",$rs['id'] ,"' onclick='return confirm(\"are you sure ?\");'>砍</a></br>",
	"<a href='04.editform.php?id=",$rs['id'] ,"'>編輯</a>","</td>",
    "<td>","<a href='like.php?id=",$rs['id'],"'>讚</a>","</td></td></tr>";
}
?>
</table>
<p><a href="01.addform.php">新增</a> </p>
<p><a href="deletebackup.php">還原</a> </p>
</body>
</html>
