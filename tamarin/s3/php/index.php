<?php
	include './classes/dbh.class.php';
	include './classes/user.class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>php-mysql</title>
</head>
<body>
	<?php
		$obj = new Insert;
		$obj->insertToUsers();
	?>
</body>
</html>
