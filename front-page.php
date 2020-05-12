<?php
//Template name: Front page
get_header();
$query_top = new WP_Query([
	'post_type' => 'product',
	'meta_key' => 'top',
	'meta_value' => true,
]);
$query_new = new WP_Query([
	'post_type' => 'product',
	'posts_per_page' => 1,
	'orderby'  => 'DESC',

]);

$query_new2 = new WP_Query([
	'post_type' => 'product',
	'posts_per_page' => 10,
	'orderby'  => 'DESC',

]);


$terms = get_terms( array(
	'taxonomy'      => array('product_cat'), // название таксономии с WP 4.5
	'orderby'       => 'id', 
	'order'         => 'ASC',
	'hide_empty'    => false, 
	'object_ids'    => null,
	'include'       => array(),
	'exclude'       => array(63,69,67,65), 
	'exclude_tree'  => array(), 
	'number'        => '', 
	'fields'        => 'all', 
	'count'         => false,
	'slug'          => '', 
	'parent'         => 0,
	'hierarchical'  => true, 
	'child_of'      => 0, 
	'get'           => '', // ставим all чтобы получить все термины
	'name__like'    => '',
	'pad_counts'    => false, 
	'offset'        => '', 
	'search'        => '', 
	'cache_domain'  => 'core',
	'name'          => '',   
	'childless'     => false,
	'update_term_meta_cache' => true, 
	'meta_query'    => '',
) );


