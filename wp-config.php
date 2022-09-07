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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cloud' );

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
define( 'AUTH_KEY',         '>cFA#Q[4`G73x?{O&g?V:RqG1k.!m?HA8Xc8?X}(OF:ya qx{m1e.NayT-BlL*+7' );
define( 'SECURE_AUTH_KEY',  'Zs.KmPpr+:)0#|8qY&3MpkHd`?UiK,N+@O(m-2<MDr3&<}5#*JBvG8V}b%|~zz9F' );
define( 'LOGGED_IN_KEY',    'B|Y`:6_lg#5br80=2Khvyeb*YjM2AQ-srxaafYx=?4LyzbmgZue@Z;:*lD!Aehf!' );
define( 'NONCE_KEY',        '~GBbhFTCECF)rY{a=F3CTG;q4zCam|V/nlYbnvh8o o3djy|T?P/ =+Ib0JfW1,a' );
define( 'AUTH_SALT',        '%Y#{iN$yo)&@Oib@;>75xw#)et*f9nR(HGpv !! 1`0(&lImf#Xm*Ll2o)3jGt`3' );
define( 'SECURE_AUTH_SALT', 'GH9l^qhD<Vr Y*L)s7`XI],A&T^I^?hG[nBW$o0R6PEQ;K<eMFep%dY@:^_#YYp6' );
define( 'LOGGED_IN_SALT',   '=1c<-D/NYZ)`:WWfCreZU83>]RXC8b_Ys9X~-1)}<68rbV5InO~I^k./ZBdUK])e' );
define( 'NONCE_SALT',       '~1P,HR+AA+R*(z|S#T*L)3nMP=n:;7:/<-#&3OUL$)4wf[w35  P:oA{G[v3VF=@' );

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
