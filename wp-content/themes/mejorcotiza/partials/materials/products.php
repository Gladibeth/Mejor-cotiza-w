<section id='materiales'>
  <div class='container-fluid'>
    <div class='content-title'>
      <h1 class='title-section'>Productos</h1>
    </div>
    <div class='container-products'>
      <div class='content-products'>
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 7); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a href= '<?php the_permalink(); ?>' class="item content-img">
            <div class='container-img'>
              <div class='mask-img'></div>
              <img class= 'img-product' alt='' src='<?php echo get_the_post_thumbnail_url(); ?>'>
              <div class='content-text'>
                <p><?php the_title(); ?></p>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</section>
