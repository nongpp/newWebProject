<?php
	$db = mysqli_connect("localhost","root","","tu_pattaya");
	$idSelect= $_GET['id'];
	$sql ="delete from activitythai where id=$idSelect";
	$result=mysqli_query($db,$sql);
	
	if($result){
		header("location:activity.php");
	}
	else{
		echo "Error";
	}
	
?>