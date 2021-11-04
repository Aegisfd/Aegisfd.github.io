<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/style.css">
		<meta charset = "UTF-8">
		<title> Comment </title>
	</head>
	
	<body style="background-image: url('bg1.jpg');">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="photo_Gallery.php">Photo Gallery</a></li>
			<li><a href="about_Us.php">About Me</a></li>
			<li><a class="active" href="comment.php">Comment</a></li>
		</ul>
		
		<h3>Comment Slip</h3>
		
		<form action="Comment.php">
			<input type="text" name="Nama" placeholder="Nama Anda"><br><br>
			<input type="radio" name="gender" value="lelaki" checked>Lelaki<br>
			<input type="radio" name="gender" value="perempuan" checked>Perempuan<br><br>
			<input type="text" name="email" placeholder="Email Anda"><br><br>
			<textarea name="comment" width=200 height=100 placeholder="Enter your comment here"></textarea><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>