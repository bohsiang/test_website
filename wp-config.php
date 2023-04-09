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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'Ih4{?veC~ND*el#]Y-zCL~;-i)m=>o[[i,J8^76M1g&3=!Su;l@1b(xBhU.|<}./' );
define( 'SECURE_AUTH_KEY',  '&oFpV#FmXi9|X[d3;Av0dHJ9`Zqdb[1&>o3R^y3){TUA_]4!><@1p#5LD:K&0R(g' );
define( 'LOGGED_IN_KEY',    '074;4>TNK0W#UEs8o (6 -Y|O2^0jq@iP`%k!>_n`+rvdyGpy[2]&_hZcH4kr`?l' );
define( 'NONCE_KEY',        '^CPU{QRMkrUB-eF(c8_b?gk?z^jE8<*S|Y}t_h-udN9QJ2 Dy4g%dS&{awwH@(tr' );
define( 'AUTH_SALT',        '#Y*4&QD!SX74NoFAh]hnDpCJCGEO!:v(:VqIL5amhqt[xK|(PgTmg-A(RB?tHx i' );
define( 'SECURE_AUTH_SALT', 'NzLcNJTDy*7r,JR*|~PzI[/S<[Vca`$O!X3P;`v~SAX8&_tQl$7D*9peml(BFNjC' );
define( 'LOGGED_IN_SALT',   'J6|o*K2tI5D`NYK.=TUCLa~D$bp1K:!tJJPxO|5y=cPgZ%N&JJ`:Hp7O[wvtv{VH' );
define( 'NONCE_SALT',       '.P~vJ.9(+Y2.X>#1E@-CVtq`SY|Ea!_`_fD-$(+r{cV`#bFRyvg/AUQ#VMDP@^CT' );

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
