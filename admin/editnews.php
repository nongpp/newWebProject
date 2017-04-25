<?php	
	$target = "news/".basename($_FILES['image']['name']);
	//connect to the database
	$db = mysqli_connect("localhost","root","","tu_pattaya");
	$image = $_FILES['image']['name'];
	$topic = $_POST['topic'];
	$text = $_POST['text'];
	$idSelect = $_POST['id_select'];
		
	$sql = "UPDATE news SET image ="."'$image', topic = '$topic', text = '$text' WHERE id = $idSelect";
	$result = mysqli_query($db, $sql);
	if($result){
		echo "<script>window.location.assign('admin_page.php');</script>";
	}	
?>