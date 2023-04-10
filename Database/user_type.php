<?php
include('connection.php');
session_start();
if(!isset($_SESSION['email'])){
	header('Location:../../../../login.php');
}
$email=$_SESSION['email'];
$resultset=$conn->query("SELECT new FROM USER WHERE email='".$email."'");
$result=$resultset->fetch_assoc();
if($result['new']==0){
	$_SESSION['type']="service";
}else{
	$_SESSION['type']="giver";
}
?>