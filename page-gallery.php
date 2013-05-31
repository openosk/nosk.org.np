<?php
/*
Template Name: Picasa Web Gallery
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link   href="<?php bloginfo('template_url'); ?>/pwi/js/jquery.colorbox/colorbox.css" rel="stylesheet" type="text/css"/>
<script src="<?php bloginfo('template_url'); ?>/pwi/js/jquery.colorbox/jquery.colorbox-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url'); ?>/pwi/js/jquery.blockUI.js" type="text/javascript"></script>
<link   href="<?php bloginfo('template_url'); ?>/pwi/css/pwi.css" rel="stylesheet" type="text/css"/>
<script src="<?php bloginfo('template_url'); ?>/pwi/js/jquery.pwi.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
    var settings = {
        username: '<?php if (have_posts()) : while (have_posts()) : the_post(); echo trim(strip_tags(get_the_content())); endwhile; endif;?>',
      popupPlugin: "colorbox"
  };
  $("#container").pwi(settings);
});
</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">

        <header id="masthead" class="site-header" role="banner">
            <hgroup>
                <span id="header_image">
                    <?php $header_image = get_header_image();
                    if ( ! empty( $header_image ) ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
                <?php endif; ?>
            </span>
            <?php get_search_form(true); ?>
            <span id="header_text">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </span>

        </hgroup>


        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
            <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->


    </header><!-- #masthead -->

    <div id="main" class="wrapper">

      <div id="container"> </div>

      <?php get_footer(); ?>
