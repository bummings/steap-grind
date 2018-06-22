<?php
define('WP_CACHE', false);
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
define('DB_NAME', 'steapand_wor1');

/** MySQL database username */
define('DB_USER', 'steapand_wor1');

/** MySQL database password */
define('DB_PASSWORD', '3jrCRmb2');

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
define('AUTH_KEY',         '/wLe&l_-nPX@__+fWe2WT(|E)7&BP!8,7;q$`&}}P(~xNP}W-QcYM+1CGt,V)`P~');
define('SECURE_AUTH_KEY',  'WK2>X# Z=*X;HXL|kZbV[,,g(/dIqLAqL8pNF?[=LXyiU-@-pRx3%%CZX!jHO??.');
define('LOGGED_IN_KEY',    'Vf`2|,ee@B.4$lAw57oN}3VL<}Hn$D?]m6,,z{YU8qEYrDfxWYz2quB,&cot+.%V');
define('NONCE_KEY',        'SIXGx30GS:g_dJfj*cHF/ZA5$BlS`ILR?Y|n&n8:SnrN+!P@CKw6|nXt@U*>K6|u');
define('AUTH_SALT',        '?,Y/*yne-Xi$^Tng|AYI09L-?tdoFC^8Xh?mjIj}8Sn,;fr37:tV%G4%-K;`,DD+');
define('SECURE_AUTH_SALT', ']]D.lpNDR  dNoN907Z#zzRo/S1^f3`:<fE-.{/k>LW}.*k )7RJWqT`>Y|Q_|s|');
define('LOGGED_IN_SALT',   '/@NB,psW]z;oT:!KGmCILx1SE+OF}4Q3I8yqUSC-|wim%VaRAS5bmZCvTDNhc{+u');
define('NONCE_SALT',       'J+c-FnPS(w@w#&MnYrWwyn(R3C<[gCvT3:vp*tDDa`ADb3<Ww4+b<r9!Q&}MZ1zV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lvj_';

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
