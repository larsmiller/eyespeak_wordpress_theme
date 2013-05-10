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
					<?php if ( have_posts() ) { ?>
					<article role="article">
						<header class="entry-header">
							<h1 class="entry-title">
								<?php printf( __( 'Category Archives: %s', 'eyespeak' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
							</h1>
						</header><!-- .entry-header -->
						<?php get_template_part( 'loop', 'search' ); ?>
					</article>
					<?php } else { ?>
					<article role="article">
						<header class="entry-header">
							<h1 class="entry-title">Nothing Found</h1>
							<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>							
						</header><!-- .entry-header -->
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'eyespeak' ); ?></p>
						<?php get_search_form(); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
					<?php } //end if for search results ?>
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>