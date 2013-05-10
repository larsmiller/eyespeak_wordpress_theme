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
								<?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'eyespeak' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?>
							</h1>
						</header><!-- .entry-header -->
						<?php rewind_posts(); ?>		
						<?php get_template_part( 'loop', 'author' ); ?>
					</article><!-- #post-<?php the_ID(); ?> -->
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .row-fluid -->
	</div><!-- .container -->
<?php get_footer(); ?>