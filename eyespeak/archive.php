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
								<?php if ( is_day() ) : ?>
									<?php printf( __( 'Daily Archives: <span>%s</span>', 'eyespeak' ), get_the_date() ); ?>
								<?php elseif ( is_month() ) : ?>
									<?php printf( __( 'Monthly Archives: <span>%s</span>', 'eyespeak' ), get_the_date( 'F Y' ) ); ?>
								<?php elseif ( is_year() ) : ?>
									<?php printf( __( 'Yearly Archives: <span>%s</span>', 'eyespeak' ), get_the_date( 'Y' ) ); ?>
								<?php else : ?>
									<?php _e( 'Blog Archives', 'eyespeak' ); ?>
								<?php endif; ?>
							</h1>
						</header><!-- .entry-header -->
						<?php rewind_posts(); ?>		
						<?php get_template_part( 'loop', 'archive' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>