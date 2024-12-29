<?php 

// if(isset($_GET["nama"])){
//     $namaHero = $_GET["nama"];
//     echo "Nama Hero saya: ".$namaHero;
// }

if(isset($_POST["nama"])){
    $namaHero = $_POST["nama"];
    echo "Nama Hero saya: ".$namaHero;
}

?>

<form action="data.php" method="POST">
    Nama Hero : <input type="text" name="nama" />
    <input type="submit" />
</form>