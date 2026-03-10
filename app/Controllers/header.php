<?php

use GuzzleHttp\Client;

$client = new Client(['headers' => ['X-Api-Key' => 'sY7B6HBXKUSg9b5DfCPQ6g==WigR0DtKIHsdmyeK']]);
$request = $client->request('GET', 'https://api.api-ninjas.com/v1/worldtime?lat=54&lon=39');
$datetime = json_decode($request->getBody(), true);
$date_month = month($datetime['month']);
$date_day = $datetime['day'];
$time_h = $datetime['hour'];
$time_m = $datetime['minute'];
$day_of_week = day_of_weak($datetime['day_of_week']);