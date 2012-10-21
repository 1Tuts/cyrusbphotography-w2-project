		<div class="content-container">
			<div class="content">
				
				<?php

					if (have_posts()) {
						the_post();
				?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="gallery">
					<p><?php the_content(); ?></p>
					<ul>
						
				</ul>
			</div>