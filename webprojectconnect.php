<?php
	require 'webprojectconstant.php';
	// Connection to the Database

		$link = mysqli_connect(DATABASE_HOST, USERNAME, PASSWORD, DATABASE_NAME);
		if(mysqli_connect_errno()){
    	printf("Connect failed: %s\n", mysqli_connect_error());
			header("Location: webprojecthome.html");
		}
		
?>