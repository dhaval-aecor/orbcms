<?php

/*

type: layout

name: Contact Information - Form

position: 4

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

<section class="contact-section-two new-contact-form-responsive <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-contacts-skin-4-<?php print $params['id'] ?>" rel="module">
    <div class="auto-container">
    <div class="upper-row">
        <div class="row clearfix">

        <div class="contact-info-block col-lg-5 col-md-12 col-sm-12 contact-info-block-new">
            <div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="content-box contact-content-box">
                <div class="title-box">
                <h4>COTIQU Pty Ltd</h4>
                <div class="sub-text">GORDON NSW 2072</div>
                </div>
                <div class="text-content">
                <div class="info">
                    <ul>
                    <li>ABN: 21 151 324 864</li>
                    <li>
                        Call us:
                        <a href="tel:0401724083"><strong>0401 724 083</strong></a>
                    </li>
                    <li>
                        Email:
                        <a href="mailto:info@cotiqu.com.au">info@cotiqu.com.au</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="form-column col-lg-7 col-md-12 col-sm-12">
            <div class="inner">
            <div class="form-box">
                <div class="default-form contact-form">
                    <module type="contact_form"/>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
