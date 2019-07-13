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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'cotiza' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         ' BUqoUlK*d7E,tI-)*n:YOOnqm00?}&eIOEG?D:Zd)5Zj<-YE~rIDf-3H~5_QPx*' );
define( 'SECURE_AUTH_KEY',  'Wbj1F3Z](TlC=0S[A~vl*<x&IM$=4kY8QM^UM:+lR)g,2$;~>P/0f!/6>bcG?Ec/' );
define( 'LOGGED_IN_KEY',    '%K)0tlh1*&_|hsi86|s|p+[LhzTgL8kmBQBg_#w/2,vI|$d(,zJ0,5p/*/U.zI%I' );
define( 'NONCE_KEY',        'zOsh_J+(u}+CP0:R+;F{$U{za~WE_>+G,Ps3;I-f/g= b?rc=p -MaxendvbdPyF' );
define( 'AUTH_SALT',        'Ta}$YXt4^%~]3&vGs)Gq81RaH9[c>is8mzganbuH%AYh__-MP[d*gDxijK;.MQl4' );
define( 'SECURE_AUTH_SALT', '}ivAS2pkH27xd_}`c5^xWIk5m]SrVvcG.:K[EE:;O:-qyp@c40Po0?4MAHr^[Ykk' );
define( 'LOGGED_IN_SALT',   '_F+2wm|y&^pYghYXgFJ&7?Y/7TYP^Mk~A||d{w,o{qevY)8v:Rynk9Py?N|FfmPJ' );
define( 'NONCE_SALT',       'a>]nr`dZkb#@$ZVu!_~g)qRGm0[}{5;(OUtB$e9TjoLl5z/Q{4VR,0,cH}%$C3.r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

