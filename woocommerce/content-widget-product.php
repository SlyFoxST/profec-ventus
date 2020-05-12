<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}
$attr = $product->get_attributes();
?>
<div>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<div class="prev-news">
		<div class="previe-img">
			<img src="<?= get_the_post_thumbnail_url($post->ID);?>" alt="<?= the_title()?>" />
		</div>
		<div class="title-previe title-prvie-new">
			<a href="<?php the_permalink()?>">
				<?php the_title();?>
			</a>
		</div>
		<div class="price-previe">
			<a href="<?php the_permalink()?>">
				<?php 
				if(!empty($attr) && is_array($attr)):
					?>

						<?= 'from ' . $product->get_price() . ' ' . get_woocommerce_currency();?>
			
				<?php else:?>
					
						<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
					
				<?php endif;?>
			</a>
		</div>
	</div>




	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</div>
