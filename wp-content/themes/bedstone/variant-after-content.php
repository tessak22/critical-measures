<?php
/**
 * include manager
 */

if (PAGE_CONTACT == $post->ID) {
    get_template_part('inc', 'contact');
}

if (PAGE_LEADERSHIP == $post->ID) {
    get_template_part('inc', 'leadership');
}

if (ABOUT_US == $post->ID) {
    get_template_part('inc', 'about');
}