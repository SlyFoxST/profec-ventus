<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

?>
<div class="sort-line">
	<div class="flex line-flex">
		<div class="wrap-line">
			<div class="previe-item">
				<?php if(get_post_meta($product->get_ID(),'top',true) == 1){?>
				<div class="status_product">
				Top	
				</div>
				<?php } ?>
				<a href="<?php the_permalink()?>">
					<?php the_post_thumbnail()?>
				</a>
			</div>
			<div class="info-item">
				<div class="line-title">
				<a href="<?php the_permalink()?>">
					<h2><?php the_title()?></h2>
				</a>
			</div>
			<div class="param-line">
				<?= get_post_meta($product->get_ID(),'add_param',true)?>
			</div>
			</div>
		</div>
		<div class="line-param-cart">
			<div class="price-item">
				<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
			</div>
			<div class="tax"><?= pll__('plus 19%')?></div>
			<div class="add-to-cart tablet-none">
				<a href="<?= get_permalink()?>"  class="button product_type_simple add_to_cart_button  add_to_cart_green" data-product_id="<?= $product->get_ID()?>" data-product_sku="" aria-label="" rel="nofollow" style="position: static !important;"><?= pll__('Show product')?></a>
			</div>
		</div>
	</div>
</div>



