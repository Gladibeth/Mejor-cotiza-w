<section class="form">
  <div class="container-fluid">
    <div id="container">
      <section class="multi_step_form">
        <form id="msform">
          <div class="tittle">
            <h2>Cotiza tu presupuesto en 3 pasos</h2>
          </div>
          <ul id="progressbar">
            <li class="active">Datos del cliente</li>
            <li>Que necesita</li>
            <li>Datos de su zona</li>
          </ul>
          <fieldset>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Nombre y Apellido</label>
              </div>
              <input class="input fade-background" name="name" placeholder="Nombre y Apellido" type="text">
            </div>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Correo</label>
              </div>
              <input class="input fade-background" name="email" placeholder="Correo" type="email">
            </div>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Teléfonos</label>
              </div>
              <input class="input fade-background" name="Teléfono" placeholder="Teléfono" type="number">
            </div>
            <button class="btn btn-gray action-button previous_button" type="button">
                <span class="btn-inner">Volver</span>
              </button>
            <button class="btn btn-blue next action-button" type="button">
                <span class="btn-inner">Continuar</span>
              </button>
          </fieldset>
          <fieldset>
            <div class="form-group">
              <div class="control control-expanded control-expen-form">
                <div class="control-label">
                  <label for="">Eligir Categorías</label>
                </div>
                <select class="product_select">
                    <option data-display=" 1. Construcción de cero">1. Construcción de cero</option>
                    <option>2. Ampliación</option>
                    <option>3. Pintura</option>
                    <option>4. Reparaciones</option>
                    <option>5. Trabajos de piso y Radier</option>
                    <option>6. Fletes y mudanza</option>
                  </select>
              </div>
              <div class="control control-expanded control-expen-form">
                <div class="control-label">
                  <label for="">Fecha para comenzar proyecto</label>
                </div>
                <input class="input fade-background" name="dia" placeholder="Fecha" type="date">
              </div>
              <div class="control control-expanded control-expen-form">
                <div class="control-label">
                  <label for="">Rango de tiempo para comenzar</label>
                </div>
                <div class="d-flex mt-2">
                  <div class="radio">
                    <input checked="checked" id="radio-1" name="radio" type="radio">
                    <label class="radio-label" for="radio-1">Una semana</label>
                  </div>
                  <div class="radio">
                    <input id="radio-2" name="radio" type="radio">
                    <label class="radio-label" for="radio-2">Un mes</label>
                  </div>
                  <div class="radio">
                    <input id="radio-3" name="radio" type="radio">
                    <label class="radio-label" for="radio-3">Más de un mes</label>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-gray action-button previous previous_button" type="button">
                <span class="btn-inner">Volver</span>
              </button>
            <button class="btn btn-blue next action-button" type="button">
                <span class="btn-inner">Continuar</span>
              </button>
          </fieldset>
          <fieldset>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Región</label>
              </div>
              <select class="product_select">
                  <option data-display="Región Metropolitana">Región Metropolitana</option>
                  <option>Región de Arica</option>
                  <option>Región Taracapá</option>
                </select>
            </div>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Dirección</label>
              </div>
              <textarea class="fade-background" placeholder="Escribe tú dirección"></textarea>
            </div>
            <div class="control control-expanded control-expen-form">
              <div class="control-label">
                <label for="">Sobre el proyecto</label>
              </div>
              <textarea class="fade-background" placeholder="Escribenos sobre tú proyecto "></textarea>
            </div>
            <button class="btn btn-gray action-button previous previous_button" type="button">
                <span class="btn-inner">Volver</span>
              </button>
            <a class="btn btn-blue action-button" href="#">
                <span class="btn-inner">Enviar solicitud</span>
              </a>
          </fieldset>
        </form>
      </section>
    </div>
  </div>
</section>