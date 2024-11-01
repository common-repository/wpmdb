<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

class WPMDB_Ajax {
	/**
	 * Ajax submit API key to wordpress.
	 * @since 1.0
	 */
	public function submit() {
		$key = sanitize_text_field( $_POST['key'] );

		if ( empty( $key ) ) {
			delete_option( 'wpmdb_api_key' );
			esc_attr_e( 'Your api key was deleted successfully!', 'wpmdb' );
		} else {
			if ( empty( get_option( 'wpmdb_api_key' ) ) ) {
				add_option( 'wpmdb_api_key', $key );
				esc_attr_e( 'Your api key was added successfully!', 'wpmdb' );
			} else {
				update_option( 'wpmdb_api_key', $key );
				esc_attr_e( 'Your api key was updated successfully!', 'wpmdb' );
			}
		}

		wp_die();
	}

	/**
	 * Ajax search to IMDB and show result.
	 * @since 1.0
	 */
	public function search() {
		require_once( WPMDB_TEMP . '/search_result.php' );

		$id  = sanitize_text_field( $_POST['id'] );
		$key = get_option( 'wpmdb_api_key' );

		$parameters = array(
			'i'      => $id,
			'apikey' => $key
		);

		$url      = 'http://www.omdbapi.com/?' . _http_build_query( $parameters );
		$response = wp_remote_retrieve_body( wp_remote_get( $url ) );
		$result   = json_decode( $response, true );

		get_search_result( $result );

		wp_die();
	}
}