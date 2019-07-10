<main class='main-content'>
    <section class='slideshow'>
      <div class='slideshow-inner'>
        <?php $args = array( 'post_type' => 'banner'); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class='slides'>
            <div class='slide is-active'>
              <div class='slide-content'>
                <div class='caption caption-home'>
                  <div class='container-title'>
                    <div class='title title-bold mb-3'><?php the_title(); ?></div>
                    <div class='title'><?php the_content(); ?></div>
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
                </div>
              </div>
              <div class='image-container'>
                <img alt='' class='image' src='<?php echo get_the_post_thumbnail_url(); ?>'>
              </div>
            </div>
           <?php endwhile; ?>
          <!-- <div class='slide'>
            <div class='slide-content'>
              <div class='caption caption-home'>
                <div class='container-title'>
                  <div class='title'>Mejor cotiza te ofrece lo mejor</div>
                </div>
                <div class='containers-btn'>
                  <a class='btn btn-white btn-first' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                      <span class='btn-inner'>Cotizar proyectos de construcción</span>
                    </a>
                  <a class='btn btn-white ml-4 btn-first' href='<?php bloginfo('url'); ?>/index.php/materials'>
                      <span class='btn-inner'>Cotizar materiales de construcción</span>
                    </a>
                  <a class='btn btn-white btn-second' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                      <span class='btn-inner'>Cotizar proyectos</span>
                    </a>
                  <a class='btn btn-white mt-3 btn-second' href='<?php bloginfo('url'); ?>/index.php/materials'>
                      <span class='btn-inner'>Cotizar materiales</span>
                    </a>
                </div>
              </div>
            </div>
            <div class='image-container'>
              <img alt='' class='image' src='https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80'>
            </div>
          </div>
          <div class='slide'>
            <div class='slide-content'>
              <div class='caption caption-home'>
                <div class='container-title'>
                  <div class='title'>Ven y aprovecha tenemos todo lo que necesitas</div>
                </div>
                <div class='containers-btn'>
                  <a class='btn btn-white btn-first' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                      <span class='btn-inner'>Cotizar proyectos de construcción</span>
                    </a>
                  <a class='btn btn-white ml-4 btn-first' href='<?php bloginfo('url'); ?>/index.php/materials'>
                      <span class='btn-inner'>Cotizar materiales de construcción</span>
                    </a>
                  <a class='btn btn-white btn-second' href='<?php bloginfo('url'); ?>/index.php/mejor'>
                      <span class='btn-inner'>Cotizar proyectos</span>
                    </a>
                  <a class='btn btn-white mt-3 btn-second' href='<?php bloginfo('url'); ?>/index.php/materials'>
                      <span class='btn-inner'>Cotizar materiales</span>
                    </a>
                </div>
              </div>
            </div>
            <div class='image-container'>
              <img alt='' class='image' src='https://images.unsplash.com/photo-1513584684374-8bab748fbf90?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=746&amp;q=80'>
            </div>
          </div>
        </div> -->
        <!-- <div class='pagination'>
          <div class='item is-active'>
            <span class='icon'>1</span>
          </div>
          <div class='item'>
            <span class='icon'>2</span>
          </div>
          <div class='item'>
            <span class='icon'>3</span>
          </div>
        </div> -->
        <div class='arrows'>
          <div class='arrow prev'>
            <span class='svg svg-arrow-left'>
                <svg enable-background='new 0 0 14 26' height='26px' id='svg4-Layer_1' version='1.1' viewbox='0 0 14 26' width='14px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                  <path d='M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z'></path>
                </svg>
                <span class='alt sr-only'></span>
            </span>
          </div>
          <div class='arrow next'>
            <span class='svg svg-arrow-right'>
                <svg enable-background='new 0 0 14 26' height='26px' id='svg5-Layer_1' version='1.1' viewbox='0 0 14 26' width='14px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                  <path d='M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z'>
                    <span class='alt sr-only'></span>
            </path>
            </svg>
            </span>
          </div>
        </div>
      </div>
    </section>
  </main>