<?php


class contohStatic{
    public static $angka =1;//properti

    public static function halo(){ //method
        return "halo". self::$angka++ ." kali." ;
    }
}



echo contohStatic::$angka;
echo "<br>";
echo contohStatic::halo();
echo "<hr>";

echo contohStatic::halo();












?>