<?php
	//Session �ϥνd��
	session_start(); //�ҥ�session �\��, �����bphp�{���٨S��X����T�����e�ҥ�
	$_SESSION["varName"] = "value"; //�ŧisession �ܼƨë��w��
	$a = $_SESSION["varName"]; //���osession �ܼƪ���
	unset($_SESSION['�ܼƦW��']); //����session �ܼƪ��ŧi

	//cookie�ϥνd��
	setcookie("cookieName", "value", time()+3600); // �]�wcookie�ȻP���Įɶ�
	$b= $_COOKIE["cookieName"]; //���ocookie����

	echo $a, $b;
?>