<?php

/*

type: layout

name: Contact Information - Map

position: 3

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-30';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-30';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<!-- <section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <module type="google_maps" />
            </div>
        </div>
    </div>
</section> -->
<section class="main-contact-map">
    <div class="auto-container">
    <div class="contact-map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3314.578241762785!2d151.19674931512597!3d-33.82319552412462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aec2d261c5c7%3A0x5822e2134d751212!2sCOTIQU%20Pty%20Ltd!5e0!3m2!1sen!2sin!4v1663137613595!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <module type="google_maps" />
    </div>
    </div>
</section>
