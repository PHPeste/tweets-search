<?php

$twitter = require dirname(__DIR__) . '/src/twitter.php';

$url 	= 'https://api.twitter.com/1.1/search/tweets.json';
$params = isset($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
$method = 'GET';

header('Access-Control-Allow-Origin: *');

echo $twitter->request($url, $method, $params);