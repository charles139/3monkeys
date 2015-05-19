<!DOCTYPE html>
<html>
	<head>
		<title>3Monkeys Movies &amp; Reviews</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../../assets/css/3monkeys.css">
	</head>
<body>
	<div id="container">
		<!-- header -->
		<div id="header">
			<a href="/reviews/"><img id="logo" src="/assets/images/3monkeys.png"></a>
			
			<input id="search" type="text" name="search" placeholder="       Movie, Genre, Actor, Year">
			<input class="button" type="submit" name="button" value="submit">
			<input class="button" type="submit" name="filters" value="Filters">
			<div id="links">
				<a href="login">Log In</a>
				<a href="reg">Registration</a>
			</div>
		</div>
		<div id="title">
			<h1>3 Monkeys Movie Reviews</h1>
		</div>
		<!-- Main Search Body -->
		<div id="body">
			<h2>List View</h2>
			<?php 
			foreach ($results as $value) 
					{?>
						<?php 
							if ($value['urlPoster'] == true )
								{?>
									<img class="thumbs" src= "<?= $value['urlPoster']?>">
						  <?php } ?>
			 <?php } ?>
		</div>
		<div id="sidebar"><h2>Reviews</h2>
			<textarea></textarea>
			<input id="review" type="submit" name="post" value="Review">
	</div>
</body>
</html>
