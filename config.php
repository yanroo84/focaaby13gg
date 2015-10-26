<?php
session_start();

$host = 'localhost';
$user = 'aaaaa';
$pass = '00000';
$db = 'mydb';
$conn = mysqli_connect($host, $user, $pass,$db) or die('Error with MySQL connection'); //跟MyMSQL連線並登入
mysqli_query($conn,"SET NAMES utf8"); //選擇編碼
//mysql_select_db($db, $conn); //選擇資料庫

	if ( ! isset($_SESSION["uID"])) 
		header("Location: login.php");
	if ( $_SESSION["uID"] == "" ) 
		header("Location: login.php");
    else
        echo $_SESSION["nick"]," , Hello~~";

?>
<!--focaaby剪GG-->