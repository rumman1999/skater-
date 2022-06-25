<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Sh(Y(^^n.RG/0Aj@dat_10XF1t;6%R7J8PR{PF$h:G:ByZ$(bHuNYW^&as7)pot$' );
define( 'SECURE_AUTH_KEY',  '/S-ztL7mol)gc%!=t@+q(3r9dueVXLfdpG f?F[M,%3pfgu!vBB-j8[xHV 8hD#F' );
define( 'LOGGED_IN_KEY',    'G/~mr~aS:lf47rVYuA[{[~~8*7q/<f~)y9q_s@n@RS6uBh5E!5]Riy41ZBW}Er~7' );
define( 'NONCE_KEY',        'hS_=nW=-4+lESd*Gl5[)iif0tvjAvXgk[Y~K3KjfB,CL6AX73RlH5by|4[8eBuWz' );
define( 'AUTH_SALT',        'hZwN&5j~.& {sh_n)^udHQ]dC<mb`KMd^uE0rS G-[ncfVdSdV8B;3;2/)MN/e&m' );
define( 'SECURE_AUTH_SALT', '3__$YQ+;OD::f:Lz W|Y}sYxs@a8w<A]K:[xyXBq&8nQ{pp[H~)@1l#t`1/.QKRq' );
define( 'LOGGED_IN_SALT',   '!Zz2Wf;J[ufbO3_l7@-+.rV,e:~R~9)j^,;_>?]3]Y)bC_vXpw<)<f|B.|.noX3j' );
define( 'NONCE_SALT',       'i.j?gA!H.;&]B[#FddsVS0tnn95t4?Ik{p,r(1{ZB;<9UWT&LG5?<[NPPy(QKIGQ' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
