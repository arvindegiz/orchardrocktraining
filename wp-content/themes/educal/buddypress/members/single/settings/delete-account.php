<?php
/**
 * BuddyPress - Members Settings ( Delete Account )
 *
 * @since 3.0.0
 * @version 8.0.0
 */

bp_nouveau_member_hook( 'before', 'settings_template' ); ?>

<h2 class="screen-heading delete-account-screen warn">
	<?php esc_html_e( 'Delete Account', 'educal' ); ?>
</h2>

<?php bp_nouveau_user_feedback( 'member-delete-account' ); ?>

<form action="<?php echo esc_url( bp_displayed_user_domain() . bp_nouveau_get_component_slug( 'settings' ) . '/delete-account' ); ?>" name="account-delete-form" id="account-delete-form" class="standard-form" method="post">

	<label id="delete-account-understand" class="warn" for="delete-account-understand">
		<input class="disabled" type="checkbox" name="delete-account-understand" value="1" data-bp-disable-input="delete-account-button" />
		<?php esc_html_e( 'I understand the consequences.', 'educal' ); ?>
	</label>

	<?php bp_nouveau_submit_button( 'member-delete-account' ); ?>

</form>

<?php
bp_nouveau_member_hook( 'after', 'settings_template' );
