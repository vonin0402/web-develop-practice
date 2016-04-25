<?php
	require("db.php");
	$result = mysqli_query($conn, "SELECT * FROM topic");
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
	<div class="container-fluid">
	 	<header class="hero-unit text-center">
	 		<h1><a href="/phpjs/1.php">Sia World</a></h1>
	 	</header>
	 	<div class="row">
		 	<nav class="span3">
		 		<ol>
		 			<?php
		 				while($row = mysqli_fetch_assoc($result)) {
							echo '<li><a href="1.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>';
						}

						echo 4<<2;
		 			?>
		 		</ol>
		 	</nav>
			<article class="span9">
		 		<?php
			  		if(!empty($_GET['id'])) {
			 			$query = 'SELECT title, description, name FROM topic LEFT JOIN user ON topic.author = user.id WHERE topic.id = '.$_GET['id'];
			 			$result2 = mysqli_query($conn, $query);
			 			$data = mysqli_fetch_assoc($result2);
			 			echo '<h2>'.htmlspecialchars($data['title']).'</h2>';
			 			echo '<h6>Author : '.htmlspecialchars($data['name']).'<h6>';
			 			
			 			echo strip_tags($data['description'],"<a><h1><h2><h3><ol><ul><li>");
			 		}
				?>
				<hr>
				<div id=control>
			 		<div class="btn-group">
					 	<button class="btn" type='button' id='white_btn'>White</button>i
					 	<button class="btn btn-inverse" type='button' id='black_btn'>Black</button>
				 	</div>
				 	<a href="/phpjs/write.php"><button class="btn btn-link" type='button'>Write</button></a>
		 		</div>
		 	</article>
	 	</div>
	 </div>
	
	<script src="/phpjs/script.js"></script>
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="/phpjs/js/bootstrap.min.js"></script>
</body>
</html>
