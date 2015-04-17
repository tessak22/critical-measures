<?php
/**
 * sidebar
 *
 * @package Bedstone
 */
?>

<aside class="sidebar col-md-3" role="complementary">

    <nav class="nav-categories hidden-print">
        <h4>Categories</h4>
        <ul>
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </nav>

    <div class="contact-information" itemscope itemtype="http://schema.org/LocalBusiness">
        <h4 itemprop="name"><?php bloginfo('name'); ?></h4>
        <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">1227 Tyler St NE Ste 180</span>
            <br>
            <span itemprop="addressLocality">Minneapolis</span>,
            <span itemprop="addressRegion">MN</span> <span itemprop="postalCode">55413</span>
        </address>
        <h4>Phone: <span itemprop="telephone">612-521-4286</span></h4>
        Fax: <span itemprop="faxNumber">866-835-2033</span>
        <br>
        Email: <a itemprop="email" href="mailto:hello@windmilldesign.com">hello@windmilldesign.com</a>
        <div class="visible-print-block">
            <span itemprop="url">http://www.windmilldesign.com</span>
        </div>
    </div>

</aside>
