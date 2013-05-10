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
					<?php the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<article class="entry-content">
							<?php the_content(); ?>
						</article><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>