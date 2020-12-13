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
define( 'DB_NAME', 'wp-ecommerce' );

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
define( 'AUTH_KEY',         'qbVzAM,wA5)AswlM)SK4`{@#63,z767`d?I >peu|1dPno):aFNJ&jF2:J~_*Q((' );
define( 'SECURE_AUTH_KEY',  '*v^F:`&X0S)g0$P`7?afN4fs+Ma&a/ZiKw$Y7py3KFs9plJp}H@_@k?Eqp+$s*3v' );
define( 'LOGGED_IN_KEY',    'LRr<U^>p[o~ aJUl[p.d~rU6F<-2F_SY3@6B7JNJ`M$}gwi Uh?&eoZ,GL]6SA>9' );
define( 'NONCE_KEY',        'pBQV<6|ph/Bfw_<cp|W.7JW NeM!OJm7*/C)/|I[f5q/h9-K-go_6h&$y9w-A>Z(' );
define( 'AUTH_SALT',        '^SbT-ik_WZf*m ?c5gBTB#.C`D>3DV/p20 $.SA652z#o!TL*y}Cq-1o=:N~%M.{' );
define( 'SECURE_AUTH_SALT', '3_Wu%R|,RMeH9+#1mPj|C[mi+Pyi8U#U~Zy$R,alk&sE=peBCYA{Y8^&APF1^BRt' );
define( 'LOGGED_IN_SALT',   'cu#[km)a,v}AG{=D-5Zv=DN%1A=iCBy-j&6|kSIbWDx|2I3.CD4vvNnJ2;q7_!il' );
define( 'NONCE_SALT',       'aEmWbILap2YSqMe)!8=lFa?S1hEQOq{rUpwd8#DTBw3/}Lk04-|+]ceUvf+hnD(s' );

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
