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
define('DB_NAME', 'feedback');

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
define('AUTH_KEY',         '528^Acl3KR:z/%yrI8n]GltSVma1]=+<>LqDi]po +jfQ_N-oVT>,XWEni/Fl,0]');
define('SECURE_AUTH_KEY',  'eO>PLn[`Sg-qvaAA6&s&L9%6mxS=(l*_3(&40G.-W6SQSOSAvE|0+YR[F<)y|Cee');
define('LOGGED_IN_KEY',    'b ,=N7;;oq2ks^`=`OT>hq1ixJWtl3@x;xdDw.o5w.+T8T%}f>+Q;Bt{k$*^R1!y');
define('NONCE_KEY',        'wDqMw304%7]=Vv7p-jzdd-|wn<0|M?^CqB&?@3md]YQPvONR!lpDJ^g_z.Zh}bP=');
define('AUTH_SALT',        'F0)ue:bs4)1N;W}7HXi0TDBJl&uofI5wjdyI9zn;k+@!Fa*6Ix,tnZf`(ViOGqo(');
define('SECURE_AUTH_SALT', '3d!#Ek5Gfq-B/ve7_Z7pL?jmv:H|=cwm<@=}Z|qH1p4pA38Od s>=|:v=hjsoIE(');
define('LOGGED_IN_SALT',   'BK3?8whqAIV*$L;Q1hN+@YVZ]9$%H-I3Xl]aIqOA#;RjHU#VeR+65bSK$nz[W.|%');
define('NONCE_SALT',       '=fyy^}(^/EN`wqPp~I&$4N0O1Ut$p[NX]T]x[GJj>E/?bkB!zZ`o:`ws#S.&c-b?');

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
