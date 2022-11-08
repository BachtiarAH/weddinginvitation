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
    // var_dump($data);
    // $json = json_encode($arr);
    file_put_contents($jsonName,json_encode($data));
}

function readData()
{
    $jsonName = "json/ucapan.json";
    $file = file_get_contents($jsonName);
    $data = json_decode($file);

    for ($i=count($data)-1; $i >= 0; $i--) { 
        $nama = $data[$i]->nama;
        $ucapan = $data[$i]->ucapan ;
        $tanggal = $data[$i]->tanggal;
        ?>
        <div class="teks-ucap teksleft-ucap">
                <p class="nama-ucap">
                    <img src="asset/ucapan/ucap.png" alt="ucap" height="31" width="31">
                    <?php echo $nama ." | ".$tanggal;?>
                </p>
                <p class="isi-ucap">
                    <?=$ucapan?>                
                </p>
                <hr>
            </div>
        <?php
    }
}

// writeData($_POST['nama'],$_POST['ucapan']);
readData();
?>