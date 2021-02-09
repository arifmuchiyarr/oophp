<?php 

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penulis", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman=$jmlHalaman;
    }

    public function getInfo(){
        $str = "  {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;

    }
    
    public function getInfoProduk(){
        // parent adalah keyword untuk mengambil properti atau method yang ada di kelas parentnya
        $str = "Komik : " . $this->getInfo() . "- {$this->jmlHalaman} Halaman.";
        return $str;
    }
}