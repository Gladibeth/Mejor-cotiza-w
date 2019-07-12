<?php
get_header();
?>
<style>
  .content-resolved-search {
    display: flex;
    justify-content: center;
    flex-direction: column;
    width: 100%;
    height: 55vh;
  }
</style>
<section class="questions">
  <div class="container-fluid">
    <div class="content-professional">
     
      <?php if(have_posts()) : while ( have_posts() ) : the_post(); ?>
        <a class="card-inf-professional" href="profile.html">
          <img alt="image" class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>">
          <div class="card-content-professional">
            <h3>
              <strong><?php the_title(); ?></strong>
            </h3>
            <p><?php the_content(); ?></p>
          </div>
        </a>
      <?php endwhile; 
      else:
      ?>
        <div class="content-resolved-search">
          <h1>No encontrado </h1>
          <a href="<?php echo bloginfo('url');?>"><p>Volver a la pagina principal</p></a>
        </div>
      <?php endif?>

    </div>
  </div>
</section>


<?php
get_footer();
?>