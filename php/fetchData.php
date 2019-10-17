<?php

	header('Content-Type: text/csv; charset=utf-8');  
	header('Content-Disposition: attachment; filename=registrations.csv');
	$conn = mysqli_connect("localhost","","","apratim_2k19");

	if(!$conn){
		echo "Error Connecting to database !";
		die();
	}

	if($stmt = $conn->prepare("SELECT * FROM `registrations` WHERE 1")){
		if($stmt->execute()){
			$stmt_result = $stmt->get_result();
      		$output = fopen("php://output", "w");  
      		fputcsv($output, array('name/TeamName', 'email', 'contact', 'eventType','eventName','No. of Team Mems','teamLeader','college','teamDdetails'));			
			while ($row = $stmt_result->fetch_assoc()) {
				fputcsv($output, $row); 
			}

			fclose($output);
			echo "Data Download Successful !";
			$conn->close();
			die();
		}else{
			echo "Query Execution Failed !";
			$conn->close();
			die();
		}
	}else{
		echo "Query Preparation Failed !";
		$conn->close();
		die();
	}

	$conn->close();


?>
