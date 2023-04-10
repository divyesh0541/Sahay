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
	$que1="SELECT work_id FROM work_enquirey WHERE user_id='".$_SESSION['user_id']."'";
	$result1 = $conn->query($que1);
	while($row1 = $result1->fetch_assoc()) {
   	 $enquirey[] = $row1;
	}	
	sort($enquirey);
	$i=0;
	while($row = $resultset->fetch_assoc()) {
		if($i<count($enquirey)){
			if(strcmp($row['work_id'],$enquirey[$i]['work_id'])==0){
	   	 		$i=$i+1;
			}else{
	   	 		$result_set[] = $row;
	   	 	}
   	 	}else{
   	 		$result_set[] = $row;
   	 	}
	}
	$_SESSION['data']=$result_set;
	 
	}
	
?>