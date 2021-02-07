<?php

class Produk {
    //properti
    public $judul = "judul",  
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    //method
    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        return "$this->penulis, $this->penerbit";//$this digunakan untuk mengambil property dari class yg sama
    }
}

// $produk1 = new Produk();
// $produk1->harga = 200;
// $produk1->judul = "Bleach";
// var_dump($produk1);

// $produk2 = new Produk();
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masasi Kishimoto";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;

$produk4 = new Produk();
$produk4->judul="Uncharted";
$produk4->penulis="Neil Druckmann";
$produk4->penerbit="Sony Computer";
$produk4->harga=450000;
echo "Komik : $produk3->judul"."<br> Penulis : "."$produk3->penulis";
echo "<br>";
// $produk3->sayHello();//tidak akan ditampilkan karena method ini baru mengembalikan nilai bukan mencetak nilai
// echo $produk3->sayHello();
echo $produk3->getLabel();
echo "<br>".$produk4->getLabel();
?>