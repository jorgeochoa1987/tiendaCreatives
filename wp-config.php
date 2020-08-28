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
define( 'DB_NAME', 'tiendacreatives' );

/** MySQL database username */
define( 'DB_USER', 'tiendacreatives2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tiendacreatives2' );

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
define( 'AUTH_KEY',         '(:kxZiI:DXdZB#9!3&v-jK7`UyF&[z9vB<6V,YwHU) 5O_xwTQl;?>lU$.ojG5}E' );
define( 'SECURE_AUTH_KEY',  'OmgwR0(1~&%5D`xnF-5q7o_(^#r3j[j&wl2U=ThB<Ol]fT]!V!U8>>^Z/S}UKX0{' );
define( 'LOGGED_IN_KEY',    '/.I*3yE*Kb.gS?x(nt+_-gowavz!DN9:VSbu/C`q PLpk)@L.@lSOmE8&gus-QC|' );
define( 'NONCE_KEY',        'F%JBC6UtgL}~jaX9Tv(/q|*3:H;Z5L*}r=~}D`|SY7[@9PK5*VkrA=wN1Sy99lVO' );
define( 'AUTH_SALT',        'qtqmf0nGJab7[dH%5XrnV/vC@ya#eg,oQ%?:(~Z}a%Pdz$-/;Ghp:0u+v,wYRI_d' );
define( 'SECURE_AUTH_SALT', '>f[;HQo/*_6m3~<>yj|v,*U,+MkhG<!2N]qExk=T@fTY0n^C+FEH([tSJJ=V-3x5' );
define( 'LOGGED_IN_SALT',   'nTzQ)6.m!gBl9<43k}Rr.zFU0tqjPsnp*hu,+Kle~HKY(CAps>Dx4]~&t#-+Ks0=' );
define( 'NONCE_SALT',       '!<EI*b2AN1+Z;Kov4><qxGhVhno7`mSqRODZ)qv8Y/xg6YQ2Y~I+{uWHh GgfSf6' );

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
