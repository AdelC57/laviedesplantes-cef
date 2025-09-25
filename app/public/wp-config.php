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
define( 'AUTH_KEY',          'yaTwF81>X0Q;p2m!_RCIr(m]K%ETj1Er4104b..-#j;dUJz3d3W,Fn]qs{{{E>2s' );
define( 'SECURE_AUTH_KEY',   'jdJ #<%Uo-Zx`4$H#pQ8gOVV[jH*;3+L_,Y9Y9hG<oq6KUKrF<ZYu?=#3>wf^l/a' );
define( 'LOGGED_IN_KEY',     'nnbVWK6&VHxb@oCifxI-R{I)ga_sL1;u ENQ4Y ;ld#^rqx2zwLR>$I4g,7XPqy<' );
define( 'NONCE_KEY',         'f8Wj1^2tz[g?r~tdx94-r>6?-Q:5r&g#obB? .)5[uE/EH=-ZK>H-a4|zR%K`6A@' );
define( 'AUTH_SALT',         '$6Oq|eWhK NnOAZYU4PJW.*4`]dSiR!uBazrDLHhGl!f=p(S{$ecjai$|pNBeNn*' );
define( 'SECURE_AUTH_SALT',  'ouC9Cr04Omw]g%8CYG5*bcX4^k>!<`ez~wmz@*}]vfi]!d=T}`-n<e{|D0|4G]nc' );
define( 'LOGGED_IN_SALT',    '1by}[zm0q,ljiXowCGcfEW%].[ljNaO2$Whlo`3qr{p5CV~>a0g^}@T)p/j>MFJl' );
define( 'NONCE_SALT',        'lvSVYK<#C^Ks2^P?^6R.0])A;dlPGRM7B*+]d<Xc.us|ow*xCzZwe)18}K-3@5]A' );
define( 'WP_CACHE_KEY_SALT', '/A1dSTLC3Hy:*^<R6GES3Sg`jVG>e=,{243y~=|;(_j;bRceM2BRPbaJ>y(SKjNy' );


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
