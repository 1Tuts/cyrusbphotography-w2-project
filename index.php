<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="zepto.min.js"></script>
	<script type="text/javascript" src="back-slide.js"></script>
	<title></title>
</head>
<body>
	<!-- <div class="back-slide">
		<?php

			$images_path = './images/back-slide';
			$images      = scandir($images_path);

			foreach ($images as $img) {

				$img_type = strtolower( end( explode( '.' , $img ) ) );

				if($img_type == 'jpg' || $img_type == 'png'){

					echo "<div style=\"background-image : url('$images_path/$img');\"></div>";
				}
			}


		?>
	</div> -->
	<div class="container">
		<header>
			<hgroup>
				<h1></h1>
				<h1></h1>	
			</hgroup>
			<nav>
				<menu>
					<li><a href="#">home</a></li>
					<li><a href="#">About me</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">cooprate</a></li>
					<li><a href="#">contact me</a></li>
				</menu>
			</nav>
		</header>
	</div>
</body>
</html>