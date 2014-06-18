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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'slaviber');

/** MySQL database password */
define('DB_PASSWORD', 'wordpass');

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
define('AUTH_KEY',         'G-+2#-|TH(DNENDmd))o?TO>V`^;0s/{p0[-W)<Tn*fw8G#V*D,or~z$iK+aFcaW');
define('SECURE_AUTH_KEY',  'XJ-|XG]r}>*o`z]+i.b/|p_DlJ[5]iY1Nv3<U2I^),Qm8B&Y2t)W`?{{C~|$6i9)');
define('LOGGED_IN_KEY',    'k6Nn$lvFxpW@%|,D-om-@Tsz#8hn#Y2XGi5k<%4FrVC~v7u)HC;gBe#(IKj((eQ#');
define('NONCE_KEY',        '4th:zfXVt++I{#5KOi[yiN;hkzu?<_iV&i%K( C|O)p&r|mv#.|&IPDgtzV?m/ko');
define('AUTH_SALT',        'j7XInrz@#C`XS+Qa>xsBWm$$=7s#9}J+Hx$@|~r8]33y/$&pF`H{$y<_|8Ip6>Yj');
define('SECURE_AUTH_SALT', 'ypgbl`NVN?]IrT; _ye+9sh@DHotFCzKaE4>Et|KCs+wtsu?HLBq E0t&#|Ik) c');
define('LOGGED_IN_SALT',   'MLed+-4R[$c,%_X?ul[:N&ajdFiVJOst2}%Pi7f|/kgXe<5]_RjUb=Kt~uwLT]p)');
define('NONCE_SALT',       'QXmG1z4+LT$2QDzT_ ]JBv8a#SH^9ZTtEbeH4=M};@W?jq^CFK-eJ]8vh@?bLP+]');

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
