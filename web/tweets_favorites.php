<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$settings = array(
	'oauth_access_token' => getenv('ACCESS_TOKEN'),
	'oauth_access_token_secret' =>  getenv('ACCESS_TOKEN_SECRET'),
	'consumer_key' =>  getenv('CONSUMER_KEY'),
	'consumer_secret' =>  getenv('CONSUMER_SECRET'),
);

$url 	= 'https://api.twitter.com/1.1/favorites/list.json';
$params = isset($_GET['count']) ? '?count=' . $_GET['count'] : '';
$method = 'GET';

$twitter = new TwitterAPIExchange($settings);

header('Access-Control-Allow-Origin: *');

echo $twitter->request($url, $method, $params);