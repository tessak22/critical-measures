<?php
/**
 * content output, list
 *
 * @package Bedstone
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="row">

	    <?php if (has_post_thumbnail()) : ?>
	        <figure class="blog-thumb col-md-4">
	            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
	        </figure>
	    <?php endif; ?>
	    <div class="blog-content col-md-<?php echo (has_post_thumbnail()) ? '8' : '12'; ?>">
	        <h2><?php the_title(); ?></h2>
	        <?php
	        if ('post' == get_post_type()) {
	            get_template_part('nav', 'article-meta');
	        }
	        ?>
	        <?php the_excerpt(); ?>
	        <p class="call-to-action"><a href="<?php the_permalink(); ?>">Read More</a></p>
	    </div>

	</div>

</article>
