<?php
if ( ! defined( 'WPINC' ) ) {
	die( 'You can\'t read this file directly.' );
}

function get_search_result( $result ) { ?>
    <table>
        <tbody>
		<?php if ( $result['Response'] == "False" ): ?>
            <tr>
                <td>
                    <label for="error" style="color: red">
						<?php _e( 'Error', 'wpmdb' ); ?>
                    </label>
                </td>
                <td>
                    <input id="error" type="text"
                           readonly value="<?php esc_attr_e( 'Error getting data.', 'wpmdb' ); ?>">
                </td>
            </tr>
		<?php elseif ( $result['Response'] == "True" ) : ?>
            <tr>
                <td colspan="2" style="background-color: #cccccc">
					<?php echo __( 'You can submit this information to post, just save your post.', 'wpmdb' ); ?>
                </td>
            </tr>
			<?php if ( $result['Title'] !== "N/A" || isset( $result['Title'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Title"><?php _e( 'Title', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Title" name="Title" readonly
                               value="<?php esc_attr_e( $result['Title'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Year'] !== "N/A" || isset( $result['Year'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Year"><?php _e( 'Year', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Year" name="Year" readonly
                               value="<?php esc_attr_e( $result['Year'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Rated'] !== "N/A" || isset( $result['Rated'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Rated"><?php _e( 'Rated', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Rated" name="Rated" readonly
                               value="<?php esc_attr_e( $result['Rated'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Released'] !== "N/A" || isset( $result['Released'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Released"><?php _e( 'Released', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Released" name="Released" readonly
                               value="<?php esc_attr_e( $result['Released'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Runtime'] !== "N/A" || isset( $result['Runtime'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Runtime"><?php _e( 'Runtime', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Runtime" name="Runtime" readonly
                               value="<?php echo str_replace( 'min', '', esc_attr( $result['Runtime'] ) ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Director'] !== "N/A" || isset( $result['Director'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Director"><?php _e( 'Director', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Director" name="Director" readonly
                               value="<?php esc_attr_e( $result['Director'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Writer'] !== "N/A" || isset( $result['Writer'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Writer"><?php _e( 'Writer', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Writer" name="Writer" readonly
                               value="<?php esc_attr_e( $result['Writer'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Actors'] !== "N/A" || isset( $result['Actors'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Actors"><?php _e( 'Actors', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Actors" name="Actors" readonly
                               value="<?php esc_attr_e( $result['Actors'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Plot'] !== "N/A" || isset( $result['Plot'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Plot"><?php _e( 'Plot', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Plot" name="Plot" readonly
                               value="<?php esc_attr_e( $result['Plot'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Language'] !== "N/A" || isset( $result['Language'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Language"><?php _e( 'Language', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Language" name="Language" readonly
                               value="<?php esc_attr_e( $result['Language'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Country'] !== "N/A" || isset( $result['Country'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Country"><?php _e( 'Country', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Country" name="Country" readonly
                               value="<?php esc_attr_e( $result['Country'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Awards'] !== "N/A" || isset( $result['Awards'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Awards"><?php _e( 'Awards', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Awards" name="Awards" readonly
                               value="<?php esc_attr_e( $result['Awards'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Poster'] !== "N/A" || isset( $result['Poster'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Poster"><?php _e( 'Poster', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Poster" name="Poster" readonly
                               value="<?php esc_attr_e( $result['Poster'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Ratings'][0]['Value'] !== "N/A" || isset( $result['Ratings'][0]['Value'] ) ) { ?>
                <tr>
                    <td>
                        <label for="IMDB"><?php _e( 'IMDB Score', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="IMDB" name="IMDB" readonly
                               value="<?php esc_attr_e( $result['Ratings'][0]['Value'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Ratings'][1]['Value'] !== "N/A" || isset( $result['Ratings'][1]['Value'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Rotten_Tomatoes"><?php _e( 'Rotten Tomatoes', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Rotten_Tomatoes" name="Rotten_Tomatoes" readonly
                               value="<?php esc_attr_e( $result['Ratings'][1]['Value'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Ratings'][2]['Value'] !== "N/A" || isset( $result['Ratings'][2]['Value'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Metacritic"><?php _e( 'Metacritic', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Metacritic" name="Metacritic" readonly
                               value="<?php esc_attr_e( $result['Ratings'][2]['Value'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['imdbVotes'] !== "N/A" || isset( $result['imdbVotes'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Votes"><?php _e( 'Votes', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Votes" name="Votes" readonly
                               value="<?php esc_attr_e( $result['imdbVotes'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Type'] !== "N/A" || isset( $result['Type'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Type"><?php _e( 'Type', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Type" name="Type" readonly
                               value="<?php esc_attr_e( $result['Type'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['BoxOffice'] !== "N/A" || isset( $result['BoxOffice'] ) ) { ?>
                <tr>
                    <td>
                        <label for="BoxOffice"><?php _e( 'BoxOffice', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="BoxOffice" name="BoxOffice" readonly
                               value="<?php esc_attr_e( $result['BoxOffice'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Production'] !== "N/A" || isset( $result['Production'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Production"><?php _e( 'Production', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Production" name="Production" readonly
                               value="<?php esc_attr_e( $result['Production'] ); ?>">
                    </td>
                </tr>
			<?php }
			if ( $result['Website'] !== "N/A" || isset( $result['Website'] ) ) { ?>
                <tr>
                    <td>
                        <label for="Website"><?php _e( 'Website', 'wpmdb' ); ?></label>
                    </td>
                    <td>
                        <input type="text" id="Website" name="Website" readonly
                               value="<?php esc_attr_e( $result['Website'] ); ?>">
                    </td>
                </tr>
			<?php } ?>
            <tr>
                <td colspan="2" style="background-color: #cccccc">
					<?php _e( 'You can submit this information to post, just save your post.', 'wpmdb' ); ?>
                </td>
            </tr>
		<?php endif; ?>
        </tbody>
    </table>
<?php }