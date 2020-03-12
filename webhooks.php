
<?php
require "vendor/autoload.php";

$access_token = 'l3RxPBy92zqghEeGffAUkwacjB2kWCHmat1qjNyTVGEAqQfXwe8V46/ldjWX2JFv2WE4SJik3jWXYUQwADgGLYfNwlQEkNkfvLYONyshhLjnbWkp2LFUllyKFFU8dTvNTVQgRrwSrKU2SkdMgRbg+wdB04t89/1O/w1cDnyilFU=';
$channelSecret = '2c25e4fd85b46b0ba27f6f6af9a01f0c';
$idPush = 'U805de99b9cbb3087982f443d64caac9e'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('น้องผู้ช่วยคุณ Cha-vee กำลังเรียนรู้อยู่ขอเวลาอีกนิดน้า');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();



