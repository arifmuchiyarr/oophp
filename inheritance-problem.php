<?php

class Produk {
    //properti
    public $judul,  
           $penulis,
           $penerbit,
           $harga = 0,
           $jmlHalaman,
           $waktuMain,
           $tipe;
    
    //method
    //$judul dll didalam construc berbeda dengan construc
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    // public function sayHello(){
    //     return "hello world";
    // }
    public function getLabel(){
        //$this digunakan untuk mengambil property dari class yg sama
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        // Komik : Naruto | Masashi kishimoto, shonen jump (RP. 30000) - 100 halaman.
        // Game : Uncharted | Neil Druckman, Sony Computer (Rp. 240000) ~ 50 Jam.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman.";
        }else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

        return $str;

    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}, (Rp {$produk->harga} )";
        return $str;
    }

}



$produk1 = new Produk("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");  
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer",450000, 0, 50, "Game");

echo $produk1->getInfoLengkap() . "<br>";
echo $produk2->getInfoLengkap();
?>