<?php
/**
 * Template Name: Full Width (no sidebar)
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('nav', 'breadcrumbs'); ?>
</header>

<div class="container-columns row">
    <div class="content col-md-12" role="main">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('content');
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>
