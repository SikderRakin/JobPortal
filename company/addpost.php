<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("../db.php");

//if user Actually clicked Add Post Button
if(isset($_POST)) {

	//Escape Special Characters In String First
	$jobtitle = mysqli_real_escape_string($conn, $_POST['jobtitle']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$minimumsalary = mysqli_real_escape_string($conn, $_POST['minimumsalary']);
	$maximumsalary = mysqli_real_escape_string($conn, $_POST['maximumsalary']);
	$experience = mysqli_real_escape_string($conn, $_POST['experience']);
	$qualification = mysqli_real_escape_string($conn, $_POST['qualification']);

	//Insert Job Post Query 
	$sql = "INSERT INTO job_post(id_company, jobtitle, description, minimumsalary, maximumsalary, experience, qualification) VALUES ('$_SESSION[id_user]','$jobtitle', '$description', '$minimumsalary', '$maximumsalary', '$experience', '$qualification')";

	if($conn->query($sql)===TRUE) {
		//If data Inserted successfully then redirect to dashboard
		$_SESSION['jobPostSuccess'] = true;
		header("Location: dashboard.php");
		exit();
	} else {
		//If data failed to insert then show that error. Note: This condition should not come unless we as a developer make mistake or someone tries to hack their way in and mess up :D
		echo "Error " . $sql . "<br>" . $conn->error;
	}

	//Close database connection. Not compulsory but good practice.
	$conn->close();

} else {
	//redirect them back to dashboard page if they didn't click Add Post button
	header("Location: dashboard.php");
	exit();
}