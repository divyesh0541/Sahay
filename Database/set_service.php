<?php
include('connection.php');
$count=$_POST['count'];
$skills=array();
$j=1;
$skill_str="";
for($i=0;$i<$count;$i++){
	$ind='in'.$j.'p';
	$skills[$i]=$_POST[$ind];
	if($skill_str==""){
		$skill_str=$skills[$i];
	}else{
		$skill_str=$skill_str.",".$skills[$i];
	}
	$j+=1;
}
session_start();
	if(!isset($_SESSION['email'])){
		header('Location:../login.php');
	}
	$email=$_SESSION['email'];
	$sql="SELECT user_id FROM user WHERE email='".$email."'";

	$result=$conn->query($sql);
	$res=$result->fetch_assoc();
	$uid=$res['user_id'];
	$stmt = $conn->prepare("INSERT INTO skills (user_id,skills) VALUES (?, ?)");
	$stmt->bind_param("ss", $uid,  $skill_str);
	$stmt->execute();
	$update_user="UPDATE user SET new=0 WHERE email='".$email."'";
	$op=$conn->query($update_user);
	header('Location:../USER/template/pages/tables/all_work.php');
	

?>