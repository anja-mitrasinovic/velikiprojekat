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
define( 'DB_NAME', 'velikiprojekat' );

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
define( 'AUTH_KEY',         '{H0E}x]5Fz.?< 1ctt->v|ER)A|y4!KSOtQ3|z;@hyn@:88CxG?GrQkcmBcFM^>:' );
define( 'SECURE_AUTH_KEY',  'MFjpvXYOm.Z^jZZo!TY5bGVBKM;[Orb7m7{-XCD{ :Niabj85F0h%KXsjDSbv|LG' );
define( 'LOGGED_IN_KEY',    ':2qgQaH<]Q!m 84)$?MrauboY~1yKMd,!D 2D,V9sqZm66Mbh|g&~dXa *;r3TBZ' );
define( 'NONCE_KEY',        'u+&bH%eqziPBwh/dt_0l6mqNa+Llekv,+8m!xrh-[!JqnOI2@`m)/{#(c6qF;0+C' );
define( 'AUTH_SALT',        'U,Euu-qT/YO>+@12;xKf7K=Zk.aWUz v@|O[WVSz^**}jC=r[xjDwXvY*;hbXz34' );
define( 'SECURE_AUTH_SALT', 'K@l%Lh*TND<sjg98`APry[_|M4U7+Xi2|?#5?Ip6aU!5L|yiK/>)ow#aoe,L*5gp' );
define( 'LOGGED_IN_SALT',   '68)V^*D+;T]:#,u[(D[ht7]zk/K}n:0gpyRP@R.m,kVjY.v:qOoDb|bp),O|YC[{' );
define( 'NONCE_SALT',       ')|F#m$Ii7{ew#d~V,1#RnmpMJ-zz&)hWf2ILu%!^rH[vB7{hO!2D_;6gH%0}8xf(' );

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
