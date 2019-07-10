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
      <!-- <div class='card-inf-professional card-bidding'>
        <img alt='image' class='img-fluid rounded' src='https://images.unsplash.com/photo-1560185010-2a290b0cd4cd?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=772&amp;q=80'>
      </div>
      <div class='card-inf-professional card-bidding'>
        <img alt='image' class='img-fluid rounded' src='https://images.unsplash.com/photo-1495433324511-bf8e92934d90?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80'>
      </div>
      <div class='card-inf-professional card-bidding'>
        <img alt='image' class='img-fluid rounded' src='https://images.unsplash.com/photo-1560185009-dddeb820c7b7?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80'>
      </div>
      <div class='card-inf-professional card-bidding'>
        <img alt='image' class='img-fluid rounded' src='https://images.unsplash.com/photo-1495433324511-bf8e92934d90?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80'>
      </div> -->
    </div>
  </div>
</section>