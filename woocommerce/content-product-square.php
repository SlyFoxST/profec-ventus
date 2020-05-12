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

?>
<?php $gallery = $product->get_gallery_image_ids();
if(!empty($gallery)){
	$class='has_gallery';
	$scew = 'no-skew';
}
else{
	$class='no-gallery';
	$scew = 'skew';
}

?>

<div class="previe-square <?= $scew;?>">
	<?php $gallery = $product->get_gallery_image_ids();
	if(!empty($gallery)){
		$class='has_gallery';
	}
	else{
		$class='no-gallery';
	}

	?>
	<div class="<?= $class?>">
		<?php if(get_post_meta($product->get_ID(),'top',true) == 1){?>
		<div class="status_product">
			Top	
		</div>
		<?php } ?>
		<div class="square-previe">
			<a href="<?php the_permalink()?>">
				<?php the_post_thumbnail()?>
			</a>
		</div>
		<h3>
			<a href="<?php the_permalink()?>">
				<?php the_title()?>
			</a>
		</h3>

		<div class="price-square">
			<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
		</div>
	</div>

	<div class="block_gallery">
		<div class="flex square-gallery">
			<div class="flex square-img">
				<?php
				foreach ($gallery as $id) {
					?>
					<div class="img-square">
						<a href="<?php the_permalink()?>">
							<img src="<?= wp_get_attachment_image_url($id); ?>" alt="<?php the_title()?>" />
						</a>
					</div>
					<?php
				}
				?>
			</div>
			<div class="meta-prev-square">
				<div  class="img-square-prev">
					<a href="<?php the_permalink()?>">
						<img src="<?= get_the_post_thumbnail_url()?>" class="img-square-big">
					</a>
				</div>
				<h3>
					<a href="<?php the_permalink()?>">
						<?php the_title()?>
					</a>
				</h3>

				<div class="price-square">
					<a href="<?php the_permalink()?>">
						<?=  $product->get_price() . ' ' . get_woocommerce_currency();?>
					</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
