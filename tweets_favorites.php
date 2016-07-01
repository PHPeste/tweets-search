<?php

require_once __DIR__ . '/vendor/autoload.php';

$settings = array(
	'oauth_access_token' => getenv('ACCESS_TOKEN'),
	'oauth_access_token_secret' =>  getenv('ACCESS_TOKEN_SECRET'),
	'consumer_key' =>  getenv('CONSUMER_KEY'),
	'consumer_secret' =>  getenv('CONSUMER_SECRET'),
);

//print_r($settings); die;

$url 	= 'https://api.twitter.com/1.1/favorites/list.json';
$params = '?count=' . $_GET['count'];
$method = 'GET';

$twitter = new TwitterAPIExchange($settings);

echo $twitter->request($url, $method, $params);