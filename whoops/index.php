<?php

require 'vendor/autoload.php';

ini_set('display_errors', 'on');

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

throw new Exception('Error');