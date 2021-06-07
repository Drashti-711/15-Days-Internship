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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'P7dD}K49^H4_q3;q/E2]K|J}z{6u3o4qy#Xc1=aa41]`~NRobB2:9Lu[s|o>N4R`' );
define( 'SECURE_AUTH_KEY',  'BZ`=AjCSO,y,^26y_Iz-ik3p4gipT)y$) `ESMr_FF&5s7],={X+CYsgY.z!-pO{' );
define( 'LOGGED_IN_KEY',    'L K.{*uPjnxSc5$jL(?2JFKWI)Ih~,<(*3V^.,W#a$-F)36g1[!2Ot4O}d^54B v' );
define( 'NONCE_KEY',        '[).G5s:2@0(?~v~t*ZXs*+W4d2g}SZgM$(_FrB:=*xLw#v%AoJ^c[ z;u}8&?{Ip' );
define( 'AUTH_SALT',        'ySUuzYen`R.g,]T/75u;(7G;9;i-ZeLTBc&I-g:~}oC;f,noY/m2[o(*u8c#h7+n' );
define( 'SECURE_AUTH_SALT', '|}!`Y]6he^:+m1E^{7*MV?d[ZSb{-Z$d,>`!Sk6,y:$y:7~! Y?9Ge3+377mq45G' );
define( 'LOGGED_IN_SALT',   'C;/6V8+C`SXn7,>F6:lOovj%>*J}=8YRteepUV}(DF7-5+@.5^Lc!7>*lck(m3@#' );
define( 'NONCE_SALT',       './4x:v|MxY88J`iW*}/Mt*M1_:(sC~UYV3,;i!A*SW{X5zCSJ8BW{0j~vWWQ_?c4' );

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
