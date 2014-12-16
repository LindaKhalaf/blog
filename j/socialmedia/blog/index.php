<!DOCTYPE html>
	<html>
		<head>
			<?php 
				//adds in all files for the blog into index
					require_once(__DIR__ . "/controler/login-verify.php");
					require_once(__DIR__ . "/view/header.php");
					if (authenticateUser()) {//if er are an authenticated user, then we can post!
						require_once(__DIR__ . "/view/navigation.php");
					}
					
					require_once(__DIR__ . "/controler/create-db.php");
					require_once(__DIR__ . "/view/footer.php");
					require_once(__DIR__ . "/controler/read-posts.php");
 			?>
 			<!--stylesheets -->
			<link rel="stylesheet" href="css/stylesheets/bootstrap.css">
			<link rel="stylesheet" href="css/stylesheets/main.css">
			<link href='http://fonts.googleapis.com/css?family=Ubuntu:500italic' rel='stylesheet' type='text/css'>
			<title></title>
		</head>
		<body>
		</body>
	</html>


