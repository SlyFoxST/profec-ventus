<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profec-ventus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php
global $woocommerce;
$lang = pll_current_language('slug');
$cart = $woocommerce->cart->get_cart();
$total_sum = $woocommerce->cart->get_cart_subtotal();
$count = $woocommerce->cart->cart_contents_count;
foreach ($cart as $key => $value) {
	$cart_key =  $key;
}

$lng = pll_current_language();
if($lng == 'en'){
	$sitemap = PATH . '/sitemap/';
	$wishlist = PATH . '/wish-list';
	$search  = PATH . '/advanced-search';
}
elseif($lng == 'uk'){
	$sitemap = PATH . 'uk/sitemap/';
	$wishlist = PATH . 'uk/wish-list';
	$search  = PATH . 'uk/advanced-search';
}
elseif($lng == 'ru'){
	$sitemap = PATH . 'ru/sitemap/';
	$wishlist = PATH . 'ru/wish-list';
	$search  = PATH . 'ru/advanced-search';
}
elseif($lng == 'de'){
	$sitemap = PATH . 'de/sitemap/';
	$wishlist = PATH . 'de/wish-list';
	$search  = PATH . 'de/advanced-search';
}
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="outer-wrapper" class="site">
		<header id="header" class="navbar">
			<div class="topbar-container">
				<div class="flex flex-end">
					<div class="link_sitemap">
						<a href="<?= $sitemap; ?>"><?= pll__('Sitemap');?></a>
						<span class="fa fa-arrow-circle-right" aria-hidden="true"></span>
					</div>
					<div class="heaer-search">
						<div class="btn-serch"><?= pll__('Search');?></div>
						<div class="none search-header">
							<aside id="header-seach-header" class="widget-area">
								<div class="treugol"></div>
								<form role="search" method="get" class="woocommerce-product-search" action="<?= PATH?>">
									<label class="screen-reader-text" for="woocommerce-product-search-field-1"></label>
									<div class="wrap-searh">
										<input type="search" id="woocommerce-product-search-field-0" class="search-field" placeholder="Search..." value="" name="s">
										<button type="submit" value="Search" class="btn-footer"><i class="fa fa-search" aria-hidden="true"></i></button>
										<input type="hidden" name="post_type" value="product">
									</div>
								</form>
							</aside>
						</div>
					</div>
					<div>
					</div>
					<div class="wrap-current-lng">
						<div class="select-lng">
							<div class="flex">
								<?php if($lang == 'uk'):?>
									<div class="img-prev">
										<img src="<?= get_template_directory_uri()?>/images/flags/Ukraine.png" />
									</div>
								<?php elseif($lang == 'en'): ?>
									<div class="img-prev">
										<img src="<?= get_template_directory_uri()?>/images/flags/United-Kingdom.png" />
									</div>
								<?php elseif($lang == 'ru'): ?>
									<div class="img-prev">
										<img src="<?= get_template_directory_uri()?>/images/flags/Russia.png" />
									</div>
								<?php else: ?>
									<div class="img-prev">
										<img src="<?= get_template_directory_uri()?>/images/flags/Germany.png" />
									</div>
								<?php endif;?>
								<div class="title-lang">
									<?= pll_current_language('slug');?>
								</div>
							</div>
						</div>
						<div class="select-valute">
							<div class="triangle"></div>
							<div class="wrap-lng">
								<div class="title--bl"><?= pll__('Change languege')?></div>
								<ul>
									<?php pll_the_languages(['dropdown' => 1]); ?>
								</ul>
							</div>
							<div class="wrap-valute">
								<div class="title--bl"><?= pll__('Change currency')?></div>
								<?php 		
								echo do_shortcode('[woo-currency-switcher show_as=dropdown show_flag_dropdown=true]');
								?>
							</div>
						</div>
					</div>
					<div class="select-header"><?= pll__('Login')?>
						<div id="login">
							<div id="login_error"></div>
							<div class="form-header none">
								<?php if(is_user_logged_in() == false):?>
									<form name="loginform" id="loginform" action="<?= PATH?>wp-login.php" method="post">
										<div class="title-form"><?= pll__('Log in')?></div>
										<p class="login-username">
											<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?= pll__('Login')?>" />
										</p>
										<p class="login-password">
											<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?= pll__('Password')?>" />
										</p>

										<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /><?= pll__('Save me')?></label></p>

										<p class="login-submit">
											<input type="submit" name="wp-submit" id="wp-submit" class="button-primary submit-btn-form-login" value="<?= pll__('Login')?>" tabindex="100" />
											<input type="hidden" name="redirect_to" value="<?= PATH?>" />
										</p>
										<div class="links-forgot">
											<a href="<?= PATH; ?>login"><?= pll__('Create a new account')?></a>
											<a href="<?= PATH; ?>my-account/lost-password/"><?= pll__('Forgot password')?></a>

										</div>
									</form>
								<?php else:	?>
									<div class="btn-logout">
										<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?= pll__('Log Out')?>"><?= pll__('Log Out')?></a>
									</div>
								<?php endif;?>

							</div>
						</div>
					</div>
					<div class="wrap-wish-list">
						<a href="<?= $wishlist?>"><?= pll__('Wish list')?></a>
					</div>
				</div>

			</div>
		</header><!-- #masthead -->

		<div class="wrap-section">
			<div class="flex top-line">
				<div class="site-branding">
					<div class="logo">
						<?php if(is_front_page() && is_home()):?>
							<img src="<?= get_template_directory_uri()?>/images/logo-png.png" alt="<?php the_title()?>" />
						<?php else: ?>
							<a href="<?= PATH?>">
								<img src="<?= get_template_directory_uri()?>/images/logo-png.png" alt="<?php the_title()?>" />
							</a>
						<?php endif;?>
					</div>
				</div>

				<div class="title-site">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
						<?php
					else :
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</h1>
						<?php
					endif;
					?>
				</div>
				<div class="mini-cart flex">
					<div class="shoping-cart">
						<div class="title-shop"><?= pll__('Shopping Cart'); ?></div>
						<span class="hide_991 result2  result_summ"><?=  $total_sum; ?></span>
					</div>
					<div class="search-mobile">
						<i class="fa fa-search" aria-hidden="true"></i>
					</div>

					<div class="mini-cart-icon">
						<?php if($count > 0):?>
							<div class="basket_col">
								<?= $count?>
							</div>
						<?php endif;?>
						<div class="icon-cart">
							<a href="javascript:;" class="basket-btn2 btn btn-radius btn-color-2 basket-open">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								viewBox="0 0 334.202 334.202" style="enable-background:new 0 0 334.202 334.202;" xml:space="preserve">

								<path d="M334.202,138.526c0-16.536-13.458-29.988-29.988-29.988h-47.597l-49.551-93.986c-5.437-10.315-17.385-14.711-26.671-9.814
								s-12.404,17.237-6.967,27.552l40.193,76.248h-93.054l40.193-76.248c5.444-10.315,2.32-22.655-6.967-27.552
								s-21.234-0.501-26.671,9.814l-49.544,93.986H29.994C13.458,108.538,0,121.989,0,138.526c0,11.96,7.095,22.23,17.25,27.038
								l18.638,147.065c0.238,10.424,8.792,18.837,19.274,18.837h223.866c10.482,0,19.043-8.413,19.281-18.837l18.638-147.059
								C327.107,160.756,334.202,150.492,334.202,138.526z M285.512,311.375l-0.051,0.81c0,3.548-2.873,6.427-6.427,6.427H55.162
								c-3.548,0-6.427-2.879-6.427-6.427L30.579,168.513h273.044L285.512,311.375z M310.943,154.278l-1.755,0.533
								c-0.88,0.264-1.671,0.45-2.436,0.591c-0.829,0.129-1.671,0.257-2.539,0.257H29.994c-0.874,0-1.71-0.135-2.545-0.257
								c-0.758-0.135-1.555-0.328-2.429-0.591l-1.755-0.533c-6.112-2.622-10.411-8.689-10.411-15.752c0-9.447,7.686-17.134,17.14-17.134
								h41.209c-3.078,9.415,0.296,19.55,8.496,23.876c9.287,4.897,21.234,0.501,26.671-9.814l7.41-14.062h106.608l7.417,14.062
								c5.437,10.315,17.385,14.711,26.671,9.814c8.194-4.325,11.575-14.46,8.496-23.876h41.222c9.441,0,17.134,7.686,17.134,17.134
								C321.348,145.589,317.055,151.649,310.943,154.278z M74.313,292.236V192.62c0-3.554,2.873-6.427,6.427-6.427
								c3.554,0,6.427,2.873,6.427,6.427v99.616c0,3.554-2.873,6.427-6.427,6.427C77.186,298.663,74.313,295.79,74.313,292.236z
								M247.035,292.236V192.62c0-3.554,2.873-6.427,6.427-6.427s6.427,2.873,6.427,6.427v99.616c0,3.554-2.873,6.427-6.427,6.427
								S247.035,295.79,247.035,292.236z M189.457,292.236V192.62c0-3.554,2.873-6.427,6.427-6.427c3.554,0,6.427,2.873,6.427,6.427
								v99.616c0,3.554-2.873,6.427-6.427,6.427C192.329,298.663,189.457,295.79,189.457,292.236z M131.891,292.236V192.62
								c0-3.554,2.873-6.427,6.427-6.427s6.427,2.873,6.427,6.427v99.616c0,3.554-2.873,6.427-6.427,6.427S131.891,295.79,131.891,292.236
								z"/>
							</svg>
						</a>
					</div>
				</div>
				<div class="mobile-menu">
					<div class="line-mobile">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</div>
			</div>

			<div class="header_basket_box_wr">
				<div class="figure">
				</div>
				<div class="titlte-mini-cart"><?= pll__('Shopping Cart');?></div>
				<?php get_template_part('woocommerce/cart/mini-cart') ?>
			</div>
		</div>

		<div class="menu-front">
			<?php
			wp_nav_menu( [
				'theme_location'  => 'header_menu',
				'menu'            => 'header_menu', 
				'container'       => 'div', 
				'container_class' => 'menu-header-front-container', 
				'container_id'    => '',
				'menu_class'      => 'menu', 
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] );

			?>
			<div class="wrap-mobile-section">
				<div class="mobile-language">
					<div class="title-mobile-menu lang-menu"><?= pll__('Language')?></div>
					<div class="mobile-select-lng">
						<div class="wrap-lng">
							<div class="title--bl"><?= pll__('Change languege')?></div>
							<ul>
								<?php pll_the_languages(['dropdown' => 1]); ?>
							</ul>
						</div>
						<div class="wrap-valute">
							<div class="title--bl"><?= pll__('Change currency')?></div>
							<?php 		
							echo do_shortcode('[woo-currency-switcher show_as=dropdown show_flag_dropdown=true]');
							?>
						</div>
					</div>
				</div>
				<div class="mobile-login">
					<div class="title-mobile-menu mobile-log"><?= pll__('Login')?></div>
					<div class="mobile-login none">
						<div class="wrap-mobile-log">
							<?php if(is_user_logged_in() == false):?>
								<form name="loginform" id="loginform" action="<?= PATH?>wp-login.php" method="post">
									<div class="title-form"><?= pll__('Log in')?></div>
									<p class="login-username">
										<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?= pll__('Login')?>" />
									</p>
									<p class="login-password">
										<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?= pll__('Password')?>" />
									</p>

									<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /><?= pll__('Save me')?></label></p>

									<p class="login-submit">
										<input type="submit" name="wp-submit" id="wp-submit" class="button-primary submit-btn-form-login" value="<?= pll__('Login')?>" tabindex="100" />
										<input type="hidden" name="redirect_to" value="<?= PATH?>" />
									</p>
									<div class="links-forgot">
										<a href="<?= PATH; ?>login"><?= pll__('Create a new account')?></a>
										<a href="<?= PATH; ?>my-account/lost-password/"><?= pll__('Forgot password')?></a>

									</div>
								</form>
							<?php else:	?>
								<div class="btn-logout">
									<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?= pll__('Log Out')?>"><?= pll__('Log Out')?></a>
								</div>
							<?php endif;?>
						</div>
					</div>
				</div>
				<div class="wrap-btn-mobile">
					<a href="<?= $Sitemap ?>"><?= pll__('Sitemap');?></a>
					<a href="<?= $wishlist?>"><?= pll__('Wish List');?></a>
				</div>
			</div>
		</div>
		<div class="mobile-search-section">
			<div class="">
				<form role="search" method="get" class="woocommerce-product-search" action="http://coder.cx.ua/coder.profec/">
					<div class="wrap-searh">
						<input type="search" id="" class="search-field" placeholder="Search..." value="" name="s">
						<input type="hidden" name="post_type" value="product">
					</div>
					<div class="new-select-style-wpandyou">
						<div class="select-icon"><img src="<?= get_template_directory_uri()?>/images/icon123.svg" /></div>
						<select>
							<option><?= pll__('Alle') ?></option>
							<option><?= pll__('Sensoren Messtechni')?></option>
							<option><?= pll__('Windmessmasten')?></option>
							<option><?= pll__('Kalibrierservice')?></option>
							<option><?= pll__('Akkreditierte Dienstleistungen (DAkkS / ISO)')?></option>
						</select>
					</div>
					<div class="wrap-btn-search">
						<button type="submit" value="Search" class="button-seach"><?= pll__('Search...')?></button>
						<div class="btn-page-search"><a href="<?= $search; ?>"><?= pll__('Advanced Search');?></a></div>
					</div>
				</form>
			</div>
		</div>
		<?php //echo is_user_logged_in();?>