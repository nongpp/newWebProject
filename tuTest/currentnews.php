<?php
	require'./admin/dbConnect.php';
	
	$idSelect = $_GET['id'];
	$sql = "select * from news where id=$idSelect";
	$result = mysqli_query($con,$sql);
	
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Software Engineering</title>
		<meta charset="utf-8">
		<?php echo '<link rel="stylesheet" type="text/css" href="currentnews.css">'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
	</head>
	<body>
		<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<header>
			<div id="wrapper">
				<div id = "header-inner">
					<a href = "home-eng.php" id = "logo"></a>
					<nav>
						<ul>
							<li><a href = "home-eng.php">Home</a></li>
							<li class="dropdown"><a href = "#" class="droptn current">News and Activity</a>
								<div class="dropdown-content">
								  <a href="news-eng.php">News</a>
								  <a href="activity-eng.php">Activity</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn">About</a>
								<div class="dropdown-content">
								  <a href="staff-eng.php">Staff</a>
								  <a href="map-eng.php">Map</a>
								  <a href="vision-eng.php">Vision</a>
								  <a href="history-eng.php">History</a>
								</div>
							</li>
							<li class="dropdown"><a href = "program-eng.php" class="droptn">Program</a>
								<div class="dropdown-content">
								  <a href="soft-eng.php">Software Engineering</a>
								  <a href="auto-eng.php">Automotive Engineering</a>
								</div>
							</li>
							<li><a href = "life-eng.php">Student's Life</a></li>
							<a href="life-thai.php"><img src="img/thai.png" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<div id="container">
			<?php
				echo "<img src='admin/news/".$row['image']."'>";
				echo "<h3>".$row['topic']."</h3>";
				echo "<p>".$row['text']."</p>";
			?>
		</div>
		
		<!-- Start Footer-->
		<footer>
			<ul class = "social">
				<li><span>Faculty of Engineering, Thammasat University. ? 2013 All Rights Reserved</span></li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
				<li id="x"><a href = "admin/login.php">.</a></li>
			</ul>
		</footer>
		<!--End Footer-->
	</body>
</html>