<?php

/*

type: layout

name: Page Banner

position: 2

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-0';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-0';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<?php
$title = 'Your Title Here';
if (page_title()) {
    $title = page_title();
}
?>

<section class="inner-banner pt-0 pb-0 <?php print $layout_classes; ?> edit nodrop" data-overlay="1" field="layout-home-banners-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="banner-curve"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="theme-icon"></div>
            <div class="title-box">
                <h1><?php echo $title; ?></h1>
                <div class="d-text">Independent IT services to the Not for Profit and Association sectors.</div>
            </div>
        </div>
    </div>
</section>
