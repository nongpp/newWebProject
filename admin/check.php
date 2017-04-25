<?php
	require'./dbConnect.php';
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "select *from flogin";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_row($result);
	
	$salt = "fsdafdsfasdfadfqetretrf45";
	$hash_login_password = hash_hmac('sha126',$password,$salt);
	
	if($username == $row[1] && $password == $row[2]){
		$_SESSION['username'] = $_POST['username'];
      	$_SESSION['password'] = $_POST['password'];
		header("location:admin_page.php");
	}
	else{
		echo "<script> window.alert('Username or Password incorrect');</script>";
		echo "<script> window.location.assign('login.php');</script>";
	}
?>