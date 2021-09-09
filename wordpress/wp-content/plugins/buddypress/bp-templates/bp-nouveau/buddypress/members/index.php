<?php
/**
 * BuddyPress Members Directory
 *
 * @since 3.0.0
 * @version 6.0.0
 */

?>

	<?php bp_nouveau_before_members_directory_content(); ?>

	<div class="screen-content">

		<div id="members-dir-list" class="members dir-list" data-bp-list="members">
			<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-members-loading' ); ?></div>
		</div><!-- #members-dir-list -->

		<?php bp_nouveau_after_members_directory_content(); ?>
	</div><!-- // .screen-content -->

	<?php bp_nouveau_after_directory_page(); ?>
