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
define( 'DB_NAME', 'mywpsite_db' );

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
define( 'AUTH_KEY',         '^7l[zfz@^GP9>(Hf$pJ@dD&0ah! kqi!SRu.DmY8.@Rnbv,)pz(b<8H~*,qryOk;' );
define( 'SECURE_AUTH_KEY',  '?1jSI!q~U,r&v$DQymBg:UogQN-&M(w}/8p|hZL}Vcud+-,n463^;e0lIp`Xf4mT' );
define( 'LOGGED_IN_KEY',    'scX%>g,R4feRlZ5-d*yA(Y=^2g)(s.u`x5Ikn5@SV!<8.,#J5g}JbY!Sxl>AVIb ' );
define( 'NONCE_KEY',        '@$Uz$8A[P0wLRx(GQXb/~b&BpvcS&VA8n-sn_QPze8e8?VSVV?qp1~PEIi:C%<Xf' );
define( 'AUTH_SALT',        's=p_3qL6ZX}by@l1P-[0Fa [rR`vRPd3Xa.R`no$>TP<$/sm->p1k$zuw$&hR(E5' );
define( 'SECURE_AUTH_SALT', 'C{H$+|us0o03$i(p}7BVa99H91~Cl1EfkmcAw%5v5ucGO<6ZaH!|C+[v[Emr9=,D' );
define( 'LOGGED_IN_SALT',   '9y$/w9+*50:e9AxSdJ!3[wvlZLS%JPt9a6!yh?`!R#Zxr-<={)Zlw)R_z6ob<!#{' );
define( 'NONCE_SALT',       'Z%wo6_P^p^[0%v:NY44C1QestjgJXcCz8$jU>Hy_n;gyfGccspoDWQ(LU`bHP]}_' );

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
