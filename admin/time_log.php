<?php
include 'db_connect.php';
	extract($_POST);
	$data= array();
	$qry = $conn->query("SELECT * from employee where employee_no ='$eno' ");
	if($qry->num_rows > 0){
		$emp = $qry->fetch_array();
		$save_log= $conn->query("INSERT INTO attendance (log_type,employee_id) values('$type','".$emp['id']."')");
		$employee = ucwords($emp['firstname'].' '.$emp['lastname']);

		if($save_log){
				$data['status'] = 1;
				$data['msg'] = $employee .', Your Attendance Has Been Recorded! <br/>' ;
			}
	}else{
		$data['status'] = 2;
		$data['msg'] = 'Student ID Number Does Not Exist!';
	}
	echo json_encode($data);
	$conn->close();
