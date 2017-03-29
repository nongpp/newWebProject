<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="life.css">
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
				<a href="life.php"><div class="menubar-inner current"><i class="fa fa-bar-chart" style="font-size:24px"></i>View life</div></a>
				<a href="addnews.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add news</div></a>
				<a href="addactivity.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add life</div></a>
				<a href="addlife.php"><div class="menubar-inner"><i class="fa fa-plus-square" style="font-size:24px"></i>Add staff</div>
				<a href="logout.php" onclick="return confirm('Are you sure to logout?');"><div class="menubar-inner"><i class="fa fa-sign-out" style="font-size:24px"></i>Log out</div></a>
			</div>
			<div id="content">
				<div class="flag">
					<img src="img/thai.png" width="40px" id="flag-inner1">
					<img src="img/uk.jpg" width="40px" id="flag-inner2">
				</div>
				<br>
				<div id="english">
					<table>
						<tr>
							<th>No</th>
							<th>life</th>
							<th>edit</th>
							<th>delete</th>
						</tr>
						<tr>
							<td>1</td>
							<td>Dormitory</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Library</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Classroom</td>
							<td>edit</td>
							<td>delete</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>