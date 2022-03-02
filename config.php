<?php 
 
$server = "localhost";
$user = "asalcom5_Iyang";
$pass = "Iyanggaming05";
$database = "asalcom5_user";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>