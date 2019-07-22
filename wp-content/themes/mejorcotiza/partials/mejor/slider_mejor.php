
<div class='carousel-content'>
  <div class='carousel-divisor'>
    <div class='carrusel-slider'>
      <div class='single-item'>
        <?php $args = array( 'post_type' => 'banner_mejor'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class='item'>
            <img class='img-responsive' src='<?php echo get_the_post_thumbnail_url(); ?>'>
            <div class='mask-item'>
              <div class='banner-info'>
                <h1 class='title-banner wow animated fadeInUp' data-wow-delay='.2s' data-wow-duration='1500ms'><?php the_title(); ?></h1>
                <p class='wow animated fadeInUp' data-wow-delay='.9s' data-wow-duration='1500ms'><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

