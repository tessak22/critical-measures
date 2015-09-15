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
    <div class="footer-content">
    	<div class="container">
	        <div class="copyright col-sm-6">
	            &copy;
	            <?php echo date('Y'); ?>
	            <?php echo bloginfo('name'); ?>. <span>All Rights Reserved</span>
	             | <a href="<?php echo get_permalink(PAGE_LEGAL_DISCLAIMER); ?>"><?php echo get_the_title(PAGE_LEGAL_DISCLAIMER); ?></a> | <a href="http://windmilldesign.com" target="_blank">Site Credits</a>
	        </div>
	        <div class="footer-logos col-sm-6 pull-right">
	         	<a class="cme-logo" href="http://www.cmelearning.com/" target="_blank">CM ELearning</a>
	        	<a class="cm-logo" href="/">Critical Measures</a>
	        </div>
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
