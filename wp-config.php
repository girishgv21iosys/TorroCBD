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
define( 'DB_NAME', 'torrocbd2' );

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
define( 'AUTH_KEY',         'TJ;([dGcN)LoUN-XS{f$D0vLfZ}uR>Lu~^Pe7I[`i2t6kKQiuSaLyB@I%,8,,@R*' );
define( 'SECURE_AUTH_KEY',  'TM>4dF0W}8.zl]`Yg!1P/zGHZ>Et+b:DOZ~yiY#mTo&3]GD:zRFK1;I/4J!1 9iX' );
define( 'LOGGED_IN_KEY',    '`:b#&+EO5khvB-xieRtPp:>h8`8A]v(G$(r^!+S{JpY;A^AS(_^<)G@e>ndIKy;`' );
define( 'NONCE_KEY',        'gSqUv-# P!rYXX:.0 6un_gkyr|g`cYA,{M<znM%&,6pV;@g*~=.B@yFv~4z_Q%z' );
define( 'AUTH_SALT',        '{!Yy9FTYm[WJ9t!dYl*$v*Mg$DT*Jh&iG8<LA*Fk6vZuOWm,(dv^!Yk[nE1Y&!]V' );
define( 'SECURE_AUTH_SALT', 'qM}[/<|_)(zmLYs2]TB?gNNs+z--6*a$YX5I3Z[=T_k9wzBAb2}~f^(FEHAxba`m' );
define( 'LOGGED_IN_SALT',   '-wzjut0-0!FoX!}& gOnqsbH1i)480C`kj7<WJZ<-iK9:4snkD,)o!UC{goO@ wq' );
define( 'NONCE_SALT',       'B-2K3.}0Q%rvQhB$$(!Wj#&wj~LTP-C(@9OO2jYQ6:0pWlKixQx|,pZ~O3Pn/JLo' );

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
