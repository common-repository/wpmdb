<?php if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
} ?>
<div class="wrap about-wrap wpmdb-wrap">

    <h1><?php _e( 'Wordpress IMDB', 'wpmdb' ); ?></h1>

    <div id="message"></div>

    <div class="nav-tab-wrapper"></div>

    <div class="changelog">
        <div class="feature-section col three-col">
            <p>
				<?php _e( 'IMDB is a reference for many movie and TV lovers around the world. So you can see all the details of a movie from this site like posters, box office sales, actors and much more ...', 'wpmdb' ); ?>
                <br>
				<?php _e( 'So many site owners need to collect this information for their users. That\'s why this plugin was created so that you, the site owner, can retrieve information from your database and store it in your database so that you can show it to your users whenever you need it.', 'wpmdb' ); ?>
            </p>
            <p>
				<?php _e( 'We hope the plugin can be very useful for you', 'wpmdb' ); ?>
                <span class="dashicons dashicons-heart" style="color:#e74c3c"></span>
            </p>
        </div>
    </div>

    <div class="postbox">
        <div class="inside">
            <h3><?php _e( 'Submit your api key', 'wpmdb' ); ?></h3>
            <p>
				<?php _e( 'First of all you need to define a key for yourself.', 'wpmdb' ); ?>
            </p>
            <p>
				<?php _e( 'Follow the steps:', 'wpmdb' ); ?>
            </p>
            <ol>
                <li><?php _e( 'Go to <a href="http://www.omdbapi.com/apikey.aspx">this</a> link first', 'wpmdb' ); ?></li>
                <li><?php _e( 'Change "Account Type" to FREE! (1,000 daily limit)', 'wpmdb' ); ?></li>
                <li><?php _e( 'Enter your "Email", "First Name", "Last Name" and a short description for your application', 'wpmdb' ); ?></li>
                <li><?php _e( 'After registering you will receive an email containing a code, copy and paste it into the field below to enable the plugin in your name', 'wpmdb' ); ?></li>
                <li><?php _e( 'Now you can enjoy the plugin :)', 'wpmdb' ); ?></li>
            </ol>
            <form id="submit_key">
                <label class="col-12">
                    <span><?php _e( 'API Key:', 'wpmdb' ); ?></span>
                    <input type="text" id="key" value="<?php esc_html_e( get_option( 'wpmdb_api_key' ) ); ?>">
                    <button type="submit" name="submit" id="submit" class="button button-primary">
						<?php _e( 'Save Changes' ); ?>
                    </button>
                </label>
            </form>
        </div>
    </div>

	<?php if ( get_option( 'WPLANG' ) == 'fa_IR' && ! empty( WPMDB_API_KEY ) ): ?>
        <div class="postbox donate">
            <div class="inside">
				<?php if ( get_option( 'wpmdb_donated' ) == 1 ): ?>
                    <h3>
						<?php _e( 'Thanks for your support', 'wpmdb' ); ?>
                        <span class="dashicons dashicons-heart" style="color:#e74c3c"></span>
                    </h3>
				<?php else: ?>
                    <img src="<?php echo esc_html( WPMDB_IMG . '/coffee-cup.png' ); ?>"
                         alt="<?php esc_html_e( 'Cup of coffee', 'wpmdb' ); ?>">
                    <h3><?php _e( 'Invite me for a cup of coffee :)', 'wpmdb' ); ?></h3>
                    <p><?php _e( 'Your help makes me do my best', 'wpmdb' ); ?></p>
                    <div class="phone_number">
                        <label>
                            <input type="text" id="phone_number"
                                   placeholder="<?php _e( 'Phone number', 'wpmdb' ); ?>">
                        </label>
                    </div>
                    <div class="button-group">
                        <button type="button" class="button button-secondary button-large" id="donate_small">
							<?php _e( 'Small', 'wpmdb' ); ?>
                        </button>
                        <button type="button" class="button button-secondary button-large" id="donate_medium">
							<?php _e( 'Medium', 'wpmdb' ); ?>
                        </button>
                        <button type="button" class="button button-secondary button-large" id="donate_large">
							<?php _e( 'Large', 'wpmdb' ); ?>
                        </button>
                    </div>
				<?php endif; ?>
            </div>
        </div>
	<?php endif; ?>

</div>