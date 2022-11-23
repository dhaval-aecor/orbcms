<?php

/*

type: layout

name: About Section 2

position: 1

*/

?>

<?php
if (!$classes['padding_top']) {
$classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
$classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="cases-section-two cases-page <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-1-<?php print $params['id'] ?>" rel="module">

      <div class="auto-container">
        <!--Case Block-->
        <div class="case-block-two wow fadeInUp animated new-responsive-case-block" data-wow-delay="0ms" data-wow-duration="1500ms"
          style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
          <div class="inner-box clearfix">
            <div class="image-column">
              <div class="image-layer" style="background-image: url(<?php print template_url(); ?>theme/assets/images/about.jpeg);"></div>
              <figure class="image-box">
                <img src="<?php print template_url(); ?>theme/assets/images/about.jpeg" alt="" title="">
              </figure>
              <a class="link-layer" href="case-single.html"></a>
            </div>
            <div class="content-column">
              <div class="content-box">
                <div class="text-content">
                  <div class="text">
                        <div class="mw-empty-element"></div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
