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
define( 'DB_NAME', 'utexasedu' );

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
define( 'AUTH_KEY',         ';I9bEph/n4Jgb!/%9`W$keS,^F^,Xz]EKC<}EN$.A/,qY]P2&P5HJ<*kz`0M1L|g' );
define( 'SECURE_AUTH_KEY',  'SD%OsgTr70JVd`;r6#9giC)uUfKd,-N{A12c|hKawNnjro.Y:lX>7bP!tnV!,V};' );
define( 'LOGGED_IN_KEY',    '.p[WuQ-Y3i$Tm`uGX>#M_gdOHUw,yHA5O3WKs8kd$DE2KM%|5khcO.c#-~A0}MDo' );
define( 'NONCE_KEY',        'kQpT+];c+fp!~Wxcoam[nWFmMH2y-4X@%?S7hepss2p6Y0j)>,ou/}u&0K$=n=%;' );
define( 'AUTH_SALT',        '#EF0?l;EbJKs3t7_,j!JRPuodqLM21s: x=/2j~.a4S|gE~!>^}T>&}NIOxt`Zf8' );
define( 'SECURE_AUTH_SALT', '(anuk6;55G>!z%e4S>Z.Q|!Bfd}49Uy?^J1~(>wM:F^.~joXedxbMz@}?RJ~I[6k' );
define( 'LOGGED_IN_SALT',   'IxsdoH61 S21]jSK^)gCUY_4}*o0coyeGspq^.w=1[6WszA;{<^R_HeAEY~]~3Ag' );
define( 'NONCE_SALT',       'tPr;aI1x#`umoKS!R*1Q~W:$oh}H?~k*l;w7+zD~xqZHq0.7-Z/Fy#~ud2c3-$/K' );

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
