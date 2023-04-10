<?php
 	include('connection.php');
 	session_start();
	$email=$_POST['email'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$confirm_password=$_POST['c_password'];


	if($password==$confirm_password){	
		if(strlen($password)>7){
			$sql="SELECT name,user_id from user WHERE email='".$email."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if(!isset($row['name'])){
				$stmt = $conn->prepare("INSERT INTO user (name, email, password) VALUES (?, ?, ?)");
				$stmt->bind_param("sss", $name,  $email,$password);
				$stmt->execute();
				
		    	$_SESSION['name']=$row['name'];
		    	$_SESSION['email']=$email;
		    	$_SESSION['user_id']=$row['user_id'];
		    	
		 		header("Location: ../choice.php");
		 		$_SESSION['detail']='signup_successfull';
	    	}else{
	    		$_SESSION['detail']='signup_account_exists';
	    		header("Location:../signup.php");	
	    	}			
    	}else{
    		$_SESSION['detail']='signup_password_length';
	    	header("Location:../signup.php");
    	}
	}else{

    	$_SESSION['detail']='signup_password_error';
		header("Location:../signup.php");
	}

?>