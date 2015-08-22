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
define('DB_NAME', 'widgetcorpwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         '|`~2i}!>7gV#)uHZ&ls^+t:` =h14,4~=1a]+|kb~%t&$7S`MvNu)Ni6y+N NlrC');
define('SECURE_AUTH_KEY',  '_Zs*887e$`62[tFG 2CfAIj UV-wGKEqg!-Zhnp2>)KAdve4#8CK~TyJQw%e}x<@');
define('LOGGED_IN_KEY',    'M?qn*fq]NA_5M[Gc<3w!wC;D-:g;J.L|C4uLi4NYha-,dPO`v65k,exewYi FU9#');
define('NONCE_KEY',        'hm;{w-q?){lrhezo9;#p~>2h;(kh^ooAOg4K(#HBwJZ ~5O QLY~*b90a!Y)zON%');
define('AUTH_SALT',        'Q,p`A*fT{8zaq<C2-8*x8dxaK-l!!YpHg:+tY4y~TvGChiH[S}cCWtQ#8ntHiQyn');
define('SECURE_AUTH_SALT', 'TPUH]ytIWWJa@Xz9{G:<TCfJ-sNz!q1&S-E[I-sh28Gl1}reN*]K-AYW:R]Jw{O`');
define('LOGGED_IN_SALT',   'L$Q/3%|S3pvMDMwWG,u-v=uLkm45)@(wMS=$CCfk+(_L2tDwTnkXr8H$UC3apX/Z');
define('NONCE_SALT',       'U7kU{YfNQ}+1vRg@|.:i%V>s{*S=eT1;N#|AX#*:y4I8rhD&mteWnKGAP<U3bfK7');

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
