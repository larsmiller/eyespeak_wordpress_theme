<?php
/**
 * @package WordPress
 * @subpackage eyespeak
 */
?>

<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
		<header class="entry-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'eyespeak' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="entry-meta">
				<?php eyespeak_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="featured-image">
					<?php the_post_thumbnail(); ?>
				</div>
			<?php } ?> 
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php echo excerpt(120); ?>
		</div><!-- .entry-summary -->
		<footer class="entry-meta">
			<?php eyespeak_post_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'eyespeak' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

	<?php //comments_template( '', true ); ?>

<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-below" role="article" class="clearfix">
		<div class="nav-previous"><?php next_posts_link( __( 'older posts &rarr;', 'eyespeak' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( '&larr; newer posts', 'eyespeak' ) ); ?></div>
	</nav><!-- #nav-below -->
<?php endif; ?>
