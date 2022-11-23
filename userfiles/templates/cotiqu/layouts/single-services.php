<?php

/*

type: layout
content_type: static
name: Simple Text Page
position: 5
description: Single Service

*/

?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" rel="content" field="content">
        <module type="layouts" template="page-banners/skin-1"/>
        <module type="layouts" template="text/text"/>
    </div>

<?php include template_dir() . "footer.php"; ?>
