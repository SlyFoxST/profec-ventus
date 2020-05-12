<?php
//Template name: New Products
get_header();
?>
<div class="flex wrap-base-content">

	<div class="sidebar-front">
		<?php
		get_template_part('template-parts/sidebars/sidebar-front');
		?>
	</div>

	<div class="wrap-coontent">
		<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>
		<header class="woocommerce-products-header">
			<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
		</header>
		<?php
		$wp_query = new WP_Query([
			'post_type' => 'product',
			'orderby' => 'DESC',
			'posts_per_page' => 8,
			'paged' => get_query_var('paged') ?: 1,
			'meta_key' => 'new',
			'meta_value' => true,

		]);
		?>
		<div class="navigation-page">
			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>
		</div>
		<div class="square-section">
			<?php

			while($wp_query->have_posts()){
				$wp_query->the_post();
				wc_get_template_part( 'content', 'product-square' );
			}

			?>

		</div>
		<div class="navigation-page">
			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>
		</div>
	</div>
</div>

<?php	

get_footer();
?>