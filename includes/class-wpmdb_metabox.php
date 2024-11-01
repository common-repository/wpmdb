<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

class WPMDB_Metabox {
	/**
	 * Add meta box to posts and custom posts.
	 * @since 1.0
	 */
	public static function create() {
		add_meta_box(
			'wpmdb',
			__( 'Wordpress IMDB', 'wpmdb' ),
			array( self::class, 'callback' ),
			null,
			'advanced',
			'high',
			null
		);
	}

	/**
	 * Metabox callback function
	 */
	public static function callback() {
		$content = '<div class="wpmdb-search">';
		if ( empty( get_option( 'wpmdb_api_key' ) ) ) {
			$content .= '<div class="alert">';
			$content .= __( 'Please set api key. this plugin can\'t work without api key.', 'wpmdb' );
			$content .= '</div>';
		} else {
			$content .= '<label>';
			$content .= '<input type="text" name="search_field" id="search_field" placeholder="' . esc_attr__( 'Insert IMDB ID e.g: tt3896198', 'wpmdb' ) . '" value="' . esc_attr( get_post_meta( get_the_ID(), 'wpmdb_search_field', true ) ) . '">';
			$content .= '</label>';
			$content .= '<div id="result"></div>';
		}
		$content .= '</div>';

		echo $content;
	}

	/**
	 * Submit meta when save or update post
	 * @since 1.0
	 */
	public static function save( $post_id ) {
		$prefix = 'wpmdb_';
		$args   = array(
			'search_field',
			'Title',
			'Year',
			'Rated',
			'Released',
			'Runtime',
			'Director',
			'Writer',
			'Actors',
			'Plot',
			'Language',
			'Country',
			'Awards',
			'Poster',
			'IMDB',
			'Rotten_Tomatoes',
			'Metacritic',
			'Votes',
			'Type',
			'BoxOffice',
			'Production',
			'Website'
		);

		foreach ( $args as $arg ) {
			$value = sanitize_text_field( @$_POST[ $arg ] );

			if ( ! empty( $value ) ) {

				if ( empty( get_post_meta( $post_id, $prefix . strtolower( $arg ) ) ) ) {

					add_post_meta( $post_id, $prefix . strtolower( $arg ), $value );

				} else {

					update_post_meta( $post_id, $prefix . strtolower( $arg ), $value );

				}

			} elseif ( empty( $value ) || $value == "N/A" ) {

				delete_post_meta( $post_id, $prefix . strtolower( $arg ) );

			}
		}
	}
}