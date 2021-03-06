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
define( 'DB_NAME', 'wonder' );

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
define( 'AUTH_KEY',         '*1POBd3c&t#=fW7aQE@8Ynoa8nu<V&@{[c}kP~$Q(CvqY$xWgZrY4IYQKYq)Z%4G' );
define( 'SECURE_AUTH_KEY',  'IaFKaIvt_F4`!0q0dHRetV>J-JSvW}/u]Rn0Qg9d315:Rr:1#~Ge]^{8G.k=WPEM' );
define( 'LOGGED_IN_KEY',    'DcFM5SGPf(NqZJ<,;lj(0CbGA)aADGT?I(@&B$@O(d xB6vem-5#iWI*7y-:V*{u' );
define( 'NONCE_KEY',        'De<<ZS0+Fd^zAoymo,SSuN1W l[9bvs7@1#|hT<RN;i]:q?(x*%L9x^g`aPE)7Yl' );
define( 'AUTH_SALT',        'c(CEbVW~)T:(_:m,{S5wkRroVib*kN:wp4EC-f1%leLuAkR}z}<yl=,$lg!9FdRf' );
define( 'SECURE_AUTH_SALT', '9I8H{`l8qO9SrIGe~-yt?*&jA4<]puOl{sABM=i(lWVvpP%fcW$u0u}FDKFiE[o1' );
define( 'LOGGED_IN_SALT',   'xIE_9GF7@S=8H.%UlqLV*p7kL1o6qo^Dw9pSF:d]C[79Cq.?tutWJU+_d8].|/Ev' );
define( 'NONCE_SALT',       'mI_Q~p;5v^rO|7`3.#QivM&c%XJ7rz_jX&iU%QpcMEG8uP]ww/XHdrx^SF0u_$*B' );

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
