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
						 <?php

							$gallery_attachment=array(
								'numberposts' => '-1',
								'orderby '=> 'menu_order',  
								'order'=> 'ASC',  
								'post_mime_type' => 'image', 
								'post_parent' => $postID, 
								'post_status' => null, 
								'post_type' => 'attachment'
							);
						?>
					</ul>
			</div>