<?php
	include('connection.php');
	//session_start();
	if(!isset($_SESSION['email'])){
		header('Location:../login.php');
	}
	$que="SELECT * FROM work";
	$result = $conn->query($que);
	if (!$result) {
    	throw new Exception("Database Error [{$this->database->errno}] {$this->database->error}");
	}else{
	 $resultset=$conn->query($que);
	 $result_set = array();
	 $enquirey=array();
	$que1="SELECT * FROM work_enquirey WHERE user_id='".$_SESSION['user_id']."' and result='accept'";
	$result1 = $conn->query($que1);
	$i=0;
	
	
	while($row1 = $result1->fetch_assoc()) {
	
   	 $query="SELECT * FROM work WHERE work_id='".$row1['work_id']."'";
   	 $row_work=$conn->query($query)->fetch_assoc();
   	
   	 $row_user=$conn->query("SELECT * FROM user WHERE user_id='".$row_work['user_id']."'")->fetch_assoc();
   	
   	 $result_set[$i]['work_id']=$row_work['work_id'];

   	 $result_set[$i]['work_charge']=$row_work['charge'];
   	 $result_set[$i]['work_for']=$row_work['work_for'];
   	 $result_set[$i]['work_brief']=$row_work['brief'];
   	 $result_set[$i]['user_name']=$row_user['name'];
   	 $result_set[$i]['user_email']=$row_user['email'];
   	 $i+=1;
	 }	
	

	$_SESSION['accepted_data']=$result_set;
	 
	}
?>