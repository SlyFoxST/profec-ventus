<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

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

$obj = get_queried_object();

$sub_cats = get_categories( array(
	'taxonomy' => 'product_cat',
	'parent' =>$obj->term_id,
	'hide_empty' => 0,
	'depth' => 1,
) );
//print_r($sub_cats);
?>

<div class="flex content-archive">
	<div class="sidebar-front">
		<?php if(!empty($sub_cats) && is_array($sub_cats)):?>
			<div class="terms-wrap">
				<ul>
					<?php
					foreach ($sub_cats as $cat) {
						?>
						<li>
							<div class="icon-read"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
							<a href="<?= get_term_link($cat->cat_ID,'product_cat'); ?>">
								<?=  $cat->name;?>
							</a>
						</li>
						<?php

					}
					?>
				</ul>
			</div>
		<?php endif;?>


		<?php
		get_template_part('template-parts/sidebars/sidebar-front');
		?>

	</div>


	<div class="wrap-coontent">
		<?php

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php

$watch_previe = get_term_meta($obj->term_id,'watch_prevyu',true);
$watch_product = get_term_meta($obj->term_id,'watch_product',true);
$watch_term   = get_term_meta($obj->term_id,'get_terms',true);
if($watch_previe == 1){
	$term_id = get_queried_object_id();
	$thumb_id = get_woocommerce_term_meta($term_id, 'thumbnail_id', true );
	$dop_id  = get_term_meta($term_id,'dop_img',true);
	$dop_img = wp_get_attachment_url($dop_id);
	$term_img = wp_get_attachment_url($thumb_id);
	if(!empty($dop_id)){?>
	<img src="<?= $dop_img;?>" alt="" />
	<?php

}
else{
	?>
	<img src="<?= $term_img;?>" alt="" />
	<?php
}

}
if($watch_term == 1){?>
<div class="flex  flex-terms">

	<?php
	//print_r($sub_cats);
	foreach ($sub_cats as $cat) {
		?>
		<div class="term-box">
			<a href="<?= get_term_link($cat->cat_ID,'product_cat'); ?>">
				<?php
				$thumbnail = get_woocommerce_term_meta($cat->cat_ID, 'thumbnail_id', true);
				$url = wp_get_attachment_url($thumbnail);
				?>
				<img src="<?= $url?>" alt="<?= $cat->name?>" />
				<div class="term-name">
					<?=  $cat->name;?>
				</div>
			</a>
		</div>
		<?php

	}?>
</div>
<?php


}




$desc = get_woocommerce_term_meta($obj->term_id,'desc',true);
$term_desc = get_woocommerce_term_meta($obj->term_id,'add_description',true);
?>
<div class="content-style">
	<div class="term-description">
		<?= $desc;?>
	</div>
	<?php if(!empty($term_desc)):?>
		<div class="read-more">
			<div class="icon-more"><i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
			<?= pll__('read more')?>
		</div>
	<?php endif;?>
	<div class="term-content none">
		<?= $term_desc;?>
	</div>

</div>
<?php
if($watch_product  == 1){
	if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );?>
	<div class="wraper-line">
		<?php

		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	?>
</div>

<div class="wrap-square">
	<div class="square-section">
		<?php


		woocommerce_product_loop_start();?>

		<?php

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product-square' );
		}
	}

	woocommerce_product_loop_end();?>
</div>
</div>
<?php

do_action( 'woocommerce_before_shop_loop' );
?>


<p class="woocommerce-result-count pagination-info">
	<?php
	if ( 1 === $total ) {
		_e( 'Showing the single result', 'woocommerce' );
	} elseif ( $total <= $per_page || -1 === $per_page ) {
		/* translators: %d: total results */
		echo 'Show 1 to' .$total. '(from a total of' .$total. 'products)';
	} else {
		$first = ( $per_page * $current ) - $per_page + 1;
		$last  = min( $total, $per_page * $current );
		/* translators: 1: first result 2: last result 3: total results */

		printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
	}
	?>
</p>


<?php
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

}
elseif(is_search()){
	if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );?>
	<div class="wraper-line">
		<?php

		woocommerce_product_loop_start();

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	?>
</div>

<div class="wrap-square">
	<div class="square-section">
		<?php


		woocommerce_product_loop_start();?>

		<?php

		if ( wc_get_loop_prop( 'total' ) ) {
			while ( have_posts() ) {
				the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product-square' );
		}
	}

	woocommerce_product_loop_end();?>
</div>
</div>
<?php

do_action( 'woocommerce_before_shop_loop' );
?>


<p class="woocommerce-result-count pagination-info">
	<?php
	if ( 1 === $total ) {
		_e( 'Showing the single result', 'woocommerce' );
	} elseif ( $total <= $per_page || -1 === $per_page ) {
		/* translators: %d: total results */
		echo 'Show 1 to' .$total. '(from a total of' .$total. 'products)';
	} else {
		$first = ( $per_page * $current ) - $per_page + 1;
		$last  = min( $total, $per_page * $current );
		/* translators: 1: first result 2: last result 3: total results */

		printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
	}
	?>
</p>


<?php
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

}



/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
?>

</div>
</div>

<?php
get_footer( 'shop' );
