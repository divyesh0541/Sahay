<?php
	include('connection.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location:../login.php');
	}
	$email=$_SESSION['email'];
	$sql="SELECT user_id FROM user WHERE email='".$email."'";
	$result=$conn->query($sql);
	$res=$result->fetch_assoc();
	$uid=$res['user_id'];
	$for=$_POST['for'];
	$charge=$_POST['charge'];
	$brief=$_POST['brief'];
	$stmt = $conn->prepare("INSERT INTO work (user_id,work_for,charge,brief) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $uid,  $for,$charge,$brief);
	$stmt->execute();
	header('Location:../USER/template/pages/tables/all_work.php');
	
	// $stmt=$conn->prepare("INSERT INTO work (user_id,work_for,charge,brief) VALUES(?,?,?,?)");
	// $stmt->bind_param($uid,$for,$charge,$brief);
	// $stmt->execute();

	
?>