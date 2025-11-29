<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thegroup' );

/** Database username */
define( 'DB_USER', 'thegroup' );

/** Database password */
define( 'DB_PASSWORD', '@13gEb86f' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'O2a!_!ob|jJc@N{9c)/YK2aDe!2W7Lj8)<$6i4B.+z)P.5w^V%HNkVTh<*l15K/F' );
define( 'SECURE_AUTH_KEY',  'O)b9j*?HFALBQJN1zH*$X;IM63+hlpwQ$+g &QPd~Q<TShyjoxR-S}7LYs=r3G90' );
define( 'LOGGED_IN_KEY',    '4iiVfn]g7_AC^5)uX4qY!5*3htq8*7c+48~)OY@>L5t_4X>r}Et%!b!z{wT#72)^' );
define( 'NONCE_KEY',        '7$=vWRw5LSp1,I_LL]1XevAl?YPiB!1}|:m3Jn!X4ba#%5K?o>,9K2cTUCxNr,%)' );
define( 'AUTH_SALT',        'YrLu9H(Z_5b|db*De<b6Tt^D1c-x`[;*|LE8mkmj$0``q)RGN,j~}GDbAlKYdHZy' );
define( 'SECURE_AUTH_SALT', ')oyR/>X(G4CV02PibjQCv#l:xw9gq3.G%`B*8o2LP#C)T7*c;$vP}DIn3(`4$XQa' );
define( 'LOGGED_IN_SALT',   'rCtF;pmhbZ%j{VCeYOv@znYu{VQ&hkT.h8|Qei=|<f<;aKN[I70e/^y,{=.oK De' );
define( 'NONCE_SALT',       '^Idd{e[+p8a89?$2KELq%UncNa/3<O$DLXG.8|$FKs}W;}z#:Y;kK3>uTU=!ZgnL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('DISALLOW_FILE_EDIT', true);
