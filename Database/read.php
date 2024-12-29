<?php 

$hostname = "localhost";
$user = "root";
$password = "";
$databaseName = "latihanphp";

$connection = new mysqli(hostname: $hostname, username: $user, password: $password, database: $databaseName);

$sql = "SELECT `id`, `nama_hero`, `tipe_hero`, `damage` FROM `latihanphp`.`tabel_hero_mage` WHERE  `id`=2";

$query = $connection->query($sql);

if($query->num_rows !=0) {
    while($row = $query->fetch_assoc()) {
        var_dump($row);
    }
}