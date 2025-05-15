<?php

// Jualan Produk
// Komik
// Game

class Produk{
    public $judul,
           $penulis,
           $penerbit,
           $harga;
        
    // public function __construct(){
    //      echo "Hello World!";
    // }

    public function __construct($judul="judul",$penulis="penulis",
    $penerbit="penerbit",$harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function sayHello(){
        return "Hello World";
    }

    public function getLabel(){
        return "$this->judul,$this->penulis, $this->penerbit,
        $this->harga";
    }

}

$produk3 = new Produk("Naruto","Mashasi Kishimoto","Shomen Jump",30000);
$produk4 = new Produk("Uncharted","Neil Drucman","Sony Computer",250000);
$produk5 = new Produk("Dragon Ball");

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";
echo "Komik : " . $produk3->getLabel();

echo "<hr>";
echo "Game : " . $produk4->getLabel();

echo "<hr>";
echo "Default : " . $produk5->getLabel();



?>