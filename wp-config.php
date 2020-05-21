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
define( 'DB_NAME', 'allsatv_db' );

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
define( 'AUTH_KEY',         'Q5nVnNF%,E-E%$d_;|Q}!eU/VptuD&XL]AlPUzlu2Uq=7&,ltXh=n}!0jf&k}y<$' );
define( 'SECURE_AUTH_KEY',  ',uar_jA,mn,.nd-z2(.zi}/.ihc#Rn}EawuC]EGOBju#Wo=.eY_G_:e!+!@w]tM_' );
define( 'LOGGED_IN_KEY',    ']<ht&3Zdp3>+ zN~C)]k&/,#i!9g,uS_I5>w45]ilWe9J6HDUMd$frCFFEJZ4Ljn' );
define( 'NONCE_KEY',        '}vspMi2(B}sdX5VV%y!dh;by+JR$$gCA)Y-hc<<8-LkVW}:#ca(|N80>4}z=x*Cq' );
define( 'AUTH_SALT',        '/Ro,R3eV,Ui59aSbCYBSGo*?.1bdh2GCQNeGV>?#(;m>WkE$-v9(sMveHE^Rumqi' );
define( 'SECURE_AUTH_SALT', 'RhUop{sRIF@O:G4`++)ANxgXvr$gV]),xbitWu,#|S:U(d}mML=p}F.13IEE<ld7' );
define( 'LOGGED_IN_SALT',   'VS%#pnn#r3yY_o>PTV`W,Am*(2GyenJ{g2^5L]bqH</pei&0;hHr8yvo?$#)Vm]H' );
define( 'NONCE_SALT',       'azA-/yT9RRD)qXZPVI+L2[F71D1ss~rh]+EC4jFTVBRFc|i xL7]o<E5I#u,,{2(' );

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
