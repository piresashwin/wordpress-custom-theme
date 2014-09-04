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
define('DB_NAME', 'wp-template');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/D~0#=-li-k[W<_w3D!bCP-AVl_#TIK@|-bg>/^%_p}YP.fP-rd7x:uXs#^7$A,Z');
define('SECURE_AUTH_KEY',  '2dxY!<r]CceR*^C:hF0bcV5YBL;A14?#3jPqM&q|{D(c/87>![-M=AK%))/d@E 0');
define('LOGGED_IN_KEY',    'r T_XW`e~_%Bn_|brB1q>MT kr(zppoUAe}C,2I<ijZ3}hsTB%B1)mU/8YK;Ly|:');
define('NONCE_KEY',        ':buP)$F;Js<X9$0?dNtsx]!#Wt499f1({?AqRPIJ#brU{simzRsxjEs_!cV bI*>');
define('AUTH_SALT',        ' fHn/W_,F()>L8IGqg[pwhl.hj%re|<Efg9?#d$7gu?VQHuwAt6=?fU/ez}-::uB');
define('SECURE_AUTH_SALT', '+W8!+oR2AybcO(9Gf9E,F|cT]qD|w~9( K?/lwhV8pG]SK~/RSO$;*%n`f4Dg OL');
define('LOGGED_IN_SALT',   '=is&Axk~jFTFT3YkMr[yNF.C57|,4QDS-w-$e_{i37).LayKE&[~?E;+c]9@ Z@ ');
define('NONCE_SALT',       ',WEWPPM-:s yFEhBpDXH@<zym^f@Z_BNILG)nFTBW0}2H73ec8k:D}<F=num+L6y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tpl_';

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
