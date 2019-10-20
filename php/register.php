<?php

	header('Content-Type: application/json');
	$jsonArray = array();
	$conn = mysqli_connect("localhost","","","apratim_2k19");

	if(!$conn){
		$jsonArray['error'] = "Couldn't Connect with database";
		die(print json_encode($jsonArray));
	}

	if(isset($_POST['category'])){
		if($_POST['category'] == "solo"){
			if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['contact']) || isset($_POST['college']) || isset($_POST['event'])){

				$name = mysqli_real_escape_string($conn,$_POST['name']);
				$email = mysqli_real_escape_string($conn,$_POST['email']);
				$contact = mysqli_real_escape_string($conn,$_POST['contact']);
				$college = mysqli_real_escape_string($conn,$_POST['college']);
				$eventType = "solo";
				$eventName = mysqli_real_escape_string($conn,$_POST['event']);
				$college = mysqli_real_escape_string($conn,$_POST['college']);

				if($stmt = $conn->prepare("INSERT INTO `registrations` (`name`, `email`, `contact`, `eventType`, `eventName`, `college`) VALUES (?,?,?,?,?,?)")){

					$stmt->bind_param("ssisss",$name,$email,$contact,$eventType,$eventName,$college);

					if($stmt->execute()){
						$jsonArray['success'] = "Registration Successful !";
						die(print json_encode($jsonArray));
					}else{
						$jsonArray['error'] = "Registration FAILED !";
						die(print json_encode($jsonArray));
					}
				}else{
					$jsonArray['error'] = "Query Prepare Failed !";
					die(print json_encode($jsonArray));
				}

			}else{
				$jsonArray['error'] = "One or more Data fields is/are missing !";
				die(json_encode($jsonArray));
			}
		}else if ($_POST['category'] == "team"){
			if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['contact']) || isset($_POST['college']) || isset($_POST['event']) || isset($_POST['teamMem'])|| isset($_POST['teamDetails']) || isset($_POST['leader'])){

				$name = mysqli_real_escape_string($conn,$_POST['name']);
				$email = mysqli_real_escape_string($conn,$_POST['email']);
				$contact = mysqli_real_escape_string($conn,$_POST['contact']);
				$college = mysqli_real_escape_string($conn,$_POST['college']);
				$eventType = "team";
				$eventName = mysqli_real_escape_string($conn,$_POST['event']);
				$college = mysqli_real_escape_string($conn,$_POST['college']);
				$teamMem = mysqli_real_escape_string($conn,$_POST['teamMem']);
				$teamDetails = mysqli_real_escape_string($conn,$_POST['teamDetails']);
				$leader = mysqli_real_escape_string($conn,$_POST['leader']);

				if($stmt = $conn->prepare("INSERT INTO `registrations` (`name`, `email`, `contact`, `eventType`, `eventName`, `teamMembers`, `teamLeader`, `college`, `teamDetails`) VALUES (?,?,?,?,?,?,?,?,?)")){

					$stmt->bind_param("ssississs",$name,$email,$contact,$eventType,$eventName,$teamMem,$leader,$college,$teamDetails);
					if($stmt->execute()){

						$jsonArray['success'] = "Registration Successful !";
						die(print json_encode($jsonArray));

					}else{
						$jsonArray['error'] = "Registration Failed !";
						die(print json_encode($jsonArray));
					}


				}else{
					$jsonArray['error'] = "Query Prepare failed !";
					die(print json_encode($jsonArray));

				}


			}else{
				$jsonArray['error'] = "One or more Fields is/are missing";
				die(print json_encode($jsonArray));
			}
		}
	}else{
		$jsonArray['error'] = "Category Not Set !";
		die(json_encode($jsonArray));
	}

?>
