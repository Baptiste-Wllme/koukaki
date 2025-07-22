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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>3)k=pn,83qvj>GA8|dt`Z|a,pqe7QY%I&s2;&]v{LqY k6h#(OT?]}SY6w]hgnh' );
define( 'SECURE_AUTH_KEY',   '4Coh@Tltx}o:Q}rIjUV;QDD;X]0|SiTTcD:=5m0]g*PC$s$l)$&%5wC.!6^Aqvsq' );
define( 'LOGGED_IN_KEY',     '06fU#^{2E+BJ+/*f#iy/}~k(mKwlv:#Xl1NwzI*|w)!@K$0s+XivLut#/7&Q#R;X' );
define( 'NONCE_KEY',         ',EAieO|avYe))hH|x,|xP}972yXXx8U0Q/?&W}lU(]Xqf6C?&|~DAiI/i*d`eiBZ' );
define( 'AUTH_SALT',         '!3c?I?4I1-inI7tb/~N<?-PktfHA0eE;Iah{k{=WI#jq=^9naoA)**BZq]Q<B-v}' );
define( 'SECURE_AUTH_SALT',  'jN^{UWs7g}c,GL>9Z6l5VszfTVr!GLc2-X:RkA{{z4hJhg[eJ2Z@tHLl`uQ.PRby' );
define( 'LOGGED_IN_SALT',    '%eaPR~|AH>~YqD=3j0dXSiQVH:,D3[~_V#K76:_S%oI>{qSY|Y}:]&R&6nxO%E9_' );
define( 'NONCE_SALT',        't,i<3y+Txc;JJgR&z/lWIx$Hzuk)+;~q(Lc#bR*<]YIucygkyzbW<Rh&rqDw$?zw' );
define( 'WP_CACHE_KEY_SALT', 'Lq-M6zj|XD@zw4XNiA.8RT:xx`.psa5CLu6q]cOv&,B`&y%;7?y={d(d%a[QuCD$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
