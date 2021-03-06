<?php
/**
 * attachment
 * custom post type
 * blog post
 *
 * @package Bedstone
 */

get_header(); ?>

<div class="container-columns row">
    <div class="content col-md-8" role="main">

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
