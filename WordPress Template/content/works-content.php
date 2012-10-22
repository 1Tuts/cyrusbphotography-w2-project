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

							$images = get_children($gallery_attachment);
							if($images){
								foreach ($images as $img) {
									$img_middle = wp_get_attachment_image_src($img->ID,'middel');
									$img_larg = wp_get_attachment_image_src($img->ID,'large');

									echo "<li>";	

									echo '<a rel="lightbox" class="gallery-image" href="$img_larg[0]" title="نمونه ای از کارها">$img_middle[0]</a>';
									echo "</li>";	
								}
							}else echo '<p id="no-image">متاسفانه تصویری وجود ندارد برای افزودن تصویر میتوانید از پنل ادمین استفاده کنید.</p>';

						?>
					</ul>
			</div>