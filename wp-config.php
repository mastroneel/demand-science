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
define('DB_NAME', 'demandscience');

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
define('AUTH_KEY',         'kCd--/u%1sj67gI*c3_i=gN4h#[ZYEFdQfesY#TkjyJVc8t`%]_IH,nQRUoz6LD6');
define('SECURE_AUTH_KEY',  ':I7[UP{keA!5.4utDR6~!If3dYM~{%?F>pp>4?TAk3FqPEpqg?Z{p[I1F0(a<b>V');
define('LOGGED_IN_KEY',    'r#CX2vVcK*cOf=O+J0hIq&.yMBF08Q7`q&-<YaFt4:YBV-8LTO583w5ACAe9s7Ds');
define('NONCE_KEY',        ':tjK}vty:#+8W%QU#F,V~jc%,6;]v8~9r_--4yXXx1%l>(PIAFO&#!wVy).2K3i@');
define('AUTH_SALT',        '9JXKG)%Na#Gr81v$kjsXd]SW+Bi.wvEw|}DsUZ<@r}Pa59U#js ENsnIbQWGiPvk');
define('SECURE_AUTH_SALT', 'bak-cU&b)/@+-P,2AWf:H<&a8$.Sn/r2Sh+o=0}Gt^ha40Fzmk*;[|UeV.(*OAZ>');
define('LOGGED_IN_SALT',   'mF<o3S?,cG7o.PQud>$AJN92Nd0i]RsE^#$YtPQ:vG1!kXoPrsS21+&Z*O]GZ`!W');
define('NONCE_SALT',       '|oXD(*gs)4~-u`nqh`-ZV+k#_G<NDao^p QN48c`UcPBH y@SJ~CO_`aleNvd}#b');

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
