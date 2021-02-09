<?php 

//define (namanya, value) , biasakan nama define dengan huruf besar
// define('NAMA', 'Arif Muchiyar Rahman');// define tidak bisa di letakan dalam class

// // cara memanggilnya cukup dengan nama dari constantnya berbeda dengan variable yang harus pakai symbol $
// echo NAMA ."<br>";

// const UMUR = 28;

// echo UMUR;

// class Coba{
//     const NAMA = "Arif";
// }

// echo NAMA;

echo __LINE__; //menampilkan baris dari kode tsb
echo "<br>". __FILE__;
echo "<br>";


function coba(){
    return __FUNCTION__;
}
echo coba()."<br>";

class Coba{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;








?>