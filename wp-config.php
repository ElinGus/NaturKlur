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
define( 'DB_NAME', 'degree-project_db' );

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
define( 'AUTH_KEY',         'qbn:2D-6gv<rHxWfYmcJ@,6Z2@Zgf@$D=Fd9m:KCC)&)n))z7hpQ]Vl{rX;&eEc&' );
define( 'SECURE_AUTH_KEY',  '2QSDk>v,mk>?HSSI)| 7afw v4IA?5b+ru]QU]D9rSbJ;xfH,YfpAtZI)N/C_{a8' );
define( 'LOGGED_IN_KEY',    'HZhwZC@jIr(1)XyqFCq5^<if.W}_=54m>g}|Qm@Xq,_-s7V@2xu?/q6j)Ic~4fbR' );
define( 'NONCE_KEY',        'vD=E!v7sO5?c2`hea!^EI5(rhao&;/~oC%%5xPu,pKQ3lydhhTblll}eUhTvg$)o' );
define( 'AUTH_SALT',        '[#P^[r4GKC<n]*s=OE1Z;d38J4;|GH?PZ0knDg3%Gy._ e$$a)UXzr~o_-ryo!^K' );
define( 'SECURE_AUTH_SALT', 't&$SSt,X*}YZh&#(izCyMOdh]+_vrPagc4:Rcp)@6_@LQt[_JCN&H[/WD6<6TO>X' );
define( 'LOGGED_IN_SALT',   '!@a:XtvKI{7d5W*b-!<>vf:?wqbtZCF0N=l3<<aEu2B(e?:5FaA%|V[uMs2`Gm[)' );
define( 'NONCE_SALT',       '2AFKgs.OOx*(rhT=TBWPQu@)&*5BS05H!OPpbD9cAWlIZk |1vdI#>F+Xm.AxHc6' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
