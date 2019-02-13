<?php

require 'vendor/autoload.php';

date_default_timezone_set('PRC');

ini_set('display_errors', 'on');

$path = 'data.xlsx';

$PHPExcel = \PhpOffice\PhpSpreadsheet\IOFactory::load($path);

$sheetData = $PHPExcel->getActiveSheet()->toArray(null,true,true,true);

$data = [];

foreach ($sheetData as $k => $v)
{
    $data[] = $v['A'];
    if ($k >= 20)
    {
        break;
    }
}

echo '<pre>';
print_r($data);die;
