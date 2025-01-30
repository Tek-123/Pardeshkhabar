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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%5gC=YpJ*GXZ1RdB,f8Dm]ElhIZ{hQ=rV4rdf.VdY,}?TaW0%DUx7-M$5;[OCZBI' );
define( 'SECURE_AUTH_KEY',  '[`ztZ5c+M-!CUn?!hT1?Aa?- 1&}#%h-yv&E(+NalUN&Nrh$Z_AzQsz:[J;L*t.y' );
define( 'LOGGED_IN_KEY',    'Ze+Buyx3nl4cB,)>1*&-y0>;igC)!$DU}KL^=}h{f<mwWHl,YJW&[!EuJ*3)JQ$T' );
define( 'NONCE_KEY',        '1bA|JS89*.j<phI?.rLv{dbm4agTjKC@F{oHSbj6jY^u1#SDa -pD-3l)h2%a;c1' );
define( 'AUTH_SALT',        'z-kW(!.Z$WU*QAeI5JVz$Zl8Ov0mnOFXL}m~w]]`9?svwhCU+ty/Vn;r[;8=hR>Y' );
define( 'SECURE_AUTH_SALT', 'LIrU)l?{(CK]&|OV(g!2)10G/sU!LUKvdh^E$]mhM(Q.,CEWsei=l!]oU8%q9&[m' );
define( 'LOGGED_IN_SALT',   'Mb[$:y+(=m*WI?|UvGPEu$d]LtB%<s~8mk>nRlk;-T>^+p81%il#aFm[{I`]rJ8[' );
define( 'NONCE_SALT',       'hX@DiC((//%!t oU)mc),*(h/uicZcop,V{X3<NH +hfmuLy&0pcrKDU1Z-xa@T ' );

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
