<?php

class Produk {
    //properti
    public $judul,  
           $penulis,
           $penerbit,
           $harga = 0,
           $jmlHalaman,
           $waktuMain;
    
    //method
    //$judul dll didalam construc berbeda dengan construc
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }
    
    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        //$this digunakan untuk mengambil property dari class yg sama
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        // Komik : Naruto | Masashi kishimoto, shonen jump (RP. 30000) - 100 halaman.
        // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 240000) ~ 50 Jam.
        $str = " : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;

    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp {$produk->harga} )";
        return $str;
    }

}
class Komik extends Produk{
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000, 100, 0);  
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer",450000, 0, 50);

echo $produk1->getInfoProduk() . "<br>";
echo $produk2->getInfoProduk();
?>