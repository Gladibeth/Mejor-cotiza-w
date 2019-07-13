<section class="form">
  <div class="container-fluid">
    <div id="container">
      <section class="multi_step_form">
        <div id="msform">
          <div class="tittle">
            <h2>Cotiza tu presupuesto en 3 pasos</h2>
          </div>
          <ul id="progressbar">
            <li class="active">Datos del cliente</li>
            <li>Que necesita</li>
            <li>Datos de su zona</li>
          </ul>
        <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
        </div>
      </section>
    </div>
  </div>
</section>