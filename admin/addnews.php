<?php
	//if upload button is pressed
	if(isset($_POST['upload'])){
		
		$target = "news/".basename($_FILES['image']['name']);
		//connect to the database
		$db = mysqli_connect("localhost","root","","test");
		
		$image = $_FILES['image']['name'];
		$topic = $_POST['topic'];
		$text = $_POST['text'];
		
		$sql = "INSERT INTO news (image, topic, text) VALUES ('$image', '$topic', '$text')";
		mysqli_query($db, $sql); //stores the submit data into the database table: images
		
		//Now let's move the upload image into the folder: images
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg = "Image uploaded successfully";
		}else{
			$msg = "There was a problem uploading image";
		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Add news</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="addnews.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Londrina+Sketch" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<header>
			<section id="tu-text"><h4>Faculty of Engineering</h4></section>
			<aside id="tu-logout"><a href="addnews.php"><p><i class="fa fa-tv" style="font-size:24px"></i>Admin site</p></a></aside>
		</header>
		
		<div id="big-content">
			<div id="menubar">
				<a href="home.php"><div class="menubar-inner"><i class="fa fa-bar-chart" style="font-size:24px"></i>View table</div></a>
				<a href="addnews.php"><div class="menubar-inner current"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="login.php"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div id="content-inside">
					<form method="post" action="addnews.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<div>
							<input type="file" name="image">
						</div>
						<div>
							<input type="text" name="topic">
						</div>
						<div>
							<textarea name="text" cols="40" rows="4"></textarea>
						</div>
						<div>
							<input type="submit" name="upload" value="Save">
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>