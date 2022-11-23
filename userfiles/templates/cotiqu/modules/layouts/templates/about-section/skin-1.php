<?php

/*

type: layout

name: About Section 1

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

<section class="about-section about-section-new <?php echo $layout_classes; ?> edit safe-mode nodrop" field="layout-features-skin-1-<?php print $params['id'] ?>" rel="module">
  <div class="auto-container">
    <div class="row clearfix">
      <!--Text Column-->
      <div class="text-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner">
          <div class="sec-title">
            <div class="upper-text">About COTIQU</div>
            <h2>Independent IT services to the association industry.</h2>
          </div>

          <div class="text-content">
            <p>
              COTIQU stands for COst, TIme, QUality, the three constraints
              that act upon every project. COTIQU offers vendor
              independent IT services to the association industry. COTIQU
              is owned and managed by John Walker. John is a member of the
              Australian Institute of Project Management and an AIPM
              Certified Practising Project Manager.
            </p>
          </div>
        </div>
      </div>
      <!--Image Column-->
      <div class="image-column col-lg-6 col-md-12 col-sm-12">
        <div class="inner">
          <!--Images-->
          <div class="images">
            <div class="row clearfix">
              <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <img src="<?php print template_url(); ?>theme/assets/images/about-thumb-01.jpg" alt="" title="" />
              </figure>
              <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <img src="<?php print template_url(); ?>theme/assets/images/about-thumb-02.jpg" alt="" title="" />
              </figure>
              <figure class="image col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <img src="<?php print template_url(); ?>theme/assets/images/about-thumb-04.png" alt="" title="" />
              </figure>
              <figure class="image col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0ms"
                data-wow-duration="1500ms">
                <img src="<?php print template_url(); ?>theme/assets/images/about-thumb-03.jpg" alt="" title="" />
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
