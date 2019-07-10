<?php $args = array( 'post_type' => 'proveedores'); ?>   
<?php $loop = new WP_Query( $args ); ?>
<section class='section-padding'>
  <div class='container-fluid'>
    <div class='content-title'>
      <h1 class='title-section'>Nuestros proveedores</h1>
    </div>
    <div class='container-partnerts'>
      <div class='content-partnerts'>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class='item-partnert'>
            <img alt='<?php the_title(); ?>' src='<?php echo get_the_post_thumbnail_url(); ?>'>
          </div>
         <?php endwhile; ?>
        <!-- <div class='item-partnert'>
          <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/client_logo/client_logo-2.png'>
        </div>
        <div class='item-partnert'>
          <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/client_logo/client_logo-3.png'>
        </div>
        <div class='item-partnert'>
          <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/client_logo/client_logo-4.png'>
        </div>
        <div class='item-partnert'>
          <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/client_logo/client_logo-2.png'>
        </div>
        <div class='item-partnert'>
          <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/client_logo/client_logo-1.png'>
        </div> -->
      </div>
    </div>
  </div>
</section>