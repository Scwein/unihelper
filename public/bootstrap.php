<?php

require_once CORE . '/classes/ServiceContainer.php';
require_once CORE . '/classes/App.php';

$container = new ServiceContainer();
$container->setService(Db::class, function () {
    $db_config = require CONFIG . '/db.php';
    return ((Db::getInstance())->getConn($db_config));
});

App::setContainer($container);