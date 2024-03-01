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
define( 'DB_NAME', 'woodworks' );

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
define( 'AUTH_KEY',         'x^5qfdC`BD<*W~5Yx1ad)oEh*#B2IUdF2glG{NuM^|0d;rA{EsTrJj;Y!.`%b6VF' );
define( 'SECURE_AUTH_KEY',  '37S($<mb.7&O-:n 7fQXN_eg-|ToV?g`$psoNyBlRYJx_#3dGaU.D=1?GTP<A_YD' );
define( 'LOGGED_IN_KEY',    'D%tK@(S,FKlD20KQ*7[dz*]4R7HLS::j;4Y~42hB&lh;3Uhtw]5V)>j:TQau?sXv' );
define( 'NONCE_KEY',        'jYhI[%2*4nBp{5X#=!;8yG|t4[KpBZ66;duoLl.=9?G*%^33G.&oRo/vI{f aKg<' );
define( 'AUTH_SALT',        'DRgzK:R-r|V2J3/RY4MQoNa?v!P|7{;#[ygPUX+@*EJf1%zSdKIemE~mw9z%!S3w' );
define( 'SECURE_AUTH_SALT', '3>x&[>< @!nNnB*t}C4K~Q9(|53=Ep~~z~R^YPQ]+Wj(-Sg>.x~n_{.<}np)N3s8' );
define( 'LOGGED_IN_SALT',   '1w.-}bLtQ-JH~`F$&gpO;e7~mG1%+!O&@uWn?u {M=n(Q&qq-tyt-HF(.}Jb:xjH' );
define( 'NONCE_SALT',       '@-BQ@>@.Wh%9u)x)&wxz399QIj-&Zh_f[>8q|c9W,7^_[?q(xb(F7##r-[7)kw|)' );

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
