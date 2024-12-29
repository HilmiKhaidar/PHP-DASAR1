<?php 

session_start();

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if(isset($_SESSION['username']) 
and isset ($_SESSION['password'])) {
    echo "Selamat kamu udah login ya bang";
    echo "<a href=\"logout.php\">Logout";
}   else {
    echo "Kamu belom login anjir";
}