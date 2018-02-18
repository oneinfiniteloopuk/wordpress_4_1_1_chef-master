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

define('WP_REDIS_HOST', 'lpwordpress.mamxg9.ng.0001.euw2.cache.amazonaws.com:6379');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lpdb');

/** MySQL database username */
define('DB_USER', 'adminlpi1master');

/** MySQL database password */
define('DB_PASSWORD', 'I5aac2015G3orgia2016J4mes2007');

/** MySQL hostname */
define('DB_HOST', 'lpinstance1alondon.csjq0vxxmdi0.eu-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'B~SZ1RJH.1{HB`&:y_7X87#h2MA2x8Y[S}sdc+[)&UiXC$~19(k8Jj=ACbHs~bD4');
define('SECURE_AUTH_KEY',  'Y$lk.94xRl-n&/F%J*Jq,NJ3>dlkg<yv>zlwwkOtF%D$>5w9u0byaqlxlY?%7/DP');
define('LOGGED_IN_KEY',    'tp$[Kut5M09d)g5}6-T4AZn$L9CD-I{5b/8J|oE)0x,F@5D_8}:xK=j2qksj.8{n');
define('NONCE_KEY',        'GXVt<g,OXOo{w<:e GB$g3DybOn+wqHvLhvT|`rtAkS/t/,%-/@h3~UXUUM-NYy;');
define('AUTH_SALT',        'H7>o.qp&}1Fh%z[T3A.5i^Ra{HGDc2X8d,]8|N.;C/vCAG4>18`E3`Katz|/Tt:[');
define('SECURE_AUTH_SALT', '>LY%_Q,VFJ=S*SW]J8<Xh>:Np:5M%qp%u]pfTG3x;w,eRBd@cm%H$`yMIDGzPC+!');
define('LOGGED_IN_SALT',   '1]RQPM:5ysVMnAY<MF%-uD|szSQLcTG6D5x?W>s[GL>#{6q>_k:`~ V7>n3yXs&{');
define('NONCE_SALT',       'by`v#t|@{5We(mr_]F60kgk[+_)/FlZ%(|Z<kPKie?G[x17b)qM&xiikt,{n6TRS');

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
























