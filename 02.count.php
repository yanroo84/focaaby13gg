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
    <td>分類</td>
        <td>發文數</td>
  </tr>
<?php
$sql = "select count(*) as c, tag from guestbook where status=0 group by tag;";
$results=mysqli_query($conn,$sql);

while (	$rs=mysqli_fetch_array($results)) {

    if($rs['tag']==1)
        $rs['tag']="新聞";
    else if($rs['tag']==2)
        $rs['tag']="問題";
    else if($rs['tag']==3)
        $rs['tag']="心得";
    else if($rs['tag']==4)
        $rs['tag']="廢文";
    else
        $rs['tag']="沒分類";

	echo "<tr><td>" , $rs['tag'] ,
    "</td><td>" , $rs['c'] ,"</td></td></tr>";
}
?>
</table>
<p><a href="02.list.php">回列表</a> </p>
</body>
</html>
