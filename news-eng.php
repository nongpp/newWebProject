<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to Thammasat University</title>
		<meta charset="utf-8">
		<?php echo '<link rel="stylesheet" type="text/css" href="news.css">' ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	</head>
	<body>
		<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<header>
			<div id="wrapper">
				<div id = "header-inner">
					<a href = "home-eng.php" id = "logo"></a>
					<nav>
						<a href = "#" id = "menu-icon"></a>
						<ul>
							<li><a href = "home-eng.php">Home</a></li>
							<li class="dropdown"><a href = "#" class="droptn current">News and Activity</a>
								<div class="dropdown-content">
								  <a href="news-eng.php">News</a>
								  <a href="activity-eng.html">Activity</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn">About</a>
								<div class="dropdown-content">
								  <a href="staff-eng.html">Staff</a>
								  <a href="map-eng.html">Map</a>
								  <a href="vision-eng.html">Vision</a>
								  <a href="history-eng.html">History</a>
								</div>
							</li>
							<li class="dropdown"><a href = "department-eng.html" class="droptn">Department</a>
								<div class="dropdown-content">
								  <a href="http://se.engr.tu.ac.th/course.php" target="_blank">Software Engineering</a>
								  <a href="http://www.tep.engr.tu.ac.th/page_bx.php?cid=33&cname=AUTO-TU&cno=24&cno2=&show=" target="_blank">Automotive Engineering</a>
								</div>
							</li>
							<li><a href = "life-eng.php">Student's Life</a></li>
							<a href=""><img src="img/thai.png" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<!-- Start News-->
		<div id="news">
			<?php
				$db = mysqli_connect("localhost","root","","test");
				$sql = "SELECT *FROM news ORDER BY id DESC";
				$result = mysqli_query($db, $sql);
				while($row = mysqli_fetch_array($result)){
					echo "<div id='news-each'>";
						echo "<div id='img'>";
							echo "<img src = 'admin/news/".$row['image']."' width='350px'>";
						echo "</div>";
						echo "<div id='paragraph'>";
							echo "<div id='inner-paragraph'>";
								echo "<h4>".$row['topic']."</h4>";
								echo "<p>".$row['text']."</p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
			?>
		</div>
		
		<!--Start Footer-->
		<footer>
			<ul class = "social">
				<li><span>Faculty of Engineering, Thammasat University. ? 2013 All Rights Reserved</span></li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
				<li id="x"><a href = "admin/login.php">.</a></li>
			</ul>
		</footer>
		<!-- End Footer-->
	</body>
</html>