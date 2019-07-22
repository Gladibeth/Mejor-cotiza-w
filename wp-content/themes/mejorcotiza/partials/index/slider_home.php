<div class='carousel-content'>
  <div class='carousel-divisor'>
    <div class='carrusel-slider'>
      <div class='single-item'>
        <?php $args = array( 'post_type' => 'banner'); ?>   
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
          <div class='containers-btn'>
            <a class='btn btn-white btn-first' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                <span class='btn-inner'>Cotizar proyectos de construcción</span>
              </a>
            <a class='btn btn-white ml-4 btn-first' href="<?php echo bloginfo('url') ?>/index.php/materials">
                <span class='btn-inner'>Cotizar materiales de construcción</span>
              </a>
            <a class='btn btn-white btn-second' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                <span class='btn-inner'>Cotizar proyectos</span>
              </a>
            <a class='btn btn-white mt-3 btn-second' href='<?php bloginfo('url'); ?>/index.php/materials'>
                <span class='btn-inner'>Cotizar materiales</span>
              </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>

