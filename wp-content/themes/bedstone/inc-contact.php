<?php
/**
 * page-specific include
 */

// get all from custom post type
$args = array(
    'post_type' => 'offices',
    'nopaging' => true,
    'order' => 'ASC',
    'orderby' => 'menu_order title',
);
$query = new WP_Query($args);
?>

<div class="contact-us row">
    <div class="form-contact col-md-6">
        <?php echo do_shortcode('[contact-form-7 id="39"]'); ?>
    </div>

    <div class="offices col-md-6">
        <?php while($query->have_posts()) : $query->the_post(); $fields = (object) get_fields(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <?php if ($fields->office_contact_name || $fields->office_contact_job_title_position) : ?>
                    <h3>
                        <?php
                        echo ($fields->office_contact_name) ? $fields->office_contact_name : '';
                        echo ($fields->office_contact_name && $fields->office_contact_job_title_position) ? ', ' : '';
                        echo ($fields->office_contact_job_title_position) ? $fields->office_contact_job_title_position : '';
                        ?>
                    </h3>
                <?php endif; ?>
                <?php if ($fields->office_contact_phone || $fields->office_contact_email) : ?>
                    <p>
                        <?php
                        echo ($fields->office_contact_phone) ? 'Phone: ' . $fields->office_contact_phone : '';
                        echo ($fields->office_contact_phone && $fields->office_contact_email) ? '<br>' : '';
                        echo ($fields->office_contact_email) ? 'Email: <a href="mailto:' . $fields->office_contact_email . '">' . $fields->office_contact_email . '</a>' : '';
                        ?>
                    </p>
                <?php endif; ?>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>
