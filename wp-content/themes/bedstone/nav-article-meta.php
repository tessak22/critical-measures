<?php
/**
 * meta for posts
 *
 * @package Bedstone
 */

$meta_author = get_the_author();
$meta_date = get_the_date();
$meta_categories = get_the_category_list(' | ');
$meta_tags = get_the_tag_list('', ', ');
?>

<?php if ($meta_author || $meta_date || $meta_categories || $meta_tags) : ?>
    <nav class="nav-article-meta">
        <ul>
            <?php
            echo ($meta_categories) ? '<li>' . $meta_categories . '</li>' : '';
            ?>
        </ul>
    </nav>
<?php endif; ?>
