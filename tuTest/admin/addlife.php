<?php
	require'./dbConnect.php';
	session_start();
	if($_SESSION['username']==''){
		header('location:login.php');
		exit();
	}
	//if upload button is pressed
	if(isset($_POST['upload'])){
		
		//connect to the database
		
		$text = $_POST['text'];
		
		$sql = "INSERT INTO lifeeng (text) VALUES ('$text')";
		mysqli_query($con, $sql); //stores the submit data into the database table: images
		
		//Now let's move the upload image into the folder: images
		

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="addlife.css">
		<link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<section id="tu-text"><h4>Faculty of Engineering</h4></section>
			<aside id="tu-logout"><a href="home.php"><p><i class="fa fa-tv" style="font-size:24px"></i>Admin site</p></a></aside>
		</header>
		
		<div id="big-content">
			<div id="menubar">
				
				<a href="admin_page.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View news</div>
				<a href="activity.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View activity</div></a>
				
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add life</div></a>
				
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div id="content-inside">
						<div id="flag">
							<a href="addlife-thai.php"><img src="img/thai.png" width="40px" id="flag-inner1"></a>
							<a href="addlife.php"><img src="img/uk.jpg" width="40px" id="flag-inner2"></a>
						</div>
						<form method="post" action="addlife.php" enctype="multipart/form-data">
							<input type="hidden" name="size" value="1000000">

							<div>
								<h3>content</h3>
								<textarea name="text" cols="40" rows="4"></textarea>
							</div>
							<div>
								<input type="submit" name="upload" value="Save">
							</div>
						</form>
			</div>
			
		</div>
	</body>
</html>