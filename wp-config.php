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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HistoryСourses' );

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
define( 'AUTH_KEY',         'wAFuw>}|#W&)kW=/uQYkjAuxH{%XkD,=3S[mu%6kLo`]MPzVeII1#>^D9q;)(~81' );
define( 'SECURE_AUTH_KEY',  'PiQz{Z!3Ug2}yH+3}Eb,WpJWU@aeJpyH)KOYfoKhod!*LLqf&@uie_NRHLW-%qPg' );
define( 'LOGGED_IN_KEY',    'H{]8u7c7v(s^jGdh_OO_g^6&Q_GF9m4DbGn9wAzgpF:{;r4NN@pA/IsvX_ZVowsE' );
define( 'NONCE_KEY',        'h(^.vQ9$?EwQi?5{tYh)T%CNmT&h(dB@!615+>L#DE5!qtPC*I%b.pc3rc{,cK|x' );
define( 'AUTH_SALT',        'FenX=Y!uLRO[O0+ik:F</ms8(6^04KhP5/]=,L[zHR8J1PNKuvI`OAKX~wW4m.0i' );
define( 'SECURE_AUTH_SALT', '!bVx .*2_?X.i$oxUj%+~[w:3uiJB`dqnaR6ri+2qgEh*T_=K+@O@zc~:V^FT4v ' );
define( 'LOGGED_IN_SALT',   'K+wIr,2t/fonjK.r~qtT>>MJFP}P&%9@=* Cci^W,4P<Rau/i/|xX>n~o%aOr%4m' );
define( 'NONCE_SALT',       '7N[^n&4WXi%JUlG~+;+de sI]{N0hEVMC2nTk]Mz|XRq9X!9vYf 54LF,Q<j@m=E' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
