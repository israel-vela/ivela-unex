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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         'xktgcI4D$G#Gn|3d[_M6V>B$W]Baa{$8w)SCJ{CF-Fl$+8B{mz#8kziV8vFnxGsW');
define('SECURE_AUTH_KEY',  '/qrBH= u,z~/I C-=L17@Zqm$GsW]N?};r8yX( 43gHn)Lx(+g@7s`giCZ].e;`#');
define('LOGGED_IN_KEY',    'eD:`Vmh _iY0m1}h2<L%x7DXk7%5`(k%dv9EX/v%gf}TLnX&~9aUS_l|odO*x`kI');
define('NONCE_KEY',        'v#7-#*r:-fz+NTAi&A:&:O[?$z$|<A$y@>AdA<N3JG&52F*(M[P}f0g+)J0j?$~Z');
define('AUTH_SALT',        'kkt&)dM97R}:qrlXK`BB`hM3/UpT>vL9<8z..#(eeX%%5vguMu0(EH;rTw7[Php9');
define('SECURE_AUTH_SALT', 'QI=FX3?bI@Lo mi7}W4w+Hss% DF8WrqT6|mr1%^kjpK+94ER+kdBBBD,Af<i!Y<');
define('LOGGED_IN_SALT',   '^:Nk`97+^#I[ BEp:/Yi7AROd+)?}=&[.WK9O0`Jm{A]k%7`2dEI#MAK/TQ.8pM+');
define('NONCE_SALT',       'QTFUffT$){w0rm<&i9/mEaVJ:N&fp[3>6W^:-)-So8*lY.!iBThqkq mysp3e3;r');

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
