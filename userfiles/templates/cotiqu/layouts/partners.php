<?php

/*

type: layout
content_type: static
name: Partners Page
position: 5
description: Single Service

*/

?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit" rel="content" field="content">
        <module type="layouts" template="page-banners/skin-1"/>
        <module type="layouts" template="page-banners/skin-2"/>
        <module type="layouts" template="info-blocks/skin-1"/>
        <module type="layouts" template="info-blocks/skin-2"/>
        <module type="layouts" template="info-blocks/skin-1"/>
    </div>

<?php include template_dir() . "footer.php"; ?>
