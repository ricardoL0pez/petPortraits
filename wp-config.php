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
define( 'DB_NAME', 'pet_portraits' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '-<SRt]eB:xcF&3{?qy+?6PWB~.08uiD%#O<^O]-BIpfY$#wu>9HjO/-gc#f}Msel' );
define( 'SECURE_AUTH_KEY',  '0|!x1NMjj8h%@EIW~Wy4Nf(miEX$]:gk@v |[G$~:o_`sew`=,$7=+?WYP=o93mN' );
define( 'LOGGED_IN_KEY',    '1t*GT)ObVlJ1K=&lL&b/ 8Xk!wJ|s47?&Hw0*v0R3$Ca14U5=e/0ELzlW7s2y`nw' );
define( 'NONCE_KEY',        '{(zFcC_1nLhdU){K9^EAJ!T`&2ozF_3O`)n%>uH0u8Z%7a$41DtPGbR~E9-L8%x{' );
define( 'AUTH_SALT',        '.z$CRz#(1xaMg .?WIDC1 6w_vV+}l-fr:e42|Yv&ME,um#7R-dETE+~g69h`z!?' );
define( 'SECURE_AUTH_SALT', 'a03DK_@+)2AnN3]fdEg/}u4V+K .;dFJq5qJ!)`|y/p.4ss$ROXqxq}L|{?|gAd>' );
define( 'LOGGED_IN_SALT',   '!:d;<4aP1B:9$Ph=b6;g;ez[,,nk,,R%#^RF.F[pOAp.=-wp#QQFn1&nDYI<SMh ' );
define( 'NONCE_SALT',       'jZhrVTg:ff]:sTqU_>*IA/mf@69@mh#=)n#f&+,jwn^D$8=;doTaOQf#1J@1L;ws' );

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
