<?php

/**
 * Function library read in upon startup
 *
 * $Id: lib.inc.php,v 1.123 2008/04/06 01:10:35 xzilla Exp $
 */

defined('BASE_PATH') or DEFINE('BASE_PATH', dirname(__DIR__));

DEFINE('THEME_PATH', BASE_PATH . '/src/themes');
// Enforce PHP environment
ini_set('arg_separator.output', '&amp;');

ini_set('error_log', BASE_PATH . '/temp/logs/phppga.php_error.log');

// Check to see if the configuration file exists, if not, explain
if (file_exists(BASE_PATH . '/config.inc.php')) {
    $conf = [];
    include BASE_PATH . '/config.inc.php';
} else {
    die('Configuration error: Copy config.inc.php-dist to config.inc.php and edit appropriately.');

}
$debugmode = (!isset($conf['debugmode'])) ? false : boolval($conf['debugmode']);
DEFINE('DEBUGMODE', $debugmode);

require_once BASE_PATH . '/vendor/autoload.php';

if (!defined('ADODB_ERROR_HANDLER_TYPE')) {
    define('ADODB_ERROR_HANDLER_TYPE', E_USER_ERROR);
}

if (!defined('ADODB_ERROR_HANDLER')) {
    define('ADODB_ERROR_HANDLER', '\PHPPgAdmin\Misc::adodb_throw');
}

// Start session (if not auto-started)
if (!ini_get('session.auto_start')) {
    session_name('PPA_ID');
    session_start();
}

$handler             = PhpConsole\Handler::getInstance();
\Kint::$enabled_mode = DEBUGMODE;
ini_set('display_errors', intval(DEBUGMODE));
ini_set('display_startup_errors', intval(DEBUGMODE));
if (DEBUGMODE) {
    error_reporting(E_ALL);
} else {
    $handler->setHandleErrors(false); // disable errors handling
    $handler->setHandleExceptions(false); // disable exceptions handling
    $handler->setCallOldHandlers(true); // disable passing errors & exceptions to prviously defined handlers
}

$handler->start(); // initialize handlers*/
\PhpConsole\Helper::register(); // it will register global PC class

$composerinfo = json_decode(file_get_contents(BASE_PATH . '/composer.json'));
$appVersion   = $composerinfo->version;

$config = [
    'msg'       => '',
    'appThemes' => [
        'default'    => 'Default',
        'cappuccino' => 'Cappuccino',
        'gotar'      => 'Blue/Green',
        'bootstrap'  => 'Bootstrap3',
    ],
    'settings'  => [
        'determineRouteBeforeAppMiddleware' => true,
        'base_path'                         => BASE_PATH,
        'debug'                             => DEBUGMODE,

        // Configuration file version.  If this is greater than that in config.inc.php, then
        // the app will refuse to run.  This and $conf['version'] should be incremented whenever
        // backwards incompatible changes are made to config.inc.php-dist.
        'base_version'                      => 60,
        // Application version
        'appVersion'                        => 'v' . $appVersion,
        // Application name
        'appName'                           => 'phpPgAdmin6',

        // PostgreSQL and PHP minimum version
        'postgresqlMinVer'                  => '9.3',
        'phpMinVer'                         => '5.6',
        'displayErrorDetails'               => DEBUGMODE,
        'addContentLengthHeader'            => false,
    ],
];

$app = new \Slim\App($config);

// Fetch DI Container
$container = $app->getContainer();

//\Kint::dump($container->environment);die();

$normalized_php_self = str_replace('/src/views', '', $container->environment->get('PHP_SELF'));
$subfolder           = str_replace('/' . basename($normalized_php_self), '', $normalized_php_self);
define('SUBFOLDER', $subfolder);

$container['errors']      = [];
$container['requestobj']  = $container['request'];
$container['responseobj'] = $container['response'];

$container['utils'] = function ($c) {
    $utils = new \PHPPgAdmin\ContainerUtils($c);
    return $utils;
};

