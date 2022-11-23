<?php
$logos_json = get_module_option('settings', $params['id']);

$defaults = [
    [
        'images' => template_url()."theme/assets/images/clients/11.jpg",
    ],
    [
        'images' => template_url()."theme/assets/images/clients/04.jpg",
    ],
    [
        'images' => template_url()."theme/assets/images/clients/12.jpg",
    ],
    [
        'images' => template_url()."theme/assets/images/clients/08.jpg",
    ],
    [
        'images' => template_url()."theme/assets/images/clients/10.jpg",
    ],
];

$logos = json_decode($logos_json, true);
if (isset($logos) == false or count($logos) == 0) {
    $logos = $defaults;
}

?>
<div class="sponsors-carousel owl-theme">
<?php
foreach($logos as $logo)
{
?>
    <div class="slide-item">
        <figure class="image-box">
            <a href="#"><img src="<?php print $logo['images']; ?>" alt="" /></a>
        </figure>
    </div>
<?php
}
?>
</div>
<script>mw.lib.require('slick');</script>
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
