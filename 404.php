<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Knowledge Base Lite
 */

get_header(); ?>

<div class="container">
	<main id="maincontent" role="main">
		<div class="page-content">
	    	<h1><?php esc_html_e('404 Not Found','knowledge-base-lite');?></h1>
			<p class="text-404"><?php esc_html_e('Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.','knowledge-base-lite');?></p>
			<div class="more-btn mt-4 mb-4">
			    <a class="p-3" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('GO BACK','knowledge-base-lite');?><span class="screen-reader-text"><?php esc_html_e('Go Back','knowledge-base-lite');?></span></a>
			</div>
		</div>
		<div class="clearfix"></div>
	</main>
</div>

<?php get_footer(); ?>