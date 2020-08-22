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
define( 'DB_NAME', 'githubwordpress_db' );

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
define( 'AUTH_KEY',         '-WRld&uDr{u7.+oIA_>tG![o}sY/AbNbXo+z^yYvT9;YA=?r;CL7,WL]>yw;^8x&' );
define( 'SECURE_AUTH_KEY',  'M2,6.EzRGLdV{Ok/[3^uR}`h~?!m|~HZ;J>)0`G6to0(siAJk`%^H%EZ1bX6y1#w' );
define( 'LOGGED_IN_KEY',    '?Q4rkV`)+46$&R$6+wcQ;n;o$_`0XB8JTt*,$)i7RL_s<CU-`Fepe4[5R,raFg^n' );
define( 'NONCE_KEY',        ']m=vi45Tke4cZnkSPY$:eyP<+L`<1*4UC|X&APsHp27U;ZhJV{5,:(n&~jhikW~s' );
define( 'AUTH_SALT',        'chuRMdMp&CJ7w;?u=NtEq?PZUJ#DkX!1:nqG.y>lkO+qQUT&J(,SDh(~YiHEZPWm' );
define( 'SECURE_AUTH_SALT', '|vf6R^cL*e#V#TS7XWf#$dA-PM+a:uk&`m9GU<RS:LN*:KL-FCdWCap< wJQirHh' );
define( 'LOGGED_IN_SALT',   'A7uCXcp[Q>m&>*$5P(Q[vG?OBB5kU>(1n~T&,vahZ><}bFfs?sxHsIGoHFg*7IV<' );
define( 'NONCE_SALT',       'd>,*xWCgOYMg_SYXqR5 !eXQ0S=EqP}X_{2#&14%CnoEbrI?mJ za_%6{&{BpSme' );

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
