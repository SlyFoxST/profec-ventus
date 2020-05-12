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
global $woocommerce;
$lang = pll_current_language('slug');
$cart = $woocommerce->cart->get_cart();
$total_sum = $woocommerce->cart->get_cart_subtotal();
$count = $woocommerce->cart->cart_contents_count;
foreach ($cart as $key => $value) {
	$cart_key =  $key;
}
if ( ! WC()->cart->is_empty() ) : ?>
<div class="titlte-mini-cart"><?= pll__('Shopping Cart'); ?></div>
<ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
	<div class="triugolnik"></div>
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
			<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">

				<?php if ( empty( $product_permalink ) ) : ?>
					<div class="mini-cart-product">
						<a href="<?= get_permalink($product_id );?>">
							<?php echo $thumbnail ?>
						</a>
					</div>
					<div class="mini-cart-name">
						<a href="<?= get_permalink($product_id );?>">
							<?=  $product_name; ?>
						</a>
					</div>
				<?php else : ?>
					<div class="mini-cart-product">
						<a href="<?= get_permalink($product_id );?>">
							<?php echo $thumbnail ?>
						</a>
					</div>
					<div class="mini-cart-name">
						<a href="<?= get_permalink($product_id );?>">
							<?=  $product_name; ?>
						</a>
					</div>
				<?php endif; ?>
				<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				<?= $total_sum?>
			</li>
			<?php
		}
	}

	do_action( 'woocommerce_mini_cart_contents' );
	?>
</ul>

<p class="woocommerce-mini-cart__total total">
	<?php
		/**
		 * Hook: woocommerce_widget_shopping_cart_total.
		 *
		 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
		 */
		do_action( 'woocommerce_widget_shopping_cart_total' );
		?>
	</p>

	<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

	<p class="woocommerce-mini-cart__buttons buttons">
		<a href="http://coder.cx.ua/coder.profec/cart/" class="button wc-forward"><?= pll__('Show cart')?></a>
	</p>

	<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>
