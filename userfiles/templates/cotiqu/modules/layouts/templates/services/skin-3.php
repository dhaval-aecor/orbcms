<?php

/*

type: layout

name: Service 3

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

<section class="services-section-two home-page-services-section section-7 <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="pattern-layer"></div>
    <div class="auto-container new-why-choose">
        <!-- <div class="theme-separator custom-theme-separator"></div> -->
        <div class="sec-title centered">
            <div class="upper-text">COTIQU - Welcome To IT Solutions</div>
            <h2><strong class="custom_marT20">Why Choose COTIQU IT Solutions</strong></h2>
            <div class="lower-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum explicabo assumenda voluptate, id optio quidem doloremque dolor laudantium quo, dolores quos. Corporis eos blanditiis vel, tempora impedit dicta molestias temporibus?
            </div>
        </div>
        <div class="services-box">
            <div class="row clearfix">
                <!--Service Block 1 -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-cloud"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/System-Selection.png">
                            </div>
                        </div>
                        <h3>
                            <a href="system-selection.html">Lorem ipsum</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <!--Service Block 2 -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-desktop"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/CIO-Services.png">
                            </div>
                        </div>
                        <h3>
                            <a href="cio-services.html">Lorem ipsum</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
                <!--Service Block 3 -->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-shield"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/Project-Management.png">
                            </div>
                        </div>
                        <h3>
                            <a href="project-management.html">Lorem ipsum</a>
                        </h3>
                        <div class="text">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
