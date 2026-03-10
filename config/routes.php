<?php

/** @var Router $router */

// menus
$router->get('', 'index.php');
$router->get('menu-matrix', 'menus/menu-matrix.php');
$router->get('matrix.php', 'matrix.php');
$router->get('calt.php', 'calt-matrix.php');
$router->get('menu-training', 'menus/menu-training.php');
$router->get('text', 'text.php');
$router->post('text', 'text.php');

$router->get('tests', 'tests.php');

// ideas
$router->get('ideas/create', 'ideas/create.php');
$router->post('ideas', 'ideas/store.php');
$router->get('ideas', 'ideas/index.php');
$router->delete('ideas', 'ideas/destroy.php');
$router->patch('ideas', 'ideas/update.php');

// math
$router->get('menu', 'math/index.php');
$router->get('math/calculator', 'math/calculator.php');
$router->get('math/factorial', 'math/factorial.php');
$router->get('math/dividers', 'math/dividers.php');
$router->get('math/percent', 'math/percent.php');
$router->get('math/itemDropChance', 'math/itemDropChance.php');
$router->get('math/statistics', 'math/statistics.php');

$router->get('math/trigonometry', 'math/trigonometry.php');
$router->post('math/trigonometry', 'math/trigonometry.php');

// generators
$router->get('generators/random-int', 'generators/random-int.php');
$router->get('generators/random-word', 'generators/random-word.php');
$router->get('generators/fibonachi', 'generators/fibonachi.php');
$router->get('generators/text', 'generators/text.php');
$router->post('generators/text', 'generators/text.php');
$router->get('generators/training', 'generators/training.php');
$router->post('generators/training', 'generators/training.php');