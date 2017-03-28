<?php
	require'./dbConnect.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select *from flogin";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_row($result);
	
	if($username == $row[1] && $password == $row[2]){
		header("location:home.php");
	}
	else{
		echo "<script> window.alert('Username or Password incorrect');</script>";
		echo "<script> window.location.assign('login.php');</script>";
	}
?>