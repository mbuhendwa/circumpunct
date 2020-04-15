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
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'x}}/Kg}^m;]AmIj2+x7:*)wBq6`h(vA ^lQl[*2e#UOrabBH Riwj(X3N_;b#L*5' );
define( 'SECURE_AUTH_KEY',  '7RP>m[Ujsmb}xg7B/cLJYL}8$m/j/iLm/2&#ed_iOrsK*.!qWIB3%2ImLWDt*}&u' );
define( 'LOGGED_IN_KEY',    ';)L=:,~{wh;xV@E^sQG0(1}K]l}|z` Tf{qKl3;`*<j(cq>K5SLQ`QQ0mXB4hD7s' );
define( 'NONCE_KEY',        'H?O(!Yq50eWH_?7Qu=Y$nY;29)H(Sb<.=9-;4uC~M]N{~~y5N]Km4/bHYLuO_&nI' );
define( 'AUTH_SALT',        ',y)ADlP-ZKNa}9ERcwCo:14duSB!s^y8k[d{i~-b6BaB7b!H^XO;teD2)QOH+H5F' );
define( 'SECURE_AUTH_SALT', 'zg{l=5e_`eR(>yMk+@,5Lq,jc|Di@3T{G?*;bq{-+$%8?f|`<0&+Hn)8[qONv/*m' );
define( 'LOGGED_IN_SALT',   '&&O$Z!T)]lN]*&KUxZ>Q3l|)Rclxf[X4J3v`iL1bzw7xlj4F`HK=E u!9]sGZcnj' );
define( 'NONCE_SALT',       '7*r{:.r-]OA+I+~T^KJk0X(Wot_ SX.emMgHbmigI9_xG>DQOCI&unY!-wcc`vkQ' );

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
