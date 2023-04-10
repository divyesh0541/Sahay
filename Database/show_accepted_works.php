<?php
include('connection.php');
$query="SELECT * FROM work WHERE user_id='".$_SESSION['user_id']."'";
$resultset=$conn->query($query);
$work_id_result=array();
$i=0;
$data=array();
while($row=$resultset->fetch_assoc()){
	
	$work_query="SELECT * FROM work_enquirey WHERE work_id='".$row['work_id']."' and result='accept'";
	$resultset_work=$conn->query($work_query);
	$row_work=$resultset_work->fetch_assoc();

	
	if(isset($row_work)){
	$data[$i]['work_id']=$row['work_id'];
	
	$user_query="SELECT * FROM USER WHERE user_id='".$row_work['user_id']."'";
	$resultset_user=$conn->query($user_query);
	$row_user=$resultset_user->fetch_assoc();
	


	$skill_query="SELECT * FROM skills WHERE user_id='".$row_work['user_id']."'";
	$resultset_skill=$conn->query($skill_query);
	$row_skill=$resultset_skill->fetch_assoc();	
	
	$data[$i]['user_id']=$row_work['user_id'];
	$data[$i]['user_name']=$row_user['name'];
	$data[$i]['user_email']=$row_user['email'];
	$data[$i]['user_skill']=$row_skill['skills'];
	$data[$i]['work_for']=$row['work_for'];
	$data[$i]['work_brief']=$row['brief'];
	$data[$i]['charge']=$row['charge'];
	$i+=1;
	}
	
}
$_SESSION['show_accepted_data']=$data;

?>