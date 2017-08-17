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
define('DB_NAME', 'uniqueblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'VuN_5rcVl:HT;Q!R1Pc-~2SXPFNI08,~%b&SI9R1!Yf0LA=+@O?(DD7bv^]>I]{M');
define('SECURE_AUTH_KEY',  'Mf.K<=HzG*4yG*2y77hC0^mdA7!Oec/K_eebYp+Mx5v(]L+IIEkp`K[~)fPZ7`p#');
define('LOGGED_IN_KEY',    '/hTH22xl!M-=dUpuqJ2!M=^QNAN^%0?>F;NSF4hZ~ms C59K~y6`lWXc) ?;ajs[');
define('NONCE_KEY',        'tA#8UlX;gMIBi4lsuT|FWZ,6eCPdYFC;i8kYu3R6I*XMDZepS]|2=U9*jP>@!C_i');
define('AUTH_SALT',        'Kr(0x7zpR.J2*t^(RY~+Fvwl7yMS3u0F4~HziRnSgTsxEL%.T9K_EiBJt%v#$%m=');
define('SECURE_AUTH_SALT', 'cE04|j14UQgLw.x>p!Acj.hl_<U.=P=SJVH}kfc!M vr|2@.Oz/F|-3=I(:UhOjS');
define('LOGGED_IN_SALT',   's%;f3_ArZ2yKs-!TG,p;K<V9Eaokb#uO^t&)bW!IY+ov4`ps@F7hRo/l5th:~>Oo');
define('NONCE_SALT',       'LLSqKks4$|A?6S7vaV~a]S_XlwBAN+_Pv3T+e_c@;{Dd1T.3~c[ze;~e&QWE$-tY');

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
