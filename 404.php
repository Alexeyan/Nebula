<?php
/**
 * The template for displaying 404 pages (Not Found).
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="ten columns">
			<? the_breadcrumb(); ?>
			<article id="post-0" class="post error404 not-found" role="main">
				<h1><?php _e( 'Not Found', 'boilerplate' ); ?></h1>
				<p><?php _e( 'The page you requested could not be found.', 'boilerplate' ); ?></p>
				<?php get_search_form(); echo '<script>document.getElementById(\'s\') && document.getElementById(\'s\').focus();</script>'.PHP_EOL; ?>
			</article>
		</div><!--/columns-->
		<div class="five columns push_one">
			<?php get_sidebar(); ?>
		</div><!--/columns-->
	</div><!--/row-->
</div><!--/container-->
			
<?php get_footer(); ?>