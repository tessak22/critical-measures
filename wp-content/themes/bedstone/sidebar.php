<?php
/**
 * sidebar
 *
 * @package Bedstone
 */
?>

<aside class="sidebar col-md-4" role="complementary">

    <div class="cta-cmelearning">
        <img src="<?php bloginfo('template_directory'); ?>/images/cm-elearning-logo.png" alt="CM Elearning">
        <p><?php if(function_exists('show_text_block')) { echo show_text_block('cm-elearning-sidebar-text', true); } ?></p>
        <a href="<?php the_ext('cmelearning'); ?>" class="btn btn-primary">Visit cmelearning.com</a>
    </div>

    <?php if ($post->ID != PAGE_CONTACT && !is_front_page()) : ?>
        <a class="cta-contact" href="<?php echo get_permalink(PAGE_CONTACT); ?>"><span><strong>Contact us now</strong> <?php if(function_exists('show_text_block')) { echo show_text_block('contact-us-now-sidebar-intro-text', true); } ?></span></a>
    <?php endif; ?>

</aside>
