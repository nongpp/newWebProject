<?php
	require'./dbConnect.php';
	$idSelect= $_GET['id'];
	$sql ="delete from newsth where id=$idSelect";
	$result=mysqli_query($con,$sql);
	
	if($result){
		header("location:admin_page.php");
	}
	else{
		echo "Error";
	}
	
?>