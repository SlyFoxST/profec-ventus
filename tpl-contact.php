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
//Template name: Контакты
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
		<header class="woocommerce-products-header">
			<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
		</header>
		<div class="square-section">
			<?php
			while(have_posts()){
				the_post();
				the_content();
			}
			wp_reset_query();
			?>

		</div>
		
		<div class="form-contact">
					<?php
			$lng = pll_current_language();
			if($lng == 'en'){
				echo do_shortcode('[contact-form-7 id="349" title="Контактная форма 1"]');
			}
			elseif($lng == 'uk'){
				echo do_shortcode('[contact-form-7 id="352" title="Контактная форма ua"]');
			}
			elseif($lng == 'ru'){
				echo do_shortcode('[contact-form-7 id="351" title="Контактная форма ru"]');
			}
			elseif($lng == 'de'){
				echo do_shortcode('[contact-form-7 id="353" title="Контактная форма de"]');
			}
			?>

		</div>
	</div>
</div>

<?php
get_footer();
