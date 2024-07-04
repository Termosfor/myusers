<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', '123' );

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
define( 'AUTH_KEY',         'K]#5ubR2#A&:hT0|7-b%1c]JL<PqbIn2#jgl6Be)VH{dBu<N8^fgWx7loA:AdsT{' );
define( 'SECURE_AUTH_KEY',  'nS3*p[}+}XS~`(,UW;OZck]EB0Lzo^{L~vlP&VGsow&xCR:]:Bi=mX!QTVx8dN*O' );
define( 'LOGGED_IN_KEY',    'YJGlpKUa09f{/Se(O9~k8*EV4 W#2IT/f{HWt; 4Tu{1fOx=9;t<>6AMd#BHET|P' );
define( 'NONCE_KEY',        'Lg*;p^Jl&_k`U@,`w6g;@QWe9mugEC!L??u9eX0chm2Wy*xj-m8K?<j+DH2u8>$_' );
define( 'AUTH_SALT',        'Ltr4eG88fCtIaEYn,iFF>h-cV}~z4OOcmLlw0v 8EXLez| l )/3I&2VOn~GX&w.' );
define( 'SECURE_AUTH_SALT', '70/un5S<Cj5ns=b`<f7)-D_oL9`nyC_(y-_Q{hzal?A^|=~kvI7l(V+f]Y^>MxKX' );
define( 'LOGGED_IN_SALT',   'mE2*Nd`4-?[m{$PzH^A35}in7P7?=IFAlcJ<h0aNhxMT(mh(@s~>zc#|4jaRSYnl' );
define( 'NONCE_SALT',       'sGc?y7?RGx@OL#U{K2Ztb(vKy0y=O5oWU~Y{|(~^CmP|qY!Z`I}qui~<jbB7:T@z' );

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
