<?php
// $json = file("json/ucapan.json");



function writeData($nama, $ucapan)
{
    $jsonName = "json/ucapan.json";
    $file = file_get_contents($jsonName);
    $data = json_decode($file);
    $date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    
    $tanggal = date("j M Y", $date->format('U'));

    $arr = [
        "nama" => "$nama",
        "ucapan" => "$ucapan",
        "tanggal" => "$tanggal"
    ];

    array_push($data,$arr);
    var_dump($data);
    // $json = json_encode($arr);
    file_put_contents($jsonName,json_encode($data));
}

function readData()
{
    $jsonName = "json/ucapan.json";
    $file = file_get_contents($jsonName);
    $data = json_decode($file);

    for ($i=count($data)-1; $i >= 0; $i--) { 
        echo "nama = ".$data[$i]->nama . PHP_EOL;
        echo "ucapan = ".$data[$i]->ucapan . PHP_EOL;
        echo "tanggal = ".$data[$i]->tanggal . PHP_EOL;
        echo PHP_EOL;
    }
}
// writeData("aksfj","asldkfj");
readData();


?>