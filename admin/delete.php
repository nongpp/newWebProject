<?php
	$db = mysqli_connect("localhost","root","","tu_pattaya");
	$idSelect= $_GET['id'];
	$sql ="delete from news where id=$idSelect";
	$result=mysqli_query($db,$sql);
	
	if($result){
		header("location:admin_page.php");
	}
	else{
		echo "Error";
	}
	
?>