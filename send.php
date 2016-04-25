<?php
	require("db.php");
	$sql = "SELECT * FROM user WHERE name='".$_POST['author']."'";
	echo $sql;
	$result = mysqli_query($conn, $sql);
	if($result->num_rows == 0)
	{
		$sql = "INSERT INTO user (name, password) VALUES ('".$_POST['author']."','111111')";
		mysqli_query($conn, $sql);
		$author_num = mysqli_insert_id($conn); 
	} else {
		$row = mysqli_fetch_assoc($result);
		$author_num = $row['id'];
	}


	$sql2 = "INSERT INTO topic (title,description,author,created)VALUES('".$_POST['title']."','".$_POST['description']."','".$author_num."',now())";
	$result = mysqli_query($conn, $sql2);
	header('Location: /phpjs/1.php');
?>