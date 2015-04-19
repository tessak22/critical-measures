<?php
/**
 * page
 * front page
 *
 * @package Bedstone
 */

get_header(); ?>

<div class="container-columns row">
    <div class="content col-md-8" role="main">
        <h1><?php the_title(); ?></h1>
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
