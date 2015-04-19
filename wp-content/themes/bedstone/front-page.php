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
    <div class="col-md-4 teal">
        <h3>Cross-Cultural Healthcare</h3>
        <p>Intro to this topic focus area adipiscing elit. Donec pretium lacus id lorem auctor, id gravida felis ultrices. Integer eu nunc at velit dapibus vulputate.</p>
        <a class="btn-default teal">Learn More</a>
    </div>
    <div class="col-md-4 red">
        <h3>Diversity, Inclusion & Global Business</h3>
        <p>Intro to this topic focus area adipiscing elit. Donec pretium lacus id lorem auctor, id gravida felis ultrices. Integer eu nunc at velit dapibus vulputate.</p>
        <a class="btn-default red">Learn More</a>
    </div>
    <div class="col-md-4 blue">
        <h3>Anti-Harassment Training & Coaching</h3>
        <p>Intro to this topic focus area adipiscing elit. Donec pretium lacus id lorem auctor, id gravida felis ultrices. Integer eu nunc at velit dapibus vulputate.</p>
        <a class="btn-default blue">Learn More</a>
    </div>
</div>

<?php get_footer(); ?>
