<?php

class Produk {
    //properti
    public $judul,  
           $penulis,
           $penerbit,
           $harga = 0;
    
    //method
    //$judul dll didalam construc berbeda dengan construc
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }
    public function getInfoProduk(){
        // parent adalah keyword untuk mengambil properti atau method yang ada di kelas parentnya
        $str = "Komik : ". parent::getInfoProduk() ."  - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain; 
    }
    
    public function getInfoProduk()
    {
        $str = "Game : ". parent::getInfoProduk() ."  ~ {$this->waktuMain} Jam.";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000, 100);  
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer",450000, 50);

echo $produk1->getInfoProduk() . "<br>";
echo $produk2->getInfoProduk();
?>