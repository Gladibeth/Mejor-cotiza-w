<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <title></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" />
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/cssanimation.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png' rel='icon'>
</head>
<body data-spy="scroll" data-target="#navbarNav">
  <?php $current_file =  $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?> 

 
  <section class='home'>
    <nav class='navbar navbar-expand-md navbar-fixed-js' id='navbarNav'>
      <div class='top-header'>
        <div class='d-flex pl-4 pr-4'>
          <div class='phone'>
            <a class='mr-3' href= 'tel:+569 89043264' target ="_blank">
                <i class='fa fa-phone'></i>
                <span>(+569) 89043264</span>
              </a>
            <a href='mailto:contacto@mejorcotiza.cl''>
                <i class='fa fa-envelope'></i>
                <span>Contacto@mejorcotiza.cl</span>
              </a>
          </div>
          <?php if ($current_file == 'localhost/Mejor-cotiza/'): ?> 
            <div class='text-top-header d-flex'>
              <a data-target='#politicas' data-toggle='modal'>
                <p>Políticas de empresa</p>
              </a>
              <a class='ml-4' data-scroll='' href='<?php bloginfo('url'); ?>/index.php/questions'>
                <p>Preguntas Frecuentes</p>
              </a>
            </div>
            <?php else: ?>
              <form action="<?php bloginfo('url'); ?>">
                <div class='text-top-header d-flex'>
                  <div class='search__container'>
                    <input class='search__input' placeholder='¿Que material estas buscando?' type='text' name:>
                  </div>
                </div>
              </form>
          <?php endif; ?>
        </div>
      </div>
      <div class='container-fluid'>
        <a class='navbar-brand' href='index.html'>
            <img alt='' src='<?php echo get_template_directory_uri(); ?>/assets/img/logo.png'>
          </a>
        <button class='navbar-toggler p-2 border-0 hamburger hamburger--elastic d-none-lg' data-toggle='offcanvas' type='button'>
            <span class='hamburger-box'>
              <span class='hamburger-inner'></span>
            </span>
          </button>
        <div class='offcanvas-collapse fil'>
          <ul class='navbar-nav'>
            <li class='nav-item active dropdown dropdown-large'>
              <a class='nav-link active dropdown-toggle' data-toggle='dropdown' href='#'>
                  Categorías de Materiales
                  <span></span>
                  <b class='caret'></b>
                </a>
              <ul class='dropdown-menu multi-column columns-3'>
                <div class='row'>
                  <div class='col-sm-3'>
                    <ul class='multi-column-dropdown'>
                      <li class='dropdown-header'>Construcción de cero</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Madera y tableros
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Bloques, ladrillos cemento
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Tabiquería
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                      <li class='dropdown-header'>Pisos</li>
                      <li>
                        <a href=''>
                            Cerámicas
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Pisos de madera
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Porcelanato
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <ul class='multi-column-dropdown'>
                      <li class='dropdown-header'>Gastiferia</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Griferias
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Fosas y estanques
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                      <li class='dropdown-header'>Piscinas</li>
                      <li class='divider'></li>
                      <li>
                        <a href='FiberOpticPatchPanel.php'>
                            Piscinas Estructurales
                          </a>
                      </li>
                      <li>
                        <a href='MediaConverter.php'>
                            Piscinas Inflables
                          </a>
                      </li>
                      <li>
                        <a href='19NetworkRack.php'>
                            Equipoas para piscina
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <ul class='multi-column-dropdown'>
                      <li class='dropdown-header'>Electricidad</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Enchufes, placas y volantes
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Temporizadires, timbres y sensores
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                      <li class='dropdown-header'>Pinturas</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Pinturas de interior y exterior
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Pintura para proctectores
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Pintura para especiales
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                    </ul>
                  </div>
                  <div class='col-sm-3'>
                    <ul class='multi-column-dropdown'>
                      <li class='dropdown-header'>Baños y cocina</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Muebles de cocina
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Lavaplatos
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Duchas y Cabinas
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Espejos y Botiquines
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                      <li class='dropdown-header'>Maquinarias</li>
                      <li class='divider'></li>
                      <li>
                        <a href=''>
                            Betoneras, Trompos y Rotomartillos
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Carretillas y Ruedas
                          </a>
                      </li>
                      <li>
                        <a href=''>
                            Ver más
                          </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </ul>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='<?php echo bloginfo('url'); ?>/index.php/distributor'>Nuestros distribuidores</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='<?php echo bloginfo('url'); ?>/index.php/function'>Como Funciona</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' data-scroll='' href='<?php echo bloginfo('url'); ?>/index.php/work'>Trabaja con nosotros</a>
            </li>
            <li class='nav-item cta-btn'>
              <a class='nav-link' data-scroll='' href='<?php echo bloginfo('url'); ?>/index.php/form'>Cotiza Proyectos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>