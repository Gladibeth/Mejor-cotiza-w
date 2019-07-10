<main class='main-content'>
  <section class='slideshow'>
    <div class='slideshow-inner'>
      <?php $args = array( 'post_type' => 'banner_materials'); ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class='slides'>
          <div class='slide is-active'>
            <div class='slide-content'>
              <div class='caption'>
                <div class='title title-bold'><?php the_title(); ?></div>
                <div class='title'><?php the_content(); ?></div>
                <!-- <div class='title title-bold'>en menos de 24 hrs</div> -->
                <!-- <div class='title title-bold'>¡No pierdas más tiempo y dinero!</div>
                <div class='title'>Todos los materiales de construcción desde nuestros proveedores hasta su hogar</div>
                <div class='title title-bold'>en menos de 24 hrs</div> -->
              </div>
            </div>
            <div class='image-container'>
              <img alt='' class='image' src='<?php echo get_the_post_thumbnail_url(); ?>'>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
</main>