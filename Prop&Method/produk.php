<?php

// Jualan produk
// Komik
// Game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function sayHello(){
        return "Hello World";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->$judul = "Naruto";
// $produk1->$penulis = "penulis";
// $produk1->$penerbit = "penerbit";
// $produk1->$harga = 0;

// var_dump($pruduk1);

// $produk2 = new Produk();
// $produk2->$judul = "Uncharted";
// var_dump($pruduk1);

$produk3 = new Produk();
$produk3->$judul = "Naruto";
$produk3->$penulis = "Mashasi Kishimoto";
$produk3->$penerbit = "Shonen Jump";
$produk3->$harga = 30000;

$produk4 = new Produk();
$produk4->$judul = "Uncharted";
$produk4->$penulis = "Neil Druckmann";
$produk4->$penerbit = "Sony Computer";
$produk4->$harga = 250000;

echo "Komik : $pruduk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->sayHello();
echo "<br>";
echo "Komik : " . $produk3->getLabel();

echo "<hr>";
echo "Game : " . $produk4->getLabel();

?>