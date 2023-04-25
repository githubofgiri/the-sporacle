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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'the-sporacle' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'JFOuc~@WIFV+QD>Nu]RIj@Yva<BC~>G,27,5BzeU~&:tkA/cDn))P<Zd R|peDA7' );
define( 'SECURE_AUTH_KEY',  'bv?!K+-%iuszl%Aw s&(Q8(mPvB-/$}r*]M[l/qzL#JO8*[4,G~,l5r[M4sdr~[,' );
define( 'LOGGED_IN_KEY',    'Vz:?3vf;kvq2_1tzr05Xq2sAXdhEa?96XTA/n;2b^?$!DL`fzdBHtYjxs1}3|u[E' );
define( 'NONCE_KEY',        '0kr<tHEO=./}.U(X)8b%H=j H4im5K|ffN5)N2}?QW&*tE{sGvK`{M&g[/jrZF[W' );
define( 'AUTH_SALT',        'o}CG[C&H:SIiJn]zjs|t.`rMp=A=rXrUE%/cngl?u#t5@H#OY$VB2a<&&rSUGGZ(' );
define( 'SECURE_AUTH_SALT', 'o={Oj9_y8=R^c`8Vo%&(Z!w$[pbL]Y!?QC)/_yBE]~D:3m,`SH3MZ3zu,VQ_(3Z3' );
define( 'LOGGED_IN_SALT',   '1Wz.=OrPT/6wT,g98b7`^ruiJl1UtWv`F_Q!UqL9w]?a>Ao@aEioB3NjR2TLvG0w' );
define( 'NONCE_SALT',       '1S{$f>x2-&tc!dQQu!5?#y$jkYMm%Dk#%ie0o:Kg`L;xm0j1}AjA1zBzn5oHSBi|' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
