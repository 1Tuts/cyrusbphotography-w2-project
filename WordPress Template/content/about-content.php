<div class="content-container">
	<div class="content">
		<h1 class="title">درباره من</h1>
		<?php

			if( have_posts() ){
				the_post();
		?>

		<h1 class="cyrus"><?php the_title(); ?></h1>
		<section class="biography">
			<p><?php the_content(); ?></p>
		</section>

		<?php

			}
		?>