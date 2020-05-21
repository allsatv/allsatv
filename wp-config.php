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
define( 'AUTH_KEY',         ']~qEs;eBc|v.8yrgzUHCK!RQ3ZS>yxQj*/e=RT>lh-xcX:<XSZ(JPGSc`Z?H{GuQ' );
define( 'SECURE_AUTH_KEY',  'h_l|i$1{;`bK8[+X=G|G)]6cdRuz+,7{[ykn/tbNTBCoJHYlE)CrJXm?kD$r[=Ua' );
define( 'LOGGED_IN_KEY',    '/ca3-vR&T+^+yFo@A=AJQP_N~j_,{<Y/RR9fF*!NM{3P-MS<{~z/XPI[!tUTYd_:' );
define( 'NONCE_KEY',        'TO{z~EvJ1O<<d)sd`ij}oE-r-F V?|q?.@Tr/pnQ5-LG*uG:*)mczH,!qdNhfnu<' );
define( 'AUTH_SALT',        '=mclQum0qArI!ri> N_idq8aR8i{3;%me6o%Tka:DPRsC5Lm=Rk5y}85BOGnf/>3' );
define( 'SECURE_AUTH_SALT', '0#231YdWh$s]V6S6)2w!*:0@*.v@EQTC*Hgk4`R-PjHG/L }J,>6:NHCAQ6USQ22' );
define( 'LOGGED_IN_SALT',   '8aL19M;;}%z6UZf,W&=g(pJ@tjRYI%-R: EzSY@}*pr{,7L]3/ol5=F_@w?+OED:' );
define( 'NONCE_SALT',       '+ 6yYXwZNaJQyhNr[m&W$%DFtyph.7tp]||8RrHSEl/={1h}ucEVRdnV.gDj/;;c' );

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
