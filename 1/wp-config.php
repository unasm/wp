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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1' . ":" . '3306');

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
define('AUTH_KEY',         '_C`ki&UI:@yf]2$F$aQ6~SQ^I8-g;pVV,l]@WD<h%DZQ}5#H~;sj.[+$Sz~0<Vam');
define('SECURE_AUTH_KEY',  '5r{xjJoNTTSJ}!cy9k>gybY9X|^1T=|sWLi.V$i%5!N2M4p?rSou5?H1uOvW_Zx|');
define('LOGGED_IN_KEY',    '[Ohn%!,LEV)at=2exNu7fAc8E1+`7Ni|jknvc`s<627qw{L&YuO=L~&Nq+ 8|Ly<');
define('NONCE_KEY',        'vnEk&0+Hqi9++?+,XUcMBQ[M$Ag16#-Q8$:{L7v,:&+X_|w2Y-k-CjU-+x7N-;Dy');
define('AUTH_SALT',        'vq;rKm-:QvD>Fl0RiNvzg|k^$J3ZZ=2Hfz,c$)Y]yDH$76ye~rG-]W?<UF<KXXT4');
define('SECURE_AUTH_SALT', '(T8{AjdjH35IMtX|yc?6|a{il}+GM?#Ugc%GO#vhm_+PGW+ d5d+L==4{wovt}WN');
define('LOGGED_IN_SALT',   '}evS:?(p0&k];.C6rJ3aKA@SIf>N]4f^w-1 n?  g->6F.] RW%+!hwJ=o@Wp$6]');
define('NONCE_SALT',       'l2v[Dtt(ijWMzVu:7L|]91I^Ej@f3aAu771h_EH-dHwe.abe)06~`tb)Dlg^y*2B');

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

