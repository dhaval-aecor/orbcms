<?php

/*

type: layout

name: Call to action

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

<section class="default-bg-section new-default-bg-section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-cta-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="image-layer" style="background-image: url(<?php print template_url(); ?>theme/assets/images/create-account-slider.jpeg)"></div>

    <div class="auto-container">
    <div class="content-box">
        <h2>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
        </h2>
        <div class="link-box">
        <a href="https://orb.test/register" class="theme-btn btn-style-one">
            <div class="btn-title">Create Account</div>
        </a>
        </div>
    </div>
    </div>
</section>
