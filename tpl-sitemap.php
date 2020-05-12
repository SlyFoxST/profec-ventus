<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package profec-ventus
 */
//Template name: Sitemap
get_header();
?>

<div class="flex wrap-base-content">

	<div class="sidebar-front">
		<?php
		get_template_part('template-parts/sidebars/sidebar-front');
		?>
	</div>

	<div class="wrap-coontent-page">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
		<div class="square-section">
			<?php
			while(have_posts()){
				the_post();
				the_content();
			}
			wp_reset_query();
			?>

		</div>
		<?php
		$args = [
			'taxonomy' => 'product_cat',
			'hide_empty' => false,
			'parent' => 0,
			'orderby' => 'DESC',
		];
		$terms = get_terms($args);
		?>
		<div class="menu-terms">
			<?php
			foreach ($terms as $term) {?>
			<ul>
				<li>
					<h2><a href ="<?= get_term_link($term->term_id, 'product_cat') ?>"> <?=  $term->name ?></a></h2></li>
					<?php
					$sub_cats = get_categories( array(
						'taxonomy' => 'product_cat',
						'parent' =>$term->term_id,
						'hide_empty' => 0,
						'depth' => 1,
					) ); 
					foreach ($sub_cats as $sub) {
						?>
						<ul class="sub-term">
							<li><a href='<?= get_term_link($term->term_id,'product_cat')?>'><?= $sub->name?></a></li>
							<?php
							$childs = get_categories( array(
								'taxonomy' => 'product_cat',
								'parent' =>$sub->term_id,
								'hide_empty' => 0,
								'depth' => 1,
								'exclude' => '34'
							) );
							?>
							<ul class="sub-child">
								<?php
								foreach ($childs as $child) {
									?>

									<li>
										<a href='<?= get_term_link($term->term_id,'product_cat')?>'><?= $child->name?></a>
									</li>

									<?php
								}
								?>

							</ul>
						</ul>
						<?php
					}?>
				</ul>
				<?php
			}
			?>

			<?php 

			$args = array(
				'depth'        => 0,
				'show_date'    => '',
				'date_format'  => get_option('date_format'),
				'child_of'     => 0,
				'exclude'      => "21,23,29,2,32,216" . $post->ID . "",
				'exclude_tree' => '',
				'include'      => '',
				'title_li'     => __(''),
				'echo'         => 1,
				'sort_order'   => 'ASC',
				'post_type'    => 'page',
			); 
			?>
			<div class="wrap-pages-list">
				<ul>
					<?php
					wp_list_pages( $args );
					?>
				</ul>
			</div>
		</div>
		<div class="btn-wrap-section">
			<a href="#" onclick="history.back();return false;"><?= pll__('Back')?></a>
		</div>
	</div>
</div>

<?php
get_footer();
