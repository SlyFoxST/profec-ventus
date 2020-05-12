<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
 <div class="product-interf flex">
	<div class="btn-square"><i class="fa fa-th" aria-hidden="true"></i></div>
	<div class="btn-line active"><i class="fa fa-th-list" aria-hidden="true"></i></div>
	<div class="btn-group dropdown custom-dropdown">
		<div class="btn btn-default dropdown-toggle">
			<div class="icon-toggle">
				<i class="fa fa-caret-down" aria-hidden="true"></i>
			</div>
			<span class="dropdown-name">
				<?= pll__('Price descending order')?>
			</span>
		</div>
		<ul class="dropdown-menu">
			<li><span data-rel="price_asc" href="#" title="Price ascending" data-src="price-acs"><?= pll__('Price ascending')?></span>
			</li>
			<li><span data-rel="price_desc" href="#" title="Price descending order" data-src="price-desc"><?= pll__('Price descending order')?></span></li>
			<li class="divider"></li>
			<li><span data-rel="name_asc" href="#" title="Name ascending" data-src="name-acs"><?= pll__('Name ascending')?></span>
			</li>
			<li><span data-rel="name_desc" href="#" title="Name descending order" data-src="name-desc"><?= pll__('Name descending order')?></span>
			</li>
			<li class="divider"></li>
			<li><span data-rel="date_asc" href="#" title="Date added ascending" data-src="date-asc"><?= pll__('Date added ascending')?></span>
			</li>
			<li><span data-rel="date_desc" href="#" title="Date added descending order" data-src="date-desc"><?= pll__('Date added descending order')?></span>
			</li>
			<li class="divider"></li>
			<li><span data-rel="shipping_asc" href="#" title="Delivery time ascending" data-src="delivery-asc"><?= pll__('Delivery time ascending')?></span></li>
			<li><span data-rel="shipping_desc" href="#" title="Delivery time descending order" data-src="delivery-desc"><?= pll__('Delivery time descending order')?></span></li>
		</ul>

	</div>

	<div class="btn-group dropdown page-filter custom-dropdown">
		<div class="btn btn-default dropdown-toggle2">
			<div class="icon-toggle">
				<i class="fa fa-caret-down" aria-hidden="true"></i>
			</div>
			<span class="dropdown-name">
				<?= pll__('200 per page')?>
			</span>
		</div>
		<ul class="dropdown-menu2">
			<li><span data-rel="price_asc" href="#" title="Price ascending" data-src="price-acs"><?= pll__('200 per page')?></span>
			</li>
			<li><span data-rel="price_desc" href="#" title="Price descending order" data-src="price-desc"><?= pll__('400 per page')?></span></li>
			<li class="divider"></li>
			<li><span data-rel="name_asc" href="#" title="Name ascending" data-src="name-acs"><?= pll__('600 per page')?></span>
			</li>
			<li><span data-rel="name_desc" href="#" title="Name descending order" data-src="name-desc"><?= pll__('1200 per page')?></span>
			</li>
			<li class="divider"></li>
			<li><span data-rel="date_asc" href="#" title="Date added ascending" data-src="date-asc"><?= pll__('2400 per page')?></span>
			</li>
		</ul>

	</div>

</div>
<!-- <div class="product-interf flex">
	<div class="btn-square"><i class="fa fa-th" aria-hidden="true"></i></div>
	<div class="btn-line active"><i class="fa fa-th-list" aria-hidden="true"></i></div>
	<div class="sort-form">
		<form class="woocommerce-ordering" method="get">
			<select name="orderby" class="orderby" aria-label="<?php// esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
				<?php //foreach ( $catalog_orderby_options as $id => $name ) : ?>
					<option value="<?php// echo esc_attr( $id ); ?>" <?php// selected( $orderby, $id ); ?>><?php// echo esc_html( $name ); ?></option>
				<?php //endforeach; ?>
			</select>
			<input type="hidden" name="paged" value="1" />
			<?php// wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
		</form>
	</div>
</div> -->
