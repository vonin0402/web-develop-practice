<?php
	require("db.php");
	$result = mysqli_query($conn, "SELECT * FROM sia");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link href="/phpjs/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body id='target'>
 
 	<header class="hero-unit">
 		<h1><a href="/phpjs/1.php">JavaScript</a></h1>
 	</header>
 	<div id=control class="btn-group">>
	 	<button class="btn" type='button' id='white_btn'>White</button>
		 <button class="btn btn-inverse" type='button' id='black_btn'>Black</button>
 	</div><br><br>

 	<form action="/phpjs/send.php" method="post" class="form-horizontal">
 		<div class="control-group">
 			<label class="control-label" for="inputTitle">Title</label>
 			<div class="controls">
     			<input type="text" id="inputTitle" placeholder="ex)Data" name="title">
    		</div>
 		</div>
 		<div class="control-group">
 			<label class="control-label" for="inputAuthor">Author</label>
 			<div class="controls">
     			<input type="text" id="inputAuthor" placeholder="ex)Sia" name="author">
    		</div>
 		</div>
 		<div class="control-group">
 			<label class="control-label" for="inputDesc">Description</label>
 			<div class="controls">
     			<textarea id="inputDesc" placeholder="ex)Data is.." name="description"></textarea>
    		</div>
 		</div>
 		<div class="control-group">
		    <div class="controls">
		    	<button type="submit" class="btn">Submit</button>
		    </div>
	  	</div>
 	</form>

	<script src="/phpjs/script.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="/phpjs/js/bootstrap.min.js"></script>
</body>
</html>
