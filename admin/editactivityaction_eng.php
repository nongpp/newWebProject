<?php	

	//connect to the database
	$db = mysqli_connect("localhost","root","","tu_pattaya");
	
	$date = $_POST['date'];
	$topic = $_POST['topic'];
	$detail = $_POST['detail'];
	$idSelect = $_POST['id_select'];
		
	$sql = "UPDATE activityeng SET date ="."'$date', topic = '$topic', detail = '$detail' WHERE id = $idSelect";
	$result = mysqli_query($db, $sql);
	if($result){
		echo "<script>window.location.assign('addactivity.php');</script>";
	}	
?>