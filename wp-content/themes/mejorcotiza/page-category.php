<?php get_header();?>
  <section class="questions">
    <div class="container-fluid">
      <div class="content-title">
        <h1 class="title-section">Productos Relacionados</h1>
      </div>
      <div class="p-4">
        <div class="row d-flex">
              
          <?php
            require 'simple_html_dom.php';
            $html = file_get_html('https://www.sodimac.cl/sodimac-cl/category/cat750203/Set-de-herramientas-electricas-e-inalambricas?cid=bnehom143064');
            $sectionList = $html->find('section[class=item-list]',0);
            $section = $html->find('section[class=one-prod]',0);

            $permalinkImage = $html->find('a[class=containerImg]',0);
            $img = $permalinkImage->find('img[class=hoverImg] ',0);
            $boxInfo = $html->find('div[class=informationContainer]',0);
            $text = $boxInfo->find('p[class=name]',0);
            $sku = $boxInfo->find('p[class=sku]',0);
            $contentStar = $boxInfo->find('p[class=mt-10]',0);
            $priceN = $boxInfo->find('p[class=normal-price]',0);
            $price = $html->find('p[class=price]',0);
            $priceB = $price->find('b',0);
            $span = $priceB->find('span',0);
            // $img_link = 'https://www.sodimac.cl/'.$img->src;
            
            echo "<div class='col-md-4 col-sm-12'>";
            echo $img;
            echo "<div class='card-content-professional'>";
            echo $text;
            echo $sku;
            echo $span;
            echo $priceN;
            echo "</div>";
            echo "</div>";
          ?>

        </div>
      </div>
    </div>
  </section>
  <style>
    .name a {
      color: #000 !important;
      text-decoration: none !important;
      margin-top: 10px !important;
    }
  </style>
  
<?php get_footer(); ?>