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
define('DB_NAME', 'acropolis');

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
define('AUTH_KEY',         'vLh_XF!XH8ReT@V:,w*{}f_Zl!/OB$~Rv*<hW.itA:hoGW&[Ni{G7!/8|x},rceN');
define('SECURE_AUTH_KEY',  'm?z/O^kf<_GCp*8op7:K ]gW -v~T9O2B;8-P;FU{q^`)Ql}$ <JYneGx_i_cnwv');
define('LOGGED_IN_KEY',    'WSfq#eE^xpDQ1D`5O7Yi4_0F<#;@~.0vF1~S:{ s#.qyjn!xw^zs$>.CsG3hP`-z');
define('NONCE_KEY',        '>r^KLNBU)jy(Be>}w@eX~Jw)`1p^rnY:rML/Fu2e#3KH!-N)Ph|-:}%pHl2FG =f');
define('AUTH_SALT',        'AE#VB@zFKj^4-9S!|E4+HIW`E3q1yG2=8=nCXP6$^ITZf,=m!_kg7>+Q<#M7`;Fn');
define('SECURE_AUTH_SALT', '{*S*2>[Q2gj}i?eHGEWKzbSrgMb6l#<wOv6f4?;0v3J{D|{_[nx,o_Q|Eq/qoP!M');
define('LOGGED_IN_SALT',   'u$qjMN6D0y`H%B=2S0Qz]QV{)P R>psW{7J&2^v7>37qcoabA;9~cCH!Z%s:U`hC');
define('NONCE_SALT',       ',zQZ8/z=<*zWN&FKGGX8$gGCAH3JV@upRUh=[F!Si4uW[.+Uo|@{A50^1IK_qM&c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'acr_';

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
