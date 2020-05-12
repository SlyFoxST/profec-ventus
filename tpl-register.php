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
//Template name: Регистрация
get_header();

$lng = pll_current_language();
if($lng == 'en'){
	$url = 'register';
}
elseif($lng == 'uk'){
	$url = 'uk/register';
}
elseif($lng == 'ru'){
	$url = 'ru/register';
}
elseif($lng == 'de'){
	$url = 'de/register';
}

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
			?>
			<div class="flex flex-register">
				<div class="wrap-reg">
					<div class="title-reg"><?= pll__('NEW CUSTOMER')?></div>
					<div class="desc-reg">
						<?= pll__('If you register at our store you can shop more quickly and obtain info on your order status and a history of your previous orders at any time.')?>
						
					</div>
					<div class="btn-reg">
						<a href="<?= PATH . $url?>"><?= pll__('Register')?></a>
					</div>
				</div>
				<div class="wrap-reg">
					<div class="title-reg"><?= pll__('I AM A CUSTOMER')?></div>
					<form name="loginform" id="loginform" action="<?= PATH?>wp-login.php" method="post">
						<p class="login-username">
							<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" placeholder="<?= pll__('Login')?>" />
						</p>
						<p class="login-password">
							<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" placeholder="<?= pll__('Password')?>" />
						</p>
						
						<div class="links-forgot">
							<a href="<?= PATH; ?>my-account/lost-password/"><?= pll__('Forgot password')?></a>
						</div>
						<p class="login-submit">
							<input type="submit" name="wp-submit" id="wp-submit" class="button-primary submit-btn-form-login" value="<?= pll__('Login')?>" tabindex="100" />
							<input type="hidden" name="redirect_to" value="<?= PATH?>" />
						</p>
					</form>
				</div>
			</div>

		</div>
		<div class="btn-wrap-section">
			<a href="#" onclick="history.back();return false;"><?= pll__('Back')?></a>
		</div>
	</div>
</div>

<?php
get_footer();
