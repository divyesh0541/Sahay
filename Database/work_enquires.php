<?php
	include('connection.php');
	//session_start();
	$qur="SELECT * FROM work WHERE user_id='".$_SESSION['user_id']."'";
	$resultset=$conn->query($qur);
	$ptr=0;
	$data=array();
	while($row=$resultset->fetch_assoc()){
		//print_r($row);
		$query_user_id="SELECT user_id FROM work_enquirey WHERE work_id='".$row['work_id']."' and result='Pending'";
		$resultuserid=$conn->query($query_user_id);
		$rowuid=$resultuserid->fetch_assoc();
		if(isset($rowuid)){
			$query_user_detail="SELECT name, email FROM user WHERE user_id='".$rowuid['user_id']."'";
			$resultuserdetail=$conn->query($query_user_detail);
			$rowudetail=$resultuserdetail->fetch_assoc();
			$query_user_skill="SELECT skills FROM skills WHERE user_id='".$rowuid['user_id']."'";
			$resultuserskill=$conn->query($query_user_skill);
			$rowuskill=$resultuserskill->fetch_assoc();
			$row['service_user_id']=$rowuid['user_id'];
			$row['service_name']=$rowudetail['name'];
			$row['service_email']=$rowudetail['email'];
			$row['service_skill']=$rowuskill['skills'];
			$data[$ptr]=$row;
			$ptr+=1;
		}

	}
			//print_r($data);

	$_SESSION['enquires_data']=$data;

?>