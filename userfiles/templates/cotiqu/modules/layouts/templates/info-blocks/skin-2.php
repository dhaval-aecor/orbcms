<?php

/*

type: layout

name: Info Block 2

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = '';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = '';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<section class="cases-section-two cases-page new-partners-box paddingbotto0 new-bg-color <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-info-blocks-skin-2-<?php print $params['id'] ?>" rel="module">

      <div class="auto-container new-auto-container">


        <!--Case Block-->
        <div class="case-block-two wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
          style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
          <div class="inner-box clearfix inner-box-partners">

            <div class="content-column">
              <div class="content-box">
                <div class="title-box">
                  <h3>Australasian Supply Chain Institute</h3>

                </div>
                <div class="text-content">
                    <div class="mw-empty-element"></div>
                </div>
              </div>
            </div>

            <div class="image-column">
              <div class="image-layer"
                style="background-image: url(<?php print template_url(); ?>theme/assets/images/clients/04.jpg);background-size: 300px; object-fit:contain; background-position: center center;background-color: #f9f9f9;">
              </div>
              <figure class="image-box">
                <img src="<?php print template_url(); ?>theme/assets/images/clients/4.jpg" alt="" title="">
              </figure>

            </div>
          </div>
        </div>

      </div>
    </section>
