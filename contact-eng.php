<!DOCTYPE HTML>
<html lang="fa-IR">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="zepto.min.js"></script>
	<script type="text/javascript" src="back-slide.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
	<title>Contact me!</title>
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
					<h1 class="logo"><a href="index.php"><img src="images/logo.png" width="150" height="124" alt="cyrusb-photography"/></a></h1>
					<h1 class="slogan"></h1>	
				</hgroup>
				<nav>
					<menu>
						<li><a href="#">صفحه اصلی<br /> <span>بازگشت به صفحه اول</span></a></li>
						<li><a href="#">درباره من<br /> <span>معرفی مختصر خودم</span></a></li>
						<li><a href="#">نمونه کارها<br /> <span>برخی از کارهای من</span></a></li>
						<li><a href="#">همکاری<br /> <span>همکاری در پروژه های هنری</span></a></li>
						<li><a href="#">تماس<br /> <span>راه های ارتباطی</span></a></li>
					</menu>
				</nav>
			</header>
			<div id="hide-sidebar">
				<a href="#" class="click-hide">
					<img src="images/menu_hide_arrow_top.png" alt="click-hide" />
				</a>
			</div>
		</aside>
		<div class="content-container">
			<div class="content">
				<h1 class="title">فرم تماس با من</h1>
				<form action="mail.php" id="contact" method="post">
					<input type="text" class="text" name="name" id="name" placeholder="نام" />
					<input type="text" class="text" name="email" id="email" placeholder="ایمیل" />
					<textarea name="message" id="message" cols="40" rows="10" placeholder="پیام"></textarea>
					<input type="submit" value="ارسال" class="button" id="submit" name="submit" />
				</form>
				<div class="contact-info">
					<h3>راه های ارتباطی با من</h3>
					<ul>
						<li class="tell">۰۹۱۵۴۴۶۲۳۲۳</li>
						<li class="mail">info@cyrusb-photo</li>
						<li class="address">مشهد، سجاد</li>
						<li class="google-map"></li>
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<footer class="footer">
				<div class="boxes">
					<div class="box">
						<h3>تیتر آزمایشی</h3>
						<ul>
							<li><a href="#">آیتم یک</a></li>
							<li><a href="#">آیتم دو</a></li>
							<li><a href="#">آیتم سه</a></li>
						</ul>
					</div>
					<div class="box">
						<h3>تیتر آزمایشی</h3>
						<ul>
							<li><a href="#">آیتم یک</a></li>
							<li><a href="#">آیتم دو</a></li>
							<li><a href="#">آیتم سه</a></li>
						</ul>
					</div>
					<div class="box">
						<h3>تیتر آزمایشی</h3>
						<ul>
							<li><a href="#">آیتم یک</a></li>
							<li><a href="#">آیتم دو</a></li>
							<li><a href="#">آیتم سه</a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="copyright">
					<section class="social">
						<ul>
							<li><a href="#" target="_blank"><img src="images/facebook.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/googleplus.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/linkedin.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/twitter.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/flickr.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/picasa.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/youtube.png" width="16" height="16"/></a></li>
							<li><a href="#" target="_blank"><img src="images/rss.png" width="16" height="16"/></a></li>
						</ul>
					</section>
					<p>copyright 2012 sirous bijanfar</p>
				</div>
			</footer>
		</div>
	</div>
</body>
</html>