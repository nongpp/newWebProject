<?php
	$db = mysqli_connect("localhost","root","","test");
	$idSelect= $_GET['id'];
	$sql ="delete from news where id=$idSelect";
	$result=mysqli_query($db,$sql);
	
	if($result){
		header("location:home.php");
	}
	else{
		echo "Error";
	}
	
?>