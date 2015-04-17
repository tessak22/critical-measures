<?php
/**
 * content output, list
 *
 * @package Bedstone
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="article-header">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php
        if ('post' == get_post_type()) {
            get_template_part('nav', 'article-meta');
        }
        ?>
    </header>
    <?php the_excerpt(); ?>
</article>
