<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' );
$lng = pll_current_language();
if($lng == 'en'){
	$cart =  PATH . '/cart/';
	$sitemap = PATH . '/sitemap/';
	$wishlist = PATH . '/wish-list';
	$search  = PATH . '/advanced-search';
}
elseif($lng == 'uk'){
	$cart =  PATH . 'uk/cart/';
}
elseif($lng == 'ru'){
	$cart =  PATH . 'ru/cart/';
}
elseif($lng == 'de'){
	$cart =  PATH . 'de/cart/';
}

 ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>

	<div class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
		<?php
		do_action( 'woocommerce_before_mini_cart_contents' );

		foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
			$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
			$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

			if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
				$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
				$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
				$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
				$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
				?>
				<div class="flex woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">

					<?php if ( empty( $product_permalink ) ) : ?>
						<div class="mini-cart-thumb">
							<?= $thumbnail?>
						</div>
						<div class="mini-cart-link">
							<?= $product_name;?>
						</div>
					<?php else : ?>
						<div class="mini-cart-thumb">
							<a href="<?php echo esc_url( $product_permalink ); ?>">
								<?= $thumbnail ?>
							</a>
						</div>
						<div class="mini-cart-link">
							<a href="<?php echo esc_url( $product_permalink ); ?>">
								<?= $product_name;?>
							</a>
						</div>
					<?php endif; ?>
					<div>
						<?php echo wc_get_formatted_cart_item_data( $cart_item );  ?>
						<?php echo $product_price  ?>
					</div>
				</div>
				<?php
			}
		}

		do_action( 'woocommerce_mini_cart_contents' );
		?>
	</div>
	<div class="flex mini-cart-total">
		<div class="mini-cart-title-total"><?= pll__('Total:')?></div>
		<div class="mini-cart-price-tatal"><?php wc_cart_totals_order_total_html(); ?></div>
	</div>
	<div class="flex mini-cart-tax">
		<div>excl. 19% tax:</div>
		<div data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></div>
	</div>
<div class="woocommerce-mini-cart__buttons buttons">
	<a href="<?= $cart ?>" class="button wc-forward"><?= pll__('Show Cart')?></a>
</div>


<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
