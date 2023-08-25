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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'u2]l=m~k7qcZT;3lT>}#o?9cy^&yV9>B[`i:JvFNFbTp|@g?yz&N|<rvWuk3O2*J' );
define( 'SECURE_AUTH_KEY',  'Ej0_9( :`3F*iueJ>}*5<V}a?u_Xu68Yv/6d7XvY=A?N=&G^XzKIsvamV7!tFqMp' );
define( 'LOGGED_IN_KEY',    'tzY=/zZ6mk,=cb?Ahn|3xd-?M~}Cmt?W80jT2Jya,}{Vf5,q>9;4V5^hNJJ]W.g0' );
define( 'NONCE_KEY',        '*R}Gc+BKA*0^F_R_@kwf|fc6U/|+gHB?k6B&QPZs+xHU2YCrnVbKy+:?__~O-):Q' );
define( 'AUTH_SALT',        'nQ<qvKh2EG{K{qc`~3?0iaqkuO:]X=-VAB2?A|DdwQ4?rZO9 o(*u?>?+yPb!!lg' );
define( 'SECURE_AUTH_SALT', '<klBJIC/7!IQ??z MXEVQi_^~>E*2kB7Di{1U=szT8p*K*GBcu@q<8v0-yk~|})p' );
define( 'LOGGED_IN_SALT',   'GNv~mi<{K4M$*K40;#W#BMx,*ew50z^k^o2Y1{]$;rtRSwrO|y{Iy%KglbQo.BzY' );
define( 'NONCE_SALT',       'AQ?!JT3_~~+HhW7A8b`=.>q!(jN:kkc:ea8>GSHv]X6HA[Qb~TpGx9w{@~P8CAN!' );

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
