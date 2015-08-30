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

// remove <br> from contact form
define ('WPCF7_AUTOP', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'adf');

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
define('AUTH_KEY',         '@}D$V y YxVtop/%~6hG;dfQLCR-4diR?6)_a`hb+ZJS$z-]Taa|-W%NWtkGiAOt');
define('SECURE_AUTH_KEY',  ']x*S2W{~vQ)h?tyWT<h5dvtXSrL}69a%T_Db(tb:TX@A<W|Cf9pD_j<0{$_yn<MP');
define('LOGGED_IN_KEY',    'p@I4w9-03-1@d9{2P4-FZk+SBeE)=6m~G 3&Ju)(Y!fos.3Bsngf(5FU@Nu=7--<');
define('NONCE_KEY',        'U=lo!S<jV}9w&*l`sUaj$VGH7o>T}-!E+Z-h&3G)P>2TX82b*hX@)eOx7SIQa1KM');
define('AUTH_SALT',        'EAL$:_w+u=8q~}{i.}fRYY&,Y|}K00FC3sa+OArgmAai`w5k}xrf_ZwV0Z,-aT E');
define('SECURE_AUTH_SALT', 'f&+HYOE*0@A3XIjrq_-Lv+sS-VR9DQ)uMck|R/OgW53p0.|$|i+UPlbUhJ+2:t9-');
define('LOGGED_IN_SALT',   'Qr)-kr/Zi9xH+dig WE_:+nC<N~[oTes)5ujhC)W0@kaa@}jKs+]w3kkq)KM0.+I');
define('NONCE_SALT',       'y-[f| _9BfRVS5f=s6C|enuw{S>0*;&,EKVN6xC%Hq8a(/[n7G+m8.#Y!oH+S_V]');

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
