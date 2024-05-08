<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");


$indexes = file_get_contents('https://raw.githubusercontent.com/Xsaven/bfg-admin-documentation/master/Writerside/index.json');
$indexes = json_decode($indexes, true);

$result = [];

foreach ($indexes as $index) {
    $result[] = [
        'breadcrumbs' => '',
        'mainTitle' => $index['title'],
        'pageTitle' => $index['title'],
        'objectID' => $index['name'],
    ];
}

echo json_encode($result, JSON_PRETTY_PRINT);
