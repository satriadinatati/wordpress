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
define('FS_METHOD', 'direct');
define( 'WP_HOME', 'http://myalb-267616097.us-east-1.elb.amazonaws.com/wordpress/' );
define( 'WP_SITEURL', 'http://myalb-267616097.us-east-1.elb.amazonaws.com/wordpress/' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'web-server' );

/** Database hostname */
define( 'DB_HOST', 'web-server.cdjswh7bmas7.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         ':]<{ZE`b<tg1/?C;zkVRLR~4a-sZ|Tb%XF=T[):g(zj<{Zh&_~mts}~XtYhwIvId' );
define( 'SECURE_AUTH_KEY',  '$ Gfv)G%5;P5VG}@1XXDwGM%r*G;T}1!;)%__w9_3}hqk]EXY6:5TBQ.T.7KJoYT' );
define( 'LOGGED_IN_KEY',    'nvW{D-k(xSYOA]C$#ilu;E&G@}9@Rs51&7CYjV$,[oiUQNYci_yiJTN>W2ikq4@d' );
define( 'NONCE_KEY',        'tl(&pk[2yWhR|d,S_iFWm*/T_IpcPd)?6R]$[(+:R2FngFt%CvqRF?o rQq~OgIb' );
define( 'AUTH_SALT',        'pZAGSZ&YO/&`yVs`_!uC`N5(Pk|bW0~UeZx_c*Z5%aRm}#Y!EN]0_gpzfI1tp:3!' );
define( 'SECURE_AUTH_SALT', 'k>cIes #?JI@bN,Vm/5ITFK;y]NuS4{LN@{e;(8hgJ9KOv?Ode]>oh0Ss+j|X7uq' );
define( 'LOGGED_IN_SALT',   'Dp(oL_2Zh*6?1.IPCK@6/<}w)wt)b{b8-%qt]_R/K/8j%`_~``t`oxuu}YCim!+9' );
define( 'NONCE_SALT',       'Xl_&M8&^d,k5U.v-AC=.zC4p(D?PEUTV+VA430+Xr^A9q8ZQ~F?GDjNA_Y`j]K1h' );

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
