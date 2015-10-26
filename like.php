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
$id=(int)$_GET['id'];
$uID=$_SESSION["uID"];
$sql = "select likes from user where id=$uID;";
$results=mysqli_query($conn,$sql);
while (	$rs=mysqli_fetch_array($results)) {
    if($rs['likes']<3){
        if ($id>0) {
            $sql = "update guestbook set counter=counter+1 where id=$id;";
            mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
            $sql = "update user set likes=likes+1 where id=$uID;";
            mysqli_query($conn,$sql) or die("MySQL insert message error"); //執行SQL
            header("Location:02.list.php");
        } else {
            echo "empty id, cannot like.";
        }
    }
    else{
        echo "你已經讚三次囉~~~";
        header("refresh:2;url=02.list.php");
    }
}
?>
</body>
</html>




