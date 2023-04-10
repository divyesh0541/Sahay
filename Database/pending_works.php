<?php

	include('connection.php');
	$qur="SELECT * FROM work WHERE user_id='".$_SESSION['user_id']."'";
	$qur_work="SELECT work_id FROM work_enquirey";

	$resultset=$conn->query($qur);
	$resultworkid=$conn->query($qur_work);
	$result_work_id=array();
	$i=0;
	while($row_work_id=$resultworkid->fetch_assoc()){
		$result_work_id[$i]=$row_work_id['work_id'];
		$i+=1;
	}

	$ptr=0;
	$counter=0;
	$data=array();
	while($row=$resultset->fetch_assoc()){
		if($counter<count($result_work_id)){
			if($row['work_id']==$result_work_id[$counter]){
				$counter+=1;
			}else{
				$data[$ptr]=$row;
				$ptr+=1;
			}
		}else{
			$data[$ptr]=$row;
				$ptr+=1;
		}
	}
	$_SESSION['pending_data']=$data;
	
?>