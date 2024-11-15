<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Web Application">
	<meta name="keywords" content="Assignment 1">
	<meta name="author" content="Group 4">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="">
	<title>Group 4</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Protest+Strike&display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="styles/index.css">
</head>

<body class="page4">
	<header>
		<nav>
			<div class="dropdown">
				<button class="drop"> <img src="images/logo.png" alt="menu"></button>
				<div class="dropdown-content">
					<a href="index.html">Home</a>
					<a href="jobs.html">Jobs Descriptions</a>
					<a href="apply.html">Applications</a>
					<a href="enhancements.html">Enhancements</a>
					<a href="about.html">About Us</a>
				</div>
			</div>
		</nav>
	</header>
	<!-- introduction -->
	<h1 class="bg">About Us</h1>
	<figure>
		<img src="images/group4.png" alt="group4">
	</figure>
	<main class="abus">
		<aside>
			<img src="images/p4.png" alt="computer">
		</aside>
		<ul>
			<li><strong>Group name:</strong> Group 4</li>
			<li><strong>Group ID:</strong> 12345678</li>
			<li><strong>Tutor's name:</strong> Dennis Nguyen</li>
			<li><strong>Course:</strong> COS10026</li>
		</ul>
	</main>

	<!-- about members -->
	<table>
		<tr>
			<th>Name</th>
			<th>Image</th>
			<th>DOB</th>
			<th>Hometown</th>
			<th>Hobbies</th>
		</tr>
		<tr>
			<td>Nguyễn Quý Khanh</td>
			<td><img src="images/khanh.jpg" alt="khanh"></td>
			<td>30/11</td>
			<td>Hà Nội</td>
			<td>Eat, sleep...</td>
		</tr>
		<tr>
			<td>Hoàng Minh Đức</td>
			<td><img src="images/duc.jpg" alt="duc"></td>
			<td>03/08</td>
			<td>Hà Nội</td>
			<td>Mathematics, Gaming, Music, Anime, ...</td>
		</tr>
		<tr>
			<td>Nguyễn Hoàng Tuấn Kiệt</td>
			<td>24/09</td>
			<td>Hà Nội</td>
			<td>Games, Music</td>
		</tr>
	</table>

	<!-- timetable -->
	<table>
		<tr>
			<th colspan="7">Our time table</th>
		</tr>
		<tr>
			<th> Mon</th>
			<th> Tue</th>
			<th> Wed</th>
			<th> Thurs</th>
			<th> Fri</th>
			<th>Sat</th>
			<th>Sun</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td rowspan="2" class="inquiry"><a
					href="https://swinburne.instructure.com/courses/63125">COS10026(8a.m-12p.m)</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td rowspan="2">Assignment (Lab) of all these lecture</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		<tr>
			<th colspan="7">Break time with lunch</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td class="comsys"><a href="https://swinburne.instructure.com/courses/63123">COS10004 (1p.m-5p.m)</a></td>
			<td class="webdev"><a href="https://swinburne.instructure.com/courses/63021">COS10005 (1p.m-5p.m)</a></td>
			<td></td>
			<td>Assignment (Lab) of all these lecture</td>
		</tr>
		<tr>
			<th colspan="7">Dinner, Relax</th>
		</tr>
	</table>
	<br><br>
	<footer>
		<div id="footer_left">
			<p> © 2024 Group 4. By Kiet, Duc, and Khanh.</p>
		</div>
		<div id="footer_right">
			<span>Contact us:</span>
			<ul>
				<li><a href="mailto:quykhanhnq53@gmail.com">Khanh</a></li>
				<li><a href="mailto:hoangminhduc0308@gmail.com">Đức</a></li>
				<li><a href="https://github.com/Cultz20">Kiệt</a></li>
			</ul>
		</div>
	</footer>
</body>

</html>