<?php
/**
 * BuddyPress - Members Loop
 *
 * @since 3.0.0
 * @version 6.0.0
 */

bp_nouveau_before_loop(); ?>

<?php if ( bp_get_current_member_type() ) : ?>
	<p class="current-member-type"><?php bp_current_member_type_message(); ?></p>
<?php endif; ?>

<?php if ( bp_has_members( '&type=alphabetical&max=100&per_page=100' ) ) : ?>

	<ul id="members-list" class="members-list <?php bp_nouveau_loop_classes(); ?>">

	<?php while ( bp_members() ) : bp_the_member(); ?>

		<li <?php bp_member_class( array( 'item-entry' ) ); ?> data-bp-item-id="<?php bp_member_user_id(); ?>" data-bp-item-component="members">
			<div class="list-wrap">

				<div class="item-avatar">
					<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar( 'type=full&width=180&height=180' ); ?></a>
				</div>

				<div class="item-container">

					<div class="item-block">

						<h2 class="list-title member-name">
							<a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
						</h2>

						<?php if ( bp_nouveau_member_has_extra_content() ) : ?>
							<div class="item-extra-content">
								<?php bp_nouveau_member_extra_content() ; ?>
							</div><!-- .item-extra-content -->
						<?php endif ; ?>

						<?php
						bp_nouveau_members_loop_buttons(
							array(
								'container'      => 'ul',
								'button_element' => 'button',
							)
						);
						?>
					</div>

					<?php if ( bp_get_member_latest_update() && ! bp_nouveau_loop_is_grid() ) : ?>
						<div class="user-update">
							<p class="update"> <?php bp_member_latest_update(); ?></p>
						</div>
					<?php endif; ?>

				</div><!-- // .item -->
			</div>
		</li>

	<?php endwhile; ?>

	</ul>

<?php
else :

	bp_nouveau_user_feedback( 'members-loop-none' );

endif;
?>

<?php bp_nouveau_after_loop(); ?>
