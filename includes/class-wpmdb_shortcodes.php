<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

class WPMDB_Shortcodes {
	public static $prefix = 'wpmdb_';

	/**
	 * Shortcodes to display movie title.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Title() {
		$name = esc_attr( strtolower( 'Title' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie release date.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Year() {
		$name = esc_attr( strtolower( 'Year' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie rated.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Rated() {
		$name = esc_attr( strtolower( 'Rated' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie released date.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Released() {
		$name = esc_attr( strtolower( 'Released' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Runtime.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Runtime() {
		$name = esc_attr( strtolower( 'Runtime' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Directors.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Director() {
		$name = esc_attr( strtolower( 'Director' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Writers.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Writer() {
		$name = esc_attr( strtolower( 'Writer' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Actors.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Actors() {
		$name = esc_attr( strtolower( 'Actors' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Plot.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Plot() {
		$name = esc_attr( strtolower( 'Plot' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Language.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Language() {
		$name = esc_attr( strtolower( 'Language' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Country.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Country() {
		$name = esc_attr( strtolower( 'Country' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Awards.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Awards() {
		$name = esc_attr( strtolower( 'Awards' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Poster.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Poster() {
		$name = esc_attr( strtolower( 'Poster' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );
		$alt  = esc_attr( get_post_meta( get_the_ID(), self::$prefix . 'title', true ) );

		return "<img src='" . $data . "' alt='" . esc_attr( $alt . __( ' Poster', 'wpmdb' ) ) . "' class='wpmdb-custom-field wpmdb-$name-field'>";
	}

	/**
	 * Shortcodes to display movie IMDB score.
	 * @return string
	 * @since 1.0.0
	 */
	public static function IMDB() {
		$name = esc_attr( strtolower( 'IMDB' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Rotten Tomatoes score.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Rotten_Tomatoes() {
		$name = esc_attr( strtolower( 'Rotten_Tomatoes' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Metacritic score.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Metacritic() {
		$name = esc_attr( strtolower( 'Metacritic' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Votes.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Votes() {
		$name = esc_attr( strtolower( 'Votes' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Type.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Type() {
		$name = esc_attr( strtolower( 'Type' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie BoxOffice.
	 * @return string
	 * @since 1.0.0
	 */
	public static function BoxOffice() {
		$name = esc_attr( strtolower( 'BoxOffice' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}

	/**
	 * Shortcodes to display movie Website.
	 * @return string
	 * @since 1.0.0
	 */
	public static function Website() {
		$name = esc_attr( strtolower( 'Website' ) );
		$data = esc_attr( get_post_meta( get_the_ID(), self::$prefix . $name, true ) );

		return '<span class="wpmdb-custom-field wpmdb-' . $name . '-field">' . $data . '</span>';
	}
}

new WPMDB_SHORTCODES();