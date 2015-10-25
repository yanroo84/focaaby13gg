<?php
session_start();
$host = 'localhost';
$user = 'aaaaa';
$pass = '00000';
$db = 'mydb';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

$_SESSION['uID'] = "";
$_SESSION['nick'] = "";
if(isset($_POST['id']) && isset($_POST['pwd'])){
    $userName = $_POST['id'];
    $passWord = $_POST['pwd'];
    //header("Location: login.php");
		$sql = "SELECT * FROM user WHERE id='" . $userName . "' AND password= '" . $passWord . "'";
		if ($result = mysqli_query($conn,$sql)) {
			if ($row=mysqli_fetch_array($result)) {
				$_SESSION['uID'] = $row['id'];
				$_SESSION['nick'] = $row['nickname'];
				header("Location: 02.list.php");
				exit(0);
			} else {
				echo "Invalid Username or Password - Please try again <br />";
			}
		}
} else {
    $userName = "";
    $passWord = "";
}

?>
<h1>Login Form</h1><hr />
<form method="post" action="login.php">
User Name: <input type="text" name="id"><br />
Password : <input type="password" name="pwd"><br />
<input type="submit">
</form>