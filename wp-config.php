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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kidder-lane');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<0RghJ{d`MA_g}qNEr)(ie!f_R_8|4<]WFi8ZlaJ[h2T0{N/sA^[l&&-Gx#z>BJm');
define('SECURE_AUTH_KEY',  '>d)V4loyN0s7Qmei0@2xmN -z/[wfm@b6$*tB6??-3nBE)a[[gwMAt(mr2yl$z{P');
define('LOGGED_IN_KEY',    '}ukR+J1Cian[ i=r0@/@$Vb^V.Ty!rv_s[Z;=R;<}N02SlBTI;e#*8lrF9|1nfZ0');
define('NONCE_KEY',        'GsZno`W=/o&Wd[~xxJ6Sa(rgeVCJD9Ev:;8@,#``nHL<O-!ch$2W7UZDy%LHB:cY');
define('AUTH_SALT',        'X44=v!2[M.BhjNsFTLhtlBMj{#l--cm=Ktl2*[<81]{-e)=CzjNw~q)r~3`d_o<>');
define('SECURE_AUTH_SALT', 'nm]6bRr]7>V9PX[OB5jpq0QgZDXa]%aGJ|_y;D<!lyulMt@E0baR_pUU*NyJ6;bg');
define('LOGGED_IN_SALT',   '>Ds<K4lbL$(O&_ts7Y%i|o3?s 1Ee9O&eYQG~WuGQHRbRdM9t(B,t^qJQTY<jy{G');
define('NONCE_SALT',       'W)BZRwLGrsnj8pI?gd]a#j@C2llxD3;=@#m<&M]50_:]XBIW+h4}jBSbJP>zOb-#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kl_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
