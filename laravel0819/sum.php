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
$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;


$data=[
    'num1'=>$num1,
    'num2'=>$num2,
    'sum'=>$num1+$num2,
    'name'=>$name,
];

echo json_encode($data);