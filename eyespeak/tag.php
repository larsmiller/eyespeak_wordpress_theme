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
					<article role="article">
						<header class="entry-header">
							<h1 class="entry-title">
								<?php printf( __( 'Tag Archives: %s', 'eyespeak' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
							</h1>
						</header><!-- .entry-header -->
						<?php rewind_posts(); ?>		
						<?php get_template_part( 'loop', 'tag' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>