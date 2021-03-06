<?php
/**
 * header
 *
 * @package Bedstone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lte IE 9]>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<![endif]-->
<title><?php is_front_page() ? bloginfo('name') : wp_title(' - ' . get_bloginfo('name'), true, 'right'); ?></title>
<?php /* Legacy IE8 support for HTML5 elements and media queries */ ?>
<!--[if lte IE 8]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
<link rel="icon" type="image/x-icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico" />
<?php bedstone_google_fonts('Roboto+Slab:400,300,100,700|Roboto:400,500,700,300,300italic,400italic'); ?>
<?php wp_head(); ?>
<?php bedstone_favicons(); // two string attributes, hex codes INCULDING pound sign: $color_msTile, $color_theme ?>
<?php
if (defined('ENV_SHOW_ANALYTICS') && ENV_SHOW_ANALYTICS) {
    bedstone_google_analytics(); // put UA as string, e.g. 'UA-434233232-1'
}
?>
</head>
<body <?php body_class('sticky-site-footer'); ?>>
<!--[if lte IE 9]> <div class="ie9-"> <![endif]-->
<!--[if IE 9]> <div class="ie9"> <![endif]-->
<!--[if IE 8]> <div class="ie8"> <![endif]-->
<div class="container-non-site-footer-elements">

<div class="container-fluid nav-secondary">
    <div class="container">
        <div class="col-sm-12 pull-right hidden-print">
            <ul>
                <li><a rel="external" href="<?php the_ext('cmelearning'); ?>">CM Elearning</a></li>
                <li><a href="<?php echo get_permalink(PAGE_GET_UPDATES); ?>">Get Updates</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="site-header container" role="banner">

    <nav class="navbar navbar-default hidden-print" id="nav_main" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a href="/" class="navbar-brand">Critical Measures</a>
            <div class="tagline">In a world of difference... <span>can you relate?&trade;</span></div>
            </div>
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php
                    // run the nav through the walker to add Bootstrap classes
                    wp_list_pages(array(
                        'depth' => 2,
                        'title_li' => '',
                        'walker' => new Bedstone_Bootstrap_Walker_Page(),
                        'exclude' => '6,14,15'
                    ));
                    ?>
                </ul>
            </div>
        </div>
    </nav>

</header><!-- .site-header -->

<main class="site-main container">
