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
define( 'DB_NAME', 'wpwebsite' );

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
define( 'AUTH_KEY',         '+ [s4YhA&m[a&5}5q@.^]r/RSD54=<Ao@}Am6)8dG@~fO.Q7Tw9-VAw-?3a0vFVh' );
define( 'SECURE_AUTH_KEY',  'y!)Q4V:<?`d1is2b$A|?2p9#tSLl6LEgs%6lmVwumqP7KG/z ^mf*`D%j4V9!9,;' );
define( 'LOGGED_IN_KEY',    '%gEkS#N^yv8lxZO`y#fELY Ks_+5o9r-a63+yo+e?oG}yDhCJz[yDC;es2uva)8b' );
define( 'NONCE_KEY',        '6W1#3`@>S3K|mAZ.dm!V`EQTTdsPw#Icu$e6;!D`s1p2%yk{Qq#?]p&2|pS:rN3[' );
define( 'AUTH_SALT',        'EV_O4/~U<k:u{_BASI71>io-Y!gtgvXkfQq[t*4z@|b<->AGgPE-sxkWX]W1=1,?' );
define( 'SECURE_AUTH_SALT', '{U?&=0/^Oxqr|Q{.0(5UiCi#+Kx(C QIOl73S:T?tNo}&33g;ZrjpvQHU` -ibPa' );
define( 'LOGGED_IN_SALT',   'oX! ]/8{Zr*=*cFrQvO%vJgsR8/Vc^5JezooGMG,ux06~=.IX.MV~4x?5=`uMwV!' );
define( 'NONCE_SALT',       'fLUd.]:]-7Ads%4fqtn;01#q#ERY&^D8l5DFPJz-=4ZwA3aq!LXc^O+XK%2.%%5}' );

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
