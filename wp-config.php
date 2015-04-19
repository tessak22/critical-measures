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
 *
 * -----
 *
 * TREEHUGGER
 *
 * This file has been modified to allow for environment-specific settings via
 * the $env array.
 *
 * Each array key/value becomes a constant name/value.
 *
 *     $env['ENV_CONSTANT_NAME'] = 'The constant value';
 *
 *     ... will be processed as ...
 *
 *     define('ENV_CONSTANT_NAME', 'The constant value');
 *
 * Array keys that begin with 'SYMLINK_' are a special case. Instead of
 * constants, symbolic links will be created. The value for a 'SYMLINK_'
 * prefixed key should be an array with two elements:
 *     1. the target file of the link
 *     2. the link name
 * See PHP.net > Manual > symlink() for reference. In a repository structure,
 * it is recommended that any generated symbolic links are ignored. To skip a
 * symlink for a particular environment, just set the value to false.
 *
 *     $env['SYMLINK_EXAMPLE'] = array(
 *         '/server/path/to/target.txt',
 *         '/server/path/to/link.txt'
 *     );
 *
 *     ... will be processed as ...
 *
 *     symlink('/server/path/to/target.txt', '/server/path/to/link.txt');
 *
 * Here is the recommended process for assigning these variables.
 *
 *     1. Assign all LIVE environment values as defaults.
 *
 *     2. Modify values during the if-else that tests for each environment.
 *        Remove or add environments to reflect your needs.
 *
 *     3. Optionally create a local config file and modify additional
 *        environment settings in that file. These settings will take
 *        precedence over all others. This would be useful in a repository
 *        structure where some settings should not be committed to config where
 *        it might be read by others -- e.g. development database credentials
 *        or API keys.
 */
$env_debug = false; // if true, display settings info and exit
$env = array();
$server_env = getenv('SERVER_ENV');
$server_host = (!empty($_SERVER['X_FORWARDED_HOST'])) ? $_SERVER['X_FORWARDED_HOST'] : $_SERVER['HTTP_HOST'];

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
$env['DB_NAME'] = 'database_name_here';

/** MySQL database username */
$env['DB_USER'] = 'username_here';

/** MySQL database password */
$env['DB_PASSWORD'] = 'password_here';

/** MySQL hostname */
$env['DB_HOST'] = 'localhost';

/** Database Charset to use in creating database tables. */
$env['DB_CHARSET'] = 'utf8';

