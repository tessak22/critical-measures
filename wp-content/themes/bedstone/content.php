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

    <?php
    the_content();
    get_template_part('variant', 'after-content');
    ?>

    <?php comments_template(); ?>

</article>
