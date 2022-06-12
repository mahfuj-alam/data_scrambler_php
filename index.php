<?php
include_once "data.php";
$mode = 'encode';
if (isset($_GET['task'])&& $_GET['task']!=''){
    $mode = $_GET['task'];
}
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if('key' == $mode){
    $keyOriginal = str_split($key);
    shuffle($keyOriginal);
    $key = join('', $keyOriginal);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <span class="pln">
    </span><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"><span class="pln">
    </span><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css"><span class="pln">
    </span>
    <title>Data Scrambler with PHP</title>
    <style>
        body{
            margin:50px;
        }
    </style>
</head>
<body>
    <div class="container">
        
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Data Scrambler</h2>
                <p>Scramble Data with PHP</p>
                <div>
                    <a href="index.php?task=encode">Encode</a>|
                    <a href="index.php?task=decode">Decode</a>|
                    <a href="index.php?task=key">Generate</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="" method="post">
                    <label for="key">Key</label>
                    <input type="text" name="key" id="key" <?php displayKey($key)?>>
                    <label for="data">Data</label>
                    <textarea name="data" id="data" cols="30" rows="50" style="height:200px"></textarea>
                    <label for="result">Result</label>
                    <textarea name="result" id="result" cols="30" rows="10" style="height:200px"></textarea>
                    <button type="submit">Do It for Me</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>