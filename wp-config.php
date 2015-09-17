<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'decisionpath');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iiUgHF8WV4cM|~6o]<Tm1O:%< =);-]?;H+Pwt;,%IAX1O|[YH62Dqr*(*I.np8:');
define('SECURE_AUTH_KEY',  'J|?Obq8B!=^`2~8Gl07q7y+|ZQLmkX)!6Ep4Nb+^t*M2?&^wa:m}5)i54KMx @A:');
define('LOGGED_IN_KEY',    '(^*Du@|xowmK]AoG|pMGKH&Bt/y1?L*3;|A^UgNT7Qu{5(EKH=WhjC$Y-+b0Xd|C');
define('NONCE_KEY',        'Sw-T`rn!$9:w t#}tddB.*{}ocEfJ_ #ZI+|m2b%,|tW!t[FKv-<M}S60`Q5*;2g');
define('AUTH_SALT',        'ox7>=a;g#BC,t)nv0i7;oNR_SEKYFkF>2Qx}ixGfPsB?~i<wW?9a2rCX.g/&)_g|');
define('SECURE_AUTH_SALT', '{$m}4e*6cU2|0aw&u>XNuVKyy[ g*S:n(%.SA&l)|D(sr-[_6A*8mM`P&1Ez-G`m');
define('LOGGED_IN_SALT',   'ND%m7$|.&:u Ot%k?R>a!Kh=p,l(e6>E(KWGH{V-|SfXsxx0u?<sE&7O.54nY[^{');
define('NONCE_SALT',       ')-]/Dk|^Cn7,FS/_0|goXXvf|b/DTXZNC,PUg8=_!6<h4Dz3TfT/#2T[T+t7c&+B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