while(have_posts()){
	the_post();?>
	<div class="flex wrap-base-content">
		<div class="sidebar-front">
			<?php
			wp_nav_menu( [
				'theme_location'  => 'front_sidebar',
				'menu'            => 'front_sidebar', 
				'container'       => 'div', 
				'container_class' => '', 
				'container_id'    => '',
				'menu_class'      => 'menu', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '<div class="icon-read"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] );

			get_template_part('template-parts/sidebars/sidebar-front');
			?>
		</div>
		<div class="wrap-coontent">
			<?php
			the_content();
			?>

			<div class="wrap-slider-front">
				<div class="title-slider"><?= pll__('Our advice')?></div>
			</div>
			<div class="slider-front">
				<?php
				while($query_top->have_posts()){
					$query_top->the_post();
					$gallery = $product->get_gallery_image_ids();
					if(!empty($gallery)){
						$class='has_gallery';
						$scew = 'no-skew';
					}
					else{
						$class='no-gallery';
						$scew = 'skew';
					}

					?>
					<div class="slide previe-square <?= $scew;?>">
						<?php $gallery = $product->get_gallery_image_ids();
						if(!empty($gallery)){
							$class='has_gallery';
						}
						else{
							$class='no-gallery';
						}

						?>
						<div class="<?= $class?>">
							<?php if(get_post_meta($product->get_ID(),'top',true) == 1){?>
							<div class="status_product">
								Top	
							</div>
							<?php } ?>
							<div class="square-previe">
								<a href="<?php the_permalink()?>">
									<?php the_post_thumbnail()?>
								</a>
							</div>
							<h3>
								<a href="<?php the_permalink()?>">
									<?php the_title()?>
								</a>
							</h3>
							<?php 
							if(!empty($attr) && is_array($attr)):
								?>
								<div class="price-square">
									<a href="<?php the_permalink()?>">
										<?= 'from' . $product->get_price() . ' ' . get_woocommerce_currency();?>
									</a>
								</div>
							<?php else:?>
								<div class="price-square">
									<a href="<?php the_permalink()?>">
										<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
									</a>
								</div>
							<?php endif;?>

						</div>

						<div class="block_gallery">
							<div class="flex square-gallery">
								<div class="flex square-img">
									<?php
									foreach ($gallery as $id) {
										?>
										<div class="img-square">
											<a href="<?php the_permalink()?>">
												<img src="<?= wp_get_attachment_image_url($id); ?>" alt="<?php the_title()?>" />
											</a>
										</div>
										<?php
									}
									?>
								</div>
								<div class="meta-prev-square">
									<div  class="img-square-prev">
										<a href="<?php the_permalink()?>">
											<img src="<?= get_the_post_thumbnail_url()?>" class="img-square-big">
										</a>
									</div>
									<h3>
										<a href="<?php the_permalink()?>">
											<?php the_title()?>
										</a>
									</h3>
									<?php 
									if(!empty($attr) && is_array($attr)):
										?>
										<div class="price-square">
											<a href="<?php the_permalink()?>">
												<?= 'from' . $product->get_price() . ' ' . get_woocommerce_currency();?>
											</a>
										</div>
									<?php else:?>
										<div class="price-square">
											<a href="<?php the_permalink()?>">
												<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
											</a>
										</div>
									<?php endif;?>

								</div>

							</div>
						</div>
					</div>

					<?php

				}
				wp_reset_query();
				?>
			</div>

			<div class="wrap-slider-front">
				<div class="title-slider"><?= pll__('Category')?></div>
			</div>

			<div class="flex wrap-term">
				<?php
				foreach( $terms as $term ){

					$thumb_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
					$term_img = wp_get_attachment_url(  $thumb_id );?>
					<div class="thumbnail-term">
						<div class="prev-term">
							<img src="<?= $term_img; ?>" alt="<?= $term->name;?>" alt="<?= $term->name?>" />
						</div>
						<div class="term-name">
							<a href="<?= get_term_link($term->term_id, $taxonomy = 'product_cat' );?>">
								<?= $term->name; ?>
							</a>
						</div>
					</div>
					<?php

				}

				?>



			</div>


			<div class="wrap-slider-front">
				<div class="title-slider"><?= pll__('New product')?></div>
			</div>
			<div class="slider-front">
				<?php
				while($query_new2->have_posts()){
					$query_new2->the_post();
					$attr = $product->get_attributes();
					$gallery = $product->get_gallery_image_ids();
					if(!empty($gallery)){
						$class='has_gallery';
						$scew = 'no-skew';
					}
					else{
						$class='no-gallery';
						$scew = 'skew';
					}

					?>
					<div class="slide previe-square <?= $scew;?>">
						<?php $gallery = $product->get_gallery_image_ids();
						if(!empty($gallery)){
							$class='has_gallery';
						}
						else{
							$class='no-gallery';
						}

						?>
						<div class="<?= $class?>">
							<?php if(get_post_meta($product->get_ID(),'top',true) == 1){?>
							<div class="status_product">
								Top	
							</div>
							<?php } ?>
							<div class="square-previe">
								<a href="<?php the_permalink()?>">
									<?php the_post_thumbnail()?>
								</a>
							</div>
							<h3>
								<a href="<?php the_permalink()?>">
									<?php the_title()?>
								</a>
							</h3>
							<?php 
							if(!empty($attr) && is_array($attr)):
								?>
								<div class="price-square">
									<?= 'from ' . $product->get_price() . ' ' . get_woocommerce_currency();?>
								</div>
							<?php else:?>
								<div class="price-square">
									<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
								</div>
							<?php endif;?>


						</div>

						<div class="block_gallery">
							<div class="flex square-gallery">
								<div class="flex square-img">
									<?php
									foreach ($gallery as $id) {
										?>
										<div class="img-square">
											<a href="<?php the_permalink()?>">
												<img src="<?= wp_get_attachment_image_url($id); ?>" alt="<?php the_title()?>" />
											</a>
										</div>
										<?php
									}
									?>
								</div>
								<div class="meta-prev-square">
									<div  class="img-square-prev">
										<a href="<?php the_permalink()?>">
											<img src="<?= get_the_post_thumbnail_url()?>" class="img-square-big">
										</a>
									</div>
									<h3>
										<a href="<?php the_permalink()?>">
											<?php the_title()?>
										</a>
									</h3>
									<?php 
									if(!empty($attr) && is_array($attr)):
										?>
										<div class="price-square">
											<a href="<?php the_permalink()?>">
												<?= 'from' . $product->get_price() . ' ' . get_woocommerce_currency();?>
											</a>
										</div>
									<?php else:?>
										<div class="price-square">
											<a href="<?php the_permalink()?>">
												<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
											</a>
										</div>
									<?php endif;?>

								</div>

							</div>
						</div>
					</div>

					<?php

				}
				wp_reset_query();
				?>
			</div>


		</div>


	</div>
	<?php

}

get_footer();

?>