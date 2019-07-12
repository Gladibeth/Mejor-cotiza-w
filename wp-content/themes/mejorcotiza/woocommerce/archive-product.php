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
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<section class="questions">
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