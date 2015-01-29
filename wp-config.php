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
define('DB_NAME', 'etg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'Z5Vwy1ki-Kl=Cqa<XyP?@)ip(b7R,57eN-b&k_8XJ,]8}cyTs[`f5d=[IPBs>?Q-');
define('SECURE_AUTH_KEY',  'o|q/`BV4;Yev@JU)[h[FRHC!e&&fl4*^qpOGbXHx6,fwxR,,!Hxt4#|p# P2S@R4');
define('LOGGED_IN_KEY',    '>,^T8s:.&<A=`0,tKU%0BR1/X[)uj<SinfgM.d5v2|Y1|f%:?A|QP)W|,v@Pu]c]');
define('NONCE_KEY',        '|+(j-9VdVD%#7Y8bHAk3aA3e9:v}bq2>7>Topg*Dn#S}YQllzNf-nU[B`q|_+>v=');
define('AUTH_SALT',        ':2RXil51{u%+&BB$_@Vrq*6a3bd=W*Uf-7_7{du#DYbl(y+7*P,x^m?->|//F+;`');
define('SECURE_AUTH_SALT', '}.~p%sTSL g*PJPFz_br=(lz|2)hyhdG=>!5nC#2rr>a|U+b+Q,sH|`$TQ*X*` [');
define('LOGGED_IN_SALT',   'IYNK!8)grm)cs065o4-n9L0K7kF-#$sjbLvt}RO(]>|kKj#(+S,&X-#%cBP-^r6#');
define('NONCE_SALT',       'k#sGWGsT*i|/Dez21pMM&)<xD!<d~*~N*]%~&*Zklu,QuLd//,.sTgWiaN$c!g[R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'etg_';

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
