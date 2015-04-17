<?php
/**
 * footer
 *
 * @package Bedstone
 */
?>

</main>
</div> <!-- .container-non-site-footer-elements -->

<footer class="site-footer">
    <div class="container">
        <p>Footer content is sticky by default.</p>
        <div class="copyright">
            &copy;
            <?php echo date('Y'); ?>
            <?php echo bloginfo('name'); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php /* placeholder support for legacy IE */ ?>
<!--[if lte IE 9]>
<script src="https://cdn.jsdelivr.net/jquery.placeholder/2.1.1/jquery.placeholder.min.js" type="text/javascript"></script>
<script type="text/javascript"> jQuery(document).ready(function($){ $('input, textarea').placeholder(); }); </script>
<![endif]-->

<!--[if lte IE 9]> </div> <![endif]-->
<!--[if IE 9]> </div> <![endif]-->
<!--[if IE 8]> </div> <![endif]-->
</body>
</html>
