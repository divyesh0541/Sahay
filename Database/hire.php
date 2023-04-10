<?php
	
	include('connection.php');
	$work_id=$_POST['work_id'];
	$user_id=$_POST['user_id'];

	$query="UPDATE work_enquirey SET result='accept' WHERE user_id='".$user_id."' and work_id='".$work_id."'";
	$result=$conn->query($query);
	header('Location: ../USER/template/pages/tables/pending_work.php');

?>