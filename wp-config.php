<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'websitesp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'M-7v%)r%_v70{%~X2DLz31}5~mah?!zS?Dyzt*Zx#OO&X&HL-|D$](^ynF[@!Q)^' );
define( 'SECURE_AUTH_KEY',  '_ljOSP#(e*_T&t7>:xbwzIl>xGjeB_!Y<D)YPWPzY.ew^@F-B;EixDgByHGi)*6c' );
define( 'LOGGED_IN_KEY',    'r3vZK/m&$eoS5qvrIi4+.N26WefqiJR]hzhW:HEJ- `BAe:HFUq}^IJoMj^)RTMN' );
define( 'NONCE_KEY',        'LZ.?qCZMq}sDj*GAe^(JNY *),^k>Bk+9*w|M<ylL{?tC}~4C?E*/S$noQbPrla]' );
define( 'AUTH_SALT',        '(gTcIL%15K:X3q7jwC>M!3md~Rv%D&e:/4,N!wANUi^B/9_F88!9o u.AIhg>ww{' );
define( 'SECURE_AUTH_SALT', 'P;WWH6ri0S:okkp330iC.2UfBoNA5N|SNacre;W)lqk:DH;9XZ*NupM(X_;[?VKA' );
define( 'LOGGED_IN_SALT',   '}klziUd.;`.iqA-OHyv =[ ct|@hhpoecAW|jGQK2/9=rv,Z4mv M$=.spObG^{v' );
define( 'NONCE_SALT',       '>CT?2naAu6_Ni]~0+>U3JoVa|:0BEY>Q]}|,WsMY/1h*I-W:$}cTH@_C!gfF|%.G' );

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
