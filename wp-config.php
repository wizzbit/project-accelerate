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
define('DB_NAME', 'wpskillcrush');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'b>*1YYjQV Si!UE89)3R&3bA[yM.VIGxGZ-kX_T6_(|C}/XaVB{+&5j-~@|E_.z`');
define('SECURE_AUTH_KEY',  '67.aR~nZK{aKhJ9VkuCVjGd(+Lv|QNkIF{YyYtB{+%d$D+=$ZFyi!fd:RcG 5eKL');
define('LOGGED_IN_KEY',    '4X{;q7v@m8fIKaI/0Q|~K0XMD{|cfr=xR6)2?[oiAoGY-LP?oub*/ZFa*pPGV-2#');
define('NONCE_KEY',        'uC$LeY%kyBuSm]^/O><L}4t1x/$);IU8F?k1sq7n-|x9VM/ulG!Pfk`1Rcl/KPTj');
define('AUTH_SALT',        '2w[i+&X(O+os+`TZRj(W@8=?8c5Fe8~jltJg-,bEfp+McS@BV[-qsNNzq5HZSY[#');
define('SECURE_AUTH_SALT', 'hx{{DQ;%PYg,:q:+gClZ2DMX-2XlaElJP`rFw`O5t;EkpJ+[IUaw3(Mg?a<APJ5P');
define('LOGGED_IN_SALT',   ' 2qmv.tUUOm>;?uL1&CG|WQ=],{A/stI~z_ti^+CVguH}[<L4T CJ@KR6RRJc6E{');
define('NONCE_SALT',       '8)3-|g{!AmqC6yBZSs>b{melD{(+z!3AoQ|uyarj?tWjvMS*vouzDngF=F<|tbVx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
