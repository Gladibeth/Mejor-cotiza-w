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
      </div>
    </div>
  </div>
</section>