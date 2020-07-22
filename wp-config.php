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
define( 'DB_NAME', 'wordpresswsdb' );

/** MySQL database username */
define( 'DB_USER', 'cosmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'parola123' );

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
define( 'AUTH_KEY',         'M{+zxeRaO-$lSMn?05**6`m_LY>7?O)~q3NL8>&2L)6r0^vHLOB$sE;p6nEQ!(5?' );
define( 'SECURE_AUTH_KEY',  'VwYwvz0h^OJ^pmC%E4Ul.]`8h_-wl*/f:_u^xb|HqvS4)n~Wy*$jU&IFzZL|2]*V' );
define( 'LOGGED_IN_KEY',    '$F;],b-?.~8-D%Hui8<qMcQpjnu:c*R5Bf/hLZc9BGMB~`[`Yi2B9b@s``omF55]' );
define( 'NONCE_KEY',        'QZ5!s2o6)*Y}PQO.<K!=Fs|aBTNOv.F~6z|(`>zO[UjD:U>,_%:lJ,-Q^U{feBZ`' );
define( 'AUTH_SALT',        'Q4yp!=M4dtjxD5DU7Nwt$zfuDTrbGh#[0V@ukdb)1neSJ B9p7e&Kqvi!Jk4S/.o' );
define( 'SECURE_AUTH_SALT', '-fW)I|{KNXrcDKkBA?u.!OOrf,7Q|J%`a1Hh6//hL#zuCgnb~#Cj8Iz(QQIG==bH' );
define( 'LOGGED_IN_SALT',   'E4f96k@{@jc/hAw3^1zj6`dL8*q(CWpyqqRn4?*3u%V:$vjzydF{(=#e5p`obZP4' );
define( 'NONCE_SALT',       'W3K7blY96:x<at)/+lOyytM:kjKzIYIa`6Z3T;Yr.Q+]4G7Fk*WlXTKfsRAW<TUA' );

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
