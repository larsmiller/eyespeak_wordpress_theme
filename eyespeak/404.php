<?php
/**
 * @package WordPress
 * @subpackage eyespeak
 */
get_header(); ?>
	<div class="container">
		<div class="row-fluid">
			<div id="primary" class="span8">
				<div id="content">
					<article role="article">
						<header class="entry-header">
							<h1 class="entry-title">Page Not Found</h1>
						</header><!-- .entry-header -->
						<article class="entry-content">
							<p>Sorry, this page doesn't exist. Please close this message to view the map or <a href="<?php echo get_bloginfo('url'); ?>">go to the homepage</a>.</p>
						</article><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>