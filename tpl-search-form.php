<?php
//Template name: Search
get_header();

?>
<div class="flex wrap-base-content">

	<div class="sidebar-front">
		<?php
		get_template_part('template-parts/sidebars/sidebar-front');
		?>
	</div>

	<div class="wrap-coontent-page">
		<?php if(!is_cart() && !is_checkout()):?>
			<?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' » '); ?>

			<header class="woocommerce-products-header">
				<h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
			</header>
		<?php endif;?>
		<div class="square-section">
			<?php
			while(have_posts()){
				the_post();
				the_content();
			}

			?>
			<div class="filters-forms">
				<div class="title-search"><?= pll__('Search Keys')?></div>
				<div class="input-search">
					<input type="text" placeholder="<?= pll__('Search Keys')?>" id="keywords" name="keywords" class="form-control" value="">
				</div>
				<div class="title-search"><?= pll__('Categories')?></div>
				<?php
				$args = [
					'taxonomy' => 'product_cat',
					'hide_empty' => false,
					'parent' => 0,
					'orderby' => 'DESC',
				];
				$categories = get_terms($args);?>
				<div class="new-select-style-wpandyou">
					<div class="select-icon"><img src="<?= get_template_directory_uri()?>/images/icon123.svg" /></div>
					<select id="select-cat">
						<?php foreach ($categories as $cat): ?>

							<option term_id="<?= $cat->term_id?>"><?= $cat->name ?></option>
							<?php
							$sub_cats = get_categories( array(
								'taxonomy' => 'product_cat',
								'parent' =>$cat->term_id,
								'hide_empty' => 0,
								'depth' => 1,
							) );

							foreach ($sub_cats as $sub) {?>
							<?php
							$terms = get_categories( array(
								'taxonomy' => 'product_cat',
								'parent' =>$sub->term_id,
								'hide_empty' => 0,
								'depth' => 1,
								'exclude' => '34'
							) );
							$terms = get_terms($terms)
							?>
							<option term_id="<?= $sub->term_id?>"><?= $sub->name ?></option>
							<?php
						} 
						?>
					<?php endforeach ?>

				</select>
			</div>
			<div class="wrap-check">
				<input type="checkbox" id="term-check" />
				<span><?= pll__('Include sub-categories');?></span>
			</div>
			<div class="term-manufacturer">

				<?php
				$args = [
					'taxonomy' => 'Manufacturer',
					'hide_empty' => false,
					'parent' => 0,
					'orderby' => 'DESC',
				];
				$terms = get_terms($args);?>
				<div class="new-select-style-wpandyou">
					<div class="select-icon"><img src="<?= get_template_directory_uri()?>/images/icon123.svg" /></div>
					<select id="select-terms">
						<?php foreach ($terms as $cat): ?>
							<option term_id="<?= $cat->term_id?>"><?= $cat->name?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<div class="btn-price-search">
				<div class="title-search"><?= pll__('Price over')?></div>
				<div class="input-price">
					<input type="text" placeholder="<?= pll__('Price over')?>" id="keywords" name="price-over" class="price-over">
				</div>
				<div class="title-search"><?= pll__('Price up to')?></div>
				<div class="input-price">
					<input type="text" placeholder="<?= pll__('Price up to')?>" id="keywords" name="price-to" class="price-to">
				</div>
			</div>

			<input type="submit" name="search-product" id="search-product" placeholder="<?= pll__('Search')?>" />

		</div>
		<?php if(!is_cart() && !is_checkout()):?>
			<div class="btn-wrap-section">
				<a href="#" onclick="history.back();return false;"><?= pll__('Back')?></a>
			</div>
		<?php endif;?>
	</div>
</div>

</div>
</div>

<?php
get_footer();
?>