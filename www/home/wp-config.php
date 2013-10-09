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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home2/earphone/public_html/home/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'earphone_wrdp1');

/** MySQL database username */
define('DB_USER', 'earphone_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', '0iQna2KQnNM');

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
define('AUTH_KEY',         '~JK5R@l8=vKNI^zL^)|PC\`Ef5Ydg\`5vRjSB*lyA6erjE@Ya>6pYM2iN9XS~uPji_ym8L-');
define('SECURE_AUTH_KEY',  '/Io|HSX6(pZBroM_KFA~eSF(7cwcufLLpIYu$wN(SpSVHjpgA*bPeX2JsV4c1V3H#5s60AODm');
define('LOGGED_IN_KEY',    'D;pW3pRr\`a9X0:w1vTZ^CRE/Zs^OxQ9N\`fF8Ol5>aQkjx)B);/~RfVGI?~*W10XYxDcK97F');
define('NONCE_KEY',        'CJc;|idKR-*ri3FK-xB8=;:D?BRMD7wtv)05usa/W)7Z5vF6^HJa-okX/tr$Ua#Y(blQ');
define('AUTH_SALT',        'sA#2>gCZBU5!FlKtXXzfNC6Kv0W<;dsM3=B2m9b;ato;GK343mm3Y\`f*x42g');
define('SECURE_AUTH_SALT', 'o9(8~U\`Wp*q-2Oy~o1q^8vtaLBHC)O6-F@P0iy*#wIPk3>F)z/OkV)HFP<c');
define('LOGGED_IN_SALT',   '@\`_T(l)EKK@=0J;oj/ZIc92wIonfM:zmwt4=J5Y7n$:(Cm(imX=q<f_q39j@k7agsXRM0N<a74');
define('NONCE_SALT',       'kse$uy*dY*3fd!PNopAL$/sq-338^iiJO/15a/cPbk*r?g:J1K3BrGhBnm_oen7jgvAn==5');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
