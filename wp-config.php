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
define( 'DB_NAME', 'artshop' );

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
define( 'AUTH_KEY',         '3Q>:NsV/Tn/|KoSyNPp;szQ6uI?4E,RZ^DdG=Nk{y4=lxiV)8UQN ja{zRe+*<Y@' );
define( 'SECURE_AUTH_KEY',  '#FWK59eJKigmO}R>])Jl+st9I2#HG/ZV<}_5 z/AEK!gRu;}5TmYF^r/9~V&Ixzk' );
define( 'LOGGED_IN_KEY',    '1ywaHNsz1]qX0)4Z*b}D^/|6${PzF8xR=LFiOmoAK,4LS7-5NZd5,zF|7Og{_ttO' );
define( 'NONCE_KEY',        'DWz8~:ci7Ym&n`#SW16{t;P<$22d7@;jQ~L8RDqhj-BsQVdEe(jPn/8l6?/jG[7F' );
define( 'AUTH_SALT',        '7~b8+3Z9e(ye$:}bjUDF+g6:ce8)pq#&||*2/y&4InH Fgd|nx|e|,+sd<@j-.}q' );
define( 'SECURE_AUTH_SALT', 'd%qmsB34AkfNmf|?0u:r-F&t#*@K/~B<j*a@{;w>s^=$I8YwQUk[0ST+Gz<-wc0r' );
define( 'LOGGED_IN_SALT',   'eVmY4Z9)I0]u#e6ukgh*w*0a,M(.XE-Xq,b2yPC+n+8$^t_@/A;<.yG(*!uGstg ' );
define( 'NONCE_SALT',       '_yo$VvWg9920R,>GuCLnclok#A.p+fq6lDBp=fdI =G8A2NfNOY^v)GDSLbE{eop' );

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
