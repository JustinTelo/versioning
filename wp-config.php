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
define('REVISR_GIT_PATH', ''); // Added by Revisr
define( 'DB_NAME', 'versioning' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '|4 R0FXj7hJY_Z3LjS!s|/;LJT{(TJxFVok4xJYjC=K)Vpz2pmoWMMKuSYzAAV2k' );
define( 'SECURE_AUTH_KEY',  'IuPDj><4^h2]*U>czgy_m&%G6y,uwuSE9F:q Xjn<+*s</rWVw[cbq)sA9*VYp]~' );
define( 'LOGGED_IN_KEY',    'w#M`OJvRH+/uL!Fe=(pf2JB*,{@9(jd-=BzrhSgBbuM#a~J?Yj84ma?%GO+^KPMV' );
define( 'NONCE_KEY',        'zkNu^]>Xl}L$=o12YvhZ#+7UC` 2.`~m%u3dE7uuOQiLNC.$0Xqpk}C,]q/A.DT(' );
define( 'AUTH_SALT',        'g,5;Y^aB@4e*r)!-ILUM3Df!k@>&y2aH;ak}bjFD//q{ ]9YC_CR*];Z-MhjWVc8' );
define( 'SECURE_AUTH_SALT', 'eNrS34iTIj/_`NYU6mJp_/J9V0p<t#vGJbSHRK4*rLorvi-qb0]5Ru&la14 n]e=' );
define( 'LOGGED_IN_SALT',   'BV[saIn_mi;l&)3C3.jzr6P`cE~sh<yrWGEN-w*wBXuwd+1+g6$#.^vep?aWpJ>V' );
define( 'NONCE_SALT',       '>`}=J@8t4Zw>=8/S9y[vf:p`8=1cr$5|)*7z5/|3ssVC%CFh=CV$Ux}H]X(:)!t%' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
