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
define('AUTH_KEY',         '|6V`K4Fc|?picST%Xtr>BHC{vLGCHm_mA<#(me^mjZ@cc#b,.KM+hDt(;T9tGwF_');
define('SECURE_AUTH_KEY',  '4SMqL( 8Ei^l03ETK1R=4b01kz]Y+]|Nc HDdHI_uQeyE4:yVfBO-U0l]I2;Xj5]');
define('LOGGED_IN_KEY',    'n`nPNxa +eyN-%&g)m`-:Clt),7X5Ydnr)P]hGJq.r8KJ`1Sn4m`7BHutQ/9#t>)');
define('NONCE_KEY',        ']d$6InV+Foq3Uz6a^EwrVy3er4^$gGP573[^xBZ9KMu6o^T7q0/R@[Y .0P{AbUR');
define('AUTH_SALT',        'D+jtIb#-{;E-B7Nn>dY0c;+$8S]*%pw|Ld$my;J:/+D$|+|)m4}TA+WX9W=%0LS,');
define('SECURE_AUTH_SALT', '_|ZFZ&qhxeG.~+vcd/9qwR-;KJ/mEh]FM!*6|;^4Sk#X>@y%gf_f/3a5{|;IH8+}');
define('LOGGED_IN_SALT',   '!W:+rnaw-BLY46)Fe2X;X+chGU8RZYxD/s!}%$v/rEOQVs?2,8@j}>@$=idfe6>E');
define('NONCE_SALT',       ';[y3v-}4a,24b&RwH9|s=?u+h$-x#8,.E[ds.&1fTK<j4WJ5kaVcn<]B}27RWpf ');

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
