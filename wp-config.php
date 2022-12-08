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
define( 'DB_NAME', 'annorganiz' );

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
define( 'AUTH_KEY',         '#={x4!dBbH17eab@I0>6H{/p|Pl-z*VNM02PftdP;Fk-|TY&EFwZzl@zl8$#fJA0' );
define( 'SECURE_AUTH_KEY',  'n!mXgW[,:uR/j74f`MW*-e_^pm.aB<2x/-7-``<JWSmwnE}ZJ;#<))#DW*#?Qp,f' );
define( 'LOGGED_IN_KEY',    ']6Bvu~1%G>4}q3Jfjf2)_|D*7ARc-t`SWouf&y}3>1Z})ng<V?J(!|+3(WD8eJ~-' );
define( 'NONCE_KEY',        'wJR_ztI?srzRqo>gvBa,-,6j#vS`y!m#zO[=Ae[T^g@E,CM-h6~Q9jh-wy,5PS D' );
define( 'AUTH_SALT',        '4Jhvj`k89*rF[->cbI{b>X@SPXzDM5wxXklxHT;8D:KkX5kWt^K_)t(?+8fPW-ZB' );
define( 'SECURE_AUTH_SALT', 'Rqw#uaXW;(_c<?Lz9!p_XfN-Lm5`%2B[1bL^r3kZTE2OO,7>7U7KuURzzfJJAs,J' );
define( 'LOGGED_IN_SALT',   'zg=r+cz4`lLZ{qfwcn}FBn}y1M00H_Zvr?X0r6YJQ9M2uC]U+3}Q(t(X:Uj>]7qZ' );
define( 'NONCE_SALT',       'ExGMp1w)4c>HdM]BWils;.!$YnJQiOkbT=D)FGKc8?F.j&{ct{z;nbb(cI^32UH1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'DpzigLS5oO_';

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
