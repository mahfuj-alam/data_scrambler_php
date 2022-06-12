<?php
$task = 'encode';
if (isset($_GET['task'])&& $_GET['task']!=''){
    $task = $_GET['task'];
}

$key = 'abcdefghijklmnopqrstuvwxyz1234567890';

if('key' == $task){
    $keyOriginal = str_split($key);
    shuffle($keyOriginal);
    $key = join('', $keyOriginal);
}elseif(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}

$encodedData = '';

if('encode' ==$task){
    $data = $_POST['data']??'';
    if($data != ''){
        $encodedData=encodeData($data, $key);
    }
}
if('decode'==$task){
    $data = $_POST['data']??'';
    if($data != ''){
        $encodedData = decodeData($data, $key);
    }
}