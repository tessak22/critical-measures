<?php
/**
 * page-specific include
 */

// get all children
$args = array(
    'post_parent' => PAGE_LEADERSHIP, // defined in functions.php
    'post_type' => 'page',
    'nopaging' => true,
    'order' => 'ASC',
    'orderby' => 'menu_order title',
);
$query = new WP_Query($args);
?>

<div class="leadership-bios">
    <?php while ($query->have_posts()) : $query->the_post(); $fields = (object) get_fields(); ?>
        <div class="bio-item row">
            <div class="col-sm-12">
                <?php if (has_post_thumbnail()) : ?>
                    <figure class="headshot">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    </figure>
                <?php endif; ?>
                <div class="bio-content">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php the_field('leadership_job_title_position'); ?></h5>
                    <?php the_excerpt(); ?>
                    <p class="call-to-action"><a href="<?php the_permalink(); ?>">Read Full Bio</a></p>
                </div>
            </div>
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
