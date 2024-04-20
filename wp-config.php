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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websiten' );

/** Database username */
define( 'DB_USER', 'ummaditharun789@gmail.com' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}DcO`T ?EY&m8JL@/$~d2T#QAUyt*5rCeP=qlqD)q,?I02l6:NRY6m.(5)@^F 9k' );
define( 'SECURE_AUTH_KEY',  'QGrx&DFOU>X .RGh-WZ$gjRT~3JjVI&S_ob{]|u5@)kq8[bmJ[2*r!2$+[I2qS9N' );
define( 'LOGGED_IN_KEY',    '>[b9WX3Ri{Ip`.1PkArxD^g+&:rOzT]#{zh{t6,ZnD=v,45u.g /}V9mc/.{+d*{' );
define( 'NONCE_KEY',        'F./lV:zf/?Y2Aw=k)dP|S o>&7u[3.b3;Zq/AHuTt<&wSy:g^FEy)veC[P]$XvM8' );
define( 'AUTH_SALT',        'Y`ki`CsLU.#0hGOLXqD)fQqG].6b*1F:5GyvQOgUMF~_DU/^ICy~YQkh<-UFcHU>' );
define( 'SECURE_AUTH_SALT', '}GN=*+lc$WO{9CsO{9A?74;kvUw*VL%4@4t1H&ME|[dqN|:N_[jpqo3Ul|D[o(GA' );
define( 'LOGGED_IN_SALT',   'UslgW[S^`e8B3Xi6J$a&fTjGiibKv^Tm]?bEoEzA.{I_-el1&F~I;ppAhOA@HRZ6' );
define( 'NONCE_SALT',       '.&!YVRLWb55T*DdDr+L7HQ~oqTJ#luVzl1Txd^UH[G!?sDap=O!Z(^7~cdKbR*,#' );

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
