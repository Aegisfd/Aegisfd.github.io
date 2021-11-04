<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<style>
			body {
				position: absolute;
				top: 0; bottom: 0; left: 0; right: 0;
				height: 100%;
			}
			body:before {
				content: "";
				position: absolute;
				background: url(image/background2.jpg);
				background-size: cover;
				z-index: -1; /* Keep the background behind the content */
				height: 20%; width: 20%; /* Using Glen Maddern's trick /via @mente */

				/* don't forget to use the prefixes you need */
				transform: scale(5);
				transform-origin: top left;
				filter: blur(1px);
			}
			img {
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			
			p{
				text-align:center;
				font-size:60px;
				color:white;
				font-style:italic;
			}
			
			.glow {
				font-size: 60px;
				color: #fff;
				text-align: center;
				animation: glow 1s ease-in-out infinite alternate;
			}

			@-webkit-keyframes glow {
				from {
					text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
				}
  
				to {
					text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
				}
			}
			
		</style>
		<meta charset = "UTF-8">
		<title> About Us </title>
	</head>
	
	<body>
		<div class="nav">
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="photo_Gallery.html">Photo Gallery</a></li>
			<li><a class="active" href="about_Us.html">About Me</a></li>
		</ul>
		</div>
		<div>
			<header>
			<h1 style="text-align: center; color:white;">Timetable</h1>
			</header>
			<img src="image/timetable.png"></img>
		</div>
		<br>
		<div>
			<h1 class="glow"><b>If I can go BEYOND the A+ grade, <br>then I will use 100% of my power to attain that grade.</b></h1>
		</div>

	</body>
</html>