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
define('DB_NAME', 'wordpress_db');

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
define('AUTH_KEY',         'QngyTF7}2&RjKflvk9y>$(@i$96x)PybY%&pEEAoUI_)-=kIqyP(?k~I$aHMZ=#n');
define('SECURE_AUTH_KEY',  'KX?}me658I tK,*?yKkeBjbg}<2T%Y%{MGib{=a]Z^[Ba*Vec IXQB(NqI!W(ygW');
define('LOGGED_IN_KEY',    'R$aAN,d>;*bi1U]Ed5Ne2A#_X+NE1*g0f*!UL/`RplyQ=X&QF2Z3=EjE`KE(=Z@a');
define('NONCE_KEY',        't$eb-.|7SW7<{mU=WVsc++ ogm!O055@2(4&W5c2q=z &]k6l6m;;1H&Jx+QPb?z');
define('AUTH_SALT',        'Iw!rD{nOyG[/sfr[UqSfIg5{Z|j$ JdEn4V+b5LkVYpVy)`m,F3VBqwmaz,jql>D');
define('SECURE_AUTH_SALT', '3h^:|:lG~<;Zfqe`h@~TMY! Au!vSVY,~p}!d5AlBY}HP=;5x2..OnsBq*2rnhnP');
define('LOGGED_IN_SALT',   ';c lz4~tB?,`1=(%gfbJanlO5|dspMdqw4032|u,ysxjb6ha|o2;&k^vD1G/7X@7');
define('NONCE_SALT',       'gR2I-C^Z{.>BQ2wMM$SycQe#GYzd-flXpM-b2d&yx2Pf/n1cpE2s|rA9 CDl^<wK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bf_';

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
