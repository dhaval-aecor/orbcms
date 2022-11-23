<div class="auto-container">
    <div class="content-box">
        <div class="round-layer"></div>
        <div class="content">
            <div class="inner">
                <!-- <div class="sub-title">IT Solutions For Easy Integration</div> -->
                <h1>
                    <?php echo $slide['primaryText']; ?>
                </h1>
                <div class="text">
                    <?php echo (isset($slide['secondaryText'])) ? $slide['secondaryText'] : ''; ?>
                </div>
                <button class="create-account">
                <a href="<?php if (isset($slide['url'])) {
                    print $slide['url'];
                } ?>"><?php print $slide['seemoreText'] ?></a>
                </button>
            </div>
        </div>
        <div class="content-image">
            <img src="<?php print thumbnail($slide['images'][0], 1920, 760); ?>" alt="" title="" />
        </div>
    </div>
</div>
