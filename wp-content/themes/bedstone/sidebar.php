<?php
/**
 * sidebar
 *
 * @package Bedstone
 */
?>

<aside class="sidebar col-md-4" role="complementary">

    <div class="cta-cmelearning">
        <img src="<?php bloginfo('template_directory'); ?>/images/@TODO.png" alt="CM Elearning">
        <p>Intro to CM Elearning here pretium lacus id lorem auctor, id gravida felis ultrices. Pretium lacus id lorem auctor.</p>
        <a href="<?php the_ext('cmelearning'); ?>" class="btn btn-default">Visit cmelearning.com</a>
    </div>

    <?php if ($post->ID != PAGE_CONTACT && !is_front_page()) : ?>
        <div class="cta-contact">
            <a href="<?php echo get_permalink(PAGE_CONTACT); ?>"><strong>Contact us now</strong> to learn how we can lorem ipsum dolor sit amet elit amet lorem</a>
        </div>
    <?php endif; ?>

</aside>
