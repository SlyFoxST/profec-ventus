<?php
$lang = pll_current_language('slug');
$url = "";
if($lang == 'de'){
	$url = PATH . 'de/new-products';
}
elseif($lang == 'uk'){
	$url = PATH . 'uk/new-products';
}
elseif($lang == 'ru'){
	$url = PATH . 'ru/new-products';
}
else{
	$url = PATH . 'new-products';
}

$query_new = new WP_Query([
	'post_type' => 'product',
	'posts_per_page' => 1,
	'orderby' => 'rand',
	'meta_key' => 'new',
	'meta_value' => true,

]);

$query_besceller = new WP_Query([
	'post_type' => 'product',
	'meta_key' => 'bestsellers',
	'meta_value' => true,
]);

if( is_page_template('tpl-new-products.php') ){?>

<?php
wp_nav_menu( [
	'theme_location'  => 'front_sidebar',
	'menu'            => 'front_sidebar', 
	'container'       => 'div', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'menu', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '<div class="icon-read"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );
?>

<?php
}
if(!empty( $_COOKIE['woocommerce_recently_viewed'] )){?>

<div class="wrap-products-sidebar">
	<div class="title-new">
		<?= pll__('Last viewed')?>
	</div>
	<?php the_widget( "WC_Widget_Recently_Viewed", "number=1&title=" ); ?>
</div>

<?php

}

?>


<div class="wrap-products-sidebar">
	<div class="title-new">
		<div class="icon-prv"><a href="<?= $url?>"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
		<?= pll__('New products')?>
	</div>

	<?php
	while($query_new->have_posts()){
		$query_new->the_post();?>
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
					$product = wc_get_product($post->ID);
					$attr = $product->get_attributes();
					if(!empty($attr) && is_array($attr)):
						?>
						
						<?= 'from ' . $product->get_price() . ' ' . get_woocommerce_currency();?>

					<?php else:?>
						
						<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>

					<?php endif;?>
				</a>
			</div>
		</div>

		<?php
	}
	wp_reset_query();

	?>
</div>

<div class="wrap-products-sidebar">
	<div class="title-new">
		<?= pll__('Downloads')?>
	</div>
	<?php

	if( have_rows('downloads','option') ):
		?>
		<div class="download-file">
			<?php
			while ( have_rows('downloads','option') ) : the_row();
				$file =  get_sub_field('don_file','option');

				?>
				<div class="title-donl">
					<a href="<?= $file['url'];?>" target="_blank">
						<?php the_sub_field('title','option');?>
					</a>
				</div>
				<div class="link-donl">
					<a href="<?= $file['url'];?>" target="_blank">
						<?php the_sub_field('name','option');?>
					</a>
				</div>


				<?php

			endwhile;
			?>
		</div>
		<?php

	endif;

	?>

</div>

<div class="wrap-products-sidebar">
	<div class="title-new">
		<?= pll__('Bestsellers')?>
	</div>
	<div class="wrap_besceller">
		<?php

		while($query_besceller->have_posts()){
			$query_besceller->the_post();?>
			<div class="flex wrap-bezc">
				<div class="previe_bez">
					<?php the_post_thumbnail()?>
				</div>
				<div class="title_bez">
					<a href="<?php the_permalink()?>">
						<?php the_title();?>
					</a>
					<div class="price-previe">
						<a href="<?php the_permalink()?>">
							<?php
							$product = wc_get_product($post->ID);
							$attr = $product->get_attributes();
							if(!empty($attr) && is_array($attr)):
								?>
								
								<?= 'from ' . $product->get_price() . ' ' . get_woocommerce_currency();?>

							<?php else:?>
								
								<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>

							<?php endif;?>
						</a>
					</div>
				</div>
			</div>
			<?php
		}
		wp_reset_query();
		?>

	</div>

</div>