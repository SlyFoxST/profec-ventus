<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package profec-ventus
 */

?>
<footer id="colophon" class="site-footer">
	<div class="wrap-info-footer">
		<div class="footer-search">
			<aside id="secondary" class="widget-area">
				<?php //get_product_search_form(); ?>
			</aside><!-- #secondary -->

		</div>
		<div class="footer-search">
			<aside id="footer-seach-footer" class="widget-area">
				<form role="search" method="get" class="woocommerce-product-search" action="http://coder.cx.ua/coder.profec/">
					<label class="screen-reader-text" for="woocommerce-product-search-field-0"></label>
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
					<div class="wrap-searh">
						<input type="search" id="" class="search-field" placeholder="Suche..." value="" name="s">
						<button type="submit" value="Search" class="btn-footer"><i class="fa fa-search" aria-hidden="true"></i></button>
						<input type="hidden" name="post_type" value="product">
					</div>
				</form>
			</aside>
		</div>
		<div class="site-info">
			<?php
			$lng = pll_current_language();
			if($lng == 'en'){
				echo get_field('desc_footer','option');
			}
			elseif($lng == 'uk'){
				echo get_field('opisanie_v_footer_ua','option');
			}
			elseif($lng == 'ru'){
				echo get_field('opisanie_v_footer_rus','option');
			}
			elseif($lng == 'de'){
				echo get_field('opisanie_v_footer_du','option');
			}
			?>
			

		</div><!-- .site-info -->
		<div class="wrap-footer-menu">
			
			<div class="wrap-menus flex">
				
				<div class="menu-footer">
					<h3><?= pll__('About us')?></h3>
					<?php
					wp_nav_menu( [
						'theme_location'  => 'footer_menu1',
						'menu'            => 'footer_menu1', 

						'container'       => 'div', 
						'container_class' => '', 
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
				</div>
				<div class="menu-footer">
					<h3><?= pll__('Legal Information')?></h3>
					<?php
					wp_nav_menu( [
						'theme_location'  => 'footer_menu2',
						'menu'            => 'footer_menu2', 

						'container'       => 'div', 
						'container_class' => '', 
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
				</div>
			</div>
		</div>
		<div class="aside">
			<?= pll__('One Stop Wind Shop, powered by')?> <a href="http://profec-ventus.com/">ProfEC Ventus GmbH</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</div>

<div class="pop-share">
	<div class="share-cart-content-wrapper">
		<div class="shared_cart_label">
			<div class="share-title"><?= pll__('Share shopping cart')?></div>
			<div class="close">&#10006;</div>
			<div class="wrap-content-share">
				<div class="flex flex-url">
					<div class="shared_cart_url">URL:</div>
					<div class="input-share">
						<input type="text" id="share" value="<?= ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>" id="share"/>
					</div>
				</div>

				<div onclick="myFunction()" class="btn-share"><?= pll__('Copys')?></div>			
				<div class="share-cart-response-wrapper">
					<div id="result-text">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <script>
	function myFunction() {
		var copyText = document.getElementById("share");
		var result = document.getElementById('result-text');
		copyText.select();
		document.execCommand("copy");
		result.innerText = "The link has been copied to your clipboard!";
		alert(copyText.value);
	}
</script>
livezilla.net PLACE SOMEWHERE IN BODY
<script type="text/javascript" id="165babb4eae3a7324f0312c8d102caf5" src="//coder.cx.ua/coder.profec/livezilla/script.php?id=165babb4eae3a7324f0312c8d102caf5" defer></script>
livezilla.net PLACE SOMEWHERE IN BODY -->
<a id="button-top"></a>
</body>
</html>

