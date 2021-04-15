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
define( 'DB_NAME', 'sql6405933' );

/** MySQL database username */
define( 'DB_USER', 'sql6405933' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Please wait' );

/** MySQL hostname */
define( 'DB_HOST', 'sql6.freesqldatabase.com' );

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
define( 'AUTH_KEY',         '{JaEy^m9oy:*Z 1Y~j Xcfl,WWMlIe7w9$.v50)VoOQhx#i%/hgjv$!BpUhw!ie}' );
define( 'SECURE_AUTH_KEY',  'J77*%us#/@,VOPqlybcg>szR*~`Q>F8*-i<n!geh|R@i[57E;+hd=u(?b2!r/Dv<' );
define( 'LOGGED_IN_KEY',    'S/+|sc+J%j#WT.7e8bE0ot8O;-Rb0zDZ@,/)W$$ueT~kfB+[/D>*t_F~Qe%v,sJq' );
define( 'NONCE_KEY',        '**NH+hN=iS(ggNpZ{F y(`C=6N66r5N+qj~-L?#3YAVJhU7$i2]3M2&u)mxNqQ_k' );
define( 'AUTH_SALT',        '!!Y*K hrC? xThBJN{C`G@oisPq$t/K:d0+c8p8d,9{85rC<l.=OE-oem3I|lJnO' );
define( 'SECURE_AUTH_SALT', 'J@AX$Mo5/ShMis,4aD|<2kK:At*)Fk~?y!wwO@_)vI^l~,*pZB,O3+`Tm;wv-u|9' );
define( 'LOGGED_IN_SALT',   ':?[0+ovmGY|.?Y8TN[Selv`6Zbwf-Y.ar9U0)qHO;^A8FKHq!Ja# <542Zq3PZr=' );
define( 'NONCE_SALT',       'V^7U?-MzsBZ]]`&$&9I=UnFX3EW}#y8A5YsPFMlPL#=R1bkJo-?V$JkO]Yl0W#9l' );

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
define('WP_ALLOW_REPAIR',true);
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
