=== WPMDB ===
Contributors: AHMAD_R3ZA
Tags: imdb
Requires at least: 5.3
Tested up to: 5.3.2
Requires PHP: 7.2
Stable tag: trunk
License: GPL-2.0-or-later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Get information from IMDB and set to your post, just active plugin, use shortcodes and enjoy from free details, 

== Description ==
IMDB is a reference for many movie and TV lovers around the world. So you can see all the details of a movie from this site like posters, box office sales, actors and much more... .
So many site owners need to collect this information for their users. That's why this plugin was created so that you, the site owner, can retrieve information from your database and store it in your database so that you can show it to your users whenever you need it.

> If you like the plugin, feel free to rate it (on the right side of this page)!

= Features =
* Automatically record movie information when posting
* 1000 request per day
* Simple and compact
* Use WordPress database to receive fewer requests

== Installation ==
1. Upload the plugin files to the `/wp-content/plugins/wpmdb` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the Settings->WP IMDB screen to configure the plugin
4. Go to this link first
5. Change Account Type to FREE! (1,000 daily limit)
6. Enter your Email, First Name, Last Name and a short description for your application
7. After registering you will receive an email containing a code, copy and paste it into the field below to enable the plugin in your name

== Frequently Asked Questions ==

= How can I display post information ? =
Use this shortcode in your post:
`[wpmdb_year]`
or use this code in your template:
`get_post_meta( get_the_ID(), "wpmdb_year", true );`

= What shortcodes can I use ? =
1. wpmdb_actors
2. wpmdb_awards
3. wpmdb_boxoffice
4. wpmdb_country
5. wpmdb_director
6. wpmdb_imdb
7. wpmdb_language
8. wpmdb_metacritic
9. wpmdb_plot
10. wpmdb_poster
11. wpmdb_production
12. wpmdb_rated
13. wpmdb_released
14. wpmdb_rotten_tomatoes
15. wpmdb_runtime
16. wpmdb_search_field
17. wpmdb_title
18. wpmdb_type
19. wpmdb_votes
20. wpmdb_website
21. wpmdb_writer
22. wpmdb_year

= Which version of Wordpress should I use? =
use can use English or Persian version of Wordpress.

= I found a bug in the plugin. =
Please contact me by [my email](mailto:e.ahmadreza78@gmail.com), i'll fix it right away. Thanks for helping.

== Screenshots ==
1. Plugin Main Page
2. Plugin In Posts Page

== Changelog ==
= 1.0 =
