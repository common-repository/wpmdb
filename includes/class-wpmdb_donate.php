<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

class WPMDB_Donate {
	/**
	 * @param $method
	 * @param $params
	 *
	 * @return bool|string
	 */
	public static function apiRequest( $method, $params ) {
		$url      = 'https://pay.ir/pg/' . $method;
		$args     = array(
			'headers'   => array( 'Content-Type' => 'application/json' ),
			'body'      => json_encode( $params ),
			'sslverify' => false
		);
		$response = wp_remote_post( $url, $args );

		return wp_remote_retrieve_body( $response );
	}

	public static function send() {
		$amount = sanitize_text_field( $_POST['amount'] );
		$mobile = sanitize_text_field( $_POST['mobile'] );
		$params = [
			'api'          => WPMDB_API_KEY,
			'amount'       => $amount,
			'redirect'     => admin_url( 'options-general.php?page=wpmdb' ),
			'mobile'       => $mobile,
			'factorNumber' => time(),
			'description'  => __( 'Donate for WPMDB plugin', 'wpmdb' ),
		];

		$result = self::apiRequest( 'send', $params );
		$result = json_decode( $result );

		if ( ! is_wp_error( $result->status ) ) {
			echo esc_js( $result->token );
		}

		wp_die();
	}

	public static function verify() {
		@$status = sanitize_text_field( $_GET['status'] );
		@$token  = sanitize_text_field( $_GET['token'] );
		@$page   = sanitize_text_field( $_GET['page'] );

		if ( ! empty( $status ) && ! empty( $token ) && $page == 'wpmdb' ) {
			add_option( 'wpmdb_donated', true );

			$result = self::apiRequest( 'verify', [
				'api'   => WPMDB_API_KEY,
				'token' => $token
			] );
			$result = json_decode( $result );

			if ( isset( $result->status ) ) {
				if ( $result->status !== 1 ) {
					delete_option( 'wpmdb_donated' );
				}
			} else {
				delete_option( 'wpmdb_donated' );
			}
		}
	}
}