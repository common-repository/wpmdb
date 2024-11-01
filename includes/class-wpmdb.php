<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

class WPMDB {

	private static $_instance = null;

	public static function getInstance() {
		if ( is_null( self::$_instance ) || ! isset( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function __construct() {
		$this->includes();
	}

	public function init() {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );

		add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'styles' ) );

		add_action( 'wp_ajax_submit_key', array( 'WPMDB_Ajax', 'submit' ) );
		add_action( 'wp_ajax_nopriv_submit_key', array( 'WPMDB_Ajax', 'submit' ) );

		add_action( 'wp_ajax_search_wpmdb', array( 'WPMDB_Ajax', 'search' ) );
		add_action( 'wp_ajax_nopriv_search_wpmdb', array( 'WPMDB_Ajax', 'search' ) );

		add_action( 'add_meta_boxes', array( 'WPMDB_Metabox', 'create' ) );
		add_action( 'save_post', array( 'WPMDB_Metabox', 'save' ) );
		add_action( 'update_post', array( 'WPMDB_Metabox', 'save' ) );

		add_filter( 'plugin_action_links_' . plugin_basename( WPMDB_FILE ), array( $this, 'action_links' ) );

		$classes = get_class_methods( 'WPMDB_Shortcodes' );
		foreach ( $classes as $class ) {
			add_shortcode( WPMDB_Shortcodes::$prefix . strtolower( $class ), array(
				'WPMDB_Shortcodes',
				$class
			) );
		}

		add_action( 'wp_ajax_donate', array( 'WPMDB_Donate', 'send' ) );
		add_action( 'wp_ajax_nopriv_donate', array( 'WPMDB_Donate', 'send' ) );
		( new WPMDB_Donate() )->verify();
	}

	/**
	 * Load plugin textdomain.
	 */
	public function load_textdomain() {
		load_plugin_textdomain(
			'wpmdb',
			true,
			dirname( plugin_basename( WPMDB_FILE ) ) . '/languages/'
		);
	}

	/**
	 * Add "WP IMDB" submenu to settings.
	 * @since 1.0
	 */
	public function admin_menu() {
		add_submenu_page(
			'options-general.php',
			__( 'WP IMDB', 'wpmdb' ),
			__( 'WP IMDB', 'wpmdb' ),
			'manage_options',
			'wpmdb',
			function () {
				require_once( WPMDB_TEMP . 'main.php' );
			},
			30
		);
	}

	/**
	 * Load scripts to worpdress admin panel.
	 * @since 1.0
	 */
	public function scripts() {
		wp_register_script( 'wpmdb-app', WPMDB_JS . '/app.js', array( 'jquery' ), '1.0', true );
		wp_localize_script( 'wpmdb-app', 'adminAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_script( 'wpmdb-app' );
	}

	/**
	 * Load style to worpdress admin panel.
	 * @since 1.0
	 */
	public function styles() {
		wp_enqueue_style( 'wpmdb-style', WPMDB_CSS . '/style.css', array(), '1.0' );
	}

	public function includes() {
		include_once( WPMDB_INC . '/class-wpmdb_ajax.php' );
		include_once( WPMDB_INC . '/class-wpmdb_metabox.php' );
		include_once( WPMDB_INC . '/class-wpmdb_shortcodes.php' );
		include_once( WPMDB_INC . '/class-wpmdb_donate.php' );
	}

	public function action_links( $links ) {
		if ( current_user_can( 'manage_options' ) ) {
			$settings_link = sprintf( '<a href="%s">%s</a>', admin_url( 'options-general.php?page=wpmdb' ), __( 'Settings', 'wpmdb' ) );
			array_unshift( $links, $settings_link );
		}

		return $links;
	}
}