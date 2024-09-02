<?php
// header('Access-Control-Allow-Origin: http://192.168.211.71');
// header('Access-Control-Allow-Origin: http://192.168.211.70:8200');
// Access-Control-Allow-Origin: https://developer.mozilla.org

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "<pre>";
}

$name = $_GET['name'] ?? 'nobody';

$data=[
    's1'=>'anna',
    's2'=>'banana',
    's3'=>'canada',
    'name'=>$name,
];

echo json_encode($data);