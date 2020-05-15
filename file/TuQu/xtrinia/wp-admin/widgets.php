<?php
/**
 * Widget administration panel
 *
 * @package WordPress
 * @subpackage Administration
 */

/** WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

/** WordPress Administration Widgets API */
require_once( ABSPATH . 'wp-admin/includes/widgets.php' );

if ( ! current_user_can( 'edit_theme_options' ) ) {
	wp_die(
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' .
		'<p>' . __( 'Sorry, you are not allowed to edit theme options on this site.' ) . '</p>',
		403
	);
}

$widgets_access = get_user_setting( 'widgets_access' );
if ( isset( $_GET['widgets-access'] ) ) {
	check_admin_referer( 'widgets-access' );

	$widgets_access = 'on' == $_GET['widgets-access'] ? 'on' : 'off';
	set_user_setting( 'widgets_access', $widgets_access );
}

if ( 'on' == $widgets_access ) {
	add_filter( 'admin_body_class', 'wp_widgets_access_body_class' );
} else {
	wp_enqueue_script( 'admin-widgets' );

	if ( wp_is_mobile() ) {
		wp_enqueue_script( 'jquery-touch-punch' );
	}
}

/**
 * Fires early before the Widgets administration screen loads,
 * after scripts are enqueued.
 *
 * @since 2.2.0
 */
do_action( 'sidebar_admin_setup' );

$title       = __( 'Widgets' );
$parent_file = 'themes.php';

get_current_screen()->add_help_tab(
	array(
		'id'      => 'overview',
		'title'   => __( 'Overview' ),
		'content' =>
				 '<p>' . __( 'Widgets are independent sections of content that can be placed into any widgetized area provided by your theme (commonly called sidebars). To populate your sidebars/widget areas with individual widgets, drag and drop the title bars into the desired area. By default, only the first widget area is expanded. To populate additional widget areas, click on their title bars to expand them.' ) . '</p>
	<p>' . __( 'The Available Widgets section contains all the widgets you can choose from. Once you drag a widget into a sidebar, it will open to allow you to configure its settings. When you are happy with the widget settings, click the Save button and the widget will go live on your site. If you click Delete, it will remove the widget.' ) . '</p>',
	)
);
get_current_screen()->add_help_tab(
	array(
		'id'      => 'removing-reusing',
		'title'   => __( 'Removing and Reusing' ),
		'content' =>
				 '<p>' . __( 'If you want to remove the widget but save its setting for possible future use, just drag it into the Inactive Widgets area. You can add them back anytime from there. This is especially helpful when you switch to a theme with fewer or different widget areas.' ) . '</p>
	<p>' . __( 'Widgets may be used multiple times. You can give each widget a title, to display on your site, but it&#8217;s not required.' ) . '</p>
	<p>' . __( 'Enabling Accessibility Mode, via Screen Options,