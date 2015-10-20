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
define('DB_NAME', 'dev_vanburenyouthcamp_or');

/** MySQL database username */
define('DB_USER', 'devvanburenyouth');

/** MySQL database password */
define('DB_PASSWORD', 'NWiBUxtq');

/** MySQL hostname */
define('DB_HOST', 'mysql.dev.vanburenyouthcamp.org');

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
define('AUTH_KEY',         'J^|djt(nXVokLUK20$h(sQGDVHwV`KFu`/:%Qx4PFBWPf458!E;vW_dFd`?)0T+g');
define('SECURE_AUTH_KEY',  'j*cKUhD*Y1olPUhCjG^Wng(?tMZ*8W~(w*GKRPq;(CF7SFZvY6&gX_3)U%&:sed_');
define('LOGGED_IN_KEY',    'R)zVj|cf93GVNKyro~81q10fkj8U;$*O@(v^9qL~&2!f28M@*FTVo*InVvA!Xx!T');
define('NONCE_KEY',        '@lyF:E@##wWkPVR(pNb&@pWv8F7#j/VnzP4Cl(6m3#eRCsNHXdxdb&J|wrRUxX(D');
define('AUTH_SALT',        '*s#McgSO;SW/)oz$jUfl|H~Wmnmi)~~+`zS@9j~_M?9ftuDB(&8K185^ln`V#LtY');
define('SECURE_AUTH_SALT', 'PO+jH/g%/_O1cK"mXV?_9|dBZ`0U:`QtGqeTKeFan~kk!Zq^u_ZdIkyBl6f6~SPH');
define('LOGGED_IN_SALT',   'mWo1/6eIWc0?unOykr%zRWzas52#@ZubDfZxleGovt+9yq!0x+"#w#v/lfc56@Ok');
define('NONCE_SALT',       'ZGUnV"A~|uDy6@tg0a0S~^F1|pQf/nzO9urhC+Blan2"Q6J/NTZpOGoMOVstJ!z8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vxp9wu_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

