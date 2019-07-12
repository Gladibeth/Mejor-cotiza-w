<?php $args = array( 'post_type' => 'ofertas'); ?>   
<?php $loop = new WP_Query( $args ); ?>
<section class='bidding'>
  <div class='container-fluid'>
    <div class='content-title'>
      <h1 class='title-section'>Nuestras ofertas</h1>
    </div>
    <div class='slider-bidding'>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class='card-inf-professional card-bidding'>
          <img alt='<?php the_title(); ?>' class='img-fluid rounded' src='<?php echo get_the_post_thumbnail_url(); ?>'>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>