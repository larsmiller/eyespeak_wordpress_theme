<?php
/**
 * @package WordPress
 * @subpackage eyespeak
 */
?>
<div id="secondary" class="span3 offset1">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	<?php endif; ?>
</div><!-- #secondary -->