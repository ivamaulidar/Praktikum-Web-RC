<?php

include "index.php";

class buah
{
    var $jumlahMangga, $jumlahJambu, $jumlahSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->jumlahMangga = $this->mangga * 15000;
        echo "<br>harga mangga : ".$this->jumlahMangga;
    }

    public function getJambu(){
        $this->jumlahJambu = $this->jambu * 13000;
        echo "<br>harga jambu : ".$this->jumlahJambu;
    }

    public function getSalak(){
        $this->jumlahSalak = $this->salak * 10000;
        echo "<br>harga salak : ".$this->jumlahSalak;
    }

    public function total(){
        $total = $this->jumlahMangga + $this->jumlahJambu + $this->jumlahSalak;
        echo "<br>total belanjaan = ". $total;
    }
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
?>