<?php
/**
 * BuddyPress Activity templates
 *
 * @since 2.3.0
 * @version 6.0.0
 */
?>

	<?php bp_nouveau_before_activity_directory_content(); ?>


	<div class="row single-headers-row">
		<div class="col-md-12">
			<div class="single-header-activity" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/bg/bb-hero-bg.jpg">
				<div class="single-header-activity-content">
					<h3 class="entry-activity-username"><?php echo esc_html( sprintf( __( 'Hi %s', 'educal' ), bp_get_loggedin_user_fullname() ) ); ?></h3>
					<h2 class="entry-activity-welcome"><?php esc_html_e( 'Welcome to your community', 'educal' ); ?></h2>
				</div>
			</div>
		</div>
	</div>


	<?php if ( is_user_logged_in() ) : ?>
		<div class="ttt">
		<?php bp_get_template_part( 'activity/post-form' ); ?>
		</div>

	<?php endif; ?>

	<?php bp_nouveau_template_notices(); ?>

	<?php if ( ! bp_nouveau_is_object_nav_in_sidebar() ) : ?>

		<?php bp_get_template_part( 'common/nav/directory-nav' ); ?>

	<?php endif; ?>

	<div class="screen-content">

		<?php bp_get_template_part( 'common/search-and-filters-bar' ); ?>

		<?php bp_nouveau_activity_hook( 'before_directory', 'list' ); ?>

		<div id="activity-stream" class="activity" data-bp-list="activity">

				<div id="bp-ajax-loader"><?php bp_nouveau_user_feedback( 'directory-activity-loading' ); ?></div>

		</div><!-- .activity -->

		<?php bp_nouveau_after_activity_directory_content(); ?>

	</div><!-- // .screen-content -->

	<?php bp_nouveau_after_directory_page(); ?>
