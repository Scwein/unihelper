<?php

session_start();

require_once dirname(__DIR__) . '/config/config.php';

require_once ROOT . '/vendor/autoload.php';

require_once CORE . '/funcs.php';
require_once CORE . '/meth.php';
require_once CORE . '/classes/Db.php';
require_once CORE . '/classes/Router.php';
require_once CORE . '/classes/Pagination.php';

require_once __DIR__ . '/bootstrap.php';

$router = new Router();
require_once CONFIG . '/routes.php';
$router->match();