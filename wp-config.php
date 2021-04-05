<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'testsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OO7#i}qJpTilb[E&[w.wX}g4|*Q;.JP%KvdNv4+Kg$}5{V)q2/=(=wcgw>GXrIBG' );
define( 'SECURE_AUTH_KEY',  '6K]+5/)hVbJ>_V2?)s}~;7F<uTY|7C5|r_NI^~vRaC}{Xi|O&I7-,Uxz.;GZ@@1>' );
define( 'LOGGED_IN_KEY',    'IV)*-d`akvS(k#*xUzRNKYLzdH<]1LTB$7 )c}8{]-(aoP)!_G:Wy]uI}A$#VJNb' );
define( 'NONCE_KEY',        'Zx>SF5{bG[1+[%wqrh? W7&8IVF|[l%pko]`qV=&D@L?7%n}Y{}sx83_b5[>/R+i' );
define( 'AUTH_SALT',        '8x:WHUR?]}t9?jVJc|?2hNp2~;eklu%Qb>2fS<M,)>CWHV%2U@(=l{j=Dscgy5*{' );
define( 'SECURE_AUTH_SALT', 'R_?I}TtjOxQX+k}xR^C$N{|v=J&VICiyAB&!qim[HCb.SxZKD)I}[A+5<wI@-PN^' );
define( 'LOGGED_IN_SALT',   'SkV]rW`SDFjU`4}z@l2s!7tKjb-iB<zA&rjN/V|V#L0l~k;N{YYCzdglS6BmyL0}' );
define( 'NONCE_SALT',       '%qSUIM5e(f>cj9=z~iM*IOR@R)T&PV>TpJu?_QxR^ ET@oQ?8PQJ3#,45yb%4>ni' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
