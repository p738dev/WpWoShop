<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shoop_wp' );

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
define( 'AUTH_KEY',         'sm(o!t!d,B]VMHn9@Q.y>f8~R9Kq;} CmJp1{C[j4Wz7_D}EZEl-jny/#9[Ty`G/' );
define( 'SECURE_AUTH_KEY',  '`Ova-<W_|yq:nDmul%B^ nJ!%d-NZ~qF&!:[}SM;@FEtp`.R^@BO:ykjYhS6dpw9' );
define( 'LOGGED_IN_KEY',    'yLWVOAFLl*%y4qA;tIHP@NP+$-]gRr]zHmS(rk5t3/:l[}][x%$W=K2sYxb,(&MD' );
define( 'NONCE_KEY',        ':`D W)zg$+(Rp/3W_:+|aqp*9Ko~:9TS&>kJe?7j-WH+_xQgqqWu!H^8r{JoS)3_' );
define( 'AUTH_SALT',        '.v6[3 luO!h:E9U:,Rjyo>KQf?i#3a,KcmzIqRLMJ?ba)sGthdLHh`8!cb^#-h 7' );
define( 'SECURE_AUTH_SALT', '2F#J8sc&+w!4v:q/E![5~+`Tf9b!rHx*/-@,o>97zDql99B5mm#c%XW9Uvo?au:{' );
define( 'LOGGED_IN_SALT',   '.5O5,7^9]QwS*2[h1q-#p,:Ehzt]bLwZ+tyeyOm.@}yB$xpYWh/*aATIn:,Eo-!7' );
define( 'NONCE_SALT',       'Enx4N37rhXb{rKWMy<]Lo];Rnzv(8rD~K*X53;k*iHL~e*yusE69Jz#i{`mb>Cdn' );

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
