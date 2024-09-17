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
define( 'DB_NAME', 'wordpress_BT11' );

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
define( 'AUTH_KEY',         '31}9&V2=vO)l$*Vi0o1p^Zp)cGK/dv}e:fI,.$ODR%TT?F,f`E8YSV`}hMKM~z<w' );
define( 'SECURE_AUTH_KEY',  'BgB+) `l;LTJ-KEhZS=._+wL,DoVInMC(Yl^&~Rd@e)~oV[CD1I<hKU?r[$OYX+L' );
define( 'LOGGED_IN_KEY',    'd`:{a,jgCkV!Ub|vgET`k!lRje`.Sn{!l4_(+?Ch7Jv9#yo8e!KxC]E7`sh) /ao' );
define( 'NONCE_KEY',        '`Z@#/O5-M^rT`@3vQmtk1L(#05~<g*z5O0lRkDYRP`yTKORa]wa#RWY+  MCYOr8' );
define( 'AUTH_SALT',        '[8Y-6u4-3JF@+iv7BSyC8EHFnq<ygdmPz}{0C<4.`f3lIY&q|2Yq4p@rf:v_BsPH' );
define( 'SECURE_AUTH_SALT', 'xiq|1QD;~0-aM576ZC@q+X~k^K?dqo:[x?>PI#7&QI?yy|V@^Bz^+pey%r@N;G7f' );
define( 'LOGGED_IN_SALT',   'yBBzIjv7m$q<P3 1!B#@Jbhs]%9VMeJ|%J Pim@g.ZQ]Tz1;_[#Sv-)._m8ybMiw' );
define( 'NONCE_SALT',       '|J1jROQ,H7#l*PXQogxko|(=Cuvw<K=Hf|mS$pyuR<bJyv!Jj*[yDqA+{9*]YCMN' );

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
define('FS_METHOD', 'direct');
