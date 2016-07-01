<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

$settings = array(
	'oauth_access_token' => getenv('ACCESS_TOKEN'),
	'oauth_access_token_secret' =>  getenv('ACCESS_TOKEN_SECRET'),
	'consumer_key' =>  getenv('CONSUMER_KEY'),
	'consumer_secret' =>  getenv('CONSUMER_SECRET'),
);

return new TwitterAPIExchange($settings);