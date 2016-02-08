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
define('DB_NAME', 'underscores_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Mle0114%');

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
define('AUTH_KEY',         'D<WaXm,26Sc?A/<4#c^oW*sT~cero*H2F@0qWd@1t5:k8:+%pX*AUJ28rqB!PbJX');
define('SECURE_AUTH_KEY',  'N|$82|,2>obL,-1#)x>}84f0/;:+vwihg~&/*%8unJM1]`z8KBpv2q:{)L7z@Sd<');
define('LOGGED_IN_KEY',    'F;4T[O6k9=.^+q]+e5q+<mm8-r_qG9h_c=CK0]9jSI,ZG<S-|bt&|:}t1}Sfw}=)');
define('NONCE_KEY',        'Ol0K-1#*{|-MM]2^T|Cb/VFiMn0s:mejU53P1ET,c7ZO}1526WD2dM2b%F+<`|,I');
define('AUTH_SALT',        '%+&x+4I75>xY-`W6ITX;)UTj5$uZ^dgy0@2W&IoyLY1g-+K|Bd/K<BP78C,|=&8Q');
define('SECURE_AUTH_SALT', 'YnHqDo$pRBBfJsk%Ggn3_2zaT+s8^ASf75h2|5VcDUXJ+`LPVjWydK|SYCzI)!s?');
define('LOGGED_IN_SALT',   'sA455<m}<hr/#<I}/bkSvX%i#N7MA-1@U7G5GdEdWj+-c]MpmkhY*I_d@zcW::.i');
define('NONCE_SALT',       '6&B-%n)Sg!z #D0=Ray+A|K7w}_UJL5($^O2*+Bit@#[Ey.g&>.fw|UA.>hX_[,P');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
