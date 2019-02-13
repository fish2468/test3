<?php

require 'vendor/autoload.php';


$curl = new \Curl\Curl();


//$curl->get('https://www.baidu.com/');

$curl->post('http://102.pms.cn/v2/forclient/mirrorlist', array(
    'pagesize' => '10',
    'requestid' => 'debug18428239',
    'uid' => '8105456',
    'startposition' => '0',
    'learnLevel' => '0',
    'token' => '774cd882e6e71d066270394dc449fd75'
));


if ($curl->error) {
    $err = 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
//    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
    throw new Exception($err);
} else {
    echo 'Response:' . "\n";
    echo '<pre>';
    print_r($curl->response);
//    print_r(json_decode($curl->response, true));
//    var_dump($curl->response);
}

exit;