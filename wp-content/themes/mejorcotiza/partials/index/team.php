<?php $args = array( 'post_type' => 'Equipo'); ?>   
<?php $loop = new WP_Query( $args ); ?>
<section class='our_team_area'>
  <div class='container-fluid'>
    <div class='content-title'>
      <h1 class='title-section'>
        Quiénes somos
      </h1>
    </div>
    <div class='team_row team-carousel'>
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class='content-member-team'>
          <div class='team_membar'>
            <img alt='' class='rounded' src='<?php echo get_the_post_thumbnail_url(); ?>'>
            <div class='team_content'>
              <ul>
                <?php if(get_field('facebook')): ?>
                <li>
                  <a href='<?php the_field('facebook'); ?>'>
                      <i class='fa fa-facebook'></i>
                    </a>
                </li>
                <?php endif;?>
                <?php if(get_field('instagram')): ?>
                  <li>
                    <a href='<?php the_field('instagram'); ?>'>
                      <i class='fa fa-instagram'></i>
                    </a>
                  </li>
                <?php endif;?>
              </ul>
              <div class='name'><?php the_title(); ?></div>
              <h6><?php the_field('telefono'); ?></h6>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- <div class='content-member-team'>
        <div class='team_membar'>
          <img alt='' class='rounded' src='<?php echo get_template_directory_uri(); ?>/assets/img/people/2.jpg'>
          <div class='team_content'>
            <ul>
              <li>
                <a hrerf=''>
                    <i class='fa fa-facebook'></i>
                  </a>
              </li>
              <li>
                <a hrerf=''>
                    <i class='fa fa-instagram'></i>
                  </a>
              </li>
            </ul>
            <div class='name'>Matías</div>
            <h6>(+569) 8 904 32 64</h6>
          </div>
        </div>
      </div>
      <div class='content-member-team'>
        <div class='team_membar'>
          <img alt='' class='rounded' src='<?php echo get_template_directory_uri(); ?>/assets/img/people/3.jpg'>
          <div class='team_content'>
            <ul>
              <li>
                <a hrerf=''>
                    <i class='fa fa-facebook'></i>
                  </a>
              </li>
              <li>
                <a hrerf=''>
                    <i class='fa fa-instagram'></i>
                  </a>
              </li>
            </ul>
            <div class='name'>Yonnys Quintero</div>
            <h6>(+569) 8 904 32 64</h6>
          </div>
        </div>
      </div>
      <div class='content-member-team'>
        <div class='team_membar'>
          <img alt='' class='rounded' src='<?php echo get_template_directory_uri(); ?>/assets/img/people/4.jpg'>
          <div class='team_content'>
            <ul>
              <li>
                <a hrerf=''>
                    <i class='fa fa-facebook'></i>
                  </a>
              </li>
              <li>
                <a hrerf=''>
                    <i class='fa fa-instagram'></i>
                  </a>
              </li>
            </ul>
            <div class='name'>Roberto Vargas</div>
            <h6>(+569) 8 904 32 64</h6>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>