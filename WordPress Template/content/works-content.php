		<div class="content-container">
			<div class="content">
				
				<?php

					if (have_posts()) {
						the_post();
				?>
				<h1 class="title"><?php the_title(); ?></h1>
				<div class="gallery">
					
					<ul>
						 <?php

							$gall_attach= array(
								'numberposts' => '-1',
								'orderby '=> 'menu_order',  
								'order'=> 'ASC',  
								'post_mime_type' => 'image', 
								'post_parent' => $post->ID, 
								'post_status' => null, 
								'post_type' => 'attachment'
							);

							$images= get_children($gall_attach);

							if ($images){

								foreach ($images as $img) {
									$img_med= wp_get_attachment_image($img->ID,'medium');
									$img_larg= wp_get_attachment_image_src($img->ID,'large');

									echo "<li>";
										
										echo "<a rel='lightbox' href=\"$img_larg[0]\"> $img_med </a>";

										echo "<p class='image-description'> $img->post_content </p>";
										echo "<a class='more'>اطلاعات بیشتر</a>";
									
									echo "</li>";
								}
								echo "<div class='clear'></div>";

								

							}
							else 
								echo "<p class='no-image'>تصویری یافت نشد</p>";
							
						?>
					</ul>
			</div>
		<?php
			}
		?>
	</div>