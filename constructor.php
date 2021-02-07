<?php

class Produk {
    //properti
    public $judul = "judul",  
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
    //$judul dll didalam construc berbeda dengan construc
    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    

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

$produk1 = new Produk("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000);


$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",450000);



// $produk3->sayHello();//tidak akan ditampilkan karena method ini baru mengembalikan nilai bukan mencetak nilai
// echo $produk3->sayHello();
echo "Komik : ".$produk1->getLabel()."<br>";
echo "Game : ".$produk2->getLabel();
?>