$container['conf'] = function ($c) use ($conf) {

    //\Kint::dump($conf);
    // Plugins are removed
    $conf['plugins'] = [];

    return $conf;
};

$container['lang'] = function ($c) {
    include_once BASE_PATH . '/src/translations.php';

    $c['appLangFiles'] = $appLangFiles;
    $c['language']     = $_language;
    $c['isolang']      = $_isolang;

    return $lang;
};

$container['plugin_manager'] = function ($c) {
    $plugin_manager = new \PHPPgAdmin\PluginManager($c);
    return $plugin_manager;
};

$container['serializer'] = function ($c) {
    $serializerbuilder = \JMS\Serializer\SerializerBuilder::create();
    $serializer        = $serializerbuilder
        ->setCacheDir(BASE_PATH . '/temp/jms')
        ->setDebug($c->get('settings')['debug'])
        ->build();
    return $serializer;
};

// Create Misc class references
$container['misc'] = function ($c) {

    $misc = new \PHPPgAdmin\Misc($c);

    $conf = $c->get('conf');

    // 4. Check for theme by server/db/user
    $_server_info = $misc->getServerInfo();

    //\PC::debug($_server_info, 'server info');

    /* starting with PostgreSQL 9.0, we can set the application name */
    if (isset($_server_info['pgVersion']) && $_server_info['pgVersion'] >= 9) {
        putenv('PGAPPNAME=' . $c->get('settings')['appName'] . '_' . $c->get('settings')['appVersion']);
    }

    $themefolders = [];
    if ($gestor = opendir(THEME_PATH)) {

        /* This is the right way to iterate on a folder */
        while (false !== ($foldername = readdir($gestor))) {
            if ($foldername == '.' || $foldername == '..') {
                continue;
            }

            $folderpath = THEME_PATH . DIRECTORY_SEPARATOR . $foldername;

            // if $folderpath if indeed a folder and contains a global.css file, then it's a theme
            if (is_dir($folderpath) && is_file($folderpath . DIRECTORY_SEPARATOR . 'global.css')) {
                $themefolders[$foldername] = $folderpath;

            }
        }

        closedir($gestor);
    }

    //\PC::debug($themefolders, 'themefolders');
    /* select the theme */
    unset($_theme);

    // List of themes
    if (!isset($conf['theme'])) {
        $conf['theme'] = 'default';
    }
    // 1. Check for the theme from a request var.
    // This happens when you use the selector in the intro screen
    if (isset($_REQUEST['theme']) && array_key_exists($_REQUEST['theme'], $themefolders)) {
        $_theme = $_REQUEST['theme'];
    }
    // 2. Check for theme session var
    else if (!isset($_theme) && isset($_SESSION['ppaTheme']) && array_key_exists($_SESSION['ppaTheme'], $themefolders)) {
        $_theme = $_SESSION['ppaTheme'];
    }
    // 3. Check for theme in cookie var
    else if (!isset($_theme) && isset($_COOKIE['ppaTheme']) && array_key_exists($_COOKIE['ppaTheme'], $themefolders)) {
        $_theme = $_COOKIE['ppaTheme'];
    }

    if (!isset($_theme) && !is_null($_server_info) && array_key_exists('theme', $_server_info)) {

        $server_theme = $_server_info['theme'];

        if (isset($server_theme['default']) && array_key_exists($server_theme['default'], $themefolders)) {
            $_theme = $server_theme['default'];
        }

        if (isset($_REQUEST['database'])
            && isset($server_theme['db'][$_REQUEST['database']])
            && array_key_exists($server_theme['db'][$_REQUEST['database']], $themefolders)

        ) {
            $_theme = $server_theme['db'][$_REQUEST['database']];
        }

        if (isset($_server_info['username'])
            && isset($server_theme['user'][$_server_info['username']])
            && array_key_exists($server_theme['user'][$_server_info['username']], $themefolders)
        ) {
            $_theme = $server_theme['user'][$_server_info['username']];
        }

    }
    // if any of the above conditions had set the $_theme variable
    // then we store it in the session and a cookie
    // and we overwrite $conf['theme'] with its value
    if (isset($_theme)) {
        /* save the selected theme in cookie for a year */
        setcookie('ppaTheme', $_theme, time() + 31536000, '/');
        $_SESSION['ppaTheme'] = $_theme;
        $conf['theme']        = $_theme;

    }

    $misc->setConf('theme', $conf['theme']);

    $misc->setHREF();
    $misc->setForm();

    return $misc;
};

