<?php 
	session_start();
	ob_start(); 
	require ('config.php');

	$USN = $_POST['USN'];
	$password = $_POST['password'];

	$result_query = mysqli_query($con, "SELECT * FROM `student` WHERE `USN` = '$email' AND `password` = '$password'");
	$row = mysqli_fetch_array($result_query);
	$count_query = mysqli_num_rows($result_query);

	if ($count_query != 0) {
		$sessionUSN = $row['USN'];
		$_SESSION['login_user']= $sessionUSN;
		header("Location: ../student.php");
		exit();
	} 
	else {
		echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}
?>