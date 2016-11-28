<?php
	require 'webprojectconnect.php';
	
	session_start();
	
	if(($sessInit = trim($_REQUEST['sessInit']) and
	    $password2 = trim($_REQUEST['password2'])))
	{
		$result1 = mysqli_query($link, "SELECT user FROM users;");
		$result2 = mysqli_query($link, "SELECT password FROM users;");
		while(@$row = mysqli_fetch_array($result1, MYSQLI_NUM))
		{
			if($row[0] == $sessInit)
			{
				while($row2 = mysqli_fetch_array($result2, MYSQLI_NUM))
				{
					if($row2[0] == $password2)
					{
						$user = $row[0];
						$pass = $row2[0];
					}
				}
			}
		}
	}
	
	if((@$user == $sessInit and @$user != "") and ($pass == $password2))
	{
		echo "<div class='container'><center>" .
	  "<p class='response'>Welcome ". $sessInit . " </p></center></div>";
		
		$_SESSION["Variable"] = $sessInit;
		header("Refresh: 3; URL=webprojectuser.php");	
	}
	else
	{
		echo "<div class='container'><center>" .
						"<p class='response'>The input data supplied is incorrect</p>" .
				 "</center></div>";
				header("Refresh: 3; URL=webprojecthome.html");
		
		$_SESSION["Variable"] = $sessInit;
		header("Refresh: 3; URL=webprojecthome.html");
	}
  
?>
<!DOCTYPE html>
<html>
	<head>
  	<link type="text/css" rel="stylesheet" href="css/webprojectcss.css" />
  </head>
</html>