<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="zepto.min.js"></script>
	<script type="text/javascript" src="back-slide.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
	<title></title>
</head>
<body>
	<div class="back-slide">
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
	</div>
	<div class="container">
		<aside class="sidebar">
			<header>
				<hgroup>
					<h1></h1>
					<h1></h1>	
				</hgroup>
				<nav>
					<menu>
						<li><a href="#">home<br /> <span>back to home</span></a></li>
						<li><a href="#">About me<br /> <span>who am i ?</span></a></li>
						<li><a href="#">portfolio<br /> <span>my works</span></a></li>
						<li><a href="#">cooprate<br /> <span>works with forends</span></a></li>
						<li><a href="#">contact me<br /> <span>ways to find me</span></a></li>
					</menu>
				</nav>
			</header>
			<div id="hide-sidebar">
				<a href="#" class="click-hide">
					<img src="images/menu_hide_arrow_top.png" alt="click-hide" />
				</a>
			</div>
		</aside>
	</div>
</body>
</html>