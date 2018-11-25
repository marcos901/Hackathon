<?php
session_start();
require_once("inc/config.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$ret = acessa($email, md5($senha));

if($ret){
	$_SESSION['id_acesso'] = $ret["id"];
	echo "<script>window.location='login.php';</script>";
}else{
	echo "<script>alert('E-mail ou senha errados');</script>";
	echo "<script>window.location='login.php';</script>";
}

?>