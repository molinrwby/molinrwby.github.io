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
define( 'DB_NAME', 's2649552' );

/** Database username */
define( 'DB_USER', 's2649552' );

/** Database password */
define( 'DB_PASSWORD', 'CS1.63344481' );

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
define( 'AUTH_KEY',         'sZzJ;6Q-QSr|<owtBflN_Nm%85?}C73!G@6^[U)o[YRLz@AbMAQz0`I!9n+9;(Zm' );
define( 'SECURE_AUTH_KEY',  'Z=RSnBI[Q|tQWy1zJhv]^0o(bqi2jzO;/u<Bw0j+cUWX3pkmn4ha@U4~g;CsQf/&' );
define( 'LOGGED_IN_KEY',    '4P>UCGz0Iy[RtL. #^m$| laD=3f$1DyW%SUx={]L*qv<+E%EE8(XcUmKTdXSg_T' );
define( 'NONCE_KEY',        '.Ml~## fYV@>(_+PDF&AH_G>oG e 1JX1Fg:Y} P+To69]I_#5<UZ`KW_SU|HR$+' );
define( 'AUTH_SALT',        '8H0Be:4HTW8A+/fuz],&]0PXJYIxX(j5-]&Y{5q/Hl|$@ZnLJSm@7,!,eP-rzW9#' );
define( 'SECURE_AUTH_SALT', 'pSP^Dgi]uzB.+Y1^ZRr8bd|MFa.85Mu=L;VqB I`Ghfp%EkK$m2sAC3crB~tH+(a' );
define( 'LOGGED_IN_SALT',   ',fZ=Vl,.]ekBH`pkUK*6GbL/M3!Z/UymjpMyuXNZ#ElCMxcy_Y&?A}|yHR{l-n8s' );
define( 'NONCE_SALT',       '9R;Rp<wMFeV^9@oJ4b=bIgEIfk&~sH~+.!pY)GPe{Oo*f2;G[;i!e:QL UMW&lnG' );

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
