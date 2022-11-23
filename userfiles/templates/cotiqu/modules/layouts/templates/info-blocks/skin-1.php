<?php

/*

type: layout

name: Info Block 1

position: 1

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

<section class="cases-section-two cases-page paddingbotto0  <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-info-blocks-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="auto-container new-auto-container">
        <!--Case Block-->
        <div class="case-block-two wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
            <div class="inner-box clearfix inner-box-partners">
            <div class="image-column">
                <div class="image-layer"
                style="background-image: url(<?php print template_url(); ?>theme/assets/images/clients/11.jpg);background-size: 300px; object-fit:contain; background-position: center center;">
                </div>
                <figure class="image-box">
                    <img src="<?php print template_url(); ?>theme/assets/images/clients/11.jpg" alt="" title="">
                </figure>
            </div>
            <div class="content-column">
                <div class="content-box">
                <div class="title-box">
                    <h3>Medical Technology Association</h3>

                </div>
                <div class="text-content">
                    <div class="mw-empty-element"></div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
