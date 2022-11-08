<?php
$file = file_get_contents("json/ucapan.json");
$data = json_decode($file);
$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));



function pushData($nama, $ucapan)
{
    global $file;
    global $date;
    $tanggal = date("j M Y", $date->format('U'));

    $arr = [
        "nama" => "$nama",
        "ucapan" => "$ucapan",
        "tanggal" => "$tanggal"
    ];

    $json = json_encode($arr);
    fwrite($file, $json);
}

if (isset($_POST['submit'])) {
    pushData($_POST['nama'],$_POST['ucapan']);
}

?>

<form action="" method="post">
    <input type="text" name="nama" id="nama" required>
    <input type="text-area" name="ucapan" id="ucapan" required>
    <button type="submit" name="submit" id="submit">kirim</button>
</form>