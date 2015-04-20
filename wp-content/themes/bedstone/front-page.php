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
        <?php
        while (have_posts()) {
            the_post();
            get_template_part('content');
        }
        ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<div class="focus-areas">

    <?php setup_postdata($GLOBALS['post'] =& get_post(PAGE_CROSS_CULTURAL)); ?>
    <div class="col-md-4 teal">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn-default teal">Learn More</a>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php setup_postdata($GLOBALS['post'] =& get_post(PAGE_DIVERSITY_INCLUSION)); ?>
    <div class="col-md-4 red">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn-default red">Learn More</a>
    </div>
    <?php wp_reset_postdata(); ?>

    <?php setup_postdata($GLOBALS['post'] =& get_post(PAGE_ANTI_HARASSMENT)); ?>
    <div class="col-md-4 blue">
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn-default blue">Learn More</a>
    </div>
    <?php wp_reset_postdata(); ?>
</div>

<div class="services row">
    <div class="col-md-12">
        <?php
            setup_postdata($GLOBALS['post'] =& get_post(PAGE_SERVICES));
            the_excerpt();
            wp_reset_postdata();
        ?>
        <nav>
            <ul>
                <?php
                wp_list_pages(array(
                    'depth' => 1,
                    'child_of' => PAGE_SERVICES,
                    'title_li' => '',
                ));
                ?>
            </ul>
        </nav>
    </div>
</div>

<?php get_footer(); ?>
