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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pixcell' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', '+12345678+' );

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
define( 'AUTH_KEY',         'L*K[m$!Ij~%_3aaMDzh)IaL<)U$}QRD77oH/bBc[vp4i[Ke(3JQueidqY4ISCOi}' );
define( 'SECURE_AUTH_KEY',  '&3}nEo<Kx:>r3eHa]PAFyH4WhpyTrf`yqw9Cu.KDKz+3fYOGv&~@7$B8yANrS?,Z' );
define( 'LOGGED_IN_KEY',    'SBK=dbV$jWL~v~?m[mosPyF3nM(_dOF z0.S1d8&3&az.$&% J:*,k{:-w;5`mlO' );
define( 'NONCE_KEY',        '?Boi67ih,8rFHp,^`.>hx`-}87B|9dLj/IY9r1i,]>{85&AOxB9u_6*s}u_K<A3Q' );
define( 'AUTH_SALT',        'dC{:Cf%+&6G`PnXa0J6f|kjMecly-32O%Wo4ON7{J@~6MC n3_Y(o:?1ut#<J4n9' );
define( 'SECURE_AUTH_SALT', '$>=>M1#B%+w~E82R/y2]4.sE!]~2YHjvpH%Ei N3#=&s{fO GB{E)lRJL0Tj1(/%' );
define( 'LOGGED_IN_SALT',   'E)rp&RG!acT{EO7;3D%@g~RyvqWz;Nz`YAUTl?o3l.aV;&C{w@@U2Nj}ZOqhdweY' );
define( 'NONCE_SALT',       '2A,x2qVB0r?^M/,yMt)_d2M2N=+y@z.Jv$RH3e}t0CUAybz.d_9O`QguZ4D}zw3U' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/*Para configurar accesos a FTP */
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
