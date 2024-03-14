<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'wordpress');

/** Database password */
define('DB_PASSWORD', 'wordpress');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6Dz{j0[cpL72b`jgMwdw>~$;[N;[4,VVUr8&5LqHO,*;$~yyN9*Yc;, R&Q7P }v');
define('SECURE_AUTH_KEY',  'TzIhk=XQE:!+?Z3 nFi&w6!$u5R(ZY*sCGpwI*9ke0rPfEPxcxdITvu)leuo_*=U');
define('LOGGED_IN_KEY',    '+%8[I 3Q-O=M2(6SJ!5 9ovda:n>|DA;V0[HSd2=(3O)DmMNdcOuv+Dc@*?0+@;g');
define('NONCE_KEY',        '`D.vM0zx5S3#*{>&O=NlSsr<z_R9a9Yp*o(bA@vh6ZGo>yS~SaX%dIWfQQ-#MOuj');
define('AUTH_SALT',        'EzpLmBAZE_vx2Q]#cQk(T&wXDr{#!h+PNb>E2VTDhv*LP^DgU?h;^SMKMU4>,>GU');
define('SECURE_AUTH_SALT', 'JI]3)=Berl@!)viIw>fH@rx>p+{k)r(veu~HEFKuECs{SuJ|4Mq?0e&1]/I0#upp');
define('LOGGED_IN_SALT',   '6E_<+n+(lwvL3H+WsnVK@7a}<>t(#{`zg]lr`zzIDXe?:b1pyIul2B/ss8g`f-U&');
define('NONCE_SALT',       'ptpEiKa0;5%h*]0a9=;?Zga7L.Chi52b&C7G-=)[~Eps[Z2o@p2h_zUu_%/J3gY8');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
