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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'VuFgr+Iw!k_Lz<^Ht6#e<?SmP<rZUWi=0 Rk0!Ejsm_fULG%u3-eimo%6eNi_.Q@' );
define( 'SECURE_AUTH_KEY',  '[Gc,=v@JHIW8bTnB/Tw[S7Ijv&qh*q}JB*n4,fj4Ia&9x(pDBs7}[p4r1l.p]K~)' );
define( 'LOGGED_IN_KEY',    'C(7{jv4<b,:N_CyOKJ,h&65q3p0$&$mNb2|{xr[3dQYl_|h^LRYPI el-k2,pBoF' );
define( 'NONCE_KEY',        'UWDrLw5VmL`rPB=nkPU2%FJs9$8C6D+fywX7/iXl*zgYIy&MKS]D/d.O^V&*fkaV' );
define( 'AUTH_SALT',        'tPr}xjCm2/c?f[`fhMjgHm~B],lP[fA?.?0j<Hq0A?A.yo#!W>W:A tNkS8D(d])' );
define( 'SECURE_AUTH_SALT', 'hXbN!]*+*V]1p!y1G${0Lby/h^zrC_IFd!Vi)>&#ob7b&eTQTy%$B<zQ6[Z(zfzX' );
define( 'LOGGED_IN_SALT',   'G}vXSHEqj26/c-54TfjxgGStXGWq)spk1&-26l#&9![AtqTl<P:j|P@pYTZ;**c0' );
define( 'NONCE_SALT',       'BMeK_1h:-#E+K3$U=o0RJZ1+SRy/&DoIl}<ijqC-5W!xEH) $u$G?-Z;%Vf7bLJZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wpp';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
