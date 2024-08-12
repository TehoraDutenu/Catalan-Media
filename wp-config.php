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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cmbase' );

/** Database username */
define( 'DB_USER', 'zak' );

/** Database password */
define( 'DB_PASSWORD', 'z@kou' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'b%v!9C$/dkp7NAi.Cw5J_#C/kgw`B<8#X)6X.f,v~Pi4&xaJkbL3fH~BzG^DHm8P' );
define( 'SECURE_AUTH_KEY',   ':4a%7i%^lA>p`W?uMd{lPR.phJPd!-:EC-~.0F$?C#Sblnt*WrxT:Ri1HluJ{PqU' );
define( 'LOGGED_IN_KEY',     ':@q{DH6)ZxALRy-bcwL}!S3,$X ;%Y7!4n#H;GLZG$:s/WUAby#Bz:jD;bc0+ZDv' );
define( 'NONCE_KEY',         '9<.<<O>&rh<hx!yAAe$]qz%2OcQR-i91}D[5]fjoUyQy19heN$.s-=!XrDV HY)4' );
define( 'AUTH_SALT',         '+K--n.UETh#m-o7}r!nG~`.%`bcOref( a00yi(-$Rs~;.+$wAXY4QGfEX8?rL{^' );
define( 'SECURE_AUTH_SALT',  '4s(7v7wY05~kT%_opna+%]TBxO5YWQ+f&8; /jL==NV/O9p!h~^gnm=.Pe5Jk`^O' );
define( 'LOGGED_IN_SALT',    'z}U-_kRSOpwU@F1Y?&vN]t0R_)dw^8,*sjd*o&vFk/w.kZP/xV7OyO]<~C,r|7Gm' );
define( 'NONCE_SALT',        '?*Giu)0=DQ8DLAS!KPQBueVOmQ+X<e&4dUI,cY1rR.Ir(^)D[ioix[~]DI2U>?j3' );
define( 'WP_CACHE_KEY_SALT', 'Y?&v;JTL[4Cj:ZJ&SP`}`V$p|<j=0$kKV[CsXQ||% TT<3^=?yl7#4+*aH[UCtSp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