/** The Database Collate type. Don't change this if in doubt. */
$env['DB_COLLATE'] = '';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$K8`bJX#?{1r1N,7c6p>KN`Jl^hu!Ujq<k{ `A,!o%$}D^h)JXs;3U26utY=re|.');
define('SECURE_AUTH_KEY',  'e#]B@nYB7J-V4W;;|KGb+<+)YbDq#+-_!+YCt!+_v9OhCDbhaH26c35rgn&^mjGz');
define('LOGGED_IN_KEY',    '%*nd}4lHmwhPw`6ye!RO$E{lYNR?Ulg3c!KV73=W1^o~F~e|u;c8]FzZO@no$=Mg');
define('NONCE_KEY',        ';%aFDT$ip?+N!nWKMTa7g7o>cbA1WbB&`;oj+q^h6m4mOY<tl~?SsV-Be}7gBgK(');
define('AUTH_SALT',        'JN!<vsaFNQURP!J9[xKEh9N<,29@A 3_62Q!=o8;E-=S%E3X;`M.1Dd^{jlB?yzq');
define('SECURE_AUTH_SALT', 'q.t3Kt<|j+t`+dm#]1ffV<jy:GFIH78-A|Nk6.h_f~v>#i6z&7OcCWioC7Y_8Eic');
define('LOGGED_IN_SALT',   '|?KF,<2ZU%xm,mCtUeabys _5oU|tl0o_sj62c?iVl}MO^n(wiEuxXSM`xfR$K$V');
define('NONCE_SALT',       '9]rkim7#5A,NQuF!r^MA5[hU`*s:n(4%~OgvrZm?+0:OdXKdo]I1qE#^hB6v}E45');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
$env['WPLANG'] = '';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
$env['WP_DEBUG'] = false;

/**
 * All other default environment-specific settings.
 *
 * It is recommended that these reflect the LIVE server settings.
 *
 * It is suggested to prefix these with ENV_ as a reminder of the
 * environment-specific nature of the variables.
 */
$env['WP_HOME'] = 'http://' . $server_host;
$env['WP_SITEURL'] = 'http://' . $server_host;
$env['WP_POST_REVISIONS'] = 2;
$env['ENV_SHOW_ANALYTICS'] = true;
$env['DOCUMENTATION_LINK'] = '';
$env['SYMLINK_ROBOTS'] = array(__DIR__ . '/robots-live.txt', __DIR__ . '/robots.txt');

/**
 * Check environment and set any environment-specific values
 */
$env_hosts = array(
    // do not include http:// prefix
    'LIVE'        => 'your_LIVE_domain_here',
    'STAGING'     => 'your_STAGING_domain_here',
    'PREVIEW'     => 'your_PREVIEW_domain_here',
    'DEVELOPMENT' => 'cm-dev.windmilldesignworks.com'
);

if (($server_env && 'LIVE' == $server_env) || $server_host == $env_hosts['LIVE']) {
    // set LIVE variations, although it is recommended that all LIVE settings are simply used as the defaults
} else {
    // set all non-LIVE variations
    $env['ENV_SHOW_ANALYTICS'] = false;
    $env['SYMLINK_ROBOTS'] = array(__DIR__ . '/robots-dev.txt', __DIR__ . '/robots.txt');

    if (($server_env && 'STAGING' == $server_env) || $server_host == $env_hosts['STAGING']) {
        // set STAGING variations
    } elseif (($server_env && 'PREVIEW' == $server_env) || $server_host == $env_hosts['PREVIEW']) {
        // set PREVIEW variations
    } elseif (($server_env && 'DEVELOPMENT' == $server_env) || $server_host == $env_hosts['DEVELOPMENT']) {
        // set DEVELOPMENT variations
        $env[ 'DB_NAME' ] = 'windmill_cm';
        $env[ 'DB_USER' ] = 'windmill_admin';
        $env[ 'DB_PASSWORD' ] = 'ch3wy';
    }
}

/**
 * Optional local file for for private settings.
 * Consider ignoring this file in your repository.
 */
$env_local = 'wp-config-local.php';
if (file_exists(__DIR__ . '/' . $env_local)) {
    if (!require(__DIR__ . '/' . $env_local)) {
        exit('When processing $env settings, there was an error trying to include the local settings file.');
    }
}

/**
 * Loop through and define() or symlink() everything in the
 * $wp_environment_settings array.
 */
if (!empty($env)) {
    foreach ($env as $name => $value) {
        if (0 === strpos($name, 'SYMLINK_')) {
            // symbolic link
            if (is_array($value)) {
                if (!file_exists($value[1])) { // this test will skip symlink() WITHOUT ERROR if the file/link already exists
                    if (!symlink($value[0], $value[1])) {
                        exit("When processing \$env settings, the symlink() for '$name' failed.");
                    }
                }
            } elseif (false !== $value) { // this test will skip symlink() WITHOUT ERROR when the value is false
                // symbolic link was not set as array($target, $link)
                exit("When processing \$env settings, the '$name' value was not an array. Expects: array(\$target, \$link)");
            }
        } else {
            // constant variable
            if (!define($name, $value)) {
                exit("When processing \$env settings, the define() of '$name' failed.");
            }
        }
    }
}

/**
 * If debugging, output and exit.
 */
if ($env_debug) {
    echo "View Source...\n\n<!--\n\n";
    echo "\$server_env\n\n";
    var_dump($server_env);
    echo "\n\n\$server_host\n\n";
    var_dump($server_host);
    echo "\n\n\$env\n\n";
    ksort($env);
    var_dump($env);
    echo "\n\nget_defined_constants()['user']\n\n";
    $defined_constants = array_intersect_key(get_defined_constants(true), array('user' => 1));
    ksort($defined_constants['user']);
    var_dump($defined_constants['user']);
    echo "\n-->";
    exit;
}

/**
 * From this point on the constant variables should be used,
 * so we unset() our vars.
 */
unset(
    $env_debug,
    $env,
    $server_env,
    $server_host,
    $env_hosts,
    $env_local
);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
