<?php

/*

  type: layout

  name: OwlSlider - Owl Slider

  description: OwlSlider - Owl Slider


*/

?>

<div class="banner-curve"></div>
<div class="banner-carousel theme-carousel owl-theme owl-carousel"
data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 600, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
<?php foreach ($data as $slide) { ?>
    <div class="slide-item">
        <?php if (isset($slide['skin_file'])) {
            include($slide['skin_file']);
        }
        ?>
    </div>
<?php } ?>
</div>
