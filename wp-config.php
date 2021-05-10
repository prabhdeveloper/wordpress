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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'prabh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'prabhsingh' );

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
define( 'AUTH_KEY',         'x34Am$A,j3, >J,_pb{=]X6W2qD-Q?O/T%m951^.d*<~E|HWS.LSy/a&fu%(bNcT' );
define( 'SECURE_AUTH_KEY',  'rcZG*6kwj(.>66r3k5-3>6l8G^+;w.Sx(Iy~Ojn/~Io+%9s3lJEIe-?avIZ(gP 1' );
define( 'LOGGED_IN_KEY',    '0|{P11x/jGe2^oXBusy*j4Z`:d^@(_+EJ,EfcXjin*%G.~/Umo 8w$uOO?*B }Hd' );
define( 'NONCE_KEY',        '!.biDA^@/m<|2A4-554;~6BmY1qw>:Dr3tY2-7RYNFj=m1cbrl>4:ct73Pcx`WT3' );
define( 'AUTH_SALT',        'cA^c<7W<,%2{TtW6g.QLNT:v9N.S&0>3wDHMbo_M&S>j02se>=lg!8xD{F#5i5_[' );
define( 'SECURE_AUTH_SALT', '4d?{V-UL`U,#b^?(a#Mz!3,qi~MQ< ?3yBBLII0nNKfa5KxZCG)EnjCP-B0.W{=k' );
define( 'LOGGED_IN_SALT',   '%^Itt $1(O&`+*$7T|4L C_D4m}4K8{OQS9,@AMO#&++^vIIiT5i7HX57fi>^hw2' );
define( 'NONCE_SALT',       'a?k|QB]3eQVa#sHO5rTP74OqXgI2mNR+}fg ,-!P?ieNvC#+1^QJGguGiNf`kx$n' );

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
