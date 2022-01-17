<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

global $product, $post;


/** 
 * Product Featured Image
*/
$image_id  = $product->get_image_id();
$image_url = wp_get_attachment_image_url( $image_id, 'full' ); 
?>

<section class="sp-banner">
    <div class="banner-content">
        <h1 class="sp-title"><?php echo $product->get_title();?></h1>
        <p class="sp-short-desc">
        <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
        </p>
        <a href="#sp-course-content" class="sp-banner-cta">Get the course</a>
    </div>
    <div class="sp-banner-video">
        <div class="image-wrapper">
            <img class="banner-img-1" src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/dots-pattern.svg'; ?>" alt="">
            <img class="banner-img-2" src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/circle.svg'; ?>" alt="">
            <img class="sp-featured-image" src="<?php echo $image_url ?>" alt="" srcset="">
            <div class="banner-video-overlay"></div>
            <div class="video-play-btn">
                <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/play.svg'  ?>" alt="" srcset="">
            </div>
        </div>
    </div>
</section>


<section id="sp-course-content" class="sp-course-info sp-stretch-scetion-full-width">
    <div class="sp-course-content-wrapper ast-container">
        <div class="sp-course-tabs">
            <div class="sp-course-menu">
                <a id="sp-about-course" href="#" class="active">About the Course</a>
                <a id="sp-course-content" href="#">Course Content</a>
                <a id="sp-course-reviews" href="#">Reviews</a>
            </div>
            <div class="sp-course-tab-content-wrapper">
                <div class="sp-tab-content sp-about-course active">
                    <h2 class="sp-tab-title">About the course</h2>
                    <div class="sp-tab-data">
                        <?php echo the_content(  ); ?>
                    </div>
                </div>
                <div class="sp-tab-content sp-course-content">
                    <h2 class="sp-tab-title">Course Content</h2>
                    <div class="sp-tab-data">
                        <?php echo get_field( "course_content" ); ?>
                    </div>
                </div>
                <div class="sp-tab-content sp-course-reviews">
                    <h2 class="sp-tab-title">What people say about the instructor?</h2>
                    <div class="sp-tab-data">
                    <p class="paragraph course-reviews">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Imperdiet fringilla praesent nibh sociis ullamcorper. Ultrices facilisi sit 
                    </p>
                    <?php 
                    $reviews = get_field('reviews');
                    if(empty($reviews)){
                        echo "There are no reviews yet!!!";
                    }
                    else{?>

                    <div  class="course-reviews-wrapper">
                        <div class="w-layout-grid course-reviews-grid">

                            <?php foreach($reviews as  $review){ ?>
                            <div class="card about-testimonial">
                                <h3><?php echo $review['title']?></h3>
                                <p class="paragraph card-about-testimonial">
                                <?php echo $review['testimonial']?>
                                </p>
                                <div class="card-about-testimonial-content-bottom">
                                    <div class="split-content content-bottom-card-about-testimonial-left">
                                        <img src="<?php echo $review['image']?>" loading="eager" alt="" class="image card-about-testimonial">
                                        <div>
                                            <div class="card-about-testimonial-name"><?php echo $review['name']?></div>
                                            <div class="card-about-testimonial-rol"><?php echo $review['designation']?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>                         
                            
                        </div>
                        <img src="https://assets.website-files.com/60d9feb9c76d589e5bee9402/60da5ca47e484f3f01b407a4_shape-1-home-hero-course-x-template.svg" loading="eager" alt="" class="shape course-reviews-1" style="will-change: transform; transform: translate3d(0px, -12.0628px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img src="https://assets.website-files.com/60d9feb9c76d589e5bee9402/60da5ca47e484f3f01b407a4_shape-1-home-hero-course-x-template.svg" loading="eager" alt="" class="shape course-reviews-2" style="will-change: transform; transform: translate3d(0px, -18.0942px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        
                        </div>
                        
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="sp-get-course-wrapper">
        <div class="sp-get-course">
            <div class="sp-get-content-top">
                <h3 class="get-course-title">Get the course today</h3>
                <div class="sp-add-to-cart-form">
                    <?php woocommerce_template_single_add_to_cart(); ?>
                </div>
                
            </div>

            <div class="divider"></div>

           <div class="course-features-grid">
               <?php 
               $level = get_field('level');

               if($level!= null || $level != ""){ 
                   ?>
            
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/level.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div>Level:&nbsp;&nbsp;</div>
                       <div class="course-feature-result"><?php echo $level ?></div>
                    </div>
                </div>
                <?php } ?>
                <?php 
               $duration = get_field('duration');

               if($duration!= null || $duration != ""){ 
                   ?>
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/duration.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div>Duration:&nbsp;&nbsp;</div>
                       <div class="course-feature-result"><?php echo $duration?></div>
                    </div>
                </div>
                <?php } ?>
                <?php 
               $videos = get_field('videos');

               if($videos!= null || $videos != ""){ 
                   ?>
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/videos.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div>Videos:&nbsp;&nbsp;</div>
                       <div class="course-feature-result"><?php echo $videos?></div>
                    </div>
                </div>
                <?php } ?>

                <?php 
               $downloadable_files = get_field('downloadable_files');

               if($downloadable_files!= null || $downloadable_files != ""){ 
                   ?>
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/download.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div>Downloadbale Files:&nbsp;&nbsp;</div>
                       <div class="course-feature-result"><?php echo $downloadable_files?></div>
                    </div>
                </div>
                <?php } ?>

                <?php 
               $access = get_field('access');

               if($access!= null || $access != ""){ 
                   ?>
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/access.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div><?php echo $access?></div>
                    </div>
                </div>
                <?php } ?>

                <?php 
               $devices_access = get_field('devices_access');

               if($devices_access!= null || $devices_access != ""){ 
                   ?>
               <div class="course-feature-wrapper">
                   <img src="<?php echo get_stylesheet_directory_uri(  ).'/assets/images/product/devices-access.svg'; ?>" loading="eager" alt="" class="image course-feature-icon">
                   <div class="course-feature-content">
                       <div><?php echo $devices_access?></div>
                    </div>
                </div>
                <?php } ?>
        </div>
        </div>
    </div>
</section>


<section class="sp-related-courses">
    <!-- <div class="content-top other-courses">
        <div class="split-content content-top-other-courses-left">
            <h2 class="title other-courses">Other Courses</h2>
        </div><div class="split-content content-top-other-courses-right">
            <a href="/courses" class="button-secondary w-button">All Courses</a>
        </div>
    </div> -->
    <div class="sp-related-courses-container">
    <?php echo woocommerce_output_related_products(); ?>
    </div>
</section>