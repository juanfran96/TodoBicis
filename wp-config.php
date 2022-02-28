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
define( 'DB_NAME', 'todobicis' );

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
define( 'AUTH_KEY',         '`|1:c`y0++m:l<1xiG4Ws/TFnXtN21-^~;u!yl&~!:#PDD9r5>H;G08f78WrUoc_' );
define( 'SECURE_AUTH_KEY',  '8Fcuy19e2Ggo<n*bYU,qp8Rte<R8^e;.()q[]ysQr`3Xmv}#52K.m.Ki!RX.eYun' );
define( 'LOGGED_IN_KEY',    'lW[m[i22HXD0vu2:?Py#R0IU2}0/( w?=k<pBe+JX$L@S{rLjv,dkNitaIm#WUC&' );
define( 'NONCE_KEY',        'z10t#NlM(W>-BLOQh!W@I12`A<9X^Y}{&3yrQSj7T[=yw4@)8!O[YK;{$0,^<lM3' );
define( 'AUTH_SALT',        '[Fo~r),y:: ?k57jvJw_-JI13o~|13h%_Pdf+}09 b,.|bxEau9INt9KXJEs>/<$' );
define( 'SECURE_AUTH_SALT', ']DwCZ{?(Py)0UHSns_3;7(pQI7-eiAB$01.?Pi5c`e4=:aW<IQX?]Usio(xiO&h4' );
define( 'LOGGED_IN_SALT',   'Qe%/`hjko@|s{#=Eaus94Y}`T$j+r%Xdf!4D.m7$$d26ip@_Qx82+&Rh8vu1Tk7p' );
define( 'NONCE_SALT',       '}Y?E1RZ<*c&xYQ[9j@SN!F^9Go%d:]Ru_nYpI%Us~vh><{zAGF]<FyOH+tQ^PU94' );

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
