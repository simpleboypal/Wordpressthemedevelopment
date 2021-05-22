<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mytheme
 */

?>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
			<?php dynamic_sidebar( 'Footer_Sidebar1' ); ?>
			</div>
			<div class="section contact">
				<?php dynamic_sidebar( 'Footer_Sidebar2' ); ?>
			</div>
			<div class="section">
				<?php dynamic_sidebar( 'Footer_Sidebar3' ); ?>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 Manes Winchester. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
