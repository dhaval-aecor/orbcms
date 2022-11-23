<?php

/*

type: layout

name: Default

description: Testimonials Default

*/

?>

<script>
    $(document).ready(function () {
        if ($('<?php print '#' . $params['id']; ?> .slick-testimonials').length > 0) {
            $('<?php print '#' . $params['id']; ?> .slick-testimonials').each(function () {
                var el = $(this);
                el.slick({
                    rtl: document.documentElement.dir === 'rtl',
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 1,
                    arrows: false,
                    dots: true,
                    responsive: [
                        {
                            breakpoint: 1200,
                            settings: {
                                slidesToShow: 1
                            }
                        },
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            });
        }
    });
</script>

<div class="slider-wrapper p-b-10">
    <div class="slick-testimonials inverse">
        <?php if (isset($data)): ?>
            <?php foreach ($data as $item) { ?>
                <div class="slide slide-item">
                    <div class="slide-holder inner">
                        <div class="icon-box">
                            <span class="flaticon-chat-2"></span>
                        </div>
                        <div class="text">
                            <?php print $item['content']; ?>
                        </div>
                        <div class="info">
                            <div class="name"><?php print $item['name']; ?></div>
                            <div class="designation">
                                <?php if (isset($item['client_website'])) { ?>
                                        <a href="<?php print $item['client_website']; ?>" target="_blank">
                                            <?php if (isset($item["client_company"])): ?><?php print $item['client_company']; ?><?php endif; ?>
                                            <?php if (isset($item["client_role"])): ?><?php if (isset($item["client_company"])): ?>, <?php endif; ?><?php print $item['client_role']; ?><?php endif; ?>
                                        </a>
                                <?php } else { ?>
                                        <?php if (isset($item["client_company"])): ?><?php print $item['client_company']; ?><?php endif; ?>
                                        <?php if (isset($item["client_role"])): ?><?php if (isset($item["client_company"])): ?>, <?php endif; ?><?php print $item['client_role']; ?><?php endif; ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php else: ?>

        <?php endif; ?>
    </div>
</div>
