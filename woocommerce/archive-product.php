<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<div class="courses-archive-banner">
	<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<p class="courses-header-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac eu elit senectus mauris blandit tempor. Egestas ut tincidunt a eget ultrices risus. Et lorem ut quam turpis dictum habitant.</p>
	<?php
	 $meta_query  = WC()->query->get_meta_query();
	 $tax_query   = WC()->query->get_tax_query();
	 $tax_query[] = array(
		 'taxonomy' => 'product_visibility',
		 'field'    => 'name',
		 'terms'    => 'featured',
		 'operator' => 'IN',
	 );
 
	 $args = array(
		 'post_type'           => 'product',
		 'post_status'         => 'publish',
		 'ignore_sticky_posts' => 1,
		 'posts_per_page'      => 1,
		 'meta_query'          => $meta_query,
		 'tax_query'           => $tax_query,
	 );

	$query = new WP_Query( $args );

	if($query ->have_posts()):
		while($query->have_posts()):
			$query->the_post();
			$product = wc_get_product( $query->get_the_ID() );

			 $image_id  = $product->get_image_id(); 
			 $image_url = wp_get_attachment_image_url( $image_id, 'full' ); 
			 
                
			
?>
	
	<div  class="course-featured-item w-dyn-item">
		<a href="<?php echo the_permalink( ); ?>" class="card course-featured w-inline-block">
			<div class="image-wrapper card-course-featured">
				<img src="<?php echo $image_url ?>" alt=""class="image card-course-featured" >
			</div>
			<div class="card-course-featured-content">
				<div class="card-course-featured-price"><?php echo $product->get_price_html();?></div>
				<h2 class="title h3-size card-course-featured" ><?php echo the_title( ); ?></h2>
				<p class="paragraph card-course-featured-summary">
					<?php echo the_excerpt(); ; ?>
				</p>
				<div class="card-course-featured-content-bottom">
					<div class="card-course-featured-badge">Featured Course</div>
					<div class="link-underline card-course-featured">
						<div>Learn more</div>
						<div style="height: 2px; width: 0px;" class="underline"></div>
					</div>
				</div>
			</div>
		</a>
	</div>

	<?php endwhile;?>

	<?php  endif; ?>


</div>

<div class="archive-other-courses sp-stretch-scetion-full-width">
	<div class="ast-container">
		<div class="archive-other-courses-wrapper">


<h2 class="other-courses-header">Other Courses</h2>

<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}?>

</div>

</div>
</div>
<?php 

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
