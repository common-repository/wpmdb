<?php
// If uninstall is not called from WordPress, exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

$options = array(
	'wpmdb_api_key',
	'wpmdb_donated',
);

foreach ( $options as $option ) {
	delete_option( $option );
	delete_site_option( $option );
}