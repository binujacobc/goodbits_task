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
define( 'DB_NAME', 'goodbitsDB' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Goodbits#Kakkanad' );

/** MySQL hostname */
define( 'DB_HOST', 'goodbits-db.ctd5wvsr0sky.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'nDTgwG2b^W-uj5;oOE_cU}[0>E@7~]QwadyTDVZUK#gip_#wR5Y;mY}~4Vpf#acj' );
define( 'SECURE_AUTH_KEY',  'NLpo?sGz%g.qLmi(PuZ6s^N$XQ>khKQP6Aw,SZnBYD=Y7)G!yxI`K4$2r]QcR|>Z' );
define( 'LOGGED_IN_KEY',    '(jAiae+x5ShM]00w[PM{(q&j@I@2>+?8a*QkW>397KY+n_X)seANI_kRWkZY(YKq' );
define( 'NONCE_KEY',        'v<kysj*3+teU$A> `fb%>t12|P_n2fYe1DKu2b]VM]hqRf*{S`7(?;g1B!_4]pWA' );
define( 'AUTH_SALT',        'l%pC2],>k0bcqM,:)EXEOK?>5cc+V2:Cu62/A*G=NSF==*rH%!] ymweKm6JbCYg' );
define( 'SECURE_AUTH_SALT', 'Y%asetv0#EW)WQ!5~PDmE%cg3jx@Q #d}P_}SbJ*D4&2}JRbt^K %M}[XF^@55jS' );
define( 'LOGGED_IN_SALT',   'hGaQT(Z6X]MU:%q~AI6Wt=(RJBG9Yoi*>K*O[MqL=Rlj[maJ.8pWUq9$=$3QAIZ:' );
define( 'NONCE_SALT',       'M:H}s]{Z(|(H,%khgK05e[fKjYJx*L`|(P/^ZE+MRXN-O[;P]c*BM/g@Jd)B1%B2' );

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
