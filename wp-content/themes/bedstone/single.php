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

        <?php if ('post' == get_post_type()) : ?>
            <footer class="article-footer">
                <?php get_template_part('nav', 'posts'); ?>
            </footer>
        <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
