<?php

$mypages = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => $post->ID,
    'nopaging' => true,
    'orderby' => 'menu_order title',
    'order' => 'asc'
));

?>

<?php while ($mypages->have_posts()) : $mypages->the_post(); ?>
    <div class="child-item row">
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
        <p class="call-to-action"><a href="<?php the_permalink(); ?>">Read More</a></p>
    </div>
<?php endwhile; wp_reset_postdata(); ?>