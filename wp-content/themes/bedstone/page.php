<?php
/**
 * page
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part('nav', 'breadcrumbs'); ?>
</header>

<div class="container-columns row">
    <div class="content col-md-9" role="main">
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('content');
        }
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
