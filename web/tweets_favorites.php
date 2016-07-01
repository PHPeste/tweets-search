<?php

$twitter = require dirname(__DIR__) . '/src/twitter.php';

$url 	= 'https://api.twitter.com/1.1/favorites/list.json';
$params = isset($_GET['count']) ? '?count=' . $_GET['count'] : '';
$method = 'GET';

header('Access-Control-Allow-Origin: *');

echo $twitter->request($url, $method, $params);