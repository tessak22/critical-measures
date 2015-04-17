<?php
/**
 * 404
 *
 * @package Bedstone
 */

get_header(); ?>

<header class="document-header">
    <h1>Page Not Found (404)</h1>
    <?php get_template_part('nav', 'breadcrumbs'); ?>
</header>

<div class="container-columns row">
    <div class="content col-md-9" role="main">
        <p class="callout">We're sorry &ndash; we could not find the page you requested.</p>
        <p class="call-to-action"><a href="/">Visit Our Homepage</a></p>
        <?php get_search_form(); ?>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
