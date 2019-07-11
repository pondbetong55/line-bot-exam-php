<?php



require "vendor/autoload.php";

$access_token = 'IY55rNVdESTJEKZtnO7BVcQscpeYC+u2gVtOGLUyF7Ftj5+hgJ/VC97Os3VX1QjOZeIaMoihqDShp1zmQw0E3ztkeD30SP/huGcqmKPd0pv3XoxeIQgDTVJDz0rzf+KPsAdfnwJRJ5eE66b0eGBI3QdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '264b1aefe4894a912628e8f64b26e066';

$pushID = 'Uee2b45f276e38d71fa97727bc26781d1';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







