<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "minggu4";

$con = mysqli_connect($host,$user,$password,$db);
if(!$con){
    die("koneksi gagal : ". mysqli_connect_error());
}
?>