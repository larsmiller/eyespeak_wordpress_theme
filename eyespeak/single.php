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
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
							<header class="entry-header">
								<h1 class="entry-title"><?php the_title(); ?></h1>
								<div class="entry-meta">
									<?php eyespeak_posted_on(); ?>
								</div><!-- .entry-meta -->
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="featured-image">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php } ?> 
							</header><!-- .entry-header -->
							<div class="entry-content">
								<?php the_content(); ?>
							</div><!-- .entry-content -->		
							<footer class="entry-meta">
								<?php eyespeak_post_meta(); ?>
								<?php edit_post_link( __( 'Edit', 'eyespeak' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-meta -->
						</article><!-- #post-<?php the_ID(); ?> -->
						<?php comments_template( '', true ); ?>
					<?php endwhile; // end of the loop. ?>
			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- .row-fluid -->
</div><!-- .container -->		
<?php get_footer(); ?>