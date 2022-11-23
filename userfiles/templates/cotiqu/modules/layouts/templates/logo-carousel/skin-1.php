<?php

/*

type: layout

name: Logo carousel

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

<section class="sponsors-section bg_white <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-logo-carousel-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="sponsors-outer">
    <!--Sponsors-->
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <module type="client_logos"/>
    </div>
    </div>
</section>


<!--  -->
