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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '2nbnH:3bM:Is*hdE|OX_C0GNDSEgKMF/|-* vdLuD}UzB~;_P^ M4{Vt-VL$N Vc' );
define( 'SECURE_AUTH_KEY',  ']Jp4t<l/2<f1dudED5l]%-03-Y5Za:G:~!^3Hr_Z2B_4h92Z4ABSAG=54V2jAF1Y' );
define( 'LOGGED_IN_KEY',    '-#35[D<g&d])T3&oWL{#/!<aGg]Av+<D`wx/]>1ZH7jocq9uNkT,#nW|xD[G>G6J' );
define( 'NONCE_KEY',        'cCj9_3SE2?<$Ak1_]AE(F|$HX5,^H+p@Lc1z%*a2T;8%9HKI&9^eL$*s3/6=7%rc' );
define( 'AUTH_SALT',        '3uCp9=86T;y><MwH%ZRv!.v8-r$$PDo%/IZJ6YXPCD_:e3[p~Urc]^a&9?1 YHuR' );
define( 'SECURE_AUTH_SALT', 'zAmYj_kZ34m7s+d0`UaKFYdZ_8C R3R6F80LhGpl#mr1PUlhhB|(:Vn2;4/Ufzh2' );
define( 'LOGGED_IN_SALT',   '1#F4DMf9ug4:^K+,RnXt2>2rTfLhVy^+DYx?b45I7h;EfdFL:EKE|+dC+mG Y=4=' );
define( 'NONCE_SALT',       'At7S|6OYff)[<*m:Tw)VQgfxIoS7ujIb.@afOP`9:u7vZ,:S0^&06~x$2o/TQ3F4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
