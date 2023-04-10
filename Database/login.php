<?php
	
	include('connection.php');
 	session_start();
 	$email=$_POST['email'];
	$password=$_POST['password'];

	if(strcmp($email, "")!=0){
		$sql="SELECT user_id,name,password from user WHERE email='".$email."'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if (strcmp($row["password"], $password)==0){
			$_SESSION['email']=$email;
			$_SESSION['name']=$row['name'];
			$_SESSION['user_id']=$row['user_id'];
			header('Location:../USER/template/pages/tables/all_work.php');
		}else{
			header('Location:../login.php');
		}
	}else{
		header('Location:../login.php');
	}


?>