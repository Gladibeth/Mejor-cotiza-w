<section class="section-padding">
  <div class="container-fluid">
    <div class="content-title">
      <h1 class="title-section">Encuentra al profesinal de tu zona</h1>
    </div>
    <div class="slider-professional">
      <?php $args = array( 'post_type' => 'professionals'); ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="card-inf-professional">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-content-professional">
            <h3>
              <strong><?php the_field('name'); ?></strong>
            </h3>
            <p><?php the_field('position'); ?></p>
            <p><?php the_field('region'); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- <div class="card-inf-professional">
        <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/people/2.jpg">
        <div class="card-content-professional">
          <h3>
            <strong>Genaro Castillo</strong>
          </h3>
          <p>Constructor</p>
          <p>Rm Santiago</p>
        </div>
      </div>
      <div class="card-inf-professional">
        <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/people/3.jpg">
        <div class="card-content-professional">
          <h3>
            <strong>Juan Baschmann</strong>
          </h3>
          <p>Constructor</p>
          <p>V Región Valparaíso</p>
        </div>
      </div>
      <div class="card-inf-professional">
        <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/people/4.jpg">
        <div class="card-content-professional">
          <h3>
            <strong>Raúl Valdés</strong>
          </h3>
          <p>Constructor</p>
          <p>IV Región Coquimbo</p>
        </div>
      </div> -->
    </div>
  </div>
</section>