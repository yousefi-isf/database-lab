<?php
		include_once './includes/mysqli_conn.php';
		$db = new mysqli_conn();
		$db->mysql_conn();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="script.js"></script>
		<link rel="stylesheet" href="styles.css"> 
		<title>Document</title>
	</head>
	<body>
		<h2>ADD MOVIE</h2>
		<section class="add-movie">
			<form action="./actions/add_movie.php" method="post" class="add-movie-form">
				<label>movie name</label>
				<input type="text" name="mo_name">
				<label>movie year</label>
				<input type="text" name="mo_year">
				<label>movie creater</label>
				<input type="text" name="mo_creator">
				<input type="submit" value="send movie">
			</form>
		</section>
	</body>
</html>
	
