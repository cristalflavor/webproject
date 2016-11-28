<?php
	require 'webprojectconnect.php';
	
	session_start();
	
	$id_post_and_user = $_SESSION["id_post_and_usuario"];
	
	$post = $_REQUEST['posteo'];
	
	$insert_sql = "SELECT id_post FROM posts WHERE id_post_and_user=24;";
	
	$resultado = mysql_query($insert_sql);
	while ($row = mysql_fetch_row($resultado))
	{
		$row[0];
	}
	
	/*$insert_sql2 = "INSERT INTO posts(id_post, post, id_post_y_usuario)" .
									"VALUES('55', '{$post}', '{$id_post_y_usuario}')" .
									"WHERE id_post_y_usuario='{$id_post_y_usuario}';";
											*/
											
	$insert_sql2 = "INSERT INTO posts(post) VALUES('{$post}');";
											
	mysql_query($insert_sql2);
?>