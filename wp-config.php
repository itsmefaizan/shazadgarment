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
define( 'DB_NAME', 'shazadgarment' );

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
define( 'AUTH_KEY',         'Ok6z%:2,5jKvN)K/U@s5;]D)2f-zt(z+!-8IVZyQ&ZuJe^yMaefCS[[G*2MeVE/.' );
define( 'SECURE_AUTH_KEY',  '7[o.$xo YRgK`x=:?do3#!$;v=SmLb*avE3Y}!w4^tq_V3f`*{<5Z8z.W.4J~4GW' );
define( 'LOGGED_IN_KEY',    'A1^FpzSzpr,fa<9?k0R;$H5^#+tR|9cS=PILjh*l9a^F;a^YdQoUcEW.f# DQ4ra' );
define( 'NONCE_KEY',        '5DxjQ5:NCFiTs:Z9~IH$l-7TGdF@vC$R}X dlVA3DsLiDVypY+s=3YEb/Nl*(tV<' );
define( 'AUTH_SALT',        'bY1m|pz>e=jSVz] w,-%n+v9mheT/6_I0((TGN@)u`o[[1)H uz$:l=I=hOAgp.^' );
define( 'SECURE_AUTH_SALT', 'LF/_v?fnq?r!1B$AUN><8,0feJ|(}ZXFFJmRGFx~fycy)gN!4ys[5mOW&]|ccB#(' );
define( 'LOGGED_IN_SALT',   '+<VdX^>+mikeiDA(2!WmH:r>Yr6j/jZ4g`VX4B+bpQ>c8K#{MU-C^V$rY^Tdu}?C' );
define( 'NONCE_SALT',       'b>Q$5t_y$t6VOV 2{rTcb=?tT:/FY<ET>NdaV2]Rv{ibSZg(SKiDw/cWj@yIF(X$' );

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
