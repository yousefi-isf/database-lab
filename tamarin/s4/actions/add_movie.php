<?php
        if(empty($_POST)) header('location:http://localhost');
            
        // connect to mysqli

		include_once '../includes/mysqli_conn.php';
		$db = new mysqli_conn();
		$db->mysql_conn();

        // get data from $_POST var
        
        $data = $_POST;
        $mo_name = $data['mo_name'];
        $mo_year = $data['mo_year'];
        $mo_creator = $data['mo_creator'];
        $res = $db->con->query("INSERT INTO  movies (mo_name, mo_year, mo_creator) VALUES ('$mo_name','$mo_year','$mo_creator')");
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
		<?php
            if($res){
                echo("<p>Successfully Added !</p>");
                echo("<a href='http://localhost'>Back to forms</a>");
            }else{
                echo("<p>failed ...</p>");
    
            }
        ?>
	</body>
</html>
