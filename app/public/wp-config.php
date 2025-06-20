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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '$uzb?Kd#7<9.*ti~wKwe?Tkf|`RxMCkzptHuWP$AvN/#Uj}~OPSi%k[?qunq,Lt.' );
define( 'SECURE_AUTH_KEY',   '[,/-|ad~r~mltr{nZkMb4~F3TA~>!cQ.Kq`eFPepD2iYPJ&kDym2lkN]mnoo`]oM' );
define( 'LOGGED_IN_KEY',     'duufK=T=Zk~uh.3//<3O?0o$+W^FME/2b4- COtfR,y=Ua/~BeFrsI*B%}XOZ?p>' );
define( 'NONCE_KEY',         'ovMO^eInn!kD0Kk@(Z~sccTbKm+_-m5!Iiys=)y&KfiLa0>]/bwc4fKrTyP4Tt; ' );
define( 'AUTH_SALT',         'zje#LP:;KK<!]3[`ja6;68F#gEFU4M`5)^}@l(7n>|fWkX7@X[Uhf1sKB9^u(2#Q' );
define( 'SECURE_AUTH_SALT',  'EMP5@xb}NGbVCU8|q1}BaHjF`I/Wz~uEsx`%Dsh U5Yu- -H1NM?ZkVkJHIOCa5[' );
define( 'LOGGED_IN_SALT',    '!gSZ?6Lk_yWNVXz;|mxZnJve#+<g>0PH+VYX^y:+NN7Ymh)]izSyNM<pmYeJPxJh' );
define( 'NONCE_SALT',        '4fcSSKB:R-5<LFs6>~x*NwUCZ+<K{WMiV*~E8E5J?=DeTq6OJZ{aUt5t%/FhQNBg' );
define( 'WP_CACHE_KEY_SALT', 'Gr48l(xB[@f^M>X@FSx6,R19b+&K&eYo%rwMvcPF1oirS.slH*lbAsQ`omV?r.rH' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
