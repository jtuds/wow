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
	define('DB_NAME', 'wow');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
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
define('AUTH_KEY',         '(~x5O!wIs7Fei.:-^C#9vK<D1+R*)Kn`|1:XD*He{3#,].oo=fg9w4s_B:Ng/k}3');
define('SECURE_AUTH_KEY',  'Vi{U(ud^99z/|~2[U$@i|S+Y+b.)>|nP`GgCXHoFWpXo0o-`aD#=md[$l)=ZjORQ');
define('LOGGED_IN_KEY',    'Uy@sWg=!>aN_+V[W@7pbk,4lelIp8cKu+|ODY`3zJ_5Q+DO{+J,vIZxsM7njqH;|');
define('NONCE_KEY',        '2nO=O}]G<$h#r]U6XFiuV0uCiQ272bLJ4IE-{)XQgWP^xR!pPh:[xZ**<|i&X@3o');
define('AUTH_SALT',        '}_!s=c@N&s9e7A -OKWQ+OLopG2mZ0,ibDoSjD>Lq}F7BDV+u0%oe)F#-Zl=^o|&');
define('SECURE_AUTH_SALT', '42vGJXNx2zUe/5JWa.nZ[2Qo`ig9Uo1*]~G4p5+!2|:m,qA-)OxV%i:S:*q+|}FT');
define('LOGGED_IN_SALT',   '?0Q0iQZw}_J+Gd-fxR-C8]t^Uao]xFoB(]b8nqt=)j][U_yuHS*h:T,GJ_^ .;Ap');
define('NONCE_SALT',       'JAyfc6B9@9Bh,LCg;s21vm0+cQ;Qp+8llSGBSROxZr+V};]1$6s0O_NxWA7nxU,Q');

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
