<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
// define('DB_NAME', 'alldrops_rio');
define('DB_NAME', 'rio');

/** MySQL database username */
// define('DB_USER', 'alldrops');
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');
// define('DB_PASSWORD', '22local7.');

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
define('AUTH_KEY',         'l1hN|^jB;k|l1E4L [(Rf+Lh6.e$4lBmKT5Bm*rx*>y.N_uMM_kPO03l37-F,+vw');
define('SECURE_AUTH_KEY',  'I6ZHn _d0/(7-]9@o$Z^e~8)3C!;&Jh0B%PL|o>h.zGt,ak}7w+]Dp2s9 [g&I~>');
define('LOGGED_IN_KEY',    '_c7 e*Y|CX|&ZEK{TNy4!mP4=ITnqIqFn$7<-Okt0,Zn-<v/3:L%_RuCFk7t4&-K');
define('NONCE_KEY',        '#K24s0t-LlD~9+r3j^dK(Az6yXgs#ux%_pP`VHH+[Xp|0{(Q&Wf`>Ja+Y<A>:71d');
define('AUTH_SALT',        'neo8fV-su kU]Om*+mO5NIn]+=S_jtm6$17VmZ@f?M|mg]Aik+wJMw+}SlJM=F1~');
define('SECURE_AUTH_SALT', 'Puo8UVHI,F-I^0k2PJ{~L=eK!kJ}U`#N>FH~b4h#1e|$bjpS({G^:Aqg6J48a-kx');
define('LOGGED_IN_SALT',   'VL9d#H+7ZKi/$G~yGJ vSs691XA.<]J|Xm2)7^L|{hQk Cq|:.yv2*-+>RM[iVH+');
define('NONCE_SALT',       '=)KB ?bP$yL5B,QY6>e-f}=W]gGq(k&0k{hy=+px&<Dgm%!n,_oB+D)duY*iy$FO');

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
