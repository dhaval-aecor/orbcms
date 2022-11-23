<?php

/*

type: layout

name: Page Text

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
<?php
$title = 'Your Title Here';
if (page_title()) {
    $title = page_title();
}
?>

<section class="about-section <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="auto-container">
        <div class="sec-title centered">
            <!-- <div class="upper-text">IT Related CaseStudies &amp; Works</div> -->
            <div class="upper-text">COTIQU Services</div>
            <h2><strong><?php echo $title; ?></strong></h2>
        </div>
        <div class="row clearfix">
            <!--Text Column-->
            <div class="text-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner">

                    <div class="text-content text-content-term-new edit">
                        <div class="mw-empty-element"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
