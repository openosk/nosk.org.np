<?php get_header(); ?>
<div id="front-main">



    <h3> Recent Posts: </h3>

    <?php get_archives('postbypost', '100', 'custom', '<li>', '</li>'); ?>

</div>
<?php get_footer(); ?>