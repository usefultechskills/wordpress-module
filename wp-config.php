<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'wordpress');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j7Lv%G^HWomqYzmGVr~_/|47`g{(Wr*}-VGj>|P7m4w ta:YMb|V|6P$yaigktg-');
define('SECURE_AUTH_KEY',  '4N;&<d-1fI_L9Y/IxNw(DN~pv^+N/L&w!P+<99Hz{][ts^o8sGBx<sz6Z)-1ewh^');
define('LOGGED_IN_KEY',    '_,->2nT0;1ZT5}+<YEqxs0r<-A8}o|em+|`f7(FWY~]jAPh06{Nj2vvP-klM|z}}');
define('NONCE_KEY',        'EN=u23e-3g}+)fksqP?o_n@?LWyYsgj_}0-f&lR;w s<Hg)^`|NKE&tId2X,{V-U');
define('AUTH_SALT',        'RJ%7T%m/u@`6-~tT?3e+,C*4^7h^4~R/&SGA2YxMZ?<W;idoIU$K<|$oP^N[2[a5');
define('SECURE_AUTH_SALT', 'aW+;+jTt|E-f)eJ+V|WV%B![3rD`/;*N21!uA$s|!b+/{CX|$$|b^r.OR-qG-<H{');
define('LOGGED_IN_SALT',   '$ipGK%G.]Tv(>Dpm_U_,XEk!sj>|TN4S:4A%]^[{mos17kxd5hi[IkP++YO=T8G;');
define('NONCE_SALT',       '1m 1.9*3y5$>v_?NA[3)94%:3~zQ*c&^NA93J(o4)tTvKF-OBudu .D)=fj-+SM7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/admin');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/src');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/src');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
