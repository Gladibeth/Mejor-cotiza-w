<section class="categories">
  <div class="container-fluid">
    <div class="content-title">
      <h1 class="title-section">Nuestras Categorías</h1>
    </div>
    <div class="content-categories">
      
        <?php $args = array(

            'orderby' => 'slug',
            'order' => 'ASC'
            );
            $product_categories = get_terms('product_cat', $args);

        foreach ($product_categories as $product_category): ?>
                  
                <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);

                      $images = wp_get_attachment_image_src($thumbnail_id, 'thumbnail'); ?>
          <a class="content-category" href="<?php echo $url_category = get_term_link( $product_category ); ?>">
            <div class="category-column">
              <div class="category">
                <div class="icon">
                  <img style="width: 10px;" src="<?php echo $images[0]; ?>">
                </div>
                <p class="name-category"><?php echo $product_category->name;?></p>
              </div>
            </div>
          </a>
          <?php endforeach; ?>
        <!-- <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/7.webp">
          </div>
          <p class="name-category">Piscinas</p>
        </div>
      </div>
      <div class="category-column">
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/2.webp">
          </div>
          <p class="name-category">Ampliación</p>
        </div>
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/8.webp">
          </div>
          <p class="name-category">Quinchos y cobertizos</p>
        </div>
      </div>
      <div class="category-column">
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/3.webp">
          </div>
          <p class="name-category">Pintura</p>
        </div>
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/9.webp">
          </div>
          <p class="name-category">Gasfitería</p>
        </div>
      </div>
      <div class="category-column">
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/4.webp">
          </div>
          <p class="name-category">Arquitectos</p>
        </div>
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/10.webp">
          </div>
          <p class="name-category">Electricidad</p>
        </div>
      </div>
      <div class="category-column">
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/5.webp">
          </div>
          <p class="name-category">Piso y radier</p>
        </div>
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/11.webp">
          </div>
          <p class="name-category">Baño y cocina</p>
        </div>
      </div>
      <div class="category-column">
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/6.webp">
          </div>
          <p class="name-category">Fletes</p>
        </div>
        <div class="category">
          <div class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/categories/2.webp">
          </div>
          <p class="name-category">Otros</p>
        </div>
      </div> -->
    </div>
  </div>
</section>