// Register Twig View helper
$container['view'] = function ($c) {

    $conf = $c->get('conf');
    $misc = $c->misc;

    $view = new \Slim\Views\Twig(BASE_PATH . '/templates', [
        'cache'       => BASE_PATH . '/temp/twigcache',
        'auto_reload' => $c->get('settings')['debug'],
        'debug'       => $c->get('settings')['debug'],
    ]);
    $environment               = $c->get('environment');
    $base_script_trailing_shit = substr($environment['SCRIPT_NAME'], 1);
    $request_basepath          = $c['request']->getUri()->getBasePath();
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace($base_script_trailing_shit, '', $request_basepath), '/');

    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));

    $view->offsetSet('subfolder', SUBFOLDER);
    $view->offsetSet('theme', $c->misc->getConf('theme'));
    $view->offsetSet('Favicon', $c->misc->icon('Favicon'));
    $view->offsetSet('Introduction', $c->misc->icon('Introduction'));
    $view->offsetSet('lang', $c->lang);

    $view->offsetSet('applangdir', $c->lang['applangdir']);

    $view->offsetSet('appName', $c->get('settings')['appName']);

    $misc->setView($view);

    //\PC::debug($c->conf, 'conf');
    //\PC::debug($c->view->offsetGet('subfolder'), 'subfolder');
    //\PC::debug($c->view->offsetGet('theme'), 'theme');

    return $view;
};

$container['haltHandler'] = function ($c) {
    return function ($request, $response, $exits, $status = 500) use ($c) {

        $title = 'PHPPgAdmin Error';

        $html = '<p>The application could not run because of the following error:</p>';

        $output = sprintf(
            "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'>" .
            '<title>%s</title><style>' .
            'body{margin:0;padding:30px;font:12px/1.5 Helvetica,Arial,Verdana,sans-serif;}' .
            'h3{margin:0;font-size:28px;font-weight:normal;line-height:30px;}' .
            'span{display:inline-block;font-size:16px;}' .
            '</style></head><body><h3>%s</h3><p>%s</p><span>%s</span></body></html>',
            $title,
            $title,
            $html,
            implode('<br>', $exits)
        );

        $body = new \Slim\Http\Body(fopen('php://temp', 'r+'));
        $body->write($output);

        return $response
            ->withStatus($status)
            ->withHeader('Content-type', 'text/html')
            ->withBody($body);
    };
};

// Set the requestobj and responseobj properties of the container
// as the value of $request and $response, which already contain the route
$app->add(function ($request, $response, $next) {

    $this['requestobj']  = $request;
    $this['responseobj'] = $response;

    $misc = $this->get('misc');

    $this->view->offsetSet('METHOD', $request->getMethod());
    $this->view->offsetSet('subject', $request->getAttribute('route')->getArgument('subject'));

    $query_string = $request->getUri()->getQuery();
    $this->view->offsetSet('query_string', $query_string);
    $path = SUBFOLDER . '/' . $request->getUri()->getPath() . ($query_string ? '?' . $query_string : '');
    $this->view->offsetSet('path', $path);
    $this->view->offsetSet('params', $request->getParams());

    //return $this->utils->die('hola');

    if (count($this['errors']) > 0) {
        return ($this->haltHandler)($this->requestobj, $this->responseobj, $this['errors'], 412);
    }
    // First execute anything else
    $response = $next($request, $response);

    // Any other request, pass on current response
    return $response;
});

$container['action'] = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if (!isset($msg)) {
    $msg = '';
}

$container['msg'] = $msg;
