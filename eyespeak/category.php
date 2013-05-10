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
								<?php printf( __( 'Category Archives: %s', 'eyespeak' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
							</h1>
							<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>							
						</header><!-- .entry-header -->
						<?php rewind_posts(); ?>		
						<?php get_template_part( 'loop', 'category' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>