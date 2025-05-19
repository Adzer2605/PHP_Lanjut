<?php
$data = [
    ["nama" => "Yanto", "umur" => 26],
    ["nama" => "Sugeng", "umur" => 27],
    ["nama" => "Sucipto", "umur" => 24],
    ["nama" => "Gatot", "umur" => 28],
    ["nama" => "Eko", "umur" => 23],
    ["nama" => "Fina", "umur" => 29],
    ["nama" => "Gading", "umur" => 30],
    ["nama" => "Hana", "umur" => 25],
    ["nama" => "Ivan", "umur" => 27],
    ["nama" => "Joko", "umur" => 26],
    ["nama" => "Laras", "umur" => 28],
    ["nama" => "Yahya", "umur" => 24],
    ["nama" => "Ahmad", "umur" => 29],
    ["nama" => "Adam", "umur" => 30],
    ["nama" => "Adit", "umur" => 25]
];

$json = json_encode($data, JSON_PRETTY_PRINT);
echo "<pre>$json</pre>";
?>

