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

get_header();
?>

<div class="flex wrap-base-content">

	<div class="sidebar-front">
		<?php
		get_template_part('template-parts/sidebars/sidebar-front');
		?>
	</div>

	<div class="wrap-coontent-page">
		<?php if(!is_cart() && !is_checkout()):?>
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>

		<header class="woocommerce-products-header">
			<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
		</header>
		<?php endif;?>
		<div class="square-section">
			<?php
			while(have_posts()){
				the_post();
				the_content();
			}
			wp_reset_query();
			?>

		</div>
		<?php if(!is_cart() && !is_checkout()):?>
		<div class="btn-wrap-section">
			<a href="#" onclick="history.back();return false;"><?= pll__('Back')?></a>
		</div>
	<?php endif;?>
	</div>
</div>

<?php
get_footer();
