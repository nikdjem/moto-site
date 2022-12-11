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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk24/4204392/www/motocafe.co.uk/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '4204392_wpresscdc9ba97' );

/** Database username */
define( 'DB_USER', '4204392_wpresscdc9ba97' );

/** Database password */
define( 'DB_PASSWORD', 'l6A6aYt2hgA2bcmf8fQb9vKZvuEZQSC7' );

/** Database hostname */
define( 'DB_HOST', 'fdb27.runhosting.com' );

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
define( 'AUTH_KEY',         'LqGREZQp+pc;7H$94r8bvx1wFK8GSnwIH. _e$Tm?cw#e6pRQq9Iw}j vnfB;]t4' );
define( 'SECURE_AUTH_KEY',  ' HGWe|udhaeU-GuGXtS;e3p^up1-_nT3JN^0a5[IXW0I3^X3NVBLwFi0Pite$I$7' );
define( 'LOGGED_IN_KEY',    'raQc6h14HUMI7{=6;ll[30pm[zcc1yNn?>0v`j+=avZ~hK9FA-RQKce`IUVm%`L~' );
define( 'NONCE_KEY',        'n$t?fxB82Ny7xl%O<-mI9gYygU0mXyru-ee^To:b=qa5)tn CUM)Xub@ExltspP/' );
define( 'AUTH_SALT',        'XCm/,o# %hc`j)Q:U@1ysuNGM:K~95%g[II]kd.(yj4>QKsiy{gwY//K-hOHqz~l' );
define( 'SECURE_AUTH_SALT', 'U-kZT3$TVXO+R%%p+:b H?e`|5D@3J;#ei;_xpGffj;{ZWH+0!!Nm)mC+aap{$O!' );
define( 'LOGGED_IN_SALT',   'rd7U@@eD<nNZiU%jM%8hWg;Q> 0i~-e?mFBKcEI~WROz,z;W90:Hye{my^+vp6vW' );
define( 'NONCE_SALT',       'wpBBo8JTG(uu,F`s.|<4&XT+qjLw^Z);EX_n73IYt?lrk%Jx38T*A349n;I~hz*o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
