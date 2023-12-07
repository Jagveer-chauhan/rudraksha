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
define( 'DB_NAME', 'rudraksha' );

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
define( 'AUTH_KEY',         '6:H^o5NCv3/3fsFfj*8z)d0{xa4UBn?BI.?GW7[3,V2szrv_QBZxyY:yogh7}M+/' );
define( 'SECURE_AUTH_KEY',  'hB>9DQlh@A`g`@2`SQEQ3.X+B&^Th&sWt>#xcr%-0o!#X`jEIV5NU,8>-)%m$diE' );
define( 'LOGGED_IN_KEY',    'LRPVfs8A1ltn}|5-.wIU`aD3)ChD^(tUc!pQ>%yMue:ZUQz9t$vPmXI0R4b4[2W5' );
define( 'NONCE_KEY',        'eWw<sFrW,S HQ|7U!<?m ~)7pa~x>J}`5;?tFK6jDBVav+aofpdv[)VqRY}17%LO' );
define( 'AUTH_SALT',        'Cp%WqL)^[tf1YGr>D%P]b]]M7r6cMV5Lq=yFNq:Ep#a6aLak9#t:lcat}p@baLB.' );
define( 'SECURE_AUTH_SALT', 'z}+Mcot+w&+=>FQ`{=?)TTAg0,6}&tA[d!Q9uW!7`yJ:9axsR)eA2ZMLAd M9LM)' );
define( 'LOGGED_IN_SALT',   '@Am#5T[5zS_JbWM<U&!2VO_%W@RQLW&A>SK3jLPHo@}RGJ+d9LP4n*jn&d--Q~z?' );
define( 'NONCE_SALT',       'Nt EX>$upP]^7o[V!d0LzIU*/?[_h,cfHl<9u@]JIuDp#SJ,=ESK~+{=y/_)B:j@' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
