<?php
	require'./admin/dbConnect.php';
	session_start();
	if($_SESSION['username']==''){
		header('location:login.php');
		exit();
	}else{
	$sql = "SELECT *FROM activitythai ORDER BY id DESC";
	$result = mysqli_query($con, $sql);}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>History</title>
		<meta charset="utf-8">
		<?php echo '<link rel="stylesheet" type="text/css" href="activity-thai.css">'; ?>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
	</head>
	<body>
		<img src="https://goo.gl/EMCghL" class="black-ribbon stick-top stick-right"/>
		<header>
			<div id="wrapper">
				<div id = "header-inner">
					<a href = "home-thai.php" id = "logo"></a>
					<nav>
						
						<ul>
							<li><a href = "home-thai.php">หน้าหลัก</a></li>
							<li class="dropdown"><a href = "#" class="droptn current">ข่าวและกิจกรรม</a>
								<div class="dropdown-content">
								  <a href="news-thai.php">ข่าว</a>
								  <a href="activity-thai.php">กิจกรรม</a>
								</div>
							</li>
							<li class="dropdown"><a href = "#" class="droptn">เกี่ยวกับ</a>
								<div class="dropdown-content">
								  <a href="staff-thai.php">บุคลากร</a>
								  <a href="map-thai.php">แผนที่</a>
								  <a href="vision-thai.php">วิสัยทัศน์</a>
								  <a href="history-thai.php">ประวัติความเป็นมา</a>
								</div>
							</li>
							<li class="dropdown"><a href = "program-thai.php" class="droptn">หลักสูตร</a>
								<div class="dropdown-content">
								  <a href="soft-thai.php">วิศวกรรมซอฟต์แวร์</a>
								  <a href="auto-thai.php">วิศวกรรมยานยนตร์</a>
								</div>
							</li>
							<li><a href = "life-thai.php">ชีวิตนักศึกษา</a></li>
							<a href="history-eng.php"><img src="img/uk.jpg" alt="thai" width="40px" height="20px" class="flag"></a>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header-->
		
		<div id="container">
			<h3>กิจกรรม</h3>
			<div id="table">
				<table>
					<tr>
						<th>ID</th>
						<th>วันที่</th>
						<th>กิจกรรม</th>
						<th>รายละเอียด</th>
					</tr>
					<?php while($row= mysqli_fetch_row($result)){?>
					<tr>
						<td><?php echo $row[0] ?></td>
						<td><?php echo $row[1] ?></td>
						<td><?php echo $row[2] ?></td>
						<td><?php echo $row[3] ?></td>
					</tr>
					<?php }?>
							
				</table>
			</div>
		</div>
		
		<!--Start Footer-->
		<footer>
			<ul class = "social">
				<li><span>Faculty of Engineering, Thammasat University. ? 2013 All Rights Reserved</span></li>
				<li><a href = "https://www.facebook.com/ENGR.THAMMASAT" target = "_blank"><i class = "fa fa-facebook"></i></a></li>
				<li><a href = "https://twitter.com/engr_tu" target = "_blank"><i class = "fa fa-twitter"></i></a></li>
				<li><a href = "http://www.engr.tu.ac.th/en/rss" target = "_blank"><i class = "fa fa-rss-square"></i></a></li>
			</ul>
		</footer>
		<!-- End Footer-->
		
	</body>
</html>