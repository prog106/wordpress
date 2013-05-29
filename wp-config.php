<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'word');

/** MySQL database username */
define('DB_USER', 'word');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'F{` HjiwFjJV-yB`>-w=$~hlmIa+IMo`W$dqt-(p%|}`}s}|++@2eCNt8S0n:fKy');
define('SECURE_AUTH_KEY',  'TXeg}=q6/cAuP2jm=aN|e1p6Iw/C4m:(E~&9V$)~Z@=U`(2&,.pm0A*O#6WU{To=');
define('LOGGED_IN_KEY',    '?fF+i~<X/$rZV4k.qzo#.:`$OPY/)M}njO%)m-#D]p;w0P%^jm7W7p`I&U0WH{8D');
define('NONCE_KEY',        '8^QdLs,U8L@yFCNG|aL/E+,lx4WVm7p,(N$+ekGPsE_s.lSPRKbP;dQb+/t?A/=I');
define('AUTH_SALT',        'DZyU,lMy6U,X6b@#>^VItY{#YB16[8l05tty*T=Hr3B+3UDiTNB5X,^1K|w-I7 I');
define('SECURE_AUTH_SALT', 'B8Hw4xLE-*l%#u)VKqh^AF7QWRdw2pi*Ll8D|1Lyg-.TK+-|O0kuz_bfE;WP.^sU');
define('LOGGED_IN_SALT',   '+GW:%Bo(!&RP%@s~`.ioqO.oP/[Kk`(qn/^rX38syO55ic@ZFzDZH NZtk6`8|/Y');
define('NONCE_SALT',       '(SzQ8u^a3/qps/D*]=%^}x-RF(-eFlm;=V#rjMwY05Du%<kki@}Lvca$!}u}#4pc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
