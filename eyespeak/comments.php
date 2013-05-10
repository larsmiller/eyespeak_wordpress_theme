<?php
/**
 * @package WordPress
 * @subpackage eyespeak
 */

if ( ! function_exists( 'handcraftedwp_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own handcraftedwp_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since HandcraftedWP 0.4
 */
function handcraftedwp_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment" role="article">
			<div class="comment-author vcard">
				<?php echo get_avatar( $comment, 40 ); ?>
				<?php printf( __( '%s <span class="says">says:</span>', 'eyespeak' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
			</div><!-- .comment-author .vcard -->
			<?php if ( $comment->comment_approved == '0' ) : ?>
				<em><?php _e( 'Your comment is awaiting moderation.', 'eyespeak' ); ?></em>
				<br />
			<?php endif; ?>

			<div class="comment-meta commentmetadata">
				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
				<?php
					/* translators: 1: date, 2: time */
					printf( __( '%1$s at %2$s', 'eyespeak' ), get_comment_date(),  get_comment_time() ); ?>
				</time></a>
				<?php edit_comment_link( __( '(Edit)', 'eyespeak' ), ' ' );
				?>
			</div><!-- .comment-meta .commentmetadata -->
			<div class="comment-body"><?php comment_text(); ?></div>
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'eyespeak' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'eyespeak'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif; // ends check for handcraftedwp_comment()

?>

	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<div class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'eyespeak' ); ?></div>
	</div><!-- .comments -->
	<?php return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
			    printf( _n( 'One Response', '%1$s Responses', get_comments_number(), 'eyespeak' ),
			        number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" role="article">
			<h1 class="section-heading"><?php _e( 'Comment navigation', 'eyespeak' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'eyespeak' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'eyespeak' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'handcraftedwp_comment' ) ); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" role="article">
			<h1 class="section-heading"><?php _e( 'Comment navigation', 'eyespeak' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'eyespeak' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'eyespeak' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php else : // this is displayed if there are no comments so far ?>

		<?php if ( comments_open() ) : // If comments are open, but there are no comments ?>

		<?php else : // or, if we don't have comments:

			/* If there are no comments and comments are closed,
			 * let's leave a little note, shall we?
			 * But only on posts! We don't really need the note on pages.
			 */
			if ( ! comments_open() && ! is_page() ) :
			?>
			<p class="nocomments"><?php _e( 'Comments are closed.', 'eyespeak' ); ?></p>
			<?php endif; // end ! comments_open() && ! is_page() ?>


		<?php endif; ?>

	<?php endif; ?>

		<?php	    
			$commenter = wp_get_current_commenter();
			$req = get_option( 'require_name_email' );
			$aria_req = ( $req ? " aria-required='true'" : '' );
			$comments_args = array(
				'id_form' => 'commentform',
				'id_submit' => 'submit',
				'title_reply' => __( 'Leave a Reply' ),
				'title_reply_to' => __( 'Leave a Reply to %s' ),
				'cancel_reply_link' => __( 'Cancel Reply' ),
				'label_submit' => __( 'SUBMIT' ),
				'comment_field' => '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="leave a comment..."></textarea>',
				'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
				'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
				'comment_notes_before' => '<p class="comment-notes">Your email address will not be published.</p>',
				'comment_notes_after' => '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
				'fields' => apply_filters( 'comment_form_default_fields', array(
					'author' => '<input placeholder="name*" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /><br>',
					'email' => '<input placeholder="email*" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /><br>',
					'url' => ''
					) 
				) 
			);
		    // call comment_form
		    comment_form($comments_args);
		?>

</div><!-- #comments -->