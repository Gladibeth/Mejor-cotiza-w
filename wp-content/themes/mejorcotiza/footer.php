<div class='footer'>
    <div class='mask'>
      <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/brocha.png'>
    </div>
    <div class='container-footer'>
      <p>Av. apoquindo 6410, of. 605, las condes, santiago</p>
      <p>
        Derechos reservados /
        <a data-target='#politicas' data-toggle='modal'>
            Políticas de la empresa
          </a>
      </p>
    </div>
  </div>
  <!-- Modal -->
  <div aria-hidden='true' aria-labelledby='exampleModalLongTitle' class='modal fade' id='politicas' role='dialog' tabindex='-1'>
    <div class='modal-dialog' role='document'>
      <div class='modal-content'>
        <div class='modal-header'>
          <h5 class='modal-title'>Políticas de la empresa</h5>
          <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
              <span aria-hidden='true'>×</span>
            </button>
        </div>
        <div class='modal-body'>
          <p>Mejor Cotiza no participa ni es responsable de ningún ámbito de la propuesta, ni en la ejecución del proyecto, siendo 100% responsable la empresa contratada, de su correcta ejecución.</p>
          <p>Mejor Cotiza cuenta con los mejores profesionales del país, por lo que un gran inconveniente en la ejecución del proyecto resultará en la desvinculación de la empresa contratada de nuestra red de profesionales.</p>
        </div>
        <div class='modal-footer'>
          <div class='float-right'>
            <button class='btn btn-blue' href='#'>
                <span class='btn-inner'>Aceptar</span>
              </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/slider-home.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/letteranimation.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/offcanvas.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/wow-settings.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/fonts.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/smooth-scroll.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/steps.js'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets/js/main.js'></script>
  <script>
    smoothScroll.init({
      selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
      selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
      speed: 2000, // Integer. How fast to complete the scroll in milliseconds
      easing: 'easeInOutCubic', // Easing pattern to use
      offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
      callback: function(anchor, toggle) {} // Function to run after scrolling
    });
  </script>
  <?php wp_footer();?>
</body>

</html>