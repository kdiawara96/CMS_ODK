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
define( 'DB_NAME', 'demo_karim' );

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
define( 'AUTH_KEY',         '&@bbGVQ0`3C6Y6|jfRpCI:q]&yQ.a~|9vmbt_;$~,aEi?2fOoI;Wnsk4z3Pdo)+j' );
define( 'SECURE_AUTH_KEY',  'NLImst^2fLm}#M48DI/~t#I{ai|CZqIsPmI_Xac~`-2+}PMj-[@I=(75}E<%nNv/' );
define( 'LOGGED_IN_KEY',    '}_0/b ddzBLvW.+RFP`zQRRuZD15BjD)90DzPt_?G>5r$@W/}v6I.KX+sMc,baLB' );
define( 'NONCE_KEY',        'hOX{g^;kZ0A:?*%)#3DTd4uI&o^U(M&hr1ps+XeT,5(@`TbjY-(%8ic>hLiyg6dz' );
define( 'AUTH_SALT',        '!xAx,|R>Ba-}Z[f4_h&K$[d;Aak*Oe!$Bykesucx@2-_jVo_MlF^nqsRJ_el_q=r' );
define( 'SECURE_AUTH_SALT', 'YyS6[gN.-M!Qyr]U*,xtZ}7<uhU*Gb@hwUZ,x:ut%0D}H^P=Qp;I$5vu$5G_Z-7M' );
define( 'LOGGED_IN_SALT',   'KUP=%,~-i*,2~xk4U&QZC_8Z{cLar/rF$_3YIIpO6^qpWtV+U(N[ZWWn;j(@njZt' );
define( 'NONCE_SALT',       '9R!VY:s~X}=]vGafy&kIAIndEH>p.Mk:0KRJtUB-E^e~p-r+^m)IO?^r7O]RK!M:' );

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
