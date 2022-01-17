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
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li class="courses-list"  <?php wc_product_class( '', $product ); ?>>
    <div r class="course-item w-dyn-item">
        <a href="<?php echo the_permalink( ); ?>" class="card course w-inline-block">
            <div class="image-wrapper card-course">
                <?php  $image_id  = $product->get_image_id(); $image_url = wp_get_attachment_image_url( $image_id, 'full' );  ?>
                <img src="<?php echo $image_url;?>"  alt="" >
            </div>
            <div class="card-course-content">
                <div class="card-course-price">
                    <?php echo $product->get_price_html();?>
                </div>
                <h3 class="title card-course">
                    <?php echo the_title()?>
                </h3>
                <p class="paragraph card-course-summary">
                <?php 
                $experct = apply_filters( 'woocommerce_short_description', $post->post_excerpt ); 
                echo wp_strip_all_tags( $experct );
                ?>
                </p>
                <div class="card-course-content-bottom">
                    <div class="link-underline card-course">
                        <div>Learn more</div>
                        <div class="underline" style="height: 2px; width: 0px;"></div>
                    </div>
                    <div class="card-course-level">
                        <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/level.svg'; ?>" loading="eager" alt="" class="image card-course-level-icon">
                        <div>Beginner</div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</li>
