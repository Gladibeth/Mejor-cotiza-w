<section class="contact">
  <div class="container-fluid">
    <div id="container">
      <section class="multi_step_form">
        <form id="msform">
          <div class="tittle">
            <h2>
              Indica tus Preferencias de Trabajo
            </h2>
            <p>Estimado, con el objetivo de enviarle las solicitudes que mas se acomoden a usted, indíquenos sus preferencias de Trabajo.</p>
          </div>

          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => true, 'description' => false ) ); ?>
          <!-- <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Correo</label>
            </div>
            <input class="input fade-background" name="email" placeholder="Correo" type="email">
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Nombre Completo</label>
            </div>
            <input class="input fade-background" name="name" placeholder="Nombre y Apellido" type="text">
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Dirección</label>
            </div>
            <textarea class="fade-background" placeholder="Escribe tú dirección"></textarea>
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Rut</label>
            </div>
            <input class="input fade-background" name="rut" placeholder="rut" type="text">
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Teléfono</label>
            </div>
            <input class="input fade-background" name="Teléfono" placeholder="Teléfono" type="number">
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">En que región le interesa trabajar</label>
              <div class="d-flex mt-2 container-radio-input">
                <div class="radio">
                  <input checked="checked" id="radio-1" name="radio" type="radio">
                  <label class="radio-label" for="radio-1">Región de Arica y Parinacota: Arica</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-2">Región de Tarapacá: Iquique</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-3">Región de Antofagasta: Antofagasta</label>
                </div>
                <div class="radio">
                  <input checked="checked" id="radio-1" name="radio" type="radio">
                  <label class="radio-label" for="radio-4">Región de Atacama: Copiapó</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-5">Región de Coquimbo: La Serena</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-6">Región de Valparaíso: Valparaíso</label>
                </div>
                <div class="radio">
                  <input checked="checked" id="radio-1" name="radio" type="radio">
                  <label class="radio-label" for="radio-7">Región de Ohiggins: Rancagua</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-8">Región del Maule: Talca</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-9">Región del Bío-Bío: Concepción</label>
                </div>
                <div class="radio">
                  <input id="radio-1" name="radio" type="radio">
                  <label class="radio-label" for="radio-10">Región de la Araucanía: Temuco</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-11">Región de los Ríos: Valdivia</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-12">Región de los Lagos: Puerto Montt</label>
                </div>
                <div class="radio">
                  <input checked="checked" id="radio-1" name="radio" type="radio">
                  <label class="radio-label" for="radio-13">Región de Aysen: Coyhaique</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-14">Región de Magallanes: Punta Arenas</label>
                </div>
                <div class="radio">
                  <input id="radio-2" name="radio" type="radio">
                  <label class="radio-label" for="radio-15">Región Metropolitana: Santiago</label>
                </div>
              </div>
            </div>
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">En que región le interesa trabajar</label>
              <div class="d-flex mt-2 container-radio-input">
                <div class="radio">
                  <input id="category-1" name="categories-1" type="checkbox" value="#">
                  <label for="category-1">Construcción desde Cero</label>
                </div>
                <div class="radio">
                  <input id="category-2" name="categories-" type="checkbox" value="#">
                  <label for="category-2">Ampliación</label>
                </div>
                <div class="radio">
                  <input id="category-3" name="categories-2" type="checkbox" value="#">
                  <label for="category-3">Pintura</label>
                </div>
                <div class="radio">
                  <input id="category-4" name="categories-3" type="checkbox" value="#">
                  <label for="category-4">Reparaciones</label>
                </div>
                <div class="radio">
                  <input id="category-5" name="categories-4" type="checkbox" value="#">
                  <label for="category-5">Trabajos de Piso y Radier</label>
                </div>
                <div class="radio">
                  <input id="category-6" name="categories-5" type="checkbox" value="#">
                  <label for="category-6">Fletes y Mudanzas</label>
                </div>
                <div class="radio">
                  <input id="category-7" name="categories-6" type="checkbox" value="#">
                  <label for="category-7">Construcción de Piscinas</label>
                </div>
                <div class="radio">
                  <input id="category-8" name="categories-7" type="checkbox" value="#">
                  <label for="category-8">Construcción de Quinchos y Cobertizos</label>
                </div>
                <div class="radio">
                  <input id="category-9" name="categories-8" type="checkbox" value="#">
                  <label for="category-9">Locales Comerciales</label>
                </div>
                <div class="radio">
                  <input id="category-10" name="categories-8" type="checkbox" value="#">
                  <label for="category-10">Arquitecto</label>
                </div>
                <div class="radio">
                  <input id="category-11" name="categories-9" type="checkbox" value="#">
                  <label for="category-11">Paisajismo y Jardín</label>
                </div>
                <div class="radio">
                  <input id="category-12" name="categories-10" type="checkbox" value="#">
                  <label for="category-12">Gasfitería</label>
                </div>
                <div class="radio">
                  <input id="category-13" name="categories-11" type="checkbox" value="#">
                  <label for="category-13">Electricidad</label>
                </div>
                <div class="radio">
                  <input id="category-14" name="categories-12" type="checkbox" value="#">
                  <label for="category-14">Sistema de Climatización</label>
                </div>
                <div class="radio">
                  <input id="category-15" name="categories-13" type="checkbox" value="#">
                  <label for="category-15">Baño cocina</label>
                </div>
                <div class="radio">
                  <input id="category-16" name="categories-14" type="checkbox" value="#">
                  <label for="category-16">Otros</label>
                </div>
              </div> -->
          <!--   </div>
          </div>
          <div class="control control-expanded control-expen-form">
            <div class="control-label">
              <label for="">Comentarios o Consultas para MejorCotiza.cl</label>
            </div>
            <textarea class="fade-background" placeholder="Comentarios o Consulta"></textarea>
            <a class="btn btn-blue action-button" href="#">
                <span class="btn-inner">Enviar</span>
              </a>
          </div> -->
        </form>
      </section>
    </div>
  </div>
</section>