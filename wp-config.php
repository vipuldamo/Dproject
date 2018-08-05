<?php
define( 'WP_CACHE', true ); 
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
define('DB_NAME', 'dproj');
/** MySQL database username */
define('DB_USER', 'root');
/** MySQL database password */
define('DB_PASSWORD', '');
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
define('AUTH_KEY',         'Z>!TG5i=5Q8<%dGwxp2Ci28DV8^*FYInnC9,wEKTmmBf+I7QOu>-@1}#.r9Sop-c');
define('SECURE_AUTH_KEY',  '{|Qx,cm7EiJ8R/d&>qNnW<goCoGL(xi.%zxr~XZ|xOXJc=Mas?B&~,Vn|W_3ylu/');
define('LOGGED_IN_KEY',    '%h$ pTP3{%1c_vIe=_VV|eW?YJn,!jV|Se@*8:KTIv$YR6x[l)B)k0Lu31Ek|/Zy');
define('NONCE_KEY',        'r#|M34^4C,q8TLmCFM}:YB^Z!yb=BKf*HfS{MtCj,;{[#_5A!C^{6XSpY4F%yq2n');
define('AUTH_SALT',        '?FG!]0Gb9#to:PvNDAI>2D @;`*?{9>*-+CiX;O@][hP*9b-+h/HpA$B{ZbD%%CI');
define('SECURE_AUTH_SALT', 'm&1UjL_FXpk@mdBO]/@y=3*N|GXK5,h^0e)-T4NK S|p]d4W]q79Z`A>alLuxE^]');
define('LOGGED_IN_SALT',   '55#4&]KDrsOw-R 2YAP<@goOxpHq#$]<Ht`ypCm=_:`w{Bog}i,UUpT;B?v/%F_T');
define('NONCE_SALT',       'l8BlZh;9tnqjd[eL&!$xu0_|ZnW>-Is-URrNI`8-0i{(s8:% ad}];HU8Q6PGN@N');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');