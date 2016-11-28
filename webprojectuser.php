<?php
	require 'webprojectconnect.php';
	
	session_start();
	$dVariable = $_SESSION["Variable"];
	
	
	$insert_sql = "SELECT id_user FROM users WHERE user='{$dVariable}';";
	$result = mysqli_query($link, $insert_sql);
	
	while($row = mysqli_fetch_array($result, MYSQLI_NUM))
	{
		$d_id = $row[0];
	}
	
	$insert_sql = "INSERT INTO posts(id_post_and_user)" .
										"VALUES('{$d_id}');";
	
	mysqli_query($link, $insert_sql);
										
	$_SESSION["id_post_and_user"] = $d_id;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>webprojectuser</title>
<link type="text/css" rel="stylesheet" href="css/webprojectcss.css" />
<script type="text/javascript" src="jQuery/jquery-1.10.2.js"></script>
<script type="text/javascript" src="jQuery/jquery-2.1.1.js"></script>
<script src="jQuery/webprojectjs.js"></script>
</head>

<body>
	<div class="container2">
  	<div class="container3">
    	<div class="portada">
    		<img type="file" class="imagenPortada" src="images/dia.jpg" /></a>
    	</div>
      <div class="perfil">
    		<!--<a href="images"><img class="imagenPerfil" src="images/missing_user.png" /></a>-->
        <input type='file' onchange="readURL(this);" />
    		<img id="fImg" src="#" alt="your image" />
    	</div>
    	<div class="container4">
      <h1 id="usuario3"><?php echo $dVariable ?></h1>
    	</div>
      <div class="contPosting">
      <br />
      	<form action="webprojectpost.php" method="get">
        <fieldset>Post something:
      		<textarea id="posteo" name="posteo" rows="4" cols="64">
        	</textarea>
        </fieldset>
        <input type="submit" id="posteo2" name="posteo2" value="PUBLICAR"/>
        </form>
        
      </div>
    </div>
  </div>
  
</body>
</html>