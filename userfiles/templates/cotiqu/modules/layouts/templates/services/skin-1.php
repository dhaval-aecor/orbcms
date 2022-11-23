<?php

/*

type: layout

name: Service 1

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
    <div class="gradient-layer"></div>
    <div class="pattern-layer"></div>
    <div class="auto-container">
        <!-- <div class="theme-separator custom-theme-separator"></div> -->
        <div class="sec-title centered">
            <div class="upper-text">Our Services</div>
            <h2><strong class="custom_marT20">Our Services</strong></h2>
            <div class="lower-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum explicabo assumenda voluptate, id optio quidem doloremque dolor laudantium quo, dolores quos. Corporis eos blanditiis vel, tempora impedit dicta molestias temporibus?
            </div>
        </div>
        <div class="services-box">
            <div class="row clearfix">
                <!--Service Block 1 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-cloud"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/System-Selection.png">
                            </div>
                        </div>
                        <h3>
                            <a href="system-selection.html">System Selection</a>
                        </h3>
                        <div class="text">
                            Helping your organisation make informed decisions when
                            selecting & implementing new IT systems...
                        </div>
                        <div class="more-link">
                            <a href="system-selection.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Service Block 2 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-desktop"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/CIO-Services.png">
                            </div>
                        </div>
                        <h3><a href="cio-services.html">CIO Services</a></h3>
                        <div class="text">
                            We can lead you through IT and process change to a future
                            first class application architecture.
                        </div>
                        <div class="more-link">
                            <a href="cio-services.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Service Block 3 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-shield"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/Project-Management.png">
                            </div>
                        </div>
                        <h3>
                            <a href="project-management.html">Project Management</a>
                        </h3>
                        <div class="text">
                            Careful implementation and process ensures completion for
                            your organisation's IT projects...
                        </div>
                        <div class="more-link">
                            <a href="project-management.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Service Block 4 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-folder"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/Data-Migration.png">
                            </div>
                        </div>
                        <h3>
                            <a href="data-migration-and-cleansing.html">Data Migration and Cleansing</a>
                        </h3>
                        <div class="text">
                            Keeping your data intact, while improving data structure &
                            quality...
                        </div>
                        <div class="more-link">
                            <a href="data-migration-and-cleansing.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Service Block 5 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-server"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/Infrastructure Application Audit.png">
                            </div>
                        </div>
                        <h3>
                            <a href="infrastructure-application-audit.html">Infrastructure / Application Audit</a>
                        </h3>
                        <div class="text">
                            We review your existing and future business, then provide a
                            plan...
                        </div>
                        <div class="more-link">
                            <a href="infrastructure-application-audit.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--Service Block 6 -->
                <div class="service-block-three col-lg-4 col-md-6 col-sm-12 cloneable">
                    <div class="card inner-box">
                        <div class="icon-outer">
                            <span class="icon-bg"></span>
                            <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms">
                                <!-- <span class="themify-headphone-alt"></span> -->
                                <img src="<?php print template_url(); ?>theme/assets/images/icons/Project-Rescue.png">
                            </div>
                        </div>
                        <h3><a href="project-rescue.html">Project Rescue</a></h3>
                        <div class="text">
                            Proven processes & project leadership to get your IT project
                            back on track...
                        </div>
                        <div class="more-link">
                            <a href="project-rescue.html"><span class="fa fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-text">
            <div class="text">
                Independent IT services to the association industry. Specialists
                in
                <a href="https://www.cotiqu.com.au/services/system-selection"><strong>Association Management
                Systems</strong></a>
            </div>
        </div>
    </div>
</section>
