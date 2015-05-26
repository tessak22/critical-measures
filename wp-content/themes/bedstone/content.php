<?php
/**
 * default content output
 * page
 * single
 * attachment
 *
 * @package Bedstone
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <header class="document-header">
        <h1><?php bedstone_the_alternate_title(); ?></h1>
        <?php
        if ('post' == get_post_type()) {
            get_template_part('nav', 'article-meta');
        }
        ?>
    </header>

    <?php if(get_field('leadership_job_title_position')): ?>
        <h5 class="bio"><?php the_field('leadership_job_title_position'); ?></h5>
    <?php endif; ?>

    <?php if (has_post_thumbnail()) : ?>
        <figure class="contextual-image">
            <?php
            the_post_thumbnail();
            // look for captions, except on Leadership children
            if (PAGE_LEADERSHIP != $post->post_parent) {
                $caption = get_post(get_post_thumbnail_id())->post_excerpt;
                if ($caption) {
                    echo '<figcaption>' . $caption . '</figcaption>';
                }
            }
            ?>
        </figure>
    <?php endif; ?>

    <?php
        the_content();
        get_template_part('variant', 'after-content');
    ?>

    <?php comments_template(); ?>

</article>
