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
define( 'DB_NAME', 'mycardirect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ucreate@123' );

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
define( 'AUTH_KEY',         'lW,E*/H%:=#okzABAIk;_*i$O4|!H)P*PF!)uZ7#1PgcK]2 (QI!GGH3# j8|7,5' );
define( 'SECURE_AUTH_KEY',  'p/?i>fF,nb^r!?Ak0m<[i`vXmY=G7GH6U4NeR*9qvG>_~lac,F-c==/8stHatp6!' );
define( 'LOGGED_IN_KEY',    'jetec_7oOoF5C+[H$iZmefnFky&_Q$j;znqe{]x*9ZCxImPK?q1J%t+7Q1LKz<0v' );
define( 'NONCE_KEY',        'CRKIB)](CHb;Od>kYi#Z[]aP3M67v.~z6%`=?=e,-g.UhJ}I/ESs8d)Pd>oF>{>D' );
define( 'AUTH_SALT',        'XrL$9lBim+[NY@jmdhqQtFBukL,=U;qA?e)v[Msf7r5}XIJ,./2o+Q()(HKlz,rD' );
define( 'SECURE_AUTH_SALT', '=qS;i?(97+C2`{$7*Um8H$V=gS1:|7o!VLI,2t>J?SJ7T?f!(%aQH/ tLn]^*:v*' );
define( 'LOGGED_IN_SALT',   ';sX)v>pa~i.-(1?i?L:5dTpz,f:qvXf_8X$@Adk;f3h!iw_FvZ|*8It.R+s:vSux' );
define( 'NONCE_SALT',       'ubf;;#)vQ?n@y^G<L(E*])Xq1F>9dS3DQ$Db(&qf}pKtLF@yf3E[-F$_XwD`6As#' );

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
