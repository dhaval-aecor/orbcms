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

<script>
    $(document).ready(function () {
        if ($('.sponsors-section .sponsors-carousel').length > 0) {
            $('.sponsors-section .sponsors-carousel').each(function () {
                var el = $(this);
                el.slick({
                    rtl: document.documentElement.dir === 'rtl',
                    centerMode: true,
                    autoplay:true,
                    autoplaySpeed:6000,
                    centerPadding: '0px',
                    slidesToShow: 4,
                    arrows: false,
                    dots: false,
                    adaptiveHeight: false,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 2
                            }
                        }
                    ]
                });
            });
        }
    });
</script>

<section class="sponsors-section bg_white <?php echo $layout_classes; ?> edit safe-mode nodrop" rel="module">
    <div class="sponsors-outer">
    <!--Sponsors-->
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="sponsors-carousel owl-theme">
            <div class="slide-item">
                <figure class="image-box">
                    <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/11.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/04.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/12.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/08.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/10.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/01.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/03.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/09.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/06.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/05.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/13.jpg" alt="" /></a>
                </figure>
            </div>
            <div class="slide-item">
                <figure class="image-box">
                <a href="#"><img src="<?php print template_url(); ?>theme/assets/images/clients/02.jpg" alt="" /></a>
                </figure>
            </div>

        </div>
    </div>
    </div>
</section>


<!--  -->
