<?php

use GuzzleHttp\Client;

$title = 'Главная страница';

$client = new Client();
$request = $client->request('GET', 'https://favqs.com/api/qotd');
$data = json_decode($request->getBody(), true)['quote'];
$quote = $data['body'];
$author = $data['author'];

$view = VIEWS . '/index.blade.php';
require_once VIEWS . '/incs/header.blade.php';