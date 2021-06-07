<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7kf>#=-MBpwNej4[EHW+*J&vT{]MiNP?lBD (qsa?mZG*tQd09Ei=Rwg2@<|%DCR' );
define( 'SECURE_AUTH_KEY',  'jDz6OH0-gNmDR%tinKWgV<svs>/UI<2+wbY<9MsXk/CyLrd^+d,e/B$o@(s>Avy2' );
define( 'LOGGED_IN_KEY',    '~:_GF~<mXvV$E(>L)%T8P{Y=T6F**,ZzrJ@9Yo0z-Kpu.mtB1AmH#]7noL(tJ`EV' );
define( 'NONCE_KEY',        'aOu.n[nls=68QwE_nw[%n0UP4?S8bzBq.GE#_WWRp)05~5u&#Aw|/#>xTR`@s8e?' );
define( 'AUTH_SALT',        '(I!?(f59|&8)fo}[kf0q/0>OK;l,wyF!qN7~s50|(cLsXcj-6qJZeZ4Lj#6Ug>qG' );
define( 'SECURE_AUTH_SALT', 'G(&*uQ2lt~:mFGi2(Phvh4W#PinBbkGNW63e<8^V:l@i%mr4e2tAolxzG1ffF9hW' );
define( 'LOGGED_IN_SALT',   '[JA)6F$,feVq,hzExa:%>e4o`tu9`h=V|%H^J2-0HKqDgrQuZ]/,b~?[272HB^_k' );
define( 'NONCE_SALT',       'RBcd=<wypslgz=Z@GO>P:py{wYxuFT9jyABD#8T~G*e/Z%mDWC!9fl_R-cE!&phk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
