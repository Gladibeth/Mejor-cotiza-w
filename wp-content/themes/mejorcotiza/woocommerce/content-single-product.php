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
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


<div class="container">
  <div class="row">
    <div class="col-lg-6">
    </div>
  </div>

  <section class="questions">
    <div class="content-title">
      
    </div>
    <div class="container-fluid">
      <div class="content-professional">
        <?php $args = array( 'post_type' => 'product'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a class="card-inf-professional" href="profile.html">
            <img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>">
            <div class="card-content-professional">
              <h3>
                <strong><?php the_title(); ?></strong>
              </h3>
              <p><?php the_content(); ?></p>
            </div>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>

</div>