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
define('DB_NAME', 'restaurant');

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
define('AUTH_KEY',         'Ggn*eTN@>=P >*?d4vp6Spc=rQ`+&?r3OtIF)FCIt [T?f!/?zsPu$$P?pE07oFj');
define('SECURE_AUTH_KEY',  '5ydq]Rg0xWP9UobR,(p,P!*hfc~{eJt$FJvTdqZ-|MCrlf0qXpk&Pz0;D!Ih60,W');
define('LOGGED_IN_KEY',    '0Q1! +)?Yp[6a;{H/b f#fHQ 7@`~R0l;(#aI#0-/`pLi=QaT1by`$]e4g0(gwWx');
define('NONCE_KEY',        '}AA|W.u8Vt&l*&|?~C%!jtzF5lV:^pn=mJ1s9JcWhkC[4-([K#{u&Hg>1.6WGndl');
define('AUTH_SALT',        'eJ;3t.IV`,[8[kmSNo0_Srh{%zrPe?{LH|dac^vhiVd=bkT5=0B,,#r9%0Mh82u=');
define('SECURE_AUTH_SALT', '>XUzB,e!5.g_*kD2]8c;p!rZak<r@d4e gt|esqJ_@NAJ}=HE`8<wM8?8DVefM_p');
define('LOGGED_IN_SALT',   'CI`zQ`E?a#LiD-`?>Fz[XNB&,O)^~8fGI;Xb__vPL(7/` #ZQ<dkeQ3W&JD)~4nG');
define('NONCE_SALT',       'Kfh4ps t!3#JkC)D];uA+I%ebV=o.JMZ5<R?(|edV*3mX@,mz9V=U~p?xS/<^r^g');

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
