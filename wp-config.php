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
define( 'AUTH_KEY',          ':A^nOC87*:(FT!|TTo[KjdmONTqR,>ubLXBhx:OQwL_qRqb7Uh#E1sk2*u6`@sL{' );
define( 'SECURE_AUTH_KEY',   'GQ>*s;G$(CROU8_+3,ho>%XB#AVVa&J[>$76V<>(:/*g=KA&I[#6I1j*)c;kDrhi' );
define( 'LOGGED_IN_KEY',     'HGnMWeBO6~0]MV^TfdDQMB`R-+k<bPl.#7:[r}YLE8(Eo0Q^MLQOS !D:_:RGFaF' );
define( 'NONCE_KEY',         'W+#<sf;cz?OI5U-3h(#!!-?)PT ^cqx{-c<RxvLcO!!W00DEo2?6~?NipK7f0F8+' );
define( 'AUTH_SALT',         'x#Gu:Ij{(3u?l?Kg`YoBT}^oRBL=zhh63CG/0of)@C~SnMK<?SjGBEcH_^{#D[7(' );
define( 'SECURE_AUTH_SALT',  'Y|6~I0RCNOT@L*=ix[ri|;:+Q}GyfW8qgE!khz7uZ>|Kd<@?Nm>ijaT%F&zxcrHB' );
define( 'LOGGED_IN_SALT',    '3qTFCgEmFPZH03s~H4y.bsZH#YQ+XCcD=o)77_x~yD5^4=76YEIzLm7Mg)zK#dDt' );
define( 'NONCE_SALT',        '*Tc+TOpd610@GZsbL_8Cw?FO.!om?k.>%K,Bj^IRsxekMNIx$r:=K+mf.PYsvv/>' );
define( 'WP_CACHE_KEY_SALT', 'oE6PaiA<1~x -q9[|_H&d1GTx_I|0g*NAjL}C|WuIe+E-kf2*(sC`EL,d@}lp^S2' );


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
