<?php
require_once('TwitterAPIExchange.php');

$hashtag = $_GET["q"];

$settings = array(
    'oauth_access_token' => "1469261903440408577-VN0BSb3RfI25X3ByxDg7wrv9m07GEx",
    'oauth_access_token_secret' => "S8ZFVCA9A88ya1w9IlA6S1gVFiV5jwmBvkQug35jhlfCM",
    'consumer_key' => "iSjuQcrKudhl6yzA2hOdnhrKh",
    'consumer_secret' => "lkIpCE0lBeABh8WW5V5GKZUFRIz5iICXHjQijjX5CoT6dX9xDk"
);

$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=#'.$hashtag.' AND -filter:retweets AND -filter:replies&lang=en&count=20&tweet_mode=extended';
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter->setGetfield($getfield)
     ->buildOauth($url, $requestMethod)
     ->performRequest();

echo $response;
?>

