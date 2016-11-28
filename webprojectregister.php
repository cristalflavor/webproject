<?php

	require 'webprojectconnect.php';

	// Registering to Database
	
	// Collecting values from webprojecthome.html user input
	$name = trim($_REQUEST['name']);
	$surname = trim($_REQUEST['surname']);
	$email = trim($_REQUEST['email']);
  $password = trim($_REQUEST['password']);
	$cPassword = trim($_REQUEST['cPassword']);
	$user = trim($_REQUEST['user']);		
	
	// This variable is used to select the appropiate response (if account is possible or not)
	$checker = 0;
	
	// Query that will fetch every email on the users table
	$result = mysqli_query($link, "SELECT email FROM users;");
	
	while (@$row = mysqli_fetch_array($result, MYSQLI_NUM)) 
	{
		if($email == $row[0])
		{	
			// In case that email is already in use	
			$checker = 1;
		}
	}
  if($checker == 0)
	{
		// In case that the provided email is not founded in the database,
		// add the user data to the db (actually, this SQL instruction is saved on $insert_sql)
		$insert_sql = "INSERT INTO users(name, surname, " .
											"password, cPassword, email, user) " .
									"VALUES('{$name}', '{$surname}', '{$password}', '{$cPassword}', " .
											"'{$email}', '{$user}');";
  
		// Now pass the data to the db
		mysqli_query($link, $insert_sql);
	}
		
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>webprojectregister</title>
<link type="text/css" rel="stylesheet" href="css/webprojectcss.css" />
<script type="text/javascript" src="jQuery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jQuery/jquery-2.1.1.js"></script>
<script src="jQuery/webprojectjs.js"></script>
</head>

<body>
	<div class="container">
  <center>
  	<?php
			// If the email isn't in use, $checker will be 0, and the registration will be OK
			if ($checker == 0){
				echo "<p class='response'>Registration Succesful!</p>";
				header("Refresh: 3; URL=webprojecthome.html");
			// If the email is already in use, then $checker value will be 1, and registration cannot be completed
			}else{
				echo "<p class='response'>Email Already In Use!</p>";
				header("Refresh: 3; URL=webprojecthome.html");
			}
		?>
  </center>
  <div class="subContainer"></div>
</body>
</html>