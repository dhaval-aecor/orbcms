<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home layout
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="content">
    <module type="layouts" template="home-sliders/skin-2"/>
    <module type="layouts" template="services/skin-1"/>
    <module type="layouts" template="services/skin-1"/>
    <module type="layouts" template="cta/skin-1"/>
    <module type="layouts" template="blockquotes/skin-3"/>
    <module type="layouts" template="logo-carousel/skin-1"/>

</div>

<?php include template_dir() . "footer.php"; ?>




