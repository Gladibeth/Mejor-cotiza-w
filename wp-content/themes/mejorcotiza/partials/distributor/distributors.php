<section class="questions">
  <div class="container-fluid">
    <div class="content-title">
      <h1 class="title-section">Conoce a nuestros distribuidores</h1>
    </div>
    <div class="content-professional">
      <?php $args = array( 'post_type' => 'distributor'); ?>   
      <?php $loop = new WP_Query( $args ); ?>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-content-professional">
            <h3>
              <strong><?php the_field('name'); ?></strong>
            </h3>
            <p><?php the_field('rut'); ?></p>
            <p><?php the_field('patent'); ?></p>
          </div>
        </a>
      <?php endwhile; ?>
      <!-- <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-2.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Genaro Castillo</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-1.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Juan Baschmann</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-2.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Raúl Valdés</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-1.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Genaro Castillo</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-2.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Raúl Valdés</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-1.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Alejandro Gutierrez</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a>
      <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/assets/img/trucks/trucks-2.jpeg">
          <div class="card-content-professional">
            <h3>
              <strong>Juan Baschmann</strong>
            </h3>
            <p>Su rut</p>
            <p>Patente</p>
          </div>
        </a> -->
    </div>
  </div>
</section>