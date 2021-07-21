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
define( 'DB_NAME', 'prostylee_landing_page_db' );

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
define( 'AUTH_KEY',         'U_fqK7z/41=/G63]*o`1qp5FiLjYM-iVEu`K%[8/8zsT?cH,n ^fAq2P)?R9p|~y' );
define( 'SECURE_AUTH_KEY',  'q{+[%8|8$E-m;oY>j }VH<kRLzZ_+KVc{W}/g:rH<Eh)M  bt{*9UP02fEAXPuGP' );
define( 'LOGGED_IN_KEY',    '2SqGJCD@pIR^-]0]DvU-zhS[][!K}sRh`iwN#F*_8Mz>[U*-~%|XT-n mfNsvgeK' );
define( 'NONCE_KEY',        'gZyn,^.%^pIqwsu*vI%5zM#ER!1 (EO6D5z[QFXuEW|jph&A|@mE@W,^<UrNcoU/' );
define( 'AUTH_SALT',        'MBrfoy!wpou*m];5$$^Eia<KKmvFlSD0]-ICpvMmn2^=[Vu_ZnNr`FWXo `sS!B0' );
define( 'SECURE_AUTH_SALT', '1*hmjBlG@f-NI6ALPRWbfM7qq$AeZr@Q(_&>M~Xr$t<j=/Mw!b3Y5+dk^oV!J17<' );
define( 'LOGGED_IN_SALT',   '0yI5_PN+iSyqj,. 1sfN2aQ[j&!^|{;x7B+tMF2!r%HxeY.iA3j >&tSK3r#hm/M' );
define( 'NONCE_SALT',       '^,f#E+^qJA[I?y_3ct@0f?WpT7yO(NI?_Z,|$?h5/f~MAiJa(!b%O]=c{-.CIa0*' );

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
