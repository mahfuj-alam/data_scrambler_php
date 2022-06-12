<?php
function displayKey($key){
    global $mode;
    printf("value = '%s'", $key);
    
}


function encodeData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData);
    for ($i=0; $i <$length ; $i++) { 
        $currentChar = $originalData[$i];
        $position = strpos($originalKey, $currentChar);
        if($position !==false){
            $data .= $key[$position];
        }else{
            $data .= $currentChar;
        }
    }
    return $data;
}
function decodeData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData);
    for ($i=0; $i <$length ; $i++) { 
        $currentChar = $originalData[$i];
        $position = strpos($originalKey, $currentChar);
        if($position !== false){
            $data .= $key[$position];
        }else{
            $data = $currentChar;
        }
    }
    return $data;
}
