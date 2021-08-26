<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'passwithphil' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+SeM@%{7Zpx)3-).BUGw %$43I}J82hQA+3b-;XY$+ryY_%Wk<,3OQm0fJv7tY&[' );
define( 'SECURE_AUTH_KEY',  'APR;xU)f&-G@YF$.nV dQv$#[0<j]7EjIynp6 R6PA/ZkJpMqqj!(NPaii@uFcX2' );
define( 'LOGGED_IN_KEY',    'I&|S<Nnl{PF5~+7V{Xqh(Xf 25Duj.F)}c&}]Ric1!Egrgj_9)SM^y%(fVNsjwlx' );
define( 'NONCE_KEY',        '`PAw.pLvP|3X,-~i|]M@BOONkscsu^rAUT.(!=0F+eZE!+,>7S3y~m+7G4Y%&?Kc' );
define( 'AUTH_SALT',        'vBT[M>Rup^Eq?@&R#m<rRh%h4C_-AkB<s[3k.Ug<X!irT;$2LNd_ N5QgAytyGLD' );
define( 'SECURE_AUTH_SALT', '~|zEr(IQ6;e(]1{%wT-6V+Vt;qDJim;flg_CietIpeTS8)0)1Nn5C@yaiJ3;U`!A' );
define( 'LOGGED_IN_SALT',   'u-aGdI :P=B1f`78/.v}+]67W4q,;ber};}ZCaiUWy3IJb2LdKRtzzOhiBsh?l1Q' );
define( 'NONCE_SALT',       'uR~H7FWMvU+*!7{oD*y>pf17P3mYnLE~?7-U@M<{?tm>M6Wi{s+x/syMjW6,xQEP' